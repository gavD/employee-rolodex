<?php
namespace app\controllers;

use lithium\security\Auth;

class AdministratorsController extends \lithium\action\Controller {
	public function login() {
		if (Auth::check('admin', $this->request)) {
			return $this->redirect(array('Employees::index'));
		}

		$loginFailed = false;
		if ($this->request->data){
			$loginFailed = true;
		}
		return compact('loginFailed');
	}

	public function logout() {
		Auth::clear('admin');
		return $this->redirect('/');
	}
}
?>