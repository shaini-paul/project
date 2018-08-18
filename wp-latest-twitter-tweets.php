<?php
/**
 * Plugin Name: WP Twitter Feeds
 * Plugin URI: http://www.vivacityinfotech.net/
 * Description: Displays latest tweets from your Twitter account using Twitter oAuth API 1.1.
 * Author: Vivacity Infotech Pvt. Ltd.
 * Version: 1.4.9
 * Author:       Vivacity Infotech Pvt. Ltd.
 * Author URI:   http://vivacityinfotech.net/
 * Author Email: support@vivacityinfotech.com
 * @package    WP Twitter Feeds
 * @since      1.0.0
 * @author     Vivacity Infotech Pvt. Ltd.
 * @copyright  Copyright (c) 2014-2016, Vivacity Infotech Pvt. Ltd.
 * @license    http://www.gnu.org/licenses/gpl-2.0.html
 */
/*  Copyright 2014-2015  Ashley Sheinwald  (email : ashley@planet-interactive.co.uk)
  Copyright 2016  Vivacity Infotech Pvt. Ltd.  (email : info@vivacityinfotech.com)
  This program is free software; you can redistribute it and/or modify
  it under the terms of the GNU General Public License, version 2, as
  published by the Free Software Foundation.

  This program is distributed in the hope that it will be useful,
  but WITHOUT ANY WARRANTY; without even the implied warranty of
  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  GNU General Public License for more details.

  You should have received a copy of the GNU General Public License
  along with this program; if not, write to the Free Software
  Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 */

if (!defined('ABSPATH'))
    exit; // Exit if accessed directly
add_action('init', 'viva_twitter_feed');

function viva_twitter_feed() {
    load_plugin_textdomain('viva-twitter-feed', FALSE, dirname(plugin_basename(__FILE__)) . '/languages/');
}

include( plugin_dir_path(__FILE__) . 'twitter_usr_validation.php');
include( plugin_dir_path(__FILE__) . 'wp-twitter-setting.php');
require_once( plugin_dir_path(__FILE__) . 'controller/twitter_widget.class.php');
add_action('widgets_init', 'viwptf_reg_widget');

function viwptf_reg_widget() {
    register_widget("viwptf_TwitterTweets");
}

add_filter('plugin_row_meta', 'viwptf_add_meta_links', 10, 2);

function viwptf_add_meta_links($links, $file) {
    if (strpos($file, 'wp-latest-twitter-tweets.php') !== false) {
        $links[] = '<a href="http://wordpress.org/support/plugin/wp-twitter-feeds" target="_blank">Support</a>';
        $links[] = '<a href="http://vivacityinfotech.net/paypal-donation/" target="_blank">Donate</a>';
    }
    return $links;
}

function viwptf_sanitize_linksn($tweet) {
    if (isset($tweet->retweeted_status)) {
        $rt_section = current(explode(":", $tweet->text));
        $text = $rt_section . ": ";
        $text .= $tweet->retweeted_status->text;
    } else {
        $text = $tweet->text;
    }
    $text = preg_replace('/((http)+(s)?:\/\/[^<>\s]+)/i', '<a href="$0" target="_blank" rel="nofollow">$0</a>', $text);
    $text = preg_replace('/[@]+([A-Za-z0-9-_]+)/', '<a href="https://twitter.com/$1" target="_blank" rel="nofollow">@$1</a>', $text);
    $text = preg_replace('/[#]+([A-Za-z0-9-_]+)/', '<a href="https://twitter.com/search?q=%23$1" target="_blank" rel="nofollow">$0</a>', $text);
    return $text;
}

function twitter_shortcode() {

    $wp_twitter_name = get_option('wp_twitter_name');
    $wpltf_wdgt_title = 'Latest Tweets';
    $wpltf_wdgt_name = get_option('wp_twitter_name');
    $wpltf_wdgt_hashtag = get_option('wp_twitter_hashtags');
    $wpltf_wdgt_consumerSecret = get_option('wp_twitter_consumerSecret');
    $wpltf_wdgt_accessTokenSecret = get_option('wp_twitter_accessTokenSecret');
    $widget_replies_excl = get_option('wp_twitter_replies_excl');
    $wpltf_wdgt_accessToken = get_option('wp_twitter_accessToken');
    $wpltf_wdgt_tweets_cnt = get_option('wp_twitter_tweets_cnt');
    $wpltf_wdgt_store_time = get_option('wp_twitter_store_time');
    $wpltf_wdgt_consumerKey = get_option('wp_twitter_consumerKey');
    $wpltf_wdgt_disp_scr_name = get_option('wp_twitter_disp_scr_name');
    $wpltf_wdgt_timeRef = get_option('wp_twitter_timeRef');
    $wpltf_wdgt_timeAgo = get_option('wp_twitter_timeAgo');
    $wpltf_wdgt_twitterIntents = get_option('wp_twitter_twitterIntents');
    $wpltf_wdgt_twitterIntentsText = get_option('wp_twitter_twitterIntentsText');
    $wpltf_wdgt_intentColor = get_option('wp_twitter_intentColor');
    $wpltf_wdgt_slide_style = get_option('wp_twitter_slide_style');
    $wpltf_wdgt_showAvatar = get_option('wp_twitter_showAvatar');
    $wpltf_wdgt_border_rad = get_option('wp_twitter_border_rad');
    $wpltf_wdgt_tewwt_border = get_option('wp_twitter_tweet_border');
    $wpltf_wdgt_tweet_theme = get_option('wp_twitter_tweet_theme');

    if (!empty($wpltf_wdgt_title))
        echo $before_title . $wpltf_wdgt_title . $after_title;

    if ($wpltf_wdgt_consumerKey == '' || $wpltf_wdgt_consumerSecret == '' || $wpltf_wdgt_accessTokenSecret == '' || $wpltf_wdgt_accessToken == '') {
        echo '<div class="isa_error">Bad Authentication data.<br/>Please enter valid API Keys.</div>';
    } else {
        $class = 'light';
        if (isset($wpltf_wdgt_tweet_theme) && $wpltf_wdgt_tweet_theme == 'dark')
            $class = 'dark';

        if (isset($wpltf_wdgt_tewwt_border) && $wpltf_wdgt_tewwt_border == 'true') {
            echo '<style>
                .fetched_tweets.light > li{border-color: rgb(238, 238, 238) rgb(221, 221, 221) rgb(187, 187, 187);
                border-width: 1px;
                border-style: solid;}
                .fetched_tweets.dark > li{
                border-color: #444;
                border-width: 1px;
                border-style: solid;}</style>';
        }
        ?>
        <ul class="fetched_tweets <?php echo $class; ?>">
            <?php
            $tweets_count = $wpltf_wdgt_tweets_cnt;
            $name = $wpltf_wdgt_name;
            $hashtag = $wpltf_wdgt_hashtag;
            $timeto_store = $wpltf_wdgt_store_time;
            $totalToFetch = $wpltf_wdgt_tweets_cnt;
            $consumerSecret = trim($wpltf_wdgt_consumerSecret);
            $accessToken = trim($wpltf_wdgt_accessToken);
            $accessTokenSecret = trim($wpltf_wdgt_accessTokenSecret);
            $replies_excl = $widget_replies_excl;
            $consumerKey = trim($wpltf_wdgt_consumerKey);
            $disp_screen_name = ($wpltf_wdgt_disp_scr_name != "true") ? "false" : "true";
            $intents_text = $wpltf_wdgt_twitterIntentsText;
            $color_intents = $wpltf_wdgt_intentColor;
            $slide_style = $wpltf_wdgt_slide_style;
            $cache_transient = $wpltf_wdgt_timeRef;
            $alter_ago_time = $wpltf_wdgt_timeAgo;
            $twitterIntents = $wpltf_wdgt_twitterIntents;
            $showAvatar = $wpltf_wdgt_showAvatar;
            $border_rad_avatar = $wpltf_wdgt_border_rad;
            $transName = 'list-tweets-' . $name;
            $backupName = $transName . '-backups';
            $totalToFetch = ($replies_excl) ? max(50, $tweets_count * 3) : $tweets_count;
            


            if ($wpltf_wdgt_name != '') {

                //if (false === ($tweets = get_transient($transName) )) :

                    require( plugin_dir_path(__FILE__) . '/controller/twitteroauth/twitteroauth.php');

                    $api_call = new viwptf_TwitterOAuth(
                            $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret
                    );

                    $fetchedTweets = $api_call->get(
                        'statuses/user_timeline', array(
                        'screen_name' => $name,
                        'count' => $wpltf_wdgt_tweets_cnt,
                        'exclude_replies' => $replies_excl
                            )
                    );
                          
                    
                    if ($tweets) :
          
                   
         
                    if ($api_call->http_code != 200) :
                        $tweets = get_option($backupName);
                        
                        
                        
                    else :

                        $limitToDisplay = min($tweets_count, count($fetchedTweets));

                        for ($i = 0; $i <= $limitToDisplay; $i++) :
                            $tweet = $fetchedTweets[$i];
			    $screen_name = $tweet->user->screen_name;
                            $permalink = 'https://twitter.com/' . $name . '/status/' . $tweet->id_str;
                            $tweet_id = $tweet->id_str;
                            $image = $tweet->user->profile_image_url;
                            $text = viwptf_sanitize_linksn($tweet);
                            $time = $tweet->created_at;
                           $time = date_parse($time);
                            $uTime = mktime($time['hour'], $time['minute'], $time['second'], $time['month'], $time['day'], $time['year']);
                            $tweets[] = array(
                                'text' => $text,
                                'scr_name' => $screen_name,
                                'favourite_count' => $tweet->favorite_count,
                                'retweet_count' => $tweet->retweet_count,
                                'name' => $name,
                                'permalink' => $permalink,
                                'image' => $image,
                                'time' => $uTime,
                                'tweet_id' => $tweet_id
                            );

                        endfor;
                        set_transient($transName, $tweets, 60 * $timeto_store);
                        update_option($backupName, $tweets);

                   // endif; 

                endif;


                if (!function_exists('wtf_twitter_time_diff')) {

                    function wtf_twitter_time_diff($from, $to = '') {
                        $diff = human_time_diff($from, $to);
                        $replace = array(
                            ' hour' => 'h',
                            ' hours' => 'h',
                            ' day' => 'd',
                            ' days' => 'd',
                            ' minute' => 'm',
                            ' minutes' => 'm',
                            ' second' => 's',
                            ' seconds' => 's',
                        );
                        return strtr($diff, $replace);
                    }

                }
                

                
                
                    ?>

                    <?php foreach ($tweets as $t) : ?>

                        <li class="tweets_avatar">
                            <?php
                            echo '<div class="tweet_wrap"><div class="wdtf-user-card ltr">';
                            if ($showAvatar) {

                                echo '<img ';
                                echo 'width="45px" height="45px"';
                                echo 'src="' . str_replace('http://', '//', $t['image']) . '" alt="Tweet Avatar" class="';
                                echo ($border_rad_avatar) ? 'circular' : '';
                                echo '"/>';
                            }
                            if (!isset($screen_name)) {
                                $screen_name = $name;
                            }

                            if ($disp_screen_name != 'false') {
                                echo '<div class="wdtf-screen-name">';
                                echo "<span class=\"screen_name\">{$t['name']}</span><br>";
                                echo "<a href=\"https://twitter.com/{$screen_name}\" target=\"_blank\" dir=\"ltr\">@{$screen_name}</a></div>";
                            }
                            echo '<div class="clear"></div></div>';
                            ?>
                            <div class="tweet_data">
                                <?php echo $t['text']; ?>
                            </div>
                            <br/>
                            <div class="clear"></div>
                             <div class="tcu-imageWrapper tcu-image-593828669740584960 js-cspForcedStyle" data-style="background-image: url(<?php echo $tss->user->media->media_url_https; ?>); background-size: cover;" data-csp-fix="true" style="background-image: url(<?php echo $tss->user->media->media_url_https; ?>); background-size: cover;">
    <img class="u-block" src="<?php echo $t->extended_entities->media[0]->media_url_https; ?>" alt="">
  </div>
                            <div class="clear"></div>
                            <div class="times">
                                <em>

                                    <a href="https://www.twitter.com/<?php echo $screen_name; ?>" target="_blank" title="Follow <?php echo $name; ?> on Twitter [Opens new window]">
                                        <?php
                                        if ($cache_transient == "true") {
                                            $timeDisplay = wtf_twitter_time_diff($t['time'], current_time('timestamp'));
                                        } else {
                                            $timeDisplay = human_time_diff($t['time'], current_time('timestamp'));
                                        }
                                        if ($alter_ago_time == "true") {
                                            $displayAgo = " ago";
                                        }
                                        printf(__('%1$s%2$s'), $timeDisplay, $displayAgo);
                                        ?>
                                    </a>
                                </em>
                            </div>
                            <?php if ($twitterIntents == "true") {
                                ?>       
                                <div class="tweets-intent-data">
                                    <?php if ($t['favourite_count'] != 0 || $t['retweet_count'] != 0) { ?>
                                        <span class="stats-narrow customisable-border"><span class="stats" data-scribe="component:stats">
                                                <?php if ($t['retweet_count'] != 0) {
                                                    ?>
                                                    <a href="https://twitter.com/<?php echo $screen_name; ?>/statuses/<?php echo $t['tweet_id']; ?>" title="View Tweet on Twitter" data-scribe="element:favorite_count" target="_blank">
                                                        <span class="stats-favorites">
                                                            <strong><?php echo $t['retweet_count']; ?></strong> retweet<?php if ($t['retweet_count'] > 1) echo's'; ?>
                                                        </span>
                                                    </a>
                                                <?php } ?>
                                                <?php if ($t['favourite_count'] != 0) {
                                                    ?>
                                                    <a href="https://twitter.com/<?php echo $screen_name; ?>/statuses/<?php echo $t['tweet_id']; ?>" title="View Tweet on Twitter" data-scribe="element:favorite_count" target="_blank">
                                                        <span class="stats-favorites">
                                                            <strong><?php echo $t['favourite_count']; ?></strong> Favorite<?php if ($t['favourite_count'] > 1) echo's'; ?>
                                                        </span>
                                                    </a>
                                                <?php } ?>

                                            </span>
                                        </span>
                                        <div class="clear"></div>
                                        <div class="seperator_wpltf"></div>
                                    <?php } ?>
                                    <ul class="tweet-actions " role="menu" >
                                        <li><a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $t['tweet_id']; ?>" data-lang="en" class="in-reply-to" title="Reply" target="_blank"><span aria-hidden="true" data-icon="&#xf079;" <?php echo ($color_intents) ? 'style="color:'.$color_intents.';"' :''; ?>></span>
 <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Reply','simple-twitter-tweets'); ?></span>    <?php } ?>                                    
                                        </a></li>
  <li><a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $t['tweet_id']; ?>" data-lang="en" class="retweet" title="Retweet" target="_blank"><span aria-hidden="true" data-icon="&#xf112;" <?php echo ($color_intents) ? 'style="color:'.$color_intents.';"' :''; ?>></span>
 <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Retweet','simple-twitter-tweets'); ?></span>    <?php } ?>              
  </a></li>
  <li><a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $t['tweet_id']; ?>" data-lang="en" class="favorite" title="Favorite" target="_blank"><span aria-hidden="true" data-icon="&#xf005;" <?php echo ($color_intents) ? 'style="color:'.$color_intents.';"' :''; ?>></span></a>
  <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Favourite','simple-twitter-tweets'); ?></span>    <?php } ?>             
  </li>
                                    </ul>
                                </div>
                            <?php } ?>
                            <div class="clear"></div>
                        </div><div class="clear"></div>
                    </li>
                <?php endforeach; ?>

            <?php else : ?>
                <li>Waiting for twitter.com...Try reloading the page again </li>
            <?php endif; ?>
            <?php
        }

        elseif ($wpltf_wdgt_hashtag != '') {

            require( plugin_dir_path(__FILE__) . '/controller/twitteroauth/twitteroauth.php');
            $api_call = new viwptf_TwitterOAuth(
                    $consumerKey, $consumerSecret, $accessToken, $accessTokenSecret
            );

            $tweets = $api_call->get(
                    'search/tweets', array(
                'q' => $hashtag,
                'count' => $wpltf_wdgt_tweets_cnt
                    )
            );
            
           

            foreach ($tweets as $ts) {
                foreach ($ts as $tss) {
          
                    if ($tss->user->profile_image_url != '') {
                        ?>
                        <li class="tweets_avatar">
                            <?php
                            echo '<div class="tweet_wrap"><div class="wdtf-user-card ltr">';

                            if ($showAvatar) {

                                echo '<img ';
                                echo 'width="45px" height="45px"';
                                echo 'src="' . str_replace('http://', '//', $tss->user->profile_image_url) . '" alt="Tweet Avatar" class="';
                                echo ($border_rad_avatar) ? 'circular' : '';
                                echo '"/>';
                            }
                            if (!isset($screen_name)) {
                                $screen_name = $name;
                            }
                            if ($disp_screen_name != 'false') {
                                echo '<div class="wdtf-screen-name">';
                                echo $tss->user->screen_name;
                                echo '<br>';
                                echo "<a href=\"https://twitter.com/{$tss->user->screen_name}\" target=\"_blank\" dir=\"ltr\">@{$tss->user->screen_name}</a></div>";
                            }
                            echo '</div>';
                            ?>
                            <div class="clear"></div>
                    
                            <div class="tweet_data">
                                <?php echo $tss->text;
                                ?>
                            </div>                
                            <div class="clear"></div>
                            <div class="tcu-imageWrapper tcu-image-593828669740584960 js-cspForcedStyle" data-style="background-image: url(<?php echo $tss->user->media->media_url_https; ?>); background-size: cover;" data-csp-fix="true" style="background-image: url(<?php echo $tss->user->media->media_url_https; ?>); background-size: cover;">
    <img class="u-block" src="<?php echo $tss->extended_entities->media[0]->media_url_https; ?>" alt="">
  </div>
 <div class="clear"></div>                          
 	<?php if($twitterIntents == "true"){
						?>
                            <div class="tweets-intent-data">
<?php if($tss->favourites_count !=0 || $tss->retweet_count !=0){?>
<span class="stats-narrow customisable-border"><span class="stats" data-scribe="component:stats">
 <?php if($tss->retweet_count !=0)
	{?>
 <a href="https://twitter.com/<?php echo $tss->user->screen_name; ?>/statuses/<?php echo $tss->retweeted_status->id; ?>" title="View Tweet on Twitter" data-scribe="element:favorite_count" target="_blank"> 
    <span class="stats-favorites">
      <strong><?php echo $tss->retweet_count;?></strong> retweet<?php if($tss->retweet_count >1)echo's';?>
    </span>
</a>
  <?php } ?>
<?php if($tss->favourites_count !=0)
	{?>
  <a href="https://twitter.com/<?php echo $tss->user->screen_name; ?>/statuses/<?php echo $tss->retweeted_status->id; ?>" title="View Tweet on Twitter" data-scribe="element:favorite_count" target="_blank">
    <span class="stats-favorites">
      <strong><?php echo $tss->favourites_count;?></strong> Favorite<?php if($tss->favourites_count >1)echo's';?>
    </span>
  </a>
  <?php }?>
  
</span>
</span>
<div class="clear"></div>
<div class="seperator_wpltf"></div>
<?php }?>


                                <ul class="tweet-actions " role="menu" >
                                    <li><a href="https://twitter.com/intent/tweet?in_reply_to=<?php echo $tss->retweeted_status->id; ?>" data-lang="en" class="in-reply-to" title="Reply" target="_blank"><span aria-hidden="true" data-icon="&#xf079;" <?php echo ($color_intents) ? 'style="color:' . $color_intents . ';"' : ''; ?>></span>
  <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Reply','simple-twitter-tweets'); ?></span>    <?php } ?>                                     
                                    </a></li>
                                    <li><a href="https://twitter.com/intent/retweet?tweet_id=<?php echo $tss->retweeted_status->id; ?>" data-lang="en" class="retweet" title="Retweet" target="_blank"><span aria-hidden="true" data-icon="&#xf112;" <?php echo ($color_intents) ? 'style="color:' . $color_intents . ';"' : ''; ?>></span>
   <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Retweet','simple-twitter-tweets'); ?></span>    <?php } ?>                                               
                                    </a></li>
                                    <li><a href="https://twitter.com/intent/favorite?tweet_id=<?php echo $tss->retweeted_status->id; ?>" data-lang="en" class="favorite" title="Favorite" target="_blank"><span aria-hidden="true" data-icon="&#xf005;" <?php echo ($color_intents) ? 'style="color:' . $color_intents . ';"' : ''; ?>></span>
 <?php if($wpltf_wdgt_twitterIntentsText == '') {?>  <span <?php echo ($twitterIntentsText) ? 'class="pi-visuallyhidden"':''; ?>><?php _e('Favourite','simple-twitter-tweets'); ?></span>    <?php } ?>                                                </a></li>
                                </ul>
                            </div>  
                            <?php } ?>
                            <div class="clear"></div>                     
                        </li>
                        <?php
                    }
                }
            }
        }
        ?>
        </ul>
        
        <?php
    }
}

add_shortcode('wp_twitter_feed', 'twitter_shortcode');
?>
