<?php echo $this->element('get_xml'); ?>
<div class="companyWebsites index">
<h2><?php __('Company Websites');?></h2>
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
	<th><?php echo $paginator->sort('website_url');?></th>
	<th><?php echo $paginator->sort('sort_order');?></th>
	<th><?php echo $paginator->sort('created');?></th>
	<th><?php echo $paginator->sort('modified');?></th>
	<th class="actions"><?php __('Actions');?></th>
</tr>
<?php
$i = 0;
foreach ($companyWebsites as $companyWebsite):
	$class = null;
	if ($i++ % 2 == 0) {
		$class = ' class="altrow"';
	}
?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $companyWebsite['CompanyWebsite']['id']; ?>
		</td>
		<td>
			<?php echo $html->link($companyWebsite['Company']['title'], '/companies/view/'.$companyWebsite['Company']['id'], null, null, false); ?>
		</td>
		<td>
			<?php echo $text->autoLink($companyWebsite['CompanyWebsite']['website_url']); ?>
		</td>
		<td>
			<?php echo $companyWebsite['CompanyWebsite']['sort_order']; ?>
		</td>
		<td>
			<?php echo $companyWebsite['CompanyWebsite']['created']; ?>
		</td>
		<td>
			<?php echo $companyWebsite['CompanyWebsite']['modified']; ?>
		</td>
		<td class="actions">
			<?php echo $html->link(__('View', true), array('action'=>'view', $companyWebsite['CompanyWebsite']['id'])); ?>
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
