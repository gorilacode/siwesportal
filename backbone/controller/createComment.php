<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');


  // $nexcop_account_no = "NACT".rand(100000,999999);


if (Input::exists()){
	// if(Token::check(Input::get('token'))){
		$validate = new Validation();
		$validation = $validate->check($_POST, array(
						"commentid"				=>array('required'=>true),
						"remark"				=>array('required'=>true)
						)
				);
		if ($validation->passed()){

			$members = new Members();

			$id = Input::get('commentid');
			$comment = Input::get('comment');
			
			if ($comment == '') {
				$commentSave = '--';
			}else{
				$commentSave = Input::get('comment');
			}
			
			

			

			try{
				$members->update('logbook',$id,array(

							"remark"		=>	Input::get('remark'),
							"comment"	 	=>	$commentSave


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