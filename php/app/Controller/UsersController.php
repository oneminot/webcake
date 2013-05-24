<?php
class UsersController extends AppController {
    //var $name = 'Users';
    //var $components = array('Auth'); 
	var $components = array('DebugKit.Toolbar', 'Session', 'Auth' => array(
    'loginAction' => array(
        'controller' => 'pages',
        'action' => 'home'
    ),
    'authenticate' => array(
        'Form' => array(
            'fields' => array('username' => 'username', 'password' => 'password')
        )
    )
	));
    function login() 
    {
	    /*if ($this->Auth->login()) {
	        $this->redirect($this->Auth->redirect());
	    }*/
    }
    function logout() 
    {
    $this->redirect($this->Auth->logout());
    }
    public function index() {

	}

}