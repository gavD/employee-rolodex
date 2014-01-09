<?php
namespace app\extensions\helper;

use lithium\security\Auth;

class LoginLogoutControl extends \lithium\template\Helper {
    
    protected $_strings = array(
        'loginControl' => '<li><a href="{:url}">{:title}</a></li>',
    );
    
    public function link($loginUrl, $logoutUrl) {
        if (Auth::check('admin')){
            $url = $logoutUrl;
            $title = 'Log out';
        } else {
            $url = $loginUrl;
            $title = 'Admin log in';
		}
        return $this->_render(__METHOD__, 'loginControl', compact('url', 'title'));
    }
}
?>