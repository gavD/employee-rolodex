<?php
namespace app\models;

class Employees extends \lithium\data\Model {
    public $validates = array(
        'department' => array(
            array(
                'notEmpty',
                'required' => true,
                'message' => 'Please let us know what department this person works in.'
            )
        )
    );

    // define the schema for this Model - what fields it has
    protected $_schema = array(
        'id' => array('type' => 'id', 'length' => 10, 'null' => false, 'default' => null),
        'name' => array('type' => 'string', 'length' => 64, 'null' => false, 'default' => null),
        'notes' => array('type' => 'string', 'length' => 255, 'null' => false, 'default' => null),
        'department' => array('type' => 'string', 'length' => 64, 'null' => false, 'default' => null),
    );
}
?>
