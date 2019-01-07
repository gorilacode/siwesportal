<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"date"				=>array('required'=>true),
						"activity"			=>array('required'=>true),
						"referralCode"		=>array('required'=>true),
						"matricNo"			=>array('required'=>true),
						"tokenId"			=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();
			
			$status = 'unseen';
			// $salt = Hash::salt(32);
			$comment = '--';
			$remark = '--';
			
			

			try{
				$members->create('logbook',array(

							"date"				=>	Input::get('date'),
							"activities"	 	=>	Input::get('activity'),
							"referralCode"		=> 	Input::get('referralCode'),
							"matricNo"			=>	Input::get('matricNo'),
							"diagram"			=>	Input::get('img_show'),
							"tokenId"			=>	Input::get('tokenId'),
							"status"			=>	$status,
							"comment"			=>	$comment,
							"remark"			=>	$remark
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