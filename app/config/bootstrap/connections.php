<?php
use lithium\data\Connections;

Connections::add('default', array(
    'development' => array(
        'type' => 'database',
        'adapter' => 'MySql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'staff'
    ), 
    'test' => array(
        'type' => 'database',
        'adapter' => 'Sqlite3',
        'database' => ':memory:'
    ),
    'production' => array(
        'type' => 'database',
        'adapter' => 'MySql',
        'host' => 'localhost',
        'login' => 'root',
        'password' => '',
        'database' => 'staff'
    )
));
?>
