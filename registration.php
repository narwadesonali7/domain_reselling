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
      <title>Register - Pracklin</title>
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
    .error {
        color: red;
    }
</style>
<section class="user-form-part">
      <div class="container">
        <div class="row justify-content-center">
           <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5">
               <div class="user-form-logo">
                  <div class="user-form-logo-background">
                     <h3 class="pt-2 text-white">Registration Form</h3>
                  </div>
                  </div>
            <div class="user-form-card">
               <div class="user-form-title">
                  <p>Setup A New Account In A Minute</p>
               </div>
   <form action="dashboard/action_controller.php" class="user-form" method="post" id="passwordForm" onsubmit="return validateForm()">
                <div class="form-group">
                   <input type="text" name="c_name" class="form-control" placeholder="Enter your name">
               </div>
               <div class="form-group">
                  <input type="number" name="c_mobile" class="form-control" placeholder="Enter your mobile">
                        </div>
                        <div class="form-group">
                           <input type="email" name="c_email" class="form-control" placeholder="Enter your email">
                        </div>
                       
                        <div class="form-group">
                           <input type="password" id="c_password"  class="form-control" name="c_password" placeholder="Enter your password">
                        </div>
                        
                        <div class="form-group">
                           <input type="password" id="confirm_password" class="form-control" placeholder="Enter repeat password">
                        </div>
                         <div class="form-group " >
                          <textarea class="form-control" name="c_address"   rows="2">Address
                           </textarea>
                        </div>
                         <div id="error_msg" class="error"></div>
                         <div class="form-button">
                           <button type="submit" name="a_register">register</button>
                        </div>
                     </form>

                  </div>
                  <div class="user-form-remind">
                     <p>Already Have An Account?<a href="login.php">login here</a></p>
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
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirm_password = document.getElementById("confirm_password").value;

            if (password != confirm_password) {
                document.getElementById("error_msg").innerHTML = "Passwords do not match!";
                return false;
            } else {
                document.getElementById("error_msg").innerHTML = "";
                return true;
            }
        }
    </script>
      <script src="vendor/bootstrap/jquery-1.12.4.min.js"></script><script src="vendor/bootstrap/popper.min.js"></script><script src="vendor/bootstrap/bootstrap.min.js"></script><script src="vendor/slickslider/slick.min.js"></script><script src="vendor/slickslider/slick-call.js"></script><script src="vendor/venobox/venobox.min.js"></script><script src="vendor/venobox/venobox-call.js"></script><script src="vendor/niceselect/niceselect.min.js"></script><script src="js/main.js"></script><script src="js/secure.js"></script>
   </body>
   <!-- Collin IT Solution -->
</html>