<?php

if(Session::exists('home')) {
      echo '<p>'. Session::flash('home') .'</p>';
    }

    $user = new Admin();

    if($user->isLoggedIn()) {
     $firstName        = $user->data()->firstName;
        $lastName         = $user->data()->lastName;
        $userRole         = $user->data()->userRole;
        $referralCode         = $user->data()->referralCode;
        // $email            = $user->data()->email;
        // $phoneNo          = $user->data()->phoneNo;
        // $referralCode     = $user->data()->referralCode;
        // $siwesPlacement   = $user->data()->siwesPlacement;
        $id               = $user->data()->id;

    } else {

      // echo '<p> You need to <a href="login.php"> Log In </a> or <a href="register.php"> Register </a></p>';
      Redirect::to(404);
    }
    $Name = $firstName." ".$lastName;

    $role = select_particular2("userroles", "userRole", "id",$userRole);

   

    ?>