<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
	<div class="card card-container">

		<img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
		<p id="profile-name" class="profile-name-card"></p>
		<form class="form-signin" action="<?php echo base_url(); ?>/Home/login" method="post">
			<label for="login">Username:</label>
			<input type="text" class="form-control" name="nama" placeholder="Nama" required autofocus>
			<label for="pass">Password:</label>
			<input type="password" class="form-control" name="password" placeholder="Password" required>
			<input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Login">

		</form><!-- /form -->
	</div><!-- /card-container -->
</div><!-- /container -->
<?= $this->endSection(); ?>