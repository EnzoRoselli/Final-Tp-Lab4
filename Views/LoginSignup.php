<?php namespace Views;
  



//require 'app/fb_init.php';

?>



	<?php if(isset($message))
		{
			foreach ($message as $value) { 
					echo "<p> $value </p>";
			
		 }} ?> 
		
				
	
	<h2>CinemApp</h2>
	<div class="container" id="container">
		<div class="form-container sign-up-container">
			<form action="<?php echo FRONT_ROOT."/User/createUser" ?>" method="POST">
				<h1>Create Account</h1>
				<div class="social-container">
					<!-- <a href="#" class="social"><i class="fab fa-facebook-f"></i></a> -->

				</div>
				<!-- <span>or use your email for registration</span> -->
				<input name="SignupName" type="text" placeholder="Name" />
				<input name="SignupLastName" type="text" placeholder="Last Name" />
				<input name="SignupDNI" type="text" placeholder="ID Number" />
				<input name="SignupEmail" type="email" placeholder="Email" />
				<input name="SignupPassword" type="SignupPassword" placeholder="Password" />
				<button>Sign Up</button>
			</form>
		</div>
		<div class="form-container sign-in-container">
			<form action="<?php echo FRONT_ROOT . "/User/loginAction" ?>" method="POST">
				<h1>Log in</h1>
				<!-- <div class="social-container"> -->

				<?php
			/*	if (isset($_SESSION['facebook_access_token'])) {
					$fb->setDefaultAccessToken($_SESSION['facebook_access_token']);
					try {
						$response = $fb->get('/me');
						$userNode = $response->getGraphUser();
					} catch (Facebook\Exceptions\FacebookResponseException $e) {
						echo "graph returned an error: " . $e->getMessage();
						exit;
					} catch (Facebook\Exceptions\FacebookSDKException $e) {
						echo "SDK returned an error: " . $e->getMessage();
						exit;
					}
					echo "Logged in as " . $userNode->getName();
					session_start();
					$_SESSION['loggedUser']=$userNode->getName();
					header("Location: ../views/home.php");
					echo '<br/> <a href="logout.php"> Log out</a>';
				} else {
					$helper = $fb->getRedirectLoginHelper();
					$permissions = []; // Optional permissions
					$loginUrl = $helper->getLoginUrl('http://localhost/Final-Tp-Lab4/Final-Tp-Lab4/Proyecto/Login/login-callback.php', $permissions);

					echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
				}*/ ?>

				<!-- </div> -->
				<span>or use your account</span>
				<input name="LoginEmail" type="LoginEmail" placeholder="Email" />
				<input name="LoginPassword" type="LoginPassword" placeholder="Password" />
				<a href="ForgotPassword.html">Forgot your password?</a>
				<button>Log In</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-left">
					<h1>Welcome Back!</h1>
					<p>To keep connected with us please login with your info</p>
					<button class="ghost" id="signIn">Sign In</button>
				</div>
				<div class="overlay-panel overlay-right">
					<h1>Hello!</h1>
					<p>Enter your personal details and welcome to CinemApp</p>
					<button class="ghost" id="signUp">Sign Up</button>
				</div>
			</div>
		</div>
	</div>

	<!-- <footer> VER SI PODEMOS PONER ALGO PUBLICITARIO NOSE ALGO FLA
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> -->
<script src=<?php echo "js/scripts.js" ?>></script> 