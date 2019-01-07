<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

if(Input::exists()) {
    
    // if(Token::check(Input::get('token'))){

      $validate = new Validation();
      $validation = $validate->check($_POST, array(
        'matricNo' => array('required' => true),
        'password' => array('required' => true)

      ));

      if($validation->passed()) {
        $user = new User();

        $remember = (Input::get('remember') === 'on') ? true : false;
        $login = $user->login(Input::get('matricNo'), Input::get('password'), $remember);
        
         if ($login === true){
            echo 'login';
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
