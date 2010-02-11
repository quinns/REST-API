<?php echo $this->element('get_xml'); ?>
<a name="top"></a><h2><?php echo $this->pageTitle; ?></h2>
<?php
	echo '<ul>';
	foreach($regions as $region){
		echo '<li>'.$html->link($region['Region']['title'], '/regions/categories/#'.Inflector::slug($region['Region']['title']), null, null, false).'</li>';
	}
	echo '</ul>';
	foreach($regions as $region){
		$category_list = array();
		echo '<a name="'.Inflector::slug($region['Region']['title']).'"></a><h3>'.$region['Region']['title'].'</h3>';
		echo '<ul>';
		foreach($region['Category'] as $category){
			$category_list[] = '<li>'.$html->link($region['Region']['title'].': '.$category['title'], '/regions/category/'.$region['Region']['id'].'/'.$category['id'], null, null, false).'</li>';
		}
		natcasesort($category_list);
		foreach($category_list as $value){
			echo $value;
		}
		echo '</ul>';
		unset($category_list);
		echo '<br />';
		echo $html->link('Top of Page', '/regions/categories/#top');
		echo '<br />';
	}
?>