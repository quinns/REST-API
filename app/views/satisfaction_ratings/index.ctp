<?php echo $this->element('get_xml'); ?>
<div class="satisfactionRatings index">
<h2><?php __('Satisfaction Ratings');?></h2>
<p>
<?php
echo $paginator->counter(array(
'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
));
?></p>
<table cellpadding="0" cellspacing="0">
<tr>
	<th><?php echo $paginator->sort('id');?></th>
	<th><?php echo $paginator->sort('company_id');?></th>
	<th><?php echo $paginator->sort('field_1');?></th>
	<th><?php echo $paginator->sort('field_2');?></th>
	<th><?php echo $paginator->sort('field_3');?></th>
	<th><?php echo $paginator->sort('field_4');?></th>
	<th><?php echo $paginator->sort('field_5');?></th>
	<th><?php echo $paginator->sort('field_6');?></th>
	<th><?php echo $paginator->sort('field_7');?></th>
	<th><?php echo $paginator->sort('field_8');?></th>
	<th><?php echo $paginator->sort('field_9');?></th>
	<th><?php echo $paginator->sort('field_10');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($satisfactionRatings as $satisfactionRating):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($satisfactionRating['Company']['title'], array('controller'=> 'companies', 'action'=>'view', $satisfactionRating['Company']['id']), null, null, false); ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_1']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_2']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_3']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_4']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_5']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_6']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_7']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_8']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_9']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['field_10']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['created']; ?>
		</td>
		<td>
			<?php echo $satisfactionRating['SatisfactionRating']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $satisfactionRating['SatisfactionRating']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
</table>
</div>
<div class="paging">
	<?php echo $paginator->prev('<< '.__('previous', true), array(), null, array('class'=>'disabled'));?>
 | 	<?php echo $paginator->numbers();?>
	<?php echo $paginator->next(__('next', true).' >>', array(), null, array('class'=>'disabled'));?>
</div>

