<?php 
session_start();
include"header_3.php";
?>
  <section class="section video" data-section="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center">
          <div class="left-content">
          <form id="contact" action="form_login.php" method="post">
        <div class="col-md-12">
          <div class="section-heading" style="margin-bottom: 37px;">
            <h2 style="margin-top: 70px;">LOG IN</h2>
          </div>
        </div>
            <div class="row">
              <div class="col-md-12">
                  <fieldset>
                    <input type="text" placeholder="Enter Your Email or Username or Phone Number" class="form-control" name="email" id="email" required>
                  </fieldset>
                </div>
                <div class="col-md-12">
                  <fieldset>
                    <input type="password" placeholder="Password" class="form-control" name="password" id="password" required>
                    <!-- <div class="fa_icon"><i class="fa fa-eye" aria-hidden="true" id="show" onclick="myFunctionpass()"></i></div> -->
                    <!-- <div class="fa_icon"><i class="fa fa-eye-slash" aria-hidden="true" id="hide" onclick="myFunctionpass()"></i></div> -->
                  </fieldset>
                </div>
              <div class="col-md-12">
                <fieldset>
                  <button type="submit" id="form-submit" class="button" name="btnsub">LOG IN</button>
                </fieldset>
              </div>
            </div>
          </form>
          </div>
        </div>
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
      </div>
    </div>
  </section>

  <?php include"footer_2.php";?>