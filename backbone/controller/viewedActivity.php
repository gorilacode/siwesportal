<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  // $nexcop_account_no = "NACT".rand(100000,999999);

if (isset($_GET["id"])) {
    $id = $_GET["id"]; 



    $members = new Members();
			
			// $password = 'password';
			// $salt = Hash::salt(32);
			// $balance = 0;
			
			$status = 'seen';

			

			try{
				$members->update('logbook',$id,array(

							"status"			=>	$status
				));

				// $members->create('accounts',array(

				// 			"account_no"				=>	$nexcop_account_no,
				// 			"account_name"				=>	Input::get('firstname').' '.Input::get('lastname'),
				// 			"account_balance"			=> 	$balance

				// ));

				
				// $_POST[] = array();
				// echo 'created';
			}catch(Exception $e){
				die($e->getMessage());
			}

}

			
		
	// }
