 <?php 
class UsersController extends AppController
{
    var $name = "Users";
    var $helpers = array('Html', 'Form');
    
    function index()
    {
        
    }
    
    function beforeFilter()
    {
       // $this->__validateLoginStatus();
    }
    
    function login()
    {
		//var_dump($this->data);
    	if(empty($this->data) == false)
        {
            if(($user = $this->User->validateLogin($this->data['User'])) == true)
            {
                $this->Session->write('User', $user);
                $this->Session->setFlash('You\'ve successfully logged in.');
                $this->redirect('index');
                exit();
            }
            else
            {
               // echo "Not Login";exit;
            	$this->Session->setFlash('Sorry, the information you\'ve entered is incorrect.');
            	$this->redirect('login');
                exit();
            }
        }
    }
    
    function logout()
    {
        $this->Session->destroy('user');
        $this->Session->setFlash('You\'ve successfully logged out.');
        $this->redirect('login');
    }
        
    /*function __validateLoginStatus()
    {
        if($this->action != 'login' && $this->action != 'logout')
        {
            if($this->Session->check('User') == false)
            {
                $this->redirect('login');
                $this->Session->setFlash('The URL you\'ve followed requires you login.');
            }
        }
    }*/
    
}

?> 