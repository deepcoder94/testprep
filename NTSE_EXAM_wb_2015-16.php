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
						  <input type="hidden" id="current_question" value="1">
						  <input type="hidden" id="total_questions" value="1">
						  <input type="hidden" id="question_id" value="1">

						  <div class="content" id="question_div" style="font-size: 16px;font-weight: 600;">
			      			<p style="font-size:16px; font-weight: 600;">Directions: Questions (1 to 10) :</p>
                  			<p style="font-size:16px; font-weight: 600;">Read the questions carefully and give answer by filling the circle of the letter denoting your selected answer on the O.M.R. Answer-Sheet. </p>
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 Q<span id="qno">0</span>. &nbsp;&nbsp; <span id="question_text_or_img"></span></p>
								  <form id="ansdiv"></form>                 			
                  			</div>
						  </div>
						  </div>
						  <button type="button" id="back" style="margin-top: 10px;margin-left: 253px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;" onclick="goToPrevQues()">Back</button>
						  <button type="button" id="next" style="margin-top: 10px;margin-left: 777px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;" onclick="goToNextQues()">Next</button>
						</div>
						<div id="end">
							<div class="page-wrap-content" style="padding: 49px;text-align: center;">
						  		<p style="font-size: 25px;font-weight: 600;">Congratulation! You are done!</p>
						  		<button id="edit-previous" onclick="resetQuiz()">Go Back</a>
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
	$("#back").hide();
	$("#end").hide();

	$.post("exam_submit.php",{
		'resetAttempt':1
	},function(data,status){
		console.log(data);
	});

	goToQues(1,1);
  });

  function goToNextQues(){


	var current_question = parseInt($("#current_question").val());
	var total_questions = parseInt($("#total_questions").val());
	var question_id = parseInt($("#question_id").val());

	var serialized = $("form").serialize();
	if(serialized.length > 0){
		serialized+='&exam_id=1'
		serialized+='&question_id='+question_id
		submitAnswer(serialized)	
	}

	if(current_question > 0){
		$("#back").show();
	}
	
	if(current_question < total_questions){
		var next_question = current_question + 1;
		$("#current_question").val(next_question);
		goToQues(1,next_question);
	}
	else{
		$("#page-wrap").hide();
		$("#end").show();
	}
  }

  function submitAnswer(serialized){
	$.post("exam_submit.php",serialized,function(data,status){
	});

  }

  function resetQuiz(){
	$("#back").hide();
	$("#end").hide();
	$("#page-wrap").show();
	$("#current_question").val(1);
	$("#total_questions").val(0);
	
	$.post("exam_submit.php",{
		'resetAttempt':1
	},function(data,status){
		console.log(data);
	});

	goToQues(1,1);

  }

  function goToPrevQues(){
	var current_question = parseInt($("#current_question").val());
	var total_questions = parseInt($("#total_questions").val());

	if(current_question == 2){
		$("#back").hide();
        $("#next").show();
	}
	if(current_question !=1){
		var prev_question = current_question - 1;
		$("#current_question").val(prev_question);
		goToQues(1,prev_question);
	}
  }

  function goToQues(exam_id,question_id){
	$.post("exam_list.php",{
  		"qid":question_id,
  		"exam_id":exam_id
  	},function(data,status){
		if(status=='success'){
			let obj = JSON.parse(data);
			$("#question_div").css("display","none");
			if(obj.success){
				$("#total_questions").val(obj.total_count);
				$("#question_div").css("display","block");
				$("#qno").html(question_id);
				$("#question_id").val(obj.data.nt_id);
				if(obj.data.image_path == null){
					// text question
					$("#question_text_or_img").html(obj.data.question_text);
				}
				else{
					// image question
					var imgques = `<img src="${obj.data.image_path}">`;
					$("#question_text_or_img").html(imgques);
				}

				var attemptAnswer = obj.attempt_answer;
				let ahtml = '';
					ahtml += `<div class="row">`;
					ahtml +=	`<div class="col-md-1">
			                      </div>
			                      <div class="col-md-5">
			                     <input type="radio" name="selected_answer" value="1" ${ attemptAnswer!= undefined && attemptAnswer == 1 ? 'checked':'' }>
			                     <label>${obj.data.answer1}</label>
			                   	  </div>
			                   	  <div class="col-md-5">
			                     <input type="radio" name="selected_answer" value="2" ${ attemptAnswer!= undefined && attemptAnswer == 2 ? 'checked':'' }>
			                     <label>${obj.data.answer2}</label>
			                   	  </div>
			                      <div class="col-md-1">
			                      </div>			                   	  
			                	</div>
			                    <div class="row">
			                      <div class="col-md-1">
			                      </div>
			                      <div class="col-md-5">
			                     <input type="radio" name="selected_answer" value="3" ${ attemptAnswer!= undefined && attemptAnswer == 3 ? 'checked':'' }>
			                     <label>${obj.data.answer3}</label>
			                   	  </div>
			                   	  <div class="col-md-5">
			                     <input type="radio" name="selected_answer" value="4" ${ attemptAnswer!= undefined && attemptAnswer == 4 ? 'checked':'' }>
			                     <label> ${obj.data.answer4}</label>
			                   	  </div>
			                      <div class="col-md-1">
			                      </div>`;			                   	  
					ahtml+='</div>';
					$("#ansdiv").html(ahtml)

			}
		}
  	});

  }
</script>
</body>
</html>