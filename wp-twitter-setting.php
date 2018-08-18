<?php
//Wordpress add settings options and menu

function viwptf_enqueue_js($hook) 
	{
		


		global $wp_version;
		if ( 3.5 <= $wp_version )
		{
			wp_enqueue_style( 'wp-color-picker' );
			wp_enqueue_script( 'wp-color-picker' );
		}
		else 
		{
			wp_enqueue_style( 'farbtastic' );
			wp_enqueue_script( 'farbtastic' );
		}
		wp_register_script( 'admin_script', plugins_url( '/js/admin_script.js', __FILE__ ), array( 'jquery'));
		wp_register_script( 'validate', plugins_url( '/js/validate.js', __FILE__ ), array( 'jquery'));
		wp_enqueue_script( 'admin_script' );
		wp_enqueue_script( 'validate' );
		
	}
add_action('admin_enqueue_scripts', 'viwptf_enqueue_js');

add_action('admin_menu', 'wp_twitter_create_menu');
function wp_twitter_create_menu(){

    //create admin side menu
    add_menu_page( __( 'WP Twitter Feed' ), __( 'WP Twitter Feed' ), 'administrator', 'wp-twitter', 'wp_twitter_settings_page');

    //call register settings function
    add_action( 'admin_init', 'wp_twitter_settings' );
}

function wp_twitter_settings(){
//register our settings
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_name' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_hashtags' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_store_time' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_tweets_cnt' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_consumerKey' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_consumerSecret' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_accessToken' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_accessTokenSecret' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_twitterIntents' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_twitterIntentsText' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_intentColor' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_slide_style' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_border_rad');
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_showAvatar' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_replies_excl' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_timeAgo' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_timeRef' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_disp_scr_name' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_tweet_border' );
    register_setting( 'wp-twitter-settings-group', 'wp_twitter_tweet_theme' );
}

function wp_twitter_settings_page(){
if(isset($_POST['submit'])){
if($_POST['wp_twitter_name'] == ''){
update_option('wp_twitter_name', '' );
update_option('wp_twitter_hashtags', $_POST['wp_twitter_hashtags'] );
}
if($_POST['wp_twitter_hashtags'] == ''){
update_option('wp_twitter_hashtags', '' );
update_option('wp_twitter_name', $_POST['wp_twitter_name'] );

}
update_option('wp_twitter_store_time', $_POST['wp_twitter_store_time'] );
update_option('wp_twitter_tweets_cnt', $_POST['wp_twitter_tweets_cnt'] );
update_option('wp_twitter_consumerKey', $_POST['wp_twitter_consumerKey'] );
update_option('wp_twitter_consumerSecret', $_POST['wp_twitter_consumerSecret'] );
update_option('wp_twitter_accessToken', $_POST['wp_twitter_accessToken'] );
update_option('wp_twitter_accessTokenSecret', $_POST['wp_twitter_accessTokenSecret'] );
update_option('wp_twitter_twitterIntents', $_POST['wp_twitter_twitterIntents'] );
update_option('wp_twitter_twitterIntentsText', $_POST['wp_twitter_twitterIntentsText'] );
update_option('wp_twitter_intentColor', $_POST['wp_twitter_intentColor'] );
update_option('wp_twitter_slide_style', $_POST['wp_twitter_slide_style'] );
update_option('wp_twitter_border_rad', $_POST['wp_twitter_border_rad'] );
update_option('wp_twitter_showAvatar', $_POST['wp_twitter_showAvatar'] );
update_option('wp_twitter_replies_excl', $_POST['wp_twitter_replies_excl'] );
update_option('wp_twitter_timeAgo', $_POST['wp_twitter_timeAgo'] );
update_option('wp_twitter_timeRef', $_POST['wp_twitter_timeRef'] );
update_option('wp_twitter_disp_scr_name', $_POST['wp_twitter_disp_scr_name'] );
update_option('wp_twitter_tweet_border', $_POST['wp_twitter_tweet_border'] );
update_option('wp_twitter_tweet_theme',$_POST['wp_twitter_tweet_theme']);
}


// Admin side page options
    $wp_twitter_name           = get_option('wp_twitter_name');
    $wp_twitter_hashtags           = get_option('wp_twitter_hashtags');
    $wp_twitter_store_time     = get_option('wp_twitter_store_time');
    $wp_twitter_tweets_cnt     = get_option('wp_twitter_tweets_cnt');
    $wp_twitter_consumerKey = get_option('wp_twitter_consumerKey');
    $wp_twitter_consumerSecret = get_option('wp_twitter_consumerSecret');
    $wp_twitter_accessToken = get_option('wp_twitter_accessToken');
    $wp_twitter_accessTokenSecret = get_option('wp_twitter_accessTokenSecret');
    $wp_twitter_twitterIntents = get_option('wp_twitter_twitterIntents');
    $wp_twitter_twitterIntentsText = get_option('wp_twitter_twitterIntentsText');
    $wp_twitter_intentColor = get_option('wp_twitter_intentColor');
    $wp_twitter_slide_style = get_option('wp_twitter_slide_style');
    $wp_twitter_border_rad = get_option('wp_twitter_border_rad');
    $wp_twitter_showAvatar = get_option('wp_twitter_showAvatar');
    $wp_twitter_replies_excl = get_option('wp_twitter_replies_excl');
    $wp_twitter_timeAgo        = get_option('wp_twitter_timeAgo');
    $wp_twitter_timeRef        = get_option('wp_twitter_timeRef');
    $wp_twitter_disp_scr_name  = get_option('wp_twitter_disp_scr_name');
    $wp_twitter_tweet_border = get_option('wp_twitter_tweet_border');
    $wp_twitter_tweet_theme = get_option('wp_twitter_tweet_theme');
             

    ?>
    
        <div class='wrap'>
            <h2><?php _e( 'WP Twitter Feeds Settings' ); ?></h2>

            <form method='post' action='#'>
                <?php settings_fields( 'wp-twitter-settings-group' ); ?>
                <?php do_settings_sections( 'wp-twitter-settings-group' ); ?>
                     

                <table class='form-table'>
                
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'Twitter User Name' );  ?></th>
                        <td>
                            <p> 
                               <label ><input name="wp_twitter_name" type="text" value="<?php echo $wp_twitter_name; ?>" /></label>
                                
                            </p>                                       
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'Twitter Hashtag' ); ?></th>
                        <td>
                            <p> 
                               <label ><input name="wp_twitter_hashtags" type="text" value="<?php echo $wp_twitter_hashtags; ?>" /></label>
                                
                            </p>                                       
                        </td>
                    </tr>
                    
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'Tweets Cache Time (in minutes):' ); ?></th> 
                        <td>
                        <p>
                                <label><input name="wp_twitter_store_time" type="text" value="<?php echo $wp_twitter_store_time; ?>" /></label>
                        </p>  
                        </td>
                    </tr>
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'Number of Tweets to Fetch:' ); ?></th>
                        <td>
                         <p>
                                <label><input name="wp_twitter_tweets_cnt" type="text" value="<?php echo $wp_twitter_tweets_cnt; ?>" /></label>
                         </p>   
                        </td>
                    </tr>                  
                    </table>
                
                    <table class='form-table'>
                    <h4  style="width:100%; text-align:center;"><?php _e(''); ?></h4>
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'API key:' ); ?></th>
                        <td>
                            <p>
                                <label>
                                        <input name="wp_twitter_consumerKey" type="text" value="<?php echo $wp_twitter_consumerKey; ?>" />
                                </label>
                            </p>   
                        </td>
                    </tr>
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'API secret:' ); ?></th>
                        <td>
                             <p>
                                <label>
                                        <input name="wp_twitter_consumerSecret" type="text" value="<?php echo $wp_twitter_consumerSecret; ?>" />
                                </label>
                            </p>   
                        </td>
                    </tr>
                    <tr valign='top'>
                        <th scope='row'><?php _e( 'Access Token:' ); ?></th>
                        <td>
                            <p>
                                <label>
                                        <input name="wp_twitter_accessToken" type="text" value="<?php echo $wp_twitter_accessToken; ?>" />
                                </label>
                            </p>   
                        </td>
                    </tr>
                     <tr valign='top'>
                        <th scope='row'><?php _e( 'Access Token Secret:' ); ?></th>
                        <td>
                            <p>
                                <label>
                                        <input name="wp_twitter_accessTokenSecret" type="text" value="<?php echo $wp_twitter_accessTokenSecret; ?>" />
                                </label>
                            </p>   
                        </td>
                    </tr>
                    </table>
                <table class='form-table'>
                    <h4  style="width:100%; text-align:center;"><?php _e( 'Advanced Options'); ?></h4>
                    <div style="padding:10px;">
                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Show Twitter Intents:' ); ?></th>
                            <td>
                             <p>
                                <label>
                                        <input class="checkbox" type="checkbox" value="true" <?php if(isset($wp_twitter_twitterIntents) && $wp_twitter_twitterIntents =='true'){ echo 'checked'; } ?>  name="wp_twitter_twitterIntents" />
                                </label>
                            </p>   
                            </td>
                        </tr>
                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Hide Twitter Intents Text' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                           <input class="checkbox" type="checkbox" value="true" <?php if(isset($wp_twitter_twitterIntentsText) && $wp_twitter_twitterIntentsText =='true'){ echo 'checked'; } ?> name="wp_twitter_twitterIntentsText" />
                                    </label>
                                </p>
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Colour for Intent icons:' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <input class="intentColor widefat" type="text" name="wp_twitter_intentColor" value="<?php echo $wp_twitter_intentColor; ?>"/>
                                            <div id="colorpicker"></div>
                                    </label>
                                </p>
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Style:' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <select name="wp_twitter_slide_style" style="width: 25%;">
                                                <option value="list" <?php if(isset($wp_twitter_slide_style) && $wp_twitter_slide_style=='list'){echo 'selected';} ?>><?php _e( 'List', 'viva-twitter-feed' ); ?></option>
                                                <option value="slider" <?php if(isset($wp_twitter_slide_style) && $wp_twitter_slide_style=='slider'){echo 'selected';} ?>><?php _e( 'Slider', 'viva-twitter-feed' ); ?></option>
                                            </select>    
                                    </label>   
                                </p> 
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Circular twitteratar image' ); ?></th>
                            <td>
                               <p>
                                    <label>
                                        <input class="checkbox" type="checkbox" value="true" <?php if(isset($wp_twitter_border_rad) && $wp_twitter_border_rad == 'true'){ echo 'checked'; } ?> name="wp_twitter_border_rad"/>
                                    </label>
                                </p>  
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Display twitteratar image' ); ?></th>
                            <td>
                               <p>
                                   <label>
                                          <input class="checkbox" type="checkbox" value="true" <?php if(isset ($wp_twitter_showAvatar) && $wp_twitter_showAvatar =='true'){echo 'checked';} ?> name="wp_twitter_showAvatar" />
                                    </label>
                                </p>
                            </td>
                        </tr>
                    
                   
                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Exclude @replies' ); ?></th>
                            <td>
                               <p>
                                   <label>
                                           <input class="checkbox" type="checkbox" value="true" <?php if(isset($wp_twitter_replies_excl) && $wp_twitter_replies_excl =='true') {echo 'checked';} ?> name="wp_twitter_replies_excl" />
                                    </label>
                                </p>
                            </td>
                        </tr>
                                   
                    
                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Show "ago" after the time' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <input class="checkbox" type="checkbox" value="true" <?php if (isset ($wp_twitter_timeAgo) && $wp_twitter_timeAgo =='true') {echo 'checked';} ?>  name="wp_twitter_timeAgo"/>
                                    </label>
                                </p>
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Set Twitter like short time' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <input class="checkbox" type="checkbox" value="true" <?php if(isset ($wp_twitter_timeRef) && $wp_twitter_timeRef =='true'){echo 'checked';} ?>  name="wp_twitter_timeRef" />
                                    </label>
                                </p>    
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Show Twitter Screen Name' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <input class="checkbox" type="checkbox"  value="true" <?php if(isset($wp_twitter_disp_scr_name) && $wp_twitter_disp_scr_name == 'true'){ echo 'checked'; } ?> name="wp_twitter_disp_scr_name"/>
                                    </label>
                                </p>
                            </td>
                        </tr>
                    

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Show Twitter Widget Border' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                            <select name="wp_twitter_tweet_border" style="width: 25%;">
                                                <option value="true" <?php if(isset($wp_twitter_tweet_border) && $wp_twitter_tweet_border =='true'){echo 'selected';} ?>><?php _e( 'Yes', 'viva-twitter-feed' ); ?></option>
                                                <option value="false" <?php if(isset($wp_twitter_tweet_border) && $wp_twitter_tweet_border=='false'){echo 'selected';} ?>><?php _e( 'No', 'viva-twitter-feed' ); ?></option>
                                            </select>
                                    </label>
                                </p>
                            </td>
                        </tr>

                        <tr valign='top'>
                            <th scope='row'><?php _e( 'Twitter Widget Theme:' ); ?></th>
                            <td>
                                <p>
                                    <label>
                                         <select name="wp_twitter_tweet_theme" style="width: 25%;">
                                            <option value="light" <?php if(isset($wp_twitter_tweet_theme) && $wp_twitter_tweet_theme=='light'){echo 'selected';} ?>><?php _e( 'Light', 'viva-twitter-feed' ); ?></option>
                                            <option value="dark" <?php if(isset($wp_twitter_tweet_theme) && $wp_twitter_tweet_theme=='dark'){echo 'selected';} ?>><?php _e( 'Dark', 'viva-twitter-feed' ); ?></option>
                                         </select>
                                    </label>
                                </p>
                            </td>
                        </tr> 

                    </div>
                   
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <h4>Documentation is written in a separate page. Please <a href ="http://demo.circacollective.com/twitter-documentation/" target="_blank">check that here.</a></h4>
    <?php
}
?>
