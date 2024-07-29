<!DOCTYPE html>
<html lang="en">
   <!-- Collin IT Solution -->
   <!-- Added by HTTrack -->
   <meta http-equiv="content-type" content="text/html;charset=utf-8" />
   <!-- /Added by HTTrack -->
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="author" content="Mironcoder">
      <meta name="email" content="mironcoder@gmail.com">
      <meta name="profile" content="https://themeforest.net/user/mironcoder">
      <meta name="name" content="Domhost">
      <meta name="description" content="Domhost - domain web hosting html template">
      <meta name="keywords" content="domain, hosting, whmcs, hosting whmcs, whmcs template, hosting html, web hosting, hosting template, html hosting template, domain market, domain portfolio, domain listing, domain sale, domain broker, domain selling">
      <title>Login - Pracklin</title>
      <link rel="icon" href="images/favicon_icon.png">
      <link rel="stylesheet" href="fonts/flaticon/flaticon.css">
      <link rel="stylesheet" href="fonts/fontawesome/fontawesome.css">
      <link rel="stylesheet" href="vendor/slickslider/slick.min.css">
      <link rel="stylesheet" href="vendor/venobox/venobox.min.css">
      <link rel="stylesheet" href="vendor/niceselect/niceselect.min.css">
      <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
      <link rel="stylesheet" href="css/main.css">
      <link rel="stylesheet" href="css/user-form.css">
   </head>
   <body>
      <style type="text/css">
         .user-form-logo-background{
   height: 50px;
   width: 530px;
 background: var(--primary)
}
      </style>
   <section class="user-form-part">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">

                <div class="user-form-logo">
                    <div class="user-form-logo-background">
                        <h3 class="pt-2 text-white">Login Form</h3>
                    </div>
                </div>
                <div class="user-form-card">
                    <div class="user-form-title">
                        <h2>Welcome!</h2>
                        <p>Use your credentials to access</p>
                    </div>
                    <form id="login-form" class="user-form" action="dashboard/action_controller.php" method="post">
                       <input type="hidden" id="captcha-sum" name="captcha_sum">
                       <div class="form-group">
                            <input type="email" class="form-control" name="a_email" placeholder="Enter your email" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="a_password" placeholder="Enter your password" required>
                        </div>
                        <div>
                            <label>Enter Captcha</label>
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <div class="border p-2 w-50 text-center">
                                    <label for="captcha">
                                        <span id="num1"></span> + <span id="num2"></span>
                                    </label>
                                </div>
                                <div class="border p-2">
                                    <input type="text" id="captcha-input" name="captcha" required>
                                </div>
                            </div>
                        </div>
                        <div class="form-button">
                            <button type="submit" name="login_btn">Login</button>
                            <p>Forgot your password? <a href="forgot-password.html">reset here</a></p>
                        </div>
                    </form>
                </div>
                <div class="user-form-remind">
                    <p>Don't have an account? <a href="registration.php">register here</a></p>
                </div>
                <div class="user-form-footer">
                    <p>&copy; 2024 all rights reserved by &hearts;
                        <a href="https://pracklin.com/">pranklin</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    let num1, num2;
        num1 = Math.floor(Math.random() * 20) + 1;
        num2 = Math.floor(Math.random() * 20) + 1;
        document.getElementById('num1').innerText = num1;
        document.getElementById('num2').innerText = num2;
        document.getElementById('captcha-input').value = '';
</script>

      <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script>
      <script src="vendor/bootstrap/popper.min.js"></script>
      <script src="vendor/bootstrap/bootstrap.min.js"></script>
      <script src="vendor/slickslider/slick.min.js"></script>
      <script src="vendor/slickslider/slick-call.js"></script>
      <script src="vendor/venobox/venobox.min.js"></script>
      <script src="vendor/venobox/venobox-call.js"></script>
      <script src="vendor/niceselect/niceselect.min.js"></script>
      <script src="js/main.js"></script>
      <script src="js/secure.js"></script>
   </body>
   <!-- Collin IT Solution -->
</html>