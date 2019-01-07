<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"matricNo"				=>array('required'=>true),
						"password"			=>array('required'=>true),
						"tokenId"			=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();
			
			// $status = 'unseen';
			$salt = Hash::salt(32);
			// $salt = Hash::salt(32);
			$referralCode = 'null';
			
			

			try{
				$members->create('studentlogin',array(

							"matricNo"			=>	Input::get('matricNo'),
							"password"	 		=>  Hash::make(Input::get('password'), $salt),
							"salt"				=> $salt,
							"tokenId"			=>	Input::get('tokenId'),
							"referralCode"		=>	$referralCode
							// "dateAdded"   			=>  date('Y-m-d H:i:s'),


				));

				// $members->create('accounts',array(

				// 			"account_no"				=>	$nexcop_account_no,
				// 			"account_name"				=>	Input::get('firstname').' '.Input::get('lastname'),
				// 			"account_balance"			=> 	$balance

				// ));

				
				$_POST[] = array();
				echo 'created';
			}catch(Exception $e){
				die($e->getMessage());
			}

		}else{
			foreach($validation->errors() as $error){
				echo $error, "<br>";
				$_POST[] = array();
			}
		}
	// }
}else{
	echo "no input found";
}