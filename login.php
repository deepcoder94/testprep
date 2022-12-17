<?php
session_start(); 
include 'header_3.php';
?>

  <section class="section coming-soon" data-section="section3">
    <div class="container">
      <div class="row">
        <div class="col-md-7 col-xs-12">
          <div class="continer centerIt">
          <article class="video-item">
            <figure>
              <img src="assets/images/main-thumb.png">
            </figure>
          </article>
          </div>
        </div>
        <div class="col-md-5">
          <div class="right-content">
            <div class="top-content">
              <h6>Log In your free account and <em>get immediate</em> access to online Test</h6>
            </div>
            <form id="contact" action="form_login.php" method="post">
              <div class="row">
                <div class="col-md-12">
                  <fieldset>
                    <input type="text" placeholder="Enter Your Email or Username or Phone Number" class="form-control" name="email" id="email" required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <button type="submit" id="form-submit" class="button" name="btnsub">LOG IN</button>                                      
                  </fieldset>
                  <br/><br/>
                  <h6 style="color: white;">Don't have an account!<em><a href="registration.php" rel="sponsored" class="external">Register Here</a></em></h6>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php include 'footer_2.php';?>