<?php
class Region extends AppModel {

	var $name = 'Region';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Status' => array('className' => 'Status',
								'foreignKey' => 'status_id',
								'conditions' => '',
								'fields' => 'Status.id',
								'order' => ''
			)
	);

	var $hasMany = array(
			'City' => array('className' => 'City',
								'foreignKey' => 'region_id',
								'dependent' => false,
								'conditions' => '',
								'fields' => 'City.id, City.name, City.created, City.modified',
								'order' => 'City.name ASC',
								'limit' => '',
								'offset' => '',
								'exclusive' => '',
								'finderQuery' => '',
								'counterQuery' => ''
			)
	);

	var $hasAndBelongsToMany = array(

			'Category' => array('className' => 'Category',
						'joinTable' => 'regions_categories',
						'foreignKey' => 'region_id',
						'associationForeignKey' => 'category_id',
						'unique' => true,
						'conditions' => 'RegionsCategory.status_id = 1 AND Category.status_id = 1',
						'fields' => 'Category.id, Category.title, Category.created, Category.modified, Category.status_id',
						'order' => 'Category.title ASC',
						'limit' => '',
						'offset' => '',
						'finderQuery' => '',
						'deleteQuery' => '',
						'insertQuery' => ''
			)
	);

}
?>