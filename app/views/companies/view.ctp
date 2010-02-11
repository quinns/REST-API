<?php echo $this->element('get_xml'); ?>
<div class="companies view">
	<?php if(!empty($company['CompanyImage'])) {
		foreach($company['CompanyImage'] as $image){
			echo '<br />';
			echo $html->image($live_site.$image['filename'], array('height' => $image['height'], 'width' => $image['width'], 'alt' =>  $image['caption'], 'title' =>  $image['caption'])); 
			echo '&nbsp;';
		}
	}
	?>
<h2><?php  __('Company');?>: <?php echo $company['Company']['title']; ?></h2>


	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tagline'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['tagline']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $text->autoLink($company['Company']['website']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $text->autoLink($company['Company']['email']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Principals'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['principals']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Services'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['services']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hours'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['hours']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Amex'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo( $this->requestAction('statuses/display/'.$company['Company']['cc_amex']));  ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Visa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo( $this->requestAction('statuses/display/'.$company['Company']['cc_visa']) );  ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Mc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo( $this->requestAction('statuses/display/'.$company['Company']['cc_mc']) );  ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Disc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo( $this->requestAction('statuses/display/'.$company['Company']['cc_disc']) );  ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cc Financing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo( $this->requestAction('statuses/display/'.$company['Company']['cc_financing']) );  ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Guarantees'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['guarantees']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brands'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['brands']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Memberships'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['memberships']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Profile Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['profile_text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Philosophy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['philosophy']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Survey Excerpts'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['survey_excerpts']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Search Article Text'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['search_article_text']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employees'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['employees']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Survey Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['survey_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Survey Response Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['survey_response_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Satisfaction Rating'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['satisfaction_rating']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Certificate Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['certificate_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('State License Number'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['state_license_number']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Legacy Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['legacy_url']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delisted'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['delisted']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delist Alt Url'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $company['Company']['delist_alt_url']; ?>
			&nbsp;
		</dd>
	</dl>

<?php 
if(!empty($company['Region']) && !empty($company['Category'])) {
	echo '<br /><b>'.$company['Company']['title'].'</b> is listed in the following Regions/Categories: <br />';
	echo '<ul>'; 
	
	foreach($company['Region'] as $region){
		foreach($company['Category'] as $category){
			echo '<li>'.$html->link($region['title'].': '.$category['title'], '/regions/category/'.$region['id'].'/'.$category['id'], null, null, false).'</li>';
		}
	}
	echo '</ul>';
} else {
	echo '<div class="error-message">Warning: This company has no valid Region/Category combinations!</div>';
}
?>

</div>


<div class="related">
	<?php if (!empty($company['Region'])):?>
	<h3><?php __('Related Regions');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Region'] as $region):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $region['id'];?></td>
			<td><?php echo $region['title'];?></td>
			<td><?php echo $region['created'];?></td>
			<td><?php echo $region['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'regions', 'action'=>'view', $region['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>


<div class="related">
	<?php if (!empty($company['Category'])):?>
	<h3><?php __('Related Categories');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Category'] as $category):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $category['id'];?></td>
			<td><?php echo $category['title'];?></td>
			<td><?php echo $category['created'];?></td>
			<td><?php echo $category['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'categories', 'action'=>'view', $category['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>


<div class="related">
	<?php if (!empty($company['CompanyAddress'])):?>
	<h3><?php __('Related Company Addresses');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Address 1'); ?></th>
		<th><?php __('Address 2'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('Zip'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['CompanyAddress'] as $companyAddress):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $companyAddress['id'];?></td>
			<td><?php echo $companyAddress['address_1'];?></td>
			<td><?php echo $companyAddress['address_2'];?></td>
			<td><?php echo $companyAddress['city'];?></td>
			<td><?php echo $companyAddress['state'];?></td>
			<td><?php echo $companyAddress['zip'];?></td>
			<td><?php echo $companyAddress['phone'];?></td>
			<td><?php echo $companyAddress['fax'];?></td>
			<td><?php echo $companyAddress['created'];?></td>
			<td><?php echo $companyAddress['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'company_addresses', 'action'=>'view', $companyAddress['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
<div class="related">
	<?php if (!empty($company['CompanyImage'])):?>
	<h3><?php __('Related Company Images');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Filename'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['CompanyImage'] as $companyImage):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $companyImage['id'];?></td>
			<td><?php echo $html->link($companyImage['filename'], $live_site.$companyImage['filename'], array('target' => '_blank'));?></td>
			<td><?php echo $companyImage['created'];?></td>
			<td><?php echo $companyImage['modified'];?></td>
			<td><?php echo $companyImage['sort_order'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'company_images', 'action'=>'view', $companyImage['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>


</div>
<div class="related">
	<?php if (!empty($company['CompanyWebsite'])):?>
	<h3><?php __('Related Company Websites');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Website Url'); ?></th>
		<th><?php __('Sort Order'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['CompanyWebsite'] as $companyWebsite):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $companyWebsite['id'];?></td>
			<td><?php echo $companyWebsite['website_url'];?></td>
			<td><?php echo $companyWebsite['sort_order'];?></td>
			<td><?php echo $companyWebsite['created'];?></td>
			<td><?php echo $companyWebsite['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'company_websites', 'action'=>'view', $companyWebsite['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<?php if (!empty($company['SatisfactionRating'])):?>
	<h3><?php __('Related Satisfaction Ratings');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Field 1'); ?></th>
		<th><?php __('Field 2'); ?></th>
		<th><?php __('Field 3'); ?></th>
		<th><?php __('Field 4'); ?></th>
		<th><?php __('Field 5'); ?></th>
		<th><?php __('Field 6'); ?></th>
		<th><?php __('Field 7'); ?></th>
		<th><?php __('Field 8'); ?></th>
		<th><?php __('Field 9'); ?></th>
		<th><?php __('Field 10'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['SatisfactionRating'] as $satisfactionRating):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $satisfactionRating['id'];?></td>
			<td><?php echo $satisfactionRating['field_1'];?></td>
			<td><?php echo $satisfactionRating['field_2'];?></td>
			<td><?php echo $satisfactionRating['field_3'];?></td>
			<td><?php echo $satisfactionRating['field_4'];?></td>
			<td><?php echo $satisfactionRating['field_5'];?></td>
			<td><?php echo $satisfactionRating['field_6'];?></td>
			<td><?php echo $satisfactionRating['field_7'];?></td>
			<td><?php echo $satisfactionRating['field_8'];?></td>
			<td><?php echo $satisfactionRating['field_9'];?></td>
			<td><?php echo $satisfactionRating['field_10'];?></td>
			<td><?php echo $satisfactionRating['created'];?></td>
			<td><?php echo $satisfactionRating['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'satisfaction_ratings', 'action'=>'view', $satisfactionRating['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
<div class="related">
	<?php if (!empty($company['SurveyResponse'])):?>
	<h3><?php __('Related Survey Responses');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Survey Start Date'); ?></th>
		<th><?php __('Survey End Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['SurveyResponse'] as $surveyResponse):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $surveyResponse['id'];?></td>
			<td><?php echo $surveyResponse['survey_start_date'];?></td>
			<td><?php echo $surveyResponse['survey_end_date'];?></td>
			<td><?php echo $surveyResponse['created'];?></td>
			<td><?php echo $surveyResponse['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'survey_responses', 'action'=>'view', $surveyResponse['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>

<div class="related">
	<?php if (!empty($company['Dashboard'])):?>
	<h3><?php __('Related Dashboards');?></h3>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Title'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($company['Dashboard'] as $dashboard):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dashboard['id'];?></td>
			<td><?php echo $dashboard['title'];?></td>
			<td><?php echo $dashboard['created'];?></td>
			<td><?php echo $dashboard['modified'];?></td>
			<td class="actions">
				<?php echo $html->link(__('View', true), array('controller'=> 'dashboards', 'action'=>'view', $dashboard['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>
