<body style="background-color: #1379AB;">
	<section id="login-container">
		<div class="col-md-4 col-md-offset-4 midway-horizontal midway-vertical fadeInDown animated">
			<div id="logbox">
			<?php if(isset($error) && !empty($error)){ ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $error; ?>
				</div>
			<?php } ?>
				<h1><i class="fa fa-steam"></i> Login !</h1>
				<form method="POST" action="login.php">
					<div class="form-input">
						<span class="email">
							<input type="text" name="email" placeholder="Email">
						</span>
					</div>
					<div class="form-input">
						<span class="password">
							<input type="password" name="password" placeholder="Password">
						</span>
					</div>
					<div class="form-submit">
						<input type="submit" value="Connecter">	
					</div>
					<p class="account">You do not have an account ? <a href="register.php">Register ! </a></p>
				</form>
			</div>
		</div>
	</section>