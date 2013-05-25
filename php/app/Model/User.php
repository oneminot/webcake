<?php
class User extends AppModel
{
    var $name = 'User';
    
    function validateLogin($data)
    {
        /*echo "In Model";exit;
    	$user = $this->find(array('username' => $data['username'], 'password' => ($data['password'])));
        print_r($user);exit;
        if(empty($user) == false)
            return $user['User'];
        return false;*/
    	$sucess= true;
    	if($sucess)
    	{
    		return true;
        
    	}else {
    		return false;
    	}
    }
    
} 
