<?php
class Category extends AppModel {

	var $name = 'Category';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Status' => array('className' => 'Status',
								'foreignKey' => 'status_id',
								'conditions' => '',
								'fields' => 'Status.id',
								'order' => ''
			)
	);

	var $hasAndBelongsToMany = array(
			'Region' => array('className' => 'Region',
						'joinTable' => 'regions_categories',
						'foreignKey' => 'category_id',
						'associationForeignKey' => 'region_id',
						'unique' => true,
						'conditions' => 'Region.status_id = 1',
						'fields' => '',
						'order' => '',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			)

	);

}
?>