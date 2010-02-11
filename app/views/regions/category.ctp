<?php echo $this->element('get_xml'); ?>
<?php
	$this->pageTitle = $region['Region']['title'].': '.$category['Category']['title']; 
?>
<h2><?php echo $region['Region']['title']; ?>: <?php echo $category['Category']['title']; ?></h2>
<?php
	if(empty($companies)){
	echo '<h1>There are no active companies in '.$region['Region']['title'].': '.$category['Category']['title'].'</h1>';
	
	} else {
 
	foreach($companies as $company){ ?>
	<h3>
	<?php
		$license_printed = false;
		echo $html->link($company['title'], '/companies/view/'.$company['id'], null, null, false); 
	?>
	</h3>
	<?php 
		if ($company['principals'] != '') { 
	?>
		<b><? echo $company['principals']; ?></b> <br />
	<?php } 
		 foreach($company['CompanyAddress'] as $address){
			if ($address['phone'] != '') { echo $address['phone'].'<br />'; }
			if ($address['address_1'] != '') { 
			
			echo  strip_tags($address['address_1'], '<br><p>') .'<br />';
			
			 }
		//	if ($address['address_1'] != '') { echo  $address['address_1'] .'<br />'; }
			if ($address['city'] != '') { echo $address['city'].' '. $address['state'].'<br />'; }
			if ($company['state_license_number'] != '' && $license_printed != true) { echo 'License # '.$company['state_license_number'].'<br />'; $license_printed = true; }
			if ($address['fax'] != '') { echo 'Fax '.$address['fax'].'<br />'; }
		//	echo '<br />';
			$license_printed = false;
		}
 } 
 
}
?>
<br />

