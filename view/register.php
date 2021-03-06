<body style="background-color: #1379AB;">
	<section id="login-container">
		<div class="col-md-4 col-md-offset-4 midway-horizontal midway-vertical fadeInDown animated">
			<div id="logbox" class="register">
				<h1><i class="fa fa-steam"></i> Register !</h1>
				<?php if(isset($_SESSION['message']) && !empty($_SESSION['message'])){ ?>
				<div class="alert alert-danger alert-dismissable">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $_SESSION['message']; ?>
					<?php unset($_SESSION['message']); ?>
				</div>
				<?php } ?>
				<form method="POST" action="register.php">
					<div class="form-input">
						<span class="username">
							<input type="text" name="username" placeholder="Username">
						</span>
					</div>
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
						<input type="submit" value="Je m'inscris !">	
					</div>
					<p class="account">Do you have an account ? <a href="login.php">Login !</a></p>
				</form>
			</div>
		</div>
	</section>