<?php
/* SVN FILE: $Id: device_fixture.php 7805 2008-10-30 17:30:26Z AD7six $ */
/**
 * Short description for file.
 *
 * Long description for file
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) Tests <https://trac.cakephp.org/wiki/Developement/TestSuite>
 * Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 *
 *  Licensed under The Open Group Test Suite License
 *  Redistributions of files must retain the above copyright notice.
 *
 * @filesource
 * @copyright     Copyright 2005-2008, Cake Software Foundation, Inc. (http://www.cakefoundation.org)
 * @link          https://trac.cakephp.org/wiki/Developement/TestSuite CakePHP(tm) Tests
 * @package       cake.tests
 * @subpackage    cake.tests.fixtures
 * @since         CakePHP(tm) v 1.2.0.4667
 * @version       $Revision: 7805 $
 * @modifiedby    $LastChangedBy: AD7six $
 * @lastmodified  $Date: 2008-10-30 12:30:26 -0500 (Thu, 30 Oct 2008) $
 * @license       http://www.opensource.org/licenses/opengroup.php The Open Group Test Suite License
 */
/**
 * Short description for class.
 *
 * @package       cake.tests
 * @subpackage    cake.tests.fixtures
 */
class DeviceFixture extends CakeTestFixture {
/**
 * name property
 * 
 * @var string 'Device'
 * @access public
 */
	var $name = 'Device';
/**
 * fields property
 * 
 * @var array
 * @access public
 */
	var $fields = array(
		'id' => array('type' => 'integer', 'key' => 'primary'),
		'device_type_id' => array('type' => 'integer', 'null' => false),
		'name' => array('type' => 'string', 'null' => false),
		'typ' => array('type' => 'integer', 'null' => false),
	);
/**
 * records property
 * 
 * @var array
 * @access public
 */
	var $records = array(
		array('device_type_id' => 1, 'name' => 'Device 1', 'typ' => 1),
		array('device_type_id' => 1, 'name' => 'Device 2', 'typ' => 1),
		array('device_type_id' => 1, 'name' => 'Device 3', 'typ' => 2)
	);
}
?>
