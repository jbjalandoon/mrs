<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>/public/css/style.css">
    <script type="text/javascript" src="<?= base_url()?>/public/font-awesome/js/all.min.js"></script>
    <title><?= SYSTEM_TITLE ?></title>
  </head>

	<body class="bg-dark">
    <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header">
                                      <h2 class="text-center font-weight-light my-4"><?= SYSTEM_NAME ?></h2>
                                      <h4 class="text-center font-weight-light my-4"><i class="fas fa-unlock-alt"></i> User Login</h4>
                                      <?php if(isset($_SESSION['error_login'])): ?>
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                          				         <?= $_SESSION['error_login']; ?>
                                  				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  				    <span aria-hidden="true">&times;</span>
                                  				  </button>
                          				      </div>
                          				          <?php endif; ?>
                                    </div>

                                  <div class="card-body">
                                    <form class="form-signin" method="post" action="<?= base_url() ?>">
                                      <div class="form-group">
                                        <label class="small mb-1" for="inputUsername">Username</label>
                                        <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
                                      </div>

                                      <div class="form-group">
                                        <label for="inputPassword">Password</label>
                                        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                      </div>

                                      <div class="form-group">
                                        <div class="custom-control custom-checkbox"><input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" /><label class="custom-control-label" for="rememberPasswordCheck">Remember password</label></div>
                                      </div>
                                      <hr>
                                      <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0"><a class="small" href="#">Forgot Password?</a><button class="btn btn-success" type="submit">Sign In</button></div>
                                    </form>
                                  </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
    <script src="<?= base_url() ?>/public/js/jquery-3.4.1.min.js"></script>
    <script src="<?= base_url() ?>/public/js/popper.min.js"></script>
    <script src="<?= base_url() ?>/public/js/bootstrap.min.js"></script>
    <script src="<?= base_url() ?>/public/js/sweetalert2@9.js"></script>
    <script src="<?= base_url() ?>/public/js/myAlerts.js"></script>
    <?= view('App\Views\theme\notification') ?>
  </body>
</html>
