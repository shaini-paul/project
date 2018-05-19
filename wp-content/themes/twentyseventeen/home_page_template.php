<?php
/* Template Name: Home Page */
get_header(); ?>

<form action="/cart.php" method="post">
		<table id="products-table" class="pcb-table">
			<tbody><tr class="header">
				<th colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">basic settings</font></font></th>
				<th class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">price
			</font></font></th></tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Table type
				</font></font></td>
				<td>
				 
					<input type="radio" name="panel_type" value="FR4-Tg130" id="panel_type_FR4-Tg130" checked="checked" onchange="OnPanelTypeChange(this);">
					<label for="panel_type_FR4-Tg130"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">FR4-Tg130</font></font></label>
				
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					The size of the circle
				</font></font></td>
				<td>
					<select id="board_width" name="board_width" onchange="OnBoardSizeChange(this);" onkeyup="OnBoardSizeChange(this);">
				 
						<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
				 
						<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
				 
						<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
				 
						<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
				 
						<option value="5" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
				 
						<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></option>
				 
						<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option>
				 
						<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></option>
				 
						<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></option>
				 
						<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
				 
						<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></option>
				 
						<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></option>
				 
						<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></option>
				 
						<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></option>
				 
						<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
				 
						<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></option>
				 
						<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></option>
				 
						<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></option>
				 
						<option value="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></option>
				 
						<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
				 
						<option value="21"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></option>
				 
						<option value="22"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></option>
				 
						<option value="23"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></option>
				 
						<option value="24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></option>
				 
						<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
				 
						<option value="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></option>
				 
						<option value="27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></option>
				 
						<option value="28"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></option>
				 
						<option value="29"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></option>
				 
						<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
				 
						<option value="31"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></option>
				 
						<option value="32"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></option>
				 
						<option value="33"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></option>
				 
						<option value="34"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></option>
				 
						<option value="35"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></option>
				 
						<option value="36"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36</font></font></option>
				 
						<option value="37"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></option>
				 
						<option value="38"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></option>
				 
						<option value="39"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></option>
				 
						<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
				 
						<option value="41"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41</font></font></option>
				 
						<option value="42"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></option>
				 
						<option value="43"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43</font></font></option>
				 
						<option value="44"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></option>
				 
						<option value="45"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></option>
				 
						<option value="46"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">46</font></font></option>
				 
						<option value="47"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></option>
				 
						<option value="48"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></option>
				 
						<option value="49"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49</font></font></option>
				 
						<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
				
					</select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					x
					</font></font><select id="board_height" name="board_height" onchange="OnBoardSizeChange(this);" onkeyup="OnBoardSizeChange(this);">
				 
						<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
				 
						<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
				 
						<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
				 
						<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
				 
						<option value="5" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
				 
						<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></option>
				 
						<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option>
				 
						<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></option>
				 
						<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></option>
				 
						<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
				 
						<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></option>
				 
						<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></option>
				 
						<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></option>
				 
						<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></option>
				 
						<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
				 
						<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></option>
				 
						<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></option>
				 
						<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></option>
				 
						<option value="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></option>
				 
						<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
				 
						<option value="21"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">21</font></font></option>
				 
						<option value="22"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">22</font></font></option>
				 
						<option value="23"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">23</font></font></option>
				 
						<option value="24"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">24</font></font></option>
				 
						<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
				 
						<option value="26"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">26</font></font></option>
				 
						<option value="27"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">27</font></font></option>
				 
						<option value="28"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">28</font></font></option>
				 
						<option value="29"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">29</font></font></option>
				 
						<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
				 
						<option value="31"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">31</font></font></option>
				 
						<option value="32"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">32</font></font></option>
				 
						<option value="33"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">33</font></font></option>
				 
						<option value="34"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">34</font></font></option>
				 
						<option value="35"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">35</font></font></option>
				 
						<option value="36"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">36</font></font></option>
				 
						<option value="37"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">37</font></font></option>
				 
						<option value="38"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38</font></font></option>
				 
						<option value="39"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">39</font></font></option>
				 
						<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
				 
						<option value="41"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">41</font></font></option>
				 
						<option value="42"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">42</font></font></option>
				 
						<option value="43"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">43</font></font></option>
				 
						<option value="44"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">44</font></font></option>
				 
						<option value="45"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">45</font></font></option>
				 
						<option value="46"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">46</font></font></option>
				 
						<option value="47"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">47</font></font></option>
				 
						<option value="48"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">48</font></font></option>
				 
						<option value="49"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49</font></font></option>
				 
						<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
				
					</select><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					Cm
				</font></font></td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Multiple layers
				</font></font></td>
				<td>
				 
					<input type="radio" name="layers" value="1" id="layers_1" onchange="OnLayersChange(this);">
					<label for="layers_1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></label>
				 
					<input type="radio" name="layers" value="2" id="layers_2" checked="checked" onchange="OnLayersChange(this);">
					<label for="layers_2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></label>
				 
					<input type="radio" name="layers" value="4" id="layers_4" onchange="OnLayersChange(this);">
					<label for="layers_4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></label>
				 
					<input type="radio" name="layers" value="6" id="layers_6" onchange="OnLayersChange(this);">
					<label for="layers_6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></label>
				 
					<input type="radio" name="layers" value="8" id="layers_8" onchange="OnLayersChange(this);">
					<label for="layers_8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></label>
				
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Amount
				</font></font></td>
				<td>
					<select id="quantity" name="quantity" onchange="OnQuantityChange(this);" onkeyup="OnQuantityChange(this);">
				 
						<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
				 
						<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
				 
						<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
				 
						<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
				 
						<option value="25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">25</font></font></option>
				 
						<option value="30"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">30</font></font></option>
				 
						<option value="40"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">40</font></font></option>
				 
						<option value="50"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">50</font></font></option>
				 
						<option value="75"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">75</font></font></option>
				 
						<option value="100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">100</font></font></option>
				 
						<option value="125"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">125</font></font></option>
				 
						<option value="150"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">150</font></font></option>
				 
						<option value="200"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">200</font></font></option>
				 
						<option value="250"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">250</font></font></option>
				 
						<option value="300"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">300</font></font></option>
				 
						<option value="350"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">350</font></font></option>
				 
						<option value="400"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">400</font></font></option>
				 
						<option value="450"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">450</font></font></option>
				 
						<option value="500"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">500</font></font></option>
				 
						<option value="600"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">600</font></font></option>
				 
						<option value="700"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">700</font></font></option>
				 
						<option value="800"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">800</font></font></option>
				 
						<option value="900"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">900</font></font></option>
				 
						<option value="1000"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1000</font></font></option>
				
					</select>				
				</td>
				<td class="price">
					<span id="board_price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">49.60</font></font></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Circles area
				</font></font></td>
				<td>
					<span id="board_area"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.0125</font></font></span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
					square meters
				</font></font></td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
thickness
				</font></font></td>
				<td>
				 
					<input type="radio" name="thickness" value="0.6" id="thickness_0.6" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_0.6" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.6</font></font></label>
				 
					<input type="radio" name="thickness" value="0.8" id="thickness_0.8" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_0.8" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.8</font></font></label>
				 
					<input type="radio" name="thickness" value="1.0" id="thickness_1.0" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_1.0" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.0</font></font></label>
				 
					<input type="radio" name="thickness" value="1.2" id="thickness_1.2" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_1.2" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.2</font></font></label>
				 
					<input type="radio" name="thickness" value="1.6" id="thickness_1.6" checked="checked" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_1.6" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1.6</font></font></label>
				 
					<input type="radio" name="thickness" value="2.0" id="thickness_2.0" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_2.0" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.0</font></font></label>
				 
					<input type="radio" name="thickness" value="2.5" id="thickness_2.5" disabled="disabled" onchange="OnBoardThicknessChange(this);">
					<label for="thickness_2.5" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2.5</font></font></label>
				
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Solder mask color
				</font></font></td>
				<td>
				 
					<input type="radio" name="mask_color" value="green" id="mask_color_green" checked="checked" onchange="OnSolderMaskChange(this);">
					<span class="color_square green"></span>
					<label for="mask_color_green"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">green</font></font></label>
				 
					<input type="radio" name="mask_color" value="red" id="mask_color_red" onchange="OnSolderMaskChange(this);">
					<span class="color_square red"></span>
					<label for="mask_color_red"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">red</font></font></label>
				 
					<input type="radio" name="mask_color" value="blue" id="mask_color_blue" onchange="OnSolderMaskChange(this);">
					<span class="color_square blue"></span>
					<label for="mask_color_blue"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">blue</font></font></label>
				 
					<input type="radio" name="mask_color" value="yellow" id="mask_color_yellow" onchange="OnSolderMaskChange(this);">
					<span class="color_square yellow"></span>
					<label for="mask_color_yellow"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">yellow</font></font></label>
				 
					<input type="radio" name="mask_color" value="black" id="mask_color_black" onchange="OnSolderMaskChange(this);">
					<span class="color_square black"></span>
					<label for="mask_color_black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">black</font></font></label>
				 
					<input type="radio" name="mask_color" value="white" id="mask_color_white" onchange="OnSolderMaskChange(this);">
					<span class="color_square white"></span>
					<label for="mask_color_white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">white</font></font></label>
				
				</td>
				<td class="price">
					<span id="mask_color_price"></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Caption color
				</font></font></td>
				<td>
				 
					<input type="radio" name="text_color" value="white" id="text_color_white" checked="checked" onchange="OnTextColorChange(this);">
					<span class="color_square white"></span>
					<label for="text_color_white"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">white</font></font></label>
				 
					<input type="radio" name="text_color" value="black" id="text_color_black" disabled="disabled" onchange="OnTextColorChange(this);">
					<span class="color_square black"></span>
					<label for="text_color_black"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">black</font></font></label>
				
				<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(Varies by mask color)
				</font></font></h5>
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Coatings
				</font></font></td>
				<td>
				 
					<input type="radio" name="finishing" value="HASL-Leaded" id="finishing_HASL-Leaded" checked="checked" onchange="OnFinishingChange(this);">
					<label for="finishing_HASL-Leaded"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HASL contains lead</font></font></label>
				 
					<input type="radio" name="finishing" value="HASL-LeadFree" id="finishing_HASL-LeadFree" onchange="OnFinishingChange(this);">
					<label for="finishing_HASL-LeadFree"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HASL without lead</font></font></label>
				 
					<input type="radio" name="finishing" value="ENIG" id="finishing_ENIG" onchange="OnFinishingChange(this);">
					<label for="finishing_ENIG"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">ENIG - Gold plating</font></font></label>
				
				</td>
				<td class="price">
					<span id="finishing_price"></span>
				</td>
			</tr>
		</tbody></table>

		<div style="height: 15px; clear: both;"></div>

		<table id="products-table" class="pcb-table">
			<tbody><tr class="header">
				<th colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Advanced settings</font></font></th>
				<th class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">price
			</font></font></th></tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Conductor thickness
				</font></font></td>
				<td>
				 
					<input type="radio" name="trace_width" value="6" id="trace_width_6" checked="checked" onchange="OnTraceWidthChange(this);">
					<label for="trace_width_6" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6mil / 0.150mm and more</font></font></label>
				 
					<input type="radio" name="trace_width" value="5" id="trace_width_5" onchange="OnTraceWidthChange(this);">
					<label for="trace_width_5" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5mil / 0.125mm</font></font></label>
				 
					<input type="radio" name="trace_width" value="4" id="trace_width_4" onchange="OnTraceWidthChange(this);">
					<label for="trace_width_4" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4mil / 0.100mm</font></font></label>
				 
					<input type="radio" name="trace_width" value="3.5" id="trace_width_3.5" onchange="OnTraceWidthChange(this);">
					<label for="trace_width_3.5" style="font-size:0.9em;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3.5mil / 0.090mm</font></font></label>
				
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Drilling diameter
				</font></font></td>
				<td>
				 
					<input type="radio" name="drill_size" value="0.3" id="drill_size_0.3" checked="checked" onchange="OnDrillSizeChange(this);">
					<label for="drill_size_0.3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.3mm and more</font></font></label>
				 
					<input type="radio" name="drill_size" value="0.25" id="drill_size_0.25" onchange="OnDrillSizeChange(this);">
					<label for="drill_size_0.25"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.25mm</font></font></label>
				 
					<input type="radio" name="drill_size" value="0.2" id="drill_size_0.2" onchange="OnDrillSizeChange(this);">
					<label for="drill_size_0.2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.2mm</font></font></label>
				
				</td>
				<td class="price">
					<span id="drill_size_price"></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Copper thickness
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(outer layers)
				</font></font></td>
				<td>
				 
					<input type="radio" name="copper_thickness" value="1oz" id="copper_thickness_1oz" checked="checked" onchange="OnCopperThicknessChange(this);">
					<label for="copper_thickness_1oz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1oz</font></font></label>
				 
					<input type="radio" name="copper_thickness" value="2oz" id="copper_thickness_2oz" onchange="OnCopperThicknessChange(this);">
					<label for="copper_thickness_2oz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2oz</font></font></label>
				
				</td>
				<td class="price">
					<span id="copper_thickness_price"></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Copper thickness
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(inner layers)
				</font></font></td>
				<td>
				 
					<input type="radio" name="inner_copper_thickness" value="0.5oz" id="inner_copper_thickness_0.5oz" checked="checked" disabled="disabled" onchange="OnInnerCopperThicknessChange(this);">
					<label for="inner_copper_thickness_0.5oz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0.5oz</font></font></label>
				 
					<input type="radio" name="inner_copper_thickness" value="1oz" id="inner_copper_thickness_1oz" disabled="disabled" onchange="OnInnerCopperThicknessChange(this);">
					<label for="inner_copper_thickness_1oz"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1oz</font></font></label>
				
				</td>
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
					Number of cut-offs
				</font></font></td>
				<td>
					<select id="vslots" name="vslots" onchange="OnVSlotCountChange(this);" onkeyup="OnVSlotCountChange(this);">
				 
						<option value="0" selected=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">0</font></font></option>
				 
						<option value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></option>
				 
						<option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></option>
				 
						<option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></option>
				 
						<option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">4</font></font></option>
				 
						<option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">5</font></font></option>
				 
						<option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">6</font></font></option>
				 
						<option value="7"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">7</font></font></option>
				 
						<option value="8"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">8</font></font></option>
				 
						<option value="9"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">9</font></font></option>
				 
						<option value="10"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">10</font></font></option>
				 
						<option value="11"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">11</font></font></option>
				 
						<option value="12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">12</font></font></option>
				 
						<option value="13"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">13</font></font></option>
				 
						<option value="14"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">14</font></font></option>
				 
						<option value="15"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">15</font></font></option>
				 
						<option value="16"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">16</font></font></option>
				 
						<option value="17"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">17</font></font></option>
				 
						<option value="18"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">18</font></font></option>
				 
						<option value="19"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19</font></font></option>
				 
						<option value="20"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">20</font></font></option>
				
					</select>
				<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(Applicable if you combine different circles, choose 0 if the cut separates completely identical circuits, the
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
factory usually does not require additional payment in these cases)
				</font></font></h5>
				</td>
				<td class="price">
					<span id="vslots_price"></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Open Holes
 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(Stamp Holes)
				</font></font></td>
				<td>
				 
					<input type="radio" name="stamp_holes" value="no" id="stamp_holes_no" checked="checked" onchange="OnStampHolesChange(this);">
					<label for="stamp_holes_no"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">with no</font></font></label>
				 
					<input type="radio" name="stamp_holes" value="yes" id="stamp_holes_yes" onchange="OnStampHolesChange(this);">
					<label for="stamp_holes_yes"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Existing</font></font></label>
				
				</td>
				<td class="price">
					<span id="stamp_holes_price"></span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Blind and burried VIAs
				</font></font></td>
				<td>
				 
					<input type="radio" name="blind_burried_vias" value="no" id="blind_burried_vias_no" checked="checked" onchange="OnBlindBurriedViasChange(this);">
					<label for="blind_burried_vias_no"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">with no</font></font></label>
				
				<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
(A number of production days will be added beyond what is recorded)
				</font></font></h5>
				</td>				
				<td>
					<span></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
Test level
				</font></font></td>
				<td>
					<select id="testing" name="testing" onchange="OnTestingChange(this);" onkeyup="OnTestingChange(this);">
				 
						<option value="SingleLayerVisualTest" id="testing_SingleLayerVisualTest" style="display:none;">בדיקה חזותית ללוחות חד-צדדיים</option>
				 
						<option value="SampleTest" id="testing_SampleTest" style=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Free sample checking</font></font></option>
				 
						<option value="Partial95Test" id="testing_Partial95Test" style="display:none;">AOI + Flying Probe - בדיקה חלקית, לפחות 95%</option>
				 
						<option value="FullTest" id="testing_FullTest" style="display:none;">AOI + Flying Probe - בדיקה מלאה</option>
				
					</select>
					<br>
					<h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
	Note: The options change after you change the circle settings (size, layers, quantity)
					</font></font></h5>
				</td>
				<td class="price">
					<span id="testing_price"></span>
				</td>
			</tr>
		</tbody></table>

		<div style="height: 15px; clear: both;"></div>

		<table id="products-table" class="pcb-table">
			<tbody><tr class="header">
				<th colspan="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Availability and shipping</font></font></th>
				<th class="nowrap"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">price
			</font></font></th></tr>
			<tr class="datarow bg1">
				<td class="header"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
production time
				</font></font></td>
				<td>
					<select id="manufacturing_time" name="manufacturing_time" onchange="OnManufacturingTimeChange(this);" onkeyup="OnManufacturingTimeChange(this);">
				 
						<option value="normal3-5" id="manufacturing_time_normal3-5" style=""><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Regular 3-5 days</font></font></option>
				 
						<option value="normal4-6" id="manufacturing_time_normal4-6" style="display:none;">רגיל 4-6 ימים</option>
				 
						<option value="normal6-8" id="manufacturing_time_normal6-8" style="display:none;">רגיל 6-8 ימים</option>
				 
						<option value="normal7-9" id="manufacturing_time_normal7-9" style="display:none;">רגיל 7-9 ימים</option>
				 
						<option value="normal8-10" id="manufacturing_time_normal8-10" style="display:none;">רגיל 8-10 ימים</option>
				 
						<option value="normal9-11" id="manufacturing_time_normal9-11" style="display:none;">רגיל 9-11 ימים</option>
				 
						<option value="normal11-16" id="manufacturing_time_normal11-16" style="display:none;">רגיל 11-16 ימים</option>
				 
						<option value="expedited24h" id="manufacturing_time_expedited24h" style="display:none;">מזורז ל-24 שעות</option>
				 
						<option value="expedited48h" id="manufacturing_time_expedited48h" style="display:none;">מזורז ל-48 שעות</option>
				 
						<option value="expedited72h" id="manufacturing_time_expedited72h" style="display:none;">מזורז ל-72 שעות</option>
				 
						<option value="expedited96h" id="manufacturing_time_expedited96h" style="display:none;">מזורז ל-96 שעות</option>
				
					</select>
					<br>
					<h5>
	שימו לב: אפשרויות הבחירה משתנות לאחר שינוי הגדרות המעגל (גודל, שכבות, כמות)
<br>
הזמן הוא בימי עבודה ומושפע מ
<a href="http://www.timeanddate.com/holidays/china/" target="_blank">חגים בסין</a>
					</h5>
				</td>
				<td class="price">
					<span id="manufacturing_time_price"></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header">
משלוח מהמפעל
				</td>
				<td>
					<select id="delivery_type" name="delivery_type" onchange="OnDeliveryTypeChange(this);" onkeyup="OnDeliveryTypeChange(this);">
				 
						<option id="delivery_type_registered" value="registered" selected="">דואר רשום (15-45 ימים)</option>
				 
						<option id="delivery_type_express" value="express">משלוח אקספרס (5-10 ימים)</option>
				
					</select>
					<h5>
זו צורת המשלוח מהמפעל למשרדינו, את צורת המשלוח אליכם תוכלו לבחור בעמוד עגלת הקניות.
<br>
זהו זמן המשלוח בלבד ולא כולל את הזמן שיכול לקחת שחרור ממכס או הפתעות לא צפויות אחרות
<br>
הזמן הוא בימי עבודה ומושפע מ
<a href="http://www.timeanddate.com/holidays/china/" target="_blank">חגים בסין</a>
					</h5>
				</td>
				<td class="price">
					<span id="delivery_type_price">25.20</span>
				</td>
			</tr>
			<tr class="datarow bg1">
				<td class="header">
משקל משוער
				</td>
				<td>
משקל לחישוב עלויות דואר רשום:
<span id="weight">0.1</span> ק"ג
(דואר רשום מוגבל עד 2 ק"ג)
<br>
משקל לפי נפח לחישוב עלויות משלוח אקספרס:
<span id="volumetric_weight">0.2</span> ק"ג
				</td>
				<td class="price">
					<span id="delivery_type_price"></span>
				</td>
			</tr>
			<tr class="datarow bg2">
				<td class="header">
שחרור ממכס
				</td>
				<td>
				</td>
				<td class="price">
					<span id="customs_price"></span>
				</td>
			</tr>
		</tbody></table>

		<div style="height: 15px; clear: both;"></div>

		<table id="products-table" class="pcb-table">
			<tbody><tr class="header">
				<th colspan="2">מחיר כולל</th>
				<th class="nowrap">מחיר
			</th></tr>
			<tr class="datarow bg1">
				<td class="header">
				</td>
				<td>
					<h5>
המחירים כוללים מע"מ, לא כוללים את המשלוח ממשרדינו אליכם.
<br>
המחיר מותנה באישור של הקבצים שתספקו והסכמת המפעל לבצע את העבודה.
<br>
המפעל עלול לדרוש עלויות נוספות שלא מפורטות בעמוד זה.
					</h5>
				</td>
				<td class="price">
					<span id="total_price">74.80</span>
					ש"ח
				</td>
			</tr>
		</tbody></table>

		<div style="height: 15px; clear: both;"></div>
		
		<div class="content">
כדי למנוע שגיאות, אי הבנות ובעיות בייצור, לא יועברו הוראות מיוחדות בנוסף לקבצי הייצור. כל הפרטים צריכים להופיע בקבצים שאתם שולחים לנו.
<br>
אם אתם צריכים דברים מיוחדים כמו Tooling holes, שכפול של המעגלים בפנל אחד או דברים נוספים, עשו זאת בעצמכם ושלחו לנו קבצים שכוללים את החורים, מעגלים שעברו panelization והדברים הנוספים שאתם צריכים בייצור.
<br><br>
* אנו לא לוקחים אחריות על הקבצים שאתם מגישים לייצור.
<br>
* אנו לא בודקים את תקינותם, אלא רק מוודאים שהקבצים תואמים את הגדרות הייצור שבחרתם.
<br>
* אל תדחפו את המפעל להגדרות המינימליות שהוא יכול לספק, כמה שההגדרות יהיו לחוצות יותר, כך גדל הסיכוי לבעיות בייצור, גם אחרי הבדיקות!
		</div>

		<div style="height: 15px; clear: both;"></div>
		<div class="content">
			<strong>
שימו לב:
<br>
הזמנות ייצור נשמורות בעגלת הקניות לזמן מוגבל והן ימחקו מהעגלה לאחר כשעה של חוסר פעילות או לאחר התנתקות מהמערכת.
			</strong>
		</div>

		<div style="height: 15px; clear: both;"></div>

		<div class="action">
			<input type="hidden" name="action" value="add_pcb">
			<input type="hidden" name="id" value="4169">
			<input type="hidden" name="back" value="pcb">
			<input type="hidden" name="backid" value="4169">
			<input type="submit" id="addtocart" class="button add-to-cart-button order" value="הוסף לעגלת הקניות">
		</div>

		<div style="height: 15px; clear: both;"></div>

		<div class="content">
<u>שלבים לביצוע הזמנת ייצור מעגלים מודפסים:</u>
<br>
1. בוחרים את מאפייני הייצור ומוסיפים את הבחירה לעגלת הקניות
<br>
2. משלימים את התשלום עבור ההזמנה ומקבלים מספר הזמנת ייצור (תוכלו לראות את המספר בפרטי המוצרים המוזמנים בעמוד
<a href="https://www.4project.co.il/orders.php">הזמנות שלי</a>
)
<br>
3. שולחים קובץ ZIP עם קבצי Gerber בפורמט RS-274X לכתובת
<a href="mailto:pcb@4project.co.il?subject=PCB manufacturing files for order ...">pcb@4project.co.il</a>
, כאשר שם הקובץ צריך להיות כמספר הזמנת הייצור שקיבלתם, עם סיומת zip וכותרת האימייל גם היא צריכה לכלול את מספר הזמנת הייצור. (קראו בעיון על
<a href="https://www.4project.co.il/forum/viewtopic.php?f=40&amp;t=5386">שמות הקבצים</a>
שאמורים להיות בתוך ה-ZIP)
<br>
4. אנחנו נבדוק שתוכן הקבצים תואם את המאפיינים שבחרתם ונשלח את הקבצים לייצור
<br>
5. תוכלו לעקוב אחרי תהליך הייצור בעמוד
<a href="https://www.4project.co.il/manufacturing_orders.php">הזמנות ייצור</a>
<br>
<br>
קראו בעיון את
<a href="https://www.4project.co.il/forum/viewforum.php?f=40">שאלות והתשובות בנושא הזמנת ייצור באתר</a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
.
</font></font><br><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
You can find sample Gerber files linked to
 </font></font><a href="https://www.4project.co.il/product/test-pcb-board"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">a printed circuit that is</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> 
created as an example of production processes.
		</font></font></div>

		
	</form>

<?php get_footer();
