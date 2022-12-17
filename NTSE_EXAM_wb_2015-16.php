<?php
include "header_2.php";
?>

	<section class="section why-us" data-section="section2">
		<div class="container">
      		<div class="row">
		        <div class="col-md-12">
		          <div class="section-heading">
		            <h2 style="color: #172238;border: 2px solid #172238;">[NTSE STAGE 1, WEST BENGAL 2015-16]</h2>
		          </div>
		        </div>
		        <div class="col-md-12 col-xs-12">
          			<div id="page-wrap">
			      		<div class="content-holder">

						  <div class="content" id="content-1" data-id='1' style="display: block;font-size: 16px;font-weight: 600;">

			      			<p style="font-size:16px; font-weight: 600;">Directions: Questions (1 to 10) :</p>

                  			<p style="font-size:16px; font-weight: 600;">Read the questions carefully and give answer by filling the circle of the letter denoting your selected answer on the O.M.R. Answer-Sheet. </p>

                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">

	                  			<p style="font-weight: 600;">
	                 			 Q1. &nbsp;&nbsp; <?php echo $question; ?> </p>

	                 			<form>
			                    <div class="row">
	                 				<?php foreach ($answers as $ans) {?>
	                 					<div class="col-md-6">
	                 						<input type="radio" name="" id="" value="<?php echo $ans; ?>"> <?php echo $ans; ?>
	                 					</div>
<!-- 			                      <div class="col-md-1">
			                      </div>
			                      <div class="col-md-5">
			                     <input type="radio" id="135" name="fav_language" value="135">
			                     <label for="135">   <sup>4</sup>&frasl;<sub>3</sub></label>
			                   	  </div>
			                   	  <div class="col-md-5">
			                     <input type="radio" id="148" name="fav_language" value="148">
			                     <label for="148"><span>&#8722;</span>  <sup>2</sup>&frasl;<sub>3</sub></label>
			                   	  </div>
			                      <div class="col-md-1">
			                      </div>
 -->			                	<?php }?>
			                	</div>

			                  	</form>
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->
                  			</div>
						  </div>

						  <div class="content" id="content-2" data-id='2' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In question nos. 41 to 45:</p>

                  			<p style="font-size:16px; font-weight: 600;">In each questions 41–50, numbers are placed in figures on the basis of some rules. One place in the figure is indicated by the interrogation sign (?). Find out the correct alternative to replace the question mark and indicate your answer by filling the circle of the corresponding letter of alternatives in the O.M.R. Answer-Sheet.</p>

                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 Q41. &nbsp;&nbsp; <img src="assets/images/ntse_wb_question_image_2015_2016/41.png">	 </p>
	                 			<form>
			                    <div class="row">
			                      <div class="col-md-1">
			                      </div>
			                      <div class="col-md-5">
			                     <input type="radio" id="22" name="fav_language" value="22">
			                     <label for="22">22</label>
			                   	  </div>
			                   	  <div class="col-md-5">
			                     <input type="radio" id="24" name="fav_language" value="24">
			                     <label for="24">24</label>
			                   	  </div>
			                      <div class="col-md-1">
			                      </div>
			                	</div>
			                    <div class="row">
			                      <div class="col-md-1">
			                      	<!-- <p style="font-weight: 600;">Q1.</p> -->
			                      </div>
			                      <div class="col-md-5">
			                     <input type="radio" id="26" name="fav_language" value="26">
			                     <label for="26">26</label>
			                   	  </div>
			                   	  <div class="col-md-5">
			                     <input type="radio" id="28" name="fav_language" value="28">
			                     <label for="28">28</label>
			                   	  </div>
			                      <div class="col-md-1">
			                      </div>
			                	</div>
			                  	</form>
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->
                  			</div>
						  </div>



						  </div>

						  <button type="button" class="back" style="margin-top: 10px;margin-left: 253px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;">Back</button>
						  <button type="button" class="next" style="margin-top: 10px;margin-left: 777px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;">Next</button>
						</div>
						<div class="end" data-id='3'>
							<div class="page-wrap-content" style="padding: 49px;text-align: center;">
						  		<p style="font-size: 25px;font-weight: 600;">Congratulation! You are done!</p>
						  		<a href="#" class="edit-previous">Go Back</a>
                  			</div>
						</div>
          			</div>
		        </div>
      		</div>
		</div>
	</section>


    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <!-- <script src="assets/js/jquery-1.3.2.min.js"></script> -->
    <script src="assets/js/jquery-ui-1.7.custom.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
  <script type="text/javascript">

  $(document).ready(function(){
  	$.post("exam_list.php",{
  		"qid":1,
  		"exam_id":1
  	},function(data,status){
  		console.log(data)
  	});
  });

  $('body').on('click', '.next', function() {
    var id = $('.content:visible').data('id');
    var nextId = $('.content:visible').data('id') + 1;
    $('[data-id="' + id + '"]').hide();
    $('[data-id="' + nextId + '"]').show();

    if ($('.back:hidden').length == 1) {
      $('.back').show();
    }

    if (nextId == 3) {
      $('.content-holder').hide();
      $('.end').show();
    }
  });

  $('body').on('click', '.back', function() {
    var id = $('.content:visible').data('id');
    var prevId = $('.content:visible').data('id') - 1;
    $('[data-id="' + id + '"]').hide();
    $('[data-id="' + prevId + '"]').show();

    if (prevId == 1) {
      $('.back').hide();
    }
  });

  $('body').on('click', '.edit-previous', function() {
    $('.end').hide();
    $('.content-holder').show();
    $('#content-1').show();
  });
</script>
</body>
</html>