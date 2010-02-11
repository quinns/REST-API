<?php
class City extends AppModel {

	var $name = 'City';

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'Region' => array('className' => 'Region',
								'foreignKey' => 'region_id',
								'conditions' => 'Region.status_id = 1',
								'fields' => '',
								'order' => ''
			)
	);

}
?>