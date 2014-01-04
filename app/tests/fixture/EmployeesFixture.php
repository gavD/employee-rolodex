<?php
namespace app\tests\fixture;

class EmployeesFixture extends \li3_fixtures\test\Fixture {

	protected $_model = 'app\models\Employees';

	protected $_fields = array(
		'id' => array('type' => 'id'),
		'name' => array('type' => 'string'),
		'notes' => array('type' => 'string'),
		'department' => array('type' => 'string'),
	);

	protected $_records = array(
		array('id' => 1, 'name' => 'Foobar', 'notes' => 'some stuff2'),
		array('id' => 2, 'name' => 'Bazbip', 'notes' => 'some other stuff')
	);
}
?>
