<?php

require_once($_SERVER["DOCUMENT_ROOT"]."/siwesportal/constant/config.php");

require_once(ROOT_PATH . 'core/init.php');

include(ROOT_PATH . 'inc/login_header.php');
?>

	
	<div class="limiter">
		<div class="container-login100">
				<div class="custom-filter">
					
				</div>
			<div class="wrap-login100">
				<div class="text-center">
					<span>
	      				<img src="<?php echo BASE_URL;?>assets/img/yabatech_logo.png" class="login100-form-title p-b-26">
					</span>
				</div>
				<div class="text-center">
					<h3>Admin Portal</h3>
				</div>
				<div id="msg">
						
				</div>
				<form id="createUser" class="login100-form validate-form">
					
					<div class="wrap-input100 validate-input" data-validate = "">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-pin-account"></i>
						</span>
						<input class="input100" type="text" name="username" id="username" placeholder="Enter Username">
						<span class="focus-input100" ></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="password" id="password" placeholder="Enter Password">
						<span class="focus-input100" ></span>
						<input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button type="submit" class="login100-form-btn" id="send">
								Login
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="<?php echo BASE_URL; ?>backbone/viewJs/adminLogin.js" ></script>
<?php
include(ROOT_PATH . 'inc/login_header.php');
?>
	
