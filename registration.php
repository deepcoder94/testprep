<?php 
session_start();
include 'header_3.php'
?>
  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="right-content">
            <div class="top-content">
              <h6>Register your free account and <em>get access</em> to online Exam</h6>                            
            </div>
            <form id="contact" action="form_registration.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input type="text" placeholder="Mobile No" class="form-control" name="ph_number" id="ph_number" pattern="[0-9]{1}[0-9]{9}" title="Please Enter Your 10 Digit Mobile Number" autocomplete="off" required>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input type="Password" placeholder="Password" class="form-control" name="password" id="password" autocomplete="off"  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
                  </fieldset>
                </div>
                <div class="col-md-6">
                  <fieldset>
                    <input type="Password" placeholder="Confirm Password" class="form-control" name="c_password" id="c_password" autocomplete="off" required>
                  </fieldset>
                </div>                                
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" name="btnsubmit">Registration</button>                    
                  </fieldset>
                  <br/><br/>
                    <h6 style="color: white;">Already Have An Account? <em><a href="login.php" rel="sponsored" class="external">log In</a></em></h6>                  
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="col-md-6 col-xs-12">
          <div class="continer centerIt">
          <article class="video-item">
            <figure>
              <img src="assets/images/main-thumb.png">
            </figure>
          </article>
          </div>
        </div>        
      </div>
    </div>
  </section>

<?php include 'footer_2.php';?>