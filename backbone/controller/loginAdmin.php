<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(Input::exists()) {
    
    // if(Token::check(Input::get('token'))){

      $validate = new Validation();
      $validation = $validate->check($_POST, array(
        'username' => array('required' => true),
        'password' => array('required' => true)

      ));

      if($validation->passed()) {
        $user = new Admin();

        $remember = (Input::get('remember') === 'on') ? true : false;
        $login = $user->login(Input::get('username'), Input::get('password'), $remember);
        
         if ($login === true){
            if($user->data()->userRole == 1){
               echo "admin";
            }
          }else{
            echo $login;//"Log in failed, please check your email or password";
            $_POST[] = array();
          }

      }else{
        foreach($validation->errors() as $error){
          echo $error, "<br>";
        }
      }
    //}
  }

  

  
?>
