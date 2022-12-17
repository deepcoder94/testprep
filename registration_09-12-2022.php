<?php 
session_start();
include"header_3.php"
?>
  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <article class="video-item">
            <div class="video-caption">
              <h4>Power HTML Template</h4>
            </div>
            <figure>
              <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img src="assets/images/main-thumb.png"></a>
            </figure>
          </article>
        </div>        
        <div class="col-md-6 align-self-center">
          <div class="left-content">
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
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include"footer_2.php";?>