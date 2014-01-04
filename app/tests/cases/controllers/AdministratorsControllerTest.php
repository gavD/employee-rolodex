<?php
namespace app\tests\cases\controllers;

use lithium\action\Request;
use li3_fixtures\test\Fixtures;
use lithium\net\http\Router;
use app\controllers\AdministratorsController;

class AdministratorsControllerTest extends \lithium\test\Integration {
	/**
	 * @var AdministratorsController System Under Test
	 */
	private $sut;
	
	public function setUp() {
		Fixtures::config(array(
			'db' => array(
				'adapter' => 'Connection',
				'connection' => 'default',
				'fixtures' => array(
					'administrators' => 'app\tests\fixture\AdministratorsFixture',
				)
			)
		));
		Fixtures::save('db');
		Router::connect('/{:controller}/{:action}/{:args}');
		
		$request = new Request();
		$request->data = array(
			'username' => 'foobar',
			'password' => 'barbar'
		);
		
		$this->sut = new AdministratorsController(array('request' => $request));
	}

	public function tearDown() {
		Fixtures::clear('db');
		\lithium\storage\Session::clear();
	}

	public function testCannotLogInAsNonExistingUser() {
		$response = $this->sut->login();
		$this->assertTrue($response['loginFailed']);
	}
	
	public function testCanLogInAsAdministrators() {
		$adminUser = \app\models\Administrators::create();
		$adminUser->username = 'foobar';
		$adminUser->password = 'barbar';
		$adminUser->save();
		
		// log in
		$response = $this->sut->login();
		$this->assertEqual(302, $response->status['code']);
		
		// log out
		$logoutResponse = $this->sut->logout();
		$this->assertEqual(302, $logoutResponse->status['code']);
	}
}
?>
