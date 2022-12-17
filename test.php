<!DOCTYPE html>
<html>
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
	<title></title>
</head>
<body>


<div id="accordion">
  <div class="card">
    <div class="card-header" id="heading0">
      <h3 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0" aria-expanded="false" aria-controls="collapse0">textMain</button>
      </h3>
    </div>
    <div id="collapse0" class="collapse" aria-labelledby="heading0" data-parent="#accordion">
      <div class="card-body">
        <div class="card">
          <div class="card-header" id="heading0_1">
            <h3 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_1" aria-expanded="false" aria-controls="collapse0_1">sub-collapse text</button>
            </h3>
          </div>
          <!-- remove data-parent here or set to "#collapse0" -->
          <div id="collapse0_1" class="collapse" aria-labelledby="heading0_1" data-parent="#collapse0">
            <div class="card-body">
		        <div class="card">
		          <div class="card-header" id="heading0_2">
		            <h3 class="mb-0">
		              <button class="btn btn-link" data-toggle="collapse" data-target="#collapse0_1_1" aria-expanded="false" aria-controls="collapse0_1_1">sub-collapse text</button>
		            </h3>
		          </div>
		          <!-- remove data-parent here or set to "#collapse0" -->
		          <div id="collapse0_1_1" class="collapse" aria-labelledby="heading0_2">
		            <div class="card-body">
		              <p>text</p>
		            </div>
		          </div>
		        </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>
        <div class="col-md-6 col-xs-12">
<!-- <div id="main">
  <div class="container"> -->
			<div class="accordion" id="faq">
            	<div class="card">
                	<div class="card-header" id="faqhead1">
                    	<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq1"
                            aria-expanded="true" aria-controls="faq1">Engineering Entrance Exam <span style="font-size: 14px;color: #f5a425">(IIT JEE Mains/adv, BITSAT, VIIT etc)</span></a>
                	</div>

                <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
               	  <div class="card-body">
               	  <div class="card">
               	  <div class="card-header" id="heading0_1">
                	<a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq11"
                            aria-expanded="true" aria-controls="faq11">Engineering Entrance Exam <span style="font-size: 14px;color: #f5a425">(IIT JEE Mains/adv, BITSAT, VIIT etc)</span></a>
<!--                     <div class="card-body" style="padding: 0.5rem 2.5rem;">
                        IIT JEE Mains <i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                    </div> -->
                </div>

             <div id="faq11" class="collapse" aria-labelledby="heading0_1">
            <div class="card-body">
              <p>text</p>
            </div>
          </div>

                <div id="faq1" class="collapse" aria-labelledby="faqhead1" data-parent="#faq">
                    <div class="card-body" style="padding: 0.5rem 2.5rem;">
                        IIT JEE Adv<i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                    </div>
                </div>
            </div>
          </div>
        </div>
                    <div class="card">
                        <div class="card-header" id="faqhead2">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq2"
                            aria-expanded="true" aria-controls="faq2">KVPY Exam</a>
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                          <a href="IIT-jEE-MAIN.php">Example 1</a>
<!--                             <div class="card-body" style="padding: 0.5rem 2.5rem;">
                                Example 1<i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                            </div> -->
                        </div>

                        <div id="faq2" class="collapse" aria-labelledby="faqhead2" data-parent="#faq">
                            <div class="card-body" style="padding: 0.5rem 2.5rem;">
                               Example 2<i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="faqhead3">
                            <a href="#" class="btn btn-header-link collapsed" data-toggle="collapse" data-target="#faq3"
                            aria-expanded="true" aria-controls="faq3">Medical Entrance Exam (NEET UG)</a>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body" style="padding: 0.5rem 2.5rem;">
                                Example 1<i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                            </div>
                        </div>

                        <div id="faq3" class="collapse" aria-labelledby="faqhead3" data-parent="#faq">
                            <div class="card-body" style="padding: 0.5rem 2.5rem;">
                                Example 2<i class="fa fa-angle-right" style="float: right;margin-top: 6px;"></i>
                            </div>
                        </div>
                    </div>
                </div>
<!--     </div>
  </div> -->
        </div>
</body>
</html>