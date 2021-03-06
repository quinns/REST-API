<?php echo $this->element('get_xml'); ?>
<div class="companyImages index">
<h2><?php __('Company Images');?></h2>
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
	<th><?php echo $paginator->sort('filename');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($companyImages as $companyImage):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $companyImage['CompanyImage']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($companyImage['Company']['title'], array('controller'=> 'companies', 'action'=>'view', $companyImage['Company']['id']), null, null, false); ?>
		</td>
		<td>
			<?php echo $html->link($companyImage['CompanyImage']['filename'], $live_site.$companyImage['CompanyImage']['filename'], array('target' => '_blank')); ?>
		</td>
		<td>
			<?php echo $companyImage['CompanyImage']['created']; ?>
		</td>
		<td>
			<?php echo $companyImage['CompanyImage']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $companyImage['CompanyImage']['id'])); ?>
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
