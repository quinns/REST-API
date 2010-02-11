<?php
	$max_height = 60;
	$table_body = '';
	foreach($input_array as $key => $value){
		$my_percent = round((($value-2)/$grand_total)*100); // subtract 2 from value to account for baseline "bump"
		$my_height = round($my_percent * ($max_height / 100));
		if($my_height <= 0){
			$my_height = 0; // set a minimum height of 0
		}
		// create arrays of raw percent and height values
		$heights[] = $my_height;
		$percents[] = $my_percent;
		// figure out the height of the tallest bar
		$tallest = $heights;
		rsort($tallest);
		$tallest = $tallest[0];
		$difference[] = $max_height - $tallest;
		// echo "<!-- Percent for Field ".($key+1)." is ".round($my_percent)."% (".($value)." votes out of $grand_total total) -->\r\n";
		// create arrays of column heights and percents
		$column_height[] =  round($my_height);
		$column_percent[] = $my_percent;
	}
	// find difference between the current column and the max allowed
	$my_difference = $difference;
	sort($my_difference);
	$my_difference = $my_difference[0];
	$count = 0;
	foreach ($input_array as $value) {
		if($column_height[$count] > 1){
			$split =  round(($column_height[$count] / $max_height) * 100); // calculate the extra amount to add to each bar
			$col_height = round($column_height[$count] + ($split)) ;
			//$col_height = round($column_height[$count] * ($split / 100));
		} else {
			$col_height = 0;
		}
		if($col_height > $max_height){ // ensure that no bar can ever be higher than the max allowed
			$col_height = $max_height;
		} else if ($col_height >= 1) {
			 $col_height += 1;
		}
		if($col_height <= 1){
			//$col_height = $column_percent[$count] + 1;
		}
		$final_height[] = $col_height;
		$top = $final_height;		
		$table_body .=  "\t\t".'<td align="center" scope="col">'. "\r\n";
		if($col_height > 0){
			$table_body .=  '<img src="'.$live_site.'/img/bar_chart/data_column.gif" width="10" alt="'.$column_percent[$count].'%" title="'.$column_percent[$count].'%" height="'.$col_height.'" /> '."\r\n";
		} else {
			$table_body .=  $html->image('transparent_box.gif');
		}
		$table_body .=  "</td> \r\n";
		
		if($count == 0){
			//echo $table_close;
		}
		$count++;
	}
	$table_body .= '</tr><tr>';
	foreach($input_array as $key => $value){
		$table_body .=  "\t\t".'<td align="center"><font size="1" face="arial,helvetica,sans-serif">'.($key+1).'</font></td>'."\r\n";
	}
	// now we figure out which background image to use
	rsort($top);
	$top = $top[0];
	$bkg_number = (round($top/10))*10; // round the top number off by 10's
	$bkg_number -= 10; // bump the bar down by 10 so it lines up nicely
	$my_bkg_image = 'graph_bkg_'.$bkg_number.'.gif';
	if(!file_exists(WWW_ROOT.'/img/bar_chart/'.$my_bkg_image)){
		$my_bkg_image = 'background.gif'; // use the default bkg if the dynamic one cannot be loaded
	} 
	$table_open = '<table border="0" width="160" cellpadding="0" cellspacing="0"  background="/img/bar_chart/'.$my_bkg_image.'" > <tr height="80" valign="bottom"  cellpadding="0" cellspacing="0" >';
	$table_close = '</tr></table>';
	echo $table_open;
	echo "\r\n";
	echo $table_body;
	echo "\r\n";
	echo $table_close;
?>
<? /*
ACTUAL VALUES: <? pr($input_array); ?> <br>
TALLEST: <? pr($tallest); ?> <br>
HEIGHTS: <? pr($heights); ?> <br>
PERCENTS: <? pr($percents); ?> <br>
DIFFERENCE: <? pr($difference); ?> <br>
MY_DIFFERENCE: <? pr($my_difference); ?> <br>
COLUMN PERCENTS: <? pr($column_percent); ?> <br>
COLUMN HEIGHTS: <? pr($column_height); ?> <br>
FINAL HEIGHTS: <? pr($final_height); ?> <br>
TOP: <? pr($top); ?> <br>
BKG NUMBER: <? pr($bkg_number); ?> <br>
*/ ?>
