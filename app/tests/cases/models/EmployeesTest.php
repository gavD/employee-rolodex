<?php
namespace app\tests\cases\models;

use app\models\Employees;

class EmployeesTest extends \lithium\test\Unit {
    public function testEmployeeHaveNames() {
        $this->assertEqual('string', MockEmployees::hasField('name')['type']);
    }

    public function testDepartmentIsMandatory() {
        $employee = Employees::create(array(
            'name' => 'No department'
        ));
        $employee->save();

        $errors = $employee->errors();
        $this->assertEqual('Please let us know what department this person works in.', $errors['department'][0]);
    }
}
?>
