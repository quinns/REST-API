<?php

function make_menu($mode = null){
	$menu = array(
		array('controller' => 'categories', 'action' => 'index'),
		array('controller' => 'cities', 'action' => 'index'),
		array('controller' => 'regions', 'action' => 'index'),
	);
	sort($menu);
	$output = '<ul>';
	foreach( $menu as $item){
		$link = '/'.$item['controller'].'/'.$item['action'];
		if($mode == 'xml'){
			$link .= '/'.$item['action'].'.xml';
		}
		if($mode != 'xml'){
			if($item['action'] == 'index'){
				$link_name = $item['controller'];
			} else {
				$link_name = $item['controller'].' '.$item['action'];
			}
		} else {
			$link_name = $item['controller'].' '.$item['action'];
		}
		$output .= '<li><a href="'.$link.'">'.Inflector::humanize($link_name);
		$output .='</a></li>';
	}
	$output .= '</ul>';
	return $output;
}


?>
<h2>REST API with XML and CakePHP Demo </h2>
<h3>Human-readable interface (paginated HTML format)</h3>
<br />
<?php  echo make_menu(); ?>
<h3>Machine-readable interface (full dataset XML format)</h3>
<br />
<?php  echo make_menu('xml'); ?>
<br />
<?php if (Configure::read('Cache.disable') != 1) { ?>
<h2>Administration Functions</h2>
<ul>
<li><?php echo $html->link('Reset Display Cache', '/statuses/clear_cache', null, 'Are you sure you wish to reset the display cache?'); ?></li>
</ul>
<? } ?>

