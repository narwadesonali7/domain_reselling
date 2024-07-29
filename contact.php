<?php
	 include "header.php";
?>
      <section class="single-banner mb-5">
         <div class="container">
            <div class="row">
               <div class="col-lg-12">
                  <h1>contact us</h1>
                  <ol class="breadcrumb">
                     <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                     <li class="breadcrumb-item active" aria-current="page">contact</li>
                  </ol>
               </div>
            </div>
         </div>
      </section>
      <section class="contact-part mb-3">
         <div class="container">
            <div class="row">
               <div class="col-md-6 col-lg-4">
                  <div class="contact-card">
                     <i class="fas fa-location-arrow"></i>
                     <h4>head office</h4>
                     <p class="pb-1">B-203, 204, Kurar Village
                     Malad East, Mumbai 400097
                   Maharashtra, India
                  </p>
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="contact-card active">
                     <i class="fas fa-phone-alt"></i>
                     <h4>phone number</h4>
                     <p class="mb-5 pb-3"><a href="+91-9820449530">+91-9820449530 </a><a href="#"></a></p>
                    
                  </div>
               </div>
               <div class="col-md-6 col-lg-4">
                  <div class="contact-card">
                     <i class="fas fa-envelope"></i>
                     <h4>Support mail</h4>
                     <p class="mb-5 pb-3"><a href="conatct.php">info@pracklin.com</a></p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-lg-6 mb-5">
                  <form class="contact-form" action="dashboard/action_controller.php" method="post">
                     <h4>Drop Your Thoughts</h4>
                     <div class="form-group">
                        <div class="form-input-group">
                           <input class="form-control" type="text" placeholder="Your Name" name="cd_name"><i class="fas fa-user-alt"></i>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-input-group">
                           <input class="form-control" type="number" placeholder="Your Mobile" name="cd_mobile"><i class="fas fa-phone-alt"></i>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-input-group"><input class="form-control" type="text" placeholder="Your Email" name="cd_email"><i class="fas fa-mail-bulk"></i></div>
                     </div>
                     <div class="form-group">
                        <div class="form-input-group"><input class="form-control" name="cd_sub" type="text" placeholder="Your Subject"><i class="fas fa-bookmark"></i></div>
                     </div>
                     <div class="form-group">
                        <div class="form-input-group"><textarea class="form-control" name="cd_msg" placeholder="Your Message"></textarea><i class="fas fa-paragraph"></i></div>
                     </div>
                     <button type="submit" name="contact_detail" class="form-btn-group"><i class="fas fa-envelope"></i><span>send message</span></button>
                  </form>
               </div>
               <div class="col-lg-6  mb-3 mt-3 ">
                  <div class="contact-map">
                  	<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3768.2715076156637!2d72.86098867495716!3d19.18334014859454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sB-203%2C%20204%2C%20Shram%20Shafalya%20CHSL%20Near%20Triveni%20Nagar%2C%20Kurar%20Village%20Malad%20East%2C%20Mumbai%20400097%20Maharashtra%2C%20India!5e0!3m2!1sen!2sin!4v1716963862759!5m2!1sen!2sin" frameborder="0" style="border:0;height: 550px; width:100%" allowfullscreen="100%" aria-hidden="false" tabindex="0"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </section>

<?php
	 include "footer.php";
?>





     