<?php
namespace app\controllers;

use lithium\security\Auth;
use li3_flash_message\extensions\storage\FlashMessage;

class AdministratorsController extends \lithium\action\Controller {
	public function login() {
		if (Auth::check('admin', $this->request)) {
            FlashMessage::write('Logged you in!');
			return $this->redirect(array('Employees::index'));
		}

		$loginFailed = false;
		if ($this->request->data){
			$loginFailed = true;
		}
		return compact('loginFailed');
	}

	public function logout() {
        FlashMessage::write('Logged you out!');
		Auth::clear('admin');
		return $this->redirect('/');
	}
}
?>