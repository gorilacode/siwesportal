<?php

if(Session::exists('home')) {
      echo '<p>'. Session::flash('home') .'</p>';
    }

    $user = new User();

    if($user->isLoggedIn()) {
      // include(ROOT_PATH. 'inc/main_page/users_details.php');
       $firstName        = $user->data()->firstName;
        $lastName         = $user->data()->lastName;
        $MatricNo         = $user->data()->matricNo;
        $email            = $user->data()->email;
        $phoneNo          = $user->data()->phoneNo;
        $referralCode     = $user->data()->referralCode;
        $siwesPlacement   = $user->data()->siwesPlacement;
        $id               = $user->data()->id;
        $tokenId          = $user->data()->tokenId;

    } else {

      // echo '<p> You need to <a href="login.php"> Log In </a> or <a href="register.php"> Register </a></p>';
      Redirect::to(404);
    }
?>