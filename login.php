<?php include 'components/session-check-index.php' ?>
<?php include 'controllers/base/head.php' ?>
<div class="container">
  <div class="row">
    <div class="col-md-6 col-md-offset-2">
      <div class="main">
        <div class="box">
          <div class="row">
            <h3 style="color:#65aeee;">Please Log In or <a href="index.php">Sign Up</a></h3>
          </div>
          <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
              <i class="fa fa-user-o" aria-hidden="true"></i>
            </div>
          </div>
          <div class="row">
            <div class="log col-md-8 col-md-push-2">
              <form role="form" action="components/login-process.php" method="post" name="login">
                <div class="form-group">
                  <input type="text" class="form-control" id="inputUsernameEmail" name="username" placeholder="username" required>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control" id="inputPassword" name="password" placeholder="password" required>
                </div>
                <button type="submit" class="btn btn btn-primary btn-block" data-style="zoom-in" value="Sign In" name="login_button">
                  Log In
                </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
