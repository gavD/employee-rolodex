<?php

namespace app\controllers;

use lithium\security\Auth;
use app\models\Employees;
use lithium\action\DispatchException;
use lithium\analysis\Logger;

class EmployeesController extends \lithium\action\Controller {

	public function index() {
		$employees = Employees::all();
		Logger::alert('Someone listed users...');
		return compact('employees');
	}

	public function view() {
		$employee = Employees::first($this->request->id);
		return compact('employee');
	}


	public function add() {
		if ( !Auth::check('admin', $this->request) ){
			return $this->redirect(array('Administrators::login'));
		}
		$employee = Employees::create();
		if (($this->request->data) && $employee->save($this->request->data)) {
			return $this->redirect(array('Employees::view', 'args' => array($employee->id)));
		}

		$errors = $employee->errors();
		return compact('employee', 'errors');
	}
	
	public function edit() {
		$employee = Employees::find($this->request->id);

		if (!$employee) {
			return $this->redirect('Employees::index');
		}
		if (($this->request->data) && $employee->save($this->request->data)) {
			return $this->redirect(array('Employees::view', 'args' => array($employee->id)));
		}
		return compact('employee');
	}

	public function delete() {
		if (!$this->request->is('post') && !$this->request->is('delete')) {
			$msg = "Employees::delete can only be called with http:post or http:delete.";
			throw new DispatchException($msg);
		}
		Employees::find($this->request->id)->delete();
		return $this->redirect('Employees::index');
	}
}
?>