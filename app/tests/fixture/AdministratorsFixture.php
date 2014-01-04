<?php
namespace app\tests\fixture;

class AdministratorsFixture extends \li3_fixtures\test\Fixture {

	protected $_model = 'app\models\Administrators';

	protected $_fields = array(
		'id' => array('type' => 'id'),
		'username' => array('type' => 'string'),
		'password' => array('type' => 'string'),
	);
}
?>