<?php
namespace app\tests\cases\models;

use app\models\Employees;

class MockEmployees extends Employees {
    protected $_meta = array('connection' => false);
}
?>
