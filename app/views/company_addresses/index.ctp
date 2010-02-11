<?php echo $this->element('get_xml'); ?>
<div class="companyAddresses index">
<h2><?php __('Company Addresses');?></h2>
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
	<th><?php echo $paginator->sort('address_1');?></th>
	<th><?php echo $paginator->sort('city');?></th>
	<th><?php echo $paginator->sort('state');?></th>
	<th><?php echo $paginator->sort('zip');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($companyAddresses as $companyAddress):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $companyAddress['CompanyAddress']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($companyAddress['Company']['title'], array('controller'=> 'companies', 'action'=>'view', $companyAddress['Company']['id']), null, null, false); ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['address_1']; ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['city']; ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['state']; ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['zip']; ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['created']; ?>
		</td>
		<td>
			<?php echo $companyAddress['CompanyAddress']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $companyAddress['CompanyAddress']['id'])); ?>
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
