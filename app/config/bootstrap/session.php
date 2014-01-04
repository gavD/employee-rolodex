<?php
use lithium\security\Auth;
use lithium\storage\Session;

$name = basename(LITHIUM_APP_PATH);
Session::config(array(
    'default' => array('adapter' => 'Php', 'session.name' => $name)
));

Auth::config(array(
	'admin' => array(
		'adapter' => 'Form',
		'model'   => 'Administrators',
		'fields'  => array('username', 'password')
	)
));
?>