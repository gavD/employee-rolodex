<?php
namespace app\models;

use lithium\security\Password;

class Administrators extends \lithium\data\Model {
	public $validates = array(
		'username' => array(
			array('notEmpty', 'message'=>'Please enter a username')
		),
		'password' => array(
			array('notEmpty', 'message'=>'Please enter a password')
		),
	);
}

Administrators::applyFilter('save', function($self, $params, $chain) {
	if ($params['data']) {
		$params['entity']->set($params['data']);
		$params['data'] = array();
	}
	if (!$params['entity']->exists()) {
		$params['entity']->password = Password::hash($params['entity']->password);
	}
	return $chain->next($self, $params, $chain);
});
?>