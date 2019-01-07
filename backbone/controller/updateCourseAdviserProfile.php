<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"id"				=>array('required'=>true),
						"firstName"			=>array('required'=>true),
						"lastName"		   	=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();
			
			// $password = 'password';
			// $salt = Hash::salt(32);
			// $balance = 0;
			
			$id = Input::get('id');

			

			try{
				$members->update('userstable',$id,array(

							"firstName"				=>	Input::get('firstName'),
							"lastName"	 			=>	Input::get('lastName')
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