<?= $this->extend('auth/templates/index'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="card card-container">

        <img id="profile-img" class="profile-img-card" src="//ssl.gstatic.com/accounts/ui/avatar_2x.png" />
        <p id="profile-name" class="profile-name-card"></p>
        <form class="form-signin" action="<?php echo base_url(); ?>admin/create" method="post">
            <label for="login">Username:</label>
            <input type="text" id="inputEmail" class="form-control" name="username" placeholder="Username" required autofocus>
            <label for="pass">Password:</label>
            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
            <div id="remember" class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <input type="submit" class="btn btn-lg btn-primary btn-block btn-signin" value="Login">

        </form><!-- /form -->
        <a href="#" class="forgot-password">
            Forgot the password?
        </a>
    </div><!-- /card-container -->
</div><!-- /container -->
<?= $this->endSection(); ?>