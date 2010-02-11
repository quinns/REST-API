<?php
$satisfactionRating['graph'] = $this->requestAction('/satisfaction_ratings/build/'.$satisfactionRating['SatisfactionRating']['id']); 
?><satisfactionRating>
	<?php echo $xml->serialize($satisfactionRating); ?>
</satisfactionRating>