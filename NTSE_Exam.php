<?php 
session_start();
include"header_2.php";
require 'sqlconfig.php';

      if(!isset($_SESSION['name'])){

      ?>
        <script>
          alert('Please login to continue.');
          window.location.href="login.php";
        </script>

      <?php
      }


?>

	<section class="section why-us" data-section="section2">
		<div class="container">
      		<div class="row">
		        <div class="col-md-12">
		          <div class="section-heading">
		            <h2 style="color: #172238;border: 2px solid #172238;">[NTSE STAGE 1, Andhra Pradesh 2018-19]</h2>
		          </div>
		        </div> 
		        <div class="col-md-12 col-xs-12">
          			<div id="page-wrap">
			      		<div class="content-holder">
						  <div class="content" id="content-1" data-id='1' style="display: block;font-size: 16px;font-weight: 600;">

			      			<p style="font-size:16px; font-weight: 600;">Direction : In Question nos. 1 to 10</p>

                  			<p style="font-size:16px; font-weight: 600;">There are four terms in each question. The term right to symbol : : have some relationship as the term of the left to the symbol : : and out of the four, one term is missing, which is among one of the given four alternatives. Find the correct alternatives.</p>

                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">

	                  			<p style="font-weight: 600;">
	                 			 1.  AZY : EXW ::IVU : ................. </p>

	                 			<form>
			                    <input type="radio" id="TSO" name="fav_language" value="TSO">
			                    <label for="TSO">TSO</label>
			                    <input type="radio" id="OTS" name="fav_language" value="OTS">
			                    <label for="OTS">OTS</label>
			                    <input type="radio" id="SOT" name="fav_language" value="SOT">
			                    <label for="SOT">SOT</label>
			                     <input type="radio" id="OST" name="fav_language" value="OST">
			                      <label for="OST">OST</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>						  	
						  </div>

						  <div class="content" id="content-2" data-id='2' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 2.  ............... : Play : : Sing : Anthem </p>
	                 			<form>
			                      <input type="radio" id="Field" name="fav_language" value="Field">
			                      <label for="Field">Field</label>
			                      <input type="radio" id="Act" name="fav_language" value="Act">
			                      <label for="Act">Act</label>
			                      <input type="radio" id="Theater" name="fav_language" value="Theater">
			                      <label for="Theater">Theater</label>
			                      <input type="radio" id="Scene" name="fav_language" value="Scene">
			                      <label for="Scene">Scene</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-3" data-id='3' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 3. Rook : Chess : : ............... : Badminton </p>
	                 			<form>
			                      <input type="radio" id="Grass" name="fav_language" value="Grass">
			                      <label for="Grass">Grass</label>
			                      <input type="radio" id="Tennis" name="fav_language" value="Tennis">
			                      <label for="Tennis">Tennis</label>
			                      <input type="radio" id="Shuttlecock" name="fav_language" value="Shuttlecock">
			                      <label for="Shuttlecock">Shuttlecock </label>
			                      <input type="radio" id="Swing" name="fav_language" value="Swing">
			                      <label for="Swing">Swing</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-4" data-id='4' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 4. Cytology : .................... : Geology : Rocks </p>
	                 			<form>
			                      <input type="radio" id="Cells" name="fav_language" value="Cells">
			                      <label for="Cells">Cells</label>
			                      <input type="radio" id="Psychology" name="fav_language" value="Psychology">
			                      <label for="Psychology">Psychology</label>
			                      <input type="radio" id="Cyclones" name="fav_language" value="Cyclones">
			                      <label for="Cyclones">Cyclones</label>
			                      <input type="radio" id="Pharmacology" name="fav_language" value="Pharmacology">
			                      <label for="Pharmacology">Pharmacology</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-5" data-id='5' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 5. ................... : Wrist : : Belt : Waist </p>
	                 			<form>
			                      <input type="radio" id="Bracelet" name="fav_language" value="Bracelet">
			                      <label for="Bracelet">Bracelet</label>
			                      <input type="radio" id="Bend" name="fav_language" value="Bend">
			                      <label for="Bend">Bend</label>
			                      <input type="radio" id="Arm" name="fav_language" value="Arm">
			                      <label for="Arm">Arm</label>
			                      <input type="radio" id="Hand" name="fav_language" value="Hand">
			                      <label for="Hand">Hand</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-6" data-id='6' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 6. AFK : BGL : : ............... : EJO </p>
	                 			<form>
			                      <input type="radio" id="SXZ" name="fav_language" value="SXZ">
			                      <label for="SXZ">SXZ</label>
			                      <input type="radio" id="PUZ" name="fav_language" value="PUZ">
			                      <label for="PUZ">PUZ</label>
			                      <input type="radio" id="DIN" name="fav_language" value="DIN">
			                      <label for="DIN">DIN</label>
			                      <input type="radio" id="DHL" name="fav_language" value="DHL">
			                      <label for="DHL">DHL</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-7" data-id='7' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 7. Ruby : Red : : Sapphire : .............. </p>
	                 			<form>
			                      <input type="radio" id="Black" name="fav_language" value="Black">
			                      <label for="Black">Black</label>
			                      <input type="radio" id="Green" name="fav_language" value="Green">
			                      <label for="Green">Green</label>
			                      <input type="radio" id="White" name="fav_language" value="White">
			                      <label for="White">White</label>
			                      <input type="radio" id="Blue" name="fav_language" value="Blue">
			                      <label for="Blue 	">Blue</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-8" data-id='8' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 8. Stars : Astronomy : : ............ : History	 </p>
	                 			<form>
			                     <input type="radio" id="Autumn" name="fav_language" value="Autumn">
			                     <label for="Autumn">Autumn</label>
			                     <input type="radio" id="Battles" name="fav_language" value="Battles">
			                     <label for="Battles">Battles</label>
			                     <input type="radio" id="Eclipse" name="fav_language" value="Eclipse">
			                     <label for="Eclipse">Eclipse</label>
			                     <input type="radio" id="Horse" name="fav_language" value="Horse">
			                     <label for="Horse">Horse</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

					  	  <div class="content" id="content-9" data-id='9' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 9. AEZ : EIY : : IOX : ...................	 </p>
	                 			<form>
			                     <input type="radio" id="UYZ" name="fav_language" value="UYZ">
			                     <label for="UYZ">UYZ</label>
			                     <input type="radio" id="EIX" name="fav_language" value="EIX">
			                     <label for="EIX">EIX</label>
			                     <input type="radio" id="AEX" name="fav_language" value="AEX">
			                     <label for="AEX">AEX </label>
			                     <input type="radio" id="OUW" name="fav_language" value="OUW">
			                     <label for="OUW">OUW</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-10" data-id='10' style="font-size: 16px;font-weight: 600;">
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 10. AJT : BKU : : ............... : DMW	 </p>
	                 			<form>
			                     <input type="radio" id="CLV" name="fav_language" value="CLV">
			                     <label for="CLV">CLV</label>
			                     <input type="radio" id="EHF" name="fav_language" value="EHF">
			                     <label for="EHF">EHF</label>
			                     <input type="radio" id="ENO" name="fav_language" value="ENO">
			                     <label for="ENO">ENO </label>
			                     <input type="radio" id="CVL" name="fav_language" value="CVL">
			                     <label for="CVL">CVL</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-11" data-id='11' style="font-size: 16px;font-weight: 600;">
			      			<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 11 to 20:</p>

                  			<p style="font-size:16px; font-weight: 600;">Question have become wrong due to wrong order to signs. Choose the correct order of signs from the four alternatives given under each question, so that the equation becomes right. Write it in your answer sheet against the corresponding question number.</p>						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 11. 5 – 6 = 11 ÷ 19	 </p>
	                 			<form>
			                     <input type="radio" id="+ ÷ =" name="fav_language" value="+ ÷ =">
			                     <label for="+ ÷ =">+ ÷ =</label>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                     <input type="radio" id="+ – =" name="fav_language" value="+ – =">
			                     <label for="+ – =">+ – =</label>
			                     <input type="radio" id="– ÷ =" name="fav_language" value="– ÷ =">
			                     <label for="– ÷ =">– ÷ =</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-12" data-id='12' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 12. 14 ÷ 2 + 16 = 12	 </p>
	                 			<form>
			                     <input type="radio" id="= + –" name="fav_language" value="= + –">
			                     <label for="= + –">= + –</label>
			                     <input type="radio" id="÷ – =" name="fav_language" value="÷ – =">
			                     <label for="÷ – =">÷ – =</label>
			                     <input type="radio" id="× + =" name="fav_language" value="× + =">
			                     <label for="× + =">× + =</label>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-13" data-id='13' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 13. 39 – 24 – 9 = 7	 </p>
	                 			<form>
			                     <input type="radio" id="+ = +" name="fav_language" value="+ = +">
			                     <label for="+ = +">+ = +</label>
			                     <input type="radio" id="= + –" name="fav_language" value="= + –">
			                     <label for="= + –">= + –</label>
			                     <input type="radio" id="= + ÷" name="fav_language" value="= + ÷">
			                     <label for="= + ÷">= + ÷</label>
			                     <input type="radio" id="+ = ×" name="fav_language" value="+ = ×">
			                     <label for="+ = ×">+ = ×</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  

						  <div class="content" id="content-14" data-id='14' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 14. 7 = 5 × 16 – 19	 </p>
	                 			<form>
			                     <input type="radio" id="÷ = +" name="fav_language" value="÷ = +">
			                     <label for="÷ = +">÷ = +</label>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                     <input type="radio" id="– = +" name="fav_language" value="– = +">
			                     <label for="– = +">– = +</label>
			                     <input type="radio" id="+ – =" name="fav_language" value="+ – =">
			                     <label for="+ – =">+ – =</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-15" data-id='15' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 15. 11 × 7 – 23 = 5	 </p>
	                 			<form>
			                     <input type="radio" id="– = ×" name="fav_language" value="– = ×">
			                     <label for="– = ×">– = ×</label>
			                     <input type="radio" id="+ = –" name="fav_language" value="+ = –">
			                     <label for="+ = –">+ = –</label>
			                     <input type="radio" id="÷ = –" name="fav_language" value="÷ = –">
			                     <label for="÷ = –">÷ = –</label>
			                     <input type="radio" id="× ÷ =" name="fav_language" value="× ÷ =">
			                     <label for="× ÷ =">× ÷ =</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-16" data-id='16' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 16. 12 = 3 ÷ 19 + 4	 </p>
	                 			<form>
			                     <input type="radio" id="+ = –" name="fav_language" value="+ = –">
			                     <label for="+ = –">+ = –</label>
			                     <input type="radio" id="÷ = –" name="fav_language" value="÷ = –">
			                     <label for="÷ = –">÷ = –</label>
			                     <input type="radio" id="× = –" name="fav_language" value="× = –">
			                     <label for="× = –">× = –</label>
			                     <input type="radio" id="× ÷ =" name="fav_language" value="× ÷ =">
			                     <label for="× ÷ =">× ÷ =</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-17" data-id='17' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 17. 14 ÷ 2 + 16 = 12	 </p>
	                 			<form>
			                     <input type="radio" id="= + –" name="fav_language" value="= + –">
			                     <label for="= + –">= + –</label>
			                     <input type="radio" id="÷ – =" name="fav_language" value="÷ – =">
			                     <label for="÷ – =">÷ – =</label>
			                     <input type="radio" id="×  + =" name="fav_language" value="×  + =">
			                     <label for="×  + =">×  + =</label>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-18" data-id='18' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 18. 2 – 7 ÷ 5 = 19	 </p>
	                 			<form>
			                     <input type="radio" id="+ = +" name="fav_language" value="+ = +">
			                     <label for="+ = +">+ = +</label>
			                     <input type="radio" id="× + =" name="fav_language" value="× + =">
			                     <label for="× + =">× + =</label>
			                     <input type="radio" id="– + =" name="fav_language" value="– + =">
			                     <label for="– + =">– + =</label>
			                     <input type="radio" id="÷ = –" name="fav_language" value="÷ = –">
			                     <label for="÷ = –">÷ = –</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-19" data-id='19' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 19. 2 = 11 ÷ 3 × 19	 </p>
	                 			<form>
			                     <input type="radio" id="– = ×" name="fav_language" value="– = ×">
			                     <label for="– = ×">– = ×</label>
			                     <input type="radio" id="÷ = ÷" name="fav_language" value="÷ = ÷">
			                     <label for="÷ = ÷">÷ = ÷</label>
			                     <input type="radio" id="= + –" name="fav_language" value="= + –">
			                     <label for="= + –">= + –</label>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-20" data-id='20' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 20. 3 + 5 – 2 = 13	 </p>
	                 			<form>
			                     <input type="radio" id="× = +" name="fav_language" value="× = +">
			                     <label for="× = +">× = +</label>
			                     <input type="radio" id="– = ×" name="fav_language" value="– = ×">
			                     <label for="– = ×">– = ×</label>
			                     <input type="radio" id="+ = –" name="fav_language" value="+ = –">
			                     <label for="+ = –">+ = –</label>
			                     <input type="radio" id="÷ – =" name="fav_language" value="÷ – =">
			                     <label for="÷ – =">÷ – =</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-21" data-id='21' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 21 to 30:</p>

                  			<p style="font-size:16px; font-weight: 600;">In the number series given below, one number is missing. Each series is followed by four alternatives (1), (2), (3) and (4). One of then is the right answer. Identify and indicate ut as per the "Instructions".</p>						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 21. 8, 24, 12, 36, 18, 54, .....................	 </p>
	                 			<form>
			                     <input type="radio" id="72" name="fav_language" value="72">
			                     <label for="72">72</label>
			                     <input type="radio" id="68" name="fav_language" value="68">
			                     <label for="68">68</label>
			                     <input type="radio" id="108" name="fav_language" value="108">
			                     <label for="108">108</label>
			                     <input type="radio" id="27" name="fav_language" value="27">
			                     <label for="27">27</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-22" data-id='22' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 22. 7, 10, 8, 11, 9, 12, ......................	 </p>
	                 			<form>
			                     <input type="radio" id="16" name="fav_language" value="16">
			                     <label for="16">16</label>
			                     <input type="radio" id="14" name="fav_language" value="14">
			                     <label for="14">14</label>
			                     <input type="radio" id="13" name="fav_language" value="13">
			                     <label for="13">13</label>
			                     <input type="radio" id="10" name="fav_language" value="10">
			                     <label for="10">10</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-23" data-id='23' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 23. 3, 7, 6, 5, 9, 3, 12, 1, 15, .................	 </p>
	                 			<form>
			                     <input type="radio" id="-3" name="fav_language" value="-3">
			                     <label for="-3">-3</label>
			                     <input type="radio" id="18" name="fav_language" value="18">
			                     <label for="18">18</label>
			                     <input type="radio" id="-1" name="fav_language" value="-1">
			                     <label for="-1">-1</label>
			                     <input type="radio" id="13" name="fav_language" value="13">
			                     <label for="13">13</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-24" data-id='24' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 24. 77, 91, 105, 119, 133, 161, ...............	 </p>
	                 			<form>
			                     <input type="radio" id="189" name="fav_language" value="189">
			                     <label for="189">189</label>
			                     <input type="radio" id="203" name="fav_language" value="203">
			                     <label for="203">203</label>
			                     <input type="radio" id="175" name="fav_language" value="175">
			                     <label for="175">175</label>
			                     <input type="radio" id="193" name="fav_language" value="193">
			                     <label for="193">193</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-25" data-id='25' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 25. 888, 440, 216, 104, 48, ....................	 </p>
	                 			<form>
			                     <input type="radio" id="26" name="fav_language" value="26">
			                     <label for="26">26</label>
			                     <input type="radio" id="28" name="fav_language" value="28">
			                     <label for="28">28</label>
			                     <input type="radio" id="24" name="fav_language" value="24">
			                     <label for="24">24</label>
			                     <input type="radio" id="20" name="fav_language" value="20">
			                     <label for="20">20</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-26" data-id='26' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 26. 4, 9, 19, 39, 79, ....................	 </p>
	                 			<form>
			                     <input type="radio" id="139" name="fav_language" value="139">
			                     <label for="139">139</label>
			                     <input type="radio" id="159" name="fav_language" value="159">
			                     <label for="159">159</label>
			                     <input type="radio" id="119" name="fav_language" value="119">
			                     <label for="119">119</label>
			                     <input type="radio" id="169" name="fav_language" value="169">
			                     <label for="169">169</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-27" data-id='27' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 27. 11, 23, 48, 99, ................... , 409	 </p>
	                 			<form>
			                     <input type="radio" id="205" name="fav_language" value="205">
			                     <label for="205">205</label>
			                     <input type="radio" id="200" name="fav_language" value="200">
			                     <label for="200">200</label>
			                     <input type="radio" id="202" name="fav_language" value="202">
			                     <label for="202">202</label>
			                     <input type="radio" id="201" name="fav_language" value="201">
			                     <label for="201">201</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-28" data-id='28' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 28. 10, 26, 74, 218, 650, .................	 </p>
	                 			<form>
			                     <input type="radio" id="1946" name="fav_language" value="1946">
			                     <label for="1946">1946</label>
			                     <input type="radio" id="1950" name="fav_language" value="1950">
			                     <label for="1950">1950</label>
			                     <input type="radio" id="1956" name="fav_language" value="1956">
			                     <label for="1956">1956</label>
			                     <input type="radio" id="1942" name="fav_language" value="1942">
			                     <label for="1942">1942</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-29" data-id='29' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 29. 0, 7, 26, 63, 124, 215, ....................	 </p>
	                 			<form>
			                     <input type="radio" id="295" name="fav_language" value="295">
			                     <label for="295">295</label>
			                     <input type="radio" id="323" name="fav_language" value="323">
			                     <label for="323">323</label>
			                     <input type="radio" id="305" name="fav_language" value="305">
			                     <label for="305">305</label>
			                     <input type="radio" id="342" name="fav_language" value="342">
			                     <label for="342">342</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-30" data-id='30' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 30. 0, 3, 8, 15, 24, .....................	 </p>
	                 			<form>
			                     <input type="radio" id="35" name="fav_language" value="35">
			                     <label for="35">35</label>
			                     <input type="radio" id="39" name="fav_language" value="39">
			                     <label for="39">39</label>
			                     <input type="radio" id="27" name="fav_language" value="27">
			                     <label for="27">27</label>
			                     <input type="radio" id="32" name="fav_language" value="32">
			                     <label for="32">32</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-31" data-id='31' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 31 to 35:</p>

                  			<p style="font-size:16px; font-weight: 600;">Some letters are given in Column I and some digits are given in Column II. Each digit of Column II represents any letter of Column I. Study the columns and write the alternative letter after choosing the correct alternative against the corresponding question</p>	

							<p style="font-size:16px; font-weight: 600;">
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										Column - I

									</div>
									<div class="col-md-2 col-xs-2">
										Column - II
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										GCUHV 
									</div>
									<div class="col-md-2 col-xs-2">
										56372
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										CKXJD

									</div>
									<div class="col-md-2 col-xs-2">
										95084
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										UDVGH 

									</div>
									<div class="col-md-2 col-xs-2">
										37862
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										DYKVX 

									</div>
									<div class="col-md-2 col-xs-2">
										18394
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										HXGJY

									</div>
									<div class="col-md-2 col-xs-2">
										06291
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										CGUDV

									</div>
									<div class="col-md-2 col-xs-2">
										25738
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										HGKDY 

									</div>
									<div class="col-md-2 col-xs-2">
										14628
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										UDCKG 

									</div>
									<div class="col-md-2 col-xs-2">
										42587
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										KYDXC

									</div>
									<div class="col-md-2 col-xs-2">
										19485
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										GXHJD

									</div>
									<div class="col-md-2 col-xs-2">
										62890
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>																							
							</p>                  								  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 31. The code for Y is ............	 </p>
	                 			<form>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="1">1</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7">7</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-32" data-id='32' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 32. The code for C is	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5">5</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-33" data-id='33' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 33. The code for D is	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="0">0</label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7">7</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-34" data-id='34' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 34. The code for G is	 </p>
	                 			<form>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-35" data-id='35' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  35. The code for J is	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="0">0</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-36" data-id='36' style="font-size: 16px;font-weight: 600;">		
						  <p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 36 to 40:</p>

                  			<p style="font-size:16px; font-weight: 600;">Read the following and answer the questions given below :</p>	
                  			<p style="font-size:16px; font-weight: 600;">
                  				There are six persons in the family of Mr. Murty 
								(i)	They are A, B, C, D, E and F.
								(ii)There are two marries couples.
								(iii)B is an engineer and the father of E.
								(iv)F is the paternal grandfather of C and is a doctor.
								(v)	D is the paternal grandmother of E and is a housewife.
								(vi)There is one engineer, one doctor, one teacher, one housewife and two students in the family.

                  			</p>			  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  36. Who among the following members are the males?	 </p>
	                 			<form>
			                     <input type="radio" id="B, F and D" name="fav_language" value="B, F and D">
			                     <label for="B, F and D">B, F and D</label>
			                     <input type="radio" id="B and F" name="fav_language" value="B and F">
			                     <label for="B and F">B and F</label>
			                     <input type="radio" id="F and D" name="fav_language" value="F and D">
			                     <label for="F and D">F and D</label>
			                     <input type="radio" id="B, F and A" name="fav_language" value="B, F and A">
			                     <label for="B, F and A">B, F and A</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-37" data-id='37' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  37. Who us the husband of A ?	 </p>
	                 			<form>
			                     <input type="radio" id="B" name="fav_language" value="B">
			                     <label for="B">B</label>
			                     <input type="radio" id="E" name="fav_language" value="E">
			                     <label for="E">E</label>
			                     <input type="radio" id="F" name="fav_language" value="F">
			                     <label for="F">F</label>
			                     <input type="radio" id="C" name="fav_language" value="C">
			                     <label for="C">C</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-38" data-id='38' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  38. What is A's profession ?	 </p>
	                 			<form>
			                     <input type="radio" id="Student" name="fav_language" value="Student">
			                     <label for="Student">Student</label>
			                     <input type="radio" id="Teacher" name="fav_language" value="Teacher">
			                     <label for="Teacher">Teacher</label>
			                     <input type="radio" id="Housewife or teacher" name="fav_language" value="Housewife or teacher">
			                     <label for="Housewife or teacher">Housewife or teacher</label>
			                     <input type="radio" id="Housewife" name="fav_language" value="Housewife">
			                     <label for="Housewife">Housewife</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-39" data-id='39' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  39. Who is the sister of E ?	 </p>
	                 			<form>
			                     <input type="radio" id="A" name="fav_language" value="A">
			                     <label for="A">A</label>
			                     <input type="radio" id="D" name="fav_language" value="D">
			                     <label for="D">D</label>
			                     <input type="radio" id="Data inadequate" name="fav_language" value="Data inadequate">
			                     <label for="Data inadequate">Data inadequate</label>
			                     <input type="radio" id="C" name="fav_language" value="C">
			                     <label for="C">C</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-40" data-id='40' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  40. The code for J is	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="0">0</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  
						  <div class="content" id="content-41" data-id='41' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In question nos. 41 to 50:</p>	
                 							  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 41. <img src="assets/images/ntse_question_image/41.png">	 </p>
	                 			<form>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="90">90</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="60">60</label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="11">11</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="14">14</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-42" data-id='42' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 42. <img src="assets/images/ntse_question_image/42.png">	 </p>
	                 			<form>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="216">216</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="1944">1944</label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="1">1</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="36">36</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-43" data-id='43' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 43. <img src="assets/images/ntse_question_image/43.png">	 </p>
	                 			<form>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="28">28</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="24">24</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="26">26</label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="22">22</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-44" data-id='44' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 44. <img src="assets/images/ntse_question_image/44.png">	 </p>
	                 			<form>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="9">9</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="8">8</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="5">5</label>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="11">11</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-45" data-id='45' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  45. <img src="assets/images/ntse_question_image/45.png">	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="47">47</label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="37">37</label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="25">25</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="41">41</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-46" data-id='46' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 46. <img src="assets/images/ntse_question_image/46.png"></p>
	                 			<form>
			                     <input type="radio" id="56" name="fav_language" value="56">
			                     <label for="56">56</label>
			                     <input type="radio" id="64" name="fav_language" value="64">
			                     <label for="64">64</label>
			                     <input type="radio" id="49" name="fav_language" value="49">
			                     <label for="49">49</label>
			                     <input type="radio" id="96" name="fav_language" value="96">
			                     <label for="96">96</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-47" data-id='47' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 47. <img src="assets/images/ntse_question_image/47.png">	</p>
	                 			<form>
			                     <input type="radio" id="28" name="fav_language" value="28">
			                     <label for="28">28</label>
			                     <input type="radio" id="30" name="fav_language" value="30">
			                     <label for="30">30</label>
			                     <input type="radio" id="26" name="fav_language" value="26">
			                     <label for="26">26</label>
			                     <input type="radio" id="32" name="fav_language" value="32">
			                     <label for="32">32</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-48" data-id='48' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 48. <img src="assets/images/ntse_question_image/48.png">	</p>
	                 			<form>
			                     <input type="radio" id="13" name="fav_language" value="13">
			                     <label for="13">13</label>
			                     <input type="radio" id="16" name="fav_language" value="16">
			                     <label for="16">16</label>
			                     <input type="radio" id="15" name="fav_language" value="15">
			                     <label for="15">15</label>
			                     <input type="radio" id="14" name="fav_language" value="14">
			                     <label for="14">14</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-49" data-id='49' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 49. <img src="assets/images/ntse_question_image/49.png"> </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-50" data-id='50' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 50. <img src="assets/images/ntse_question_image/50.png"> </p>
	                 			<form>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7">7</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5">5</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-51" data-id='51' style="font-size: 16px;font-weight: 600;">

						  	<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 51 to 60:</p>

                  			<p style="font-size:16px; font-weight: 600;">
								Each of the following questions consists of the five figures marked A, B, C, D and E called the problem figures followed by four alternatives marked 1, 2, 3 and 4 called the answer figures. Select a figure which will continue the sameseries established by the five problem figures:

                  			</p>						  						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 51. <img src="assets/images/ntse_question_image/51.png"> </p>
	                 			<form>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA"><img src="assets/images/ntse_question_image/51.1.png"></label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB"><img src="assets/images/ntse_question_image/51.2.png"></label>
			                     <input type="radio" id="BABB" name="fav_language" value="BABB">
			                     <label for="BABB"><img src="assets/images/ntse_question_image/51.3.png"></label>
			                     <input type="radio" id="ABAA" name="fav_language" value="ABAA">
			                     <label for="ABAA"><img src="assets/images/ntse_question_image/51.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-52" data-id='52' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 52. <img src="assets/images/ntse_question_image/52.png"> </p>
	                 			<form>
			                     <input type="radio" id="CABC" name="fav_language" value="CABC">
			                     <label for="CABC"><img src="assets/images/ntse_question_image/52.1.png"></label>
			                     <input type="radio" id="ABCB" name="fav_language" value="ABCB">
			                     <label for="ABCB"><img src="assets/images/ntse_question_image/52.2.png"></label>
			                     <input type="radio" id="CACB" name="fav_language" value="CACB">
			                     <label for="CACB"><img src="assets/images/ntse_question_image/52.3.png"></label>
			                     <input type="radio" id="CCAB" name="fav_language" value="CCAB">
			                     <label for="CCAB"><img src="assets/images/ntse_question_image/52.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-53" data-id='53' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 53. <img src="assets/images/ntse_question_image/53.png"> </p>
	                 			<form>
			                     <input type="radio" id="BBDAC" name="fav_language" value="BBDAC">
			                     <label for="BBDAC"><img src="assets/images/ntse_question_image/53.1.png"></label>
			                     <input type="radio" id="DBBCA" name="fav_language" value="DBBCA">
			                     <label for="DBBCA"><img src="assets/images/ntse_question_image/53.2.png"></label>
			                     <input type="radio" id="BDDCA" name="fav_language" value="BDDCA">
			                     <label for="BDDCA"><img src="assets/images/ntse_question_image/53.3.png"></label>
			                     <input type="radio" id="BDBDA" name="fav_language" value="BDBDA">
			                     <label for="BDBDA"><img src="assets/images/ntse_question_image/53.4.png"></label>
			                  	</form>                 			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-54" data-id='54' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 54. <img src="assets/images/ntse_question_image/54.png"> </p>
	                 			<form>
			                     <input type="radio" id="BCAB" name="fav_language" value="BCAB">
			                     <label for="BCAB"><img src="assets/images/ntse_question_image/54.1.png"></label>
			                     <input type="radio" id="BBCA" name="fav_language" value="BBCA">
			                     <label for="BBCA"><img src="assets/images/ntse_question_image/54.2.png"></label>
			                     <input type="radio" id="ABCA" name="fav_language" value="ABCA">
			                     <label for="ABCA"><img src="assets/images/ntse_question_image/54.3.png"></label>
			                     <input type="radio" id="AABC" name="fav_language" value="AABC">
			                     <label for="AABC"><img src="assets/images/ntse_question_image/54.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-55" data-id='55' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 55. <img src="assets/images/ntse_question_image/55.png"> </p>
	                 			<form>
			                     <input type="radio" id="ACAB" name="fav_language" value="ACAB">
			                     <label for="ACAB"><img src="assets/images/ntse_question_image/55.1.png"></label>
			                     <input type="radio" id="BACA" name="fav_language" value="BACA">
			                     <label for="BACA"><img src="assets/images/ntse_question_image/55.2.png"></label>
			                     <input type="radio" id="CABA" name="fav_language" value="CABA">
			                     <label for="CABA"><img src="assets/images/ntse_question_image/55.3.png"></label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB"><img src="assets/images/ntse_question_image/55.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-56" data-id='56' style="font-size: 16px;font-weight: 600;">
				  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 56. <img src="assets/images/ntse_question_image/56.png"> </p>
	                 			<form>
			                     <input type="radio" id="A and F" name="fav_language" value="A and F">
			                     <label for="A and F"><img src="assets/images/ntse_question_image/56.1.png"></label>
			                     <input type="radio" id="A and E" name="fav_language" value="A and E">
			                     <label for="A and E"><img src="assets/images/ntse_question_image/56.2.png"></label>
			                     <input type="radio" id="E and D" name="fav_language" value="E and D">
			                     <label for="E and D"><img src="assets/images/ntse_question_image/56.3.png"></label>
			                     <input type="radio" id="A and D" name="fav_language" value="A and D">
			                     <label for="A and D"><img src="assets/images/ntse_question_image/56.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-57" data-id='57' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 57. <img src="assets/images/ntse_question_image/57.png"> </p>
	                 			<form>
			                     <input type="radio" id="D and F" name="fav_language" value="D and F">
			                     <label for="D and F"><img src="assets/images/ntse_question_image/57.1.png"></label>
			                     <input type="radio" id="A and C" name="fav_language" value="A and C">
			                     <label for="A and C"><img src="assets/images/ntse_question_image/57.2.png"></label>
			                     <input type="radio" id="A and D" name="fav_language" value="A and D">
			                     <label for="A and D"><img src="assets/images/ntse_question_image/57.3.png"></label>
			                     <input type="radio" id="E and D" name="fav_language" value="E and D">
			                     <label for="E and D"><img src="assets/images/ntse_question_image/57.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-58" data-id='58' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 58. <img src="assets/images/ntse_question_image/58.png"> </p>
	                 			<form>
			                     <input type="radio" id="B" name="fav_language" value="B">
			                     <label for="B"><img src="assets/images/ntse_question_image/58.1.png"></label>
			                     <input type="radio" id="A" name="fav_language" value="A">
			                     <label for="A"><img src="assets/images/ntse_question_image/58.2.png"></label>
			                     <input type="radio" id="E" name="fav_language" value="E">
			                     <label for="E"><img src="assets/images/ntse_question_image/58.3.png"></label>
			                     <input type="radio" id="D" name="fav_language" value="D">
			                     <label for="D"><img src="assets/images/ntse_question_image/58.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-59" data-id='59' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 59. <img src="assets/images/ntse_question_image/59.png"> </p>
	                 			<form>
			                     <input type="radio" id="B and D" name="fav_language" value="B and D">
			                     <label for="B and D"><img src="assets/images/ntse_question_image/59.1.png"></label>
			                     <input type="radio" id="B and E" name="fav_language" value="B and E">
			                     <label for="B and E"><img src="assets/images/ntse_question_image/59.2.png"></label>
			                     <input type="radio" id="A and F" name="fav_language" value="A and F">
			                     <label for="A and F"><img src="assets/images/ntse_question_image/59.3.png"></label>
			                     <input type="radio" id="A and B" name="fav_language" value="A and B">
			                     <label for="A and B"><img src="assets/images/ntse_question_image/59.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-60" data-id='60' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 60. <img src="assets/images/ntse_question_image/60.png"> </p>
	                 			<form>
			                     <input type="radio" id="B and E" name="fav_language" value="B and E">
			                     <label for="B and E"><img src="assets/images/ntse_question_image/60.1.png"></label>
			                     <input type="radio" id="E and A" name="fav_language" value="E and A">
			                     <label for="E and A"><img src="assets/images/ntse_question_image/60.2.png"></label>
			                     <input type="radio" id="C and E" name="fav_language" value="C and E">
			                     <label for="C and E"><img src="assets/images/ntse_question_image/60.3.png"></label>
			                     <input type="radio" id="B and F" name="fav_language" value="B and F">
			                     <label for="B and F"><img src="assets/images/ntse_question_image/60.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-61" data-id='61' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In question nos. 61 to 65:</p>

                  			<p style="font-size:16px; font-weight: 600;">Some letters are given in Column I and some digits are given in Column II. Each digit of column II represents any letter of Column I. Study the columns and write the alternative letter after choosing the correctly alternative against the corresponding question.</p>	

							<p style="font-size:16px; font-weight: 600;">
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										Column - I

									</div>
									<div class="col-md-2 col-xs-2">
										Column - II
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										ABLMS 
									</div>
									<div class="col-md-2 col-xs-2">
										90418
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										QRLBA 

									</div>
									<div class="col-md-2 col-xs-2">
										63109
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										LRNPQ 

									</div>
									<div class="col-md-2 col-xs-2">
										37261
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										MSPTQ 

									</div>
									<div class="col-md-2 col-xs-2">
										87354
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										RABLS

									</div>
									<div class="col-md-2 col-xs-2">
										04961
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										PLQST 

									</div>
									<div class="col-md-2 col-xs-2">
										51437
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										PTQAB 

									</div>
									<div class="col-md-2 col-xs-2">
										79350
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										ATRNP 

									</div>
									<div class="col-md-2 col-xs-2">
										62705
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										QPNAR

									</div>
									<div class="col-md-2 col-xs-2">
										62703
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>
								<div class="row">
									<div class="col-md-4 col-xs-4"></div>
									<div class="col-md-2 col-xs-2">
										TSLBA

									</div>
									<div class="col-md-2 col-xs-2">
										49150
									</div>
									<div class="col-md-4 col-xs-4"></div>
								</div>																							
							</p>                  								  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 61. The code for M is ...............	 </p>
	                 			<form>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="1">1</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="0">0</label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8">8</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-62" data-id='62' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 62. The code for P is ..................	 </p>
	                 			<form>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7">7</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9">9</label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-63" data-id='63' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 63. The code for S is ..................	 </p>
	                 			<form>
			                     <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2">2</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9">9</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-64" data-id='64' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 64. The code for B is ..................	 </p>
	                 			<form>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9">9</label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6">6</label>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="1">1</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-65" data-id='65' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			  65. The code for Q is ..............	 </p>
	                 			<form>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3">3</label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7">7</label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5">5</label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4">4</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-66" data-id='66' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In question nos. 66 to 75:</p>

                  			<p style="font-size:16px; font-weight: 600;">Out of the four figures (1), (2), (3), (4) given in each question, three are similar in a certain way. Choose the figure which is different from the other figures. </p>	
                 								  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;">61. The code for M is ...............	 </p> -->
	                 			<form>
			                    66 . <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="1"><img src="assets/images/ntse_question_image/66.1.png"></label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6"><img src="assets/images/ntse_question_image/66.2.png"></label>
			                     <input type="radio" id="0" name="fav_language" value="0">
			                     <label for="0"><img src="assets/images/ntse_question_image/66.3.png"></label>
			                     <input type="radio" id="8" name="fav_language" value="8">
			                     <label for="8"><img src="assets/images/ntse_question_image/66.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-67" data-id='67' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;">67. The code for P is ..................	 </p> -->
	                 			<form>
			                     67 . <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/67.1.png"></label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9"><img src="assets/images/ntse_question_image/67.2.png"></label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/67.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/67.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-68" data-id='68' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;">68. The code for S is ..................	 </p> -->
	                 			<form>
			                     68 . <input type="radio" id="2" name="fav_language" value="2">
			                     <label for="2"><img src="assets/images/ntse_question_image/68.1.png"></label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9"><img src="assets/images/ntse_question_image/68.2.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/68.3.png"></label>
			                     <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/68.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-69" data-id='69' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;">69. The code for B is ..................	 </p> -->
	                 			<form>
			                     69 . <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/69.1.png"></label>
			                     <input type="radio" id="9" name="fav_language" value="9">
			                     <label for="9"><img src="assets/images/ntse_question_image/69.2.png"></label>
			                     <input type="radio" id="6" name="fav_language" value="6">
			                     <label for="6"><img src="assets/images/ntse_question_image/69.3.png"></label>
			                     <input type="radio" id="1" name="fav_language" value="1">
			                     <label for="1"><img src="assets/images/ntse_question_image/69.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-70" data-id='70' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     70 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/70.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/70.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/70.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/70.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-71" data-id='71' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     71 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/71.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/71.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/71.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/71.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-72" data-id='72' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     72 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/72.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/72.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/72.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/72.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-73" data-id='73' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     73 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/73.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/73.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/73.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/73.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-74" data-id='74' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     74 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/74.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/74.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/74.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/74.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-75" data-id='75' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<!-- <p style="font-weight: 600;"> 70. The code for Q is ..............	 </p> -->
	                 			<form>
			                     75 . <input type="radio" id="3" name="fav_language" value="3">
			                     <label for="3"><img src="assets/images/ntse_question_image/75.1.png"></label>
			                     <input type="radio" id="7" name="fav_language" value="7">
			                     <label for="7"><img src="assets/images/ntse_question_image/75.2.png"></label>
			                     <input type="radio" id="5" name="fav_language" value="5">
			                     <label for="5"><img src="assets/images/ntse_question_image/75.3.png"></label>
			                     <input type="radio" id="4" name="fav_language" value="4">
			                     <label for="4"><img src="assets/images/ntse_question_image/75.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-76" data-id='76' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 76 to 85:</p>

                  			<p style="font-size:16px; font-weight: 600;">In each of the following questions, a letter series is given, in which some letters are missing. The missing letters are given in the proper sequence as one of the alternatives. Find the correct alternative.</p>						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 76. A_CA_BC_BCC_BCA</p>
	                 			<form>
			                     <input type="radio" id="AABB" name="fav_language" value="AABB">
			                     <label for="AABB">AABB</label>
			                     <input type="radio" id="BBAA" name="fav_language" value="BBAA">
			                     <label for="BBAA">BBAA</label>
			                     <input type="radio" id="BBAB" name="fav_language" value="BBAB">
			                     <label for="BBAB">BBAB</label>
			                     <input type="radio" id="BABA" name="fav_language" value="BABA">
			                     <label for="BABA">BABA</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-77" data-id='77' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 77. _BBC_AAB_CCA_BBCC	</p>
	                 			<form>
			                     <input type="radio" id="ACBA" name="fav_language" value="ACBA">
			                     <label for="ACBA">ACBA</label>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA">ABBA</label>
			                     <input type="radio" id="CABA" name="fav_language" value="CABA">
			                     <label for="CABA">CABA</label>
			                     <input type="radio" id="BACB" name="fav_language" value="BACB">
			                     <label for="BACB">BACB</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-78" data-id='78' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 78. AA_BBB_CCAAAB_BC_C	</p>
	                 			<form>
			                     <input type="radio" id="BCCC" name="fav_language" value="BCCC">
			                     <label for="BCCC">BCCC</label>
			                     <input type="radio" id="BBCC" name="fav_language" value="BBCC">
			                     <label for="BBCC">BBCC</label>
			                     <input type="radio" id="CCBB" name="fav_language" value="CCBB">
			                     <label for="CCBB">CCBB</label>
			                     <input type="radio" id="ACBC" name="fav_language" value="ACBC">
			                     <label for="ACBC">ACBC</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-79" data-id='79' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 79. ABCA_BCAAB_CA_BBC_A</p>
	                 			<form>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA">ABBA</label>
			                     <input type="radio" id="BBAA" name="fav_language" value="BBAA">
			                     <label for="BBAA">BBAA</label>
			                     <input type="radio" id="CCAA" name="fav_language" value="CCAA">
			                     <label for="CCAA">CCAA</label>
			                     <input type="radio" id="ABAC" name="fav_language" value="ABAC">
			                     <label for="ABAC">ABAC</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-80" data-id='80' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 80. BAA_AAB_A_A_BAA_</p>
	                 			<form>
			                     <input type="radio" id="ABAAB" name="fav_language" value="ABAAB">
			                     <label for="ABAAB">ABAAB</label>
			                     <input type="radio" id="ABABA" name="fav_language" value="ABABA">
			                     <label for="ABABA">ABABA</label>
			                     <input type="radio" id="AABBA" name="fav_language" value="AABBA">
			                     <label for="AABBA">AABBA</label>
			                     <input type="radio" id="BABAB" name="fav_language" value="BABAB">
			                     <label for="BABAB">BABAB</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-81" data-id='81' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 81. A_B_BA_AB_BA</p>
	                 			<form>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA">ABBA</label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB">ABAB</label>
			                     <input type="radio" id="BABB" name="fav_language" value="BABB">
			                     <label for="BABB">BABB</label>
			                     <input type="radio" id="ABAA" name="fav_language" value="ABAA">
			                     <label for="ABAA">ABAA</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-82" data-id='82' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 82. ABA_BACA_BA_BACAABAC_ACA</p>
	                 			<form>
			                     <input type="radio" id="CABC" name="fav_language" value="CABC">
			                     <label for="CABC">CABC</label>
			                     <input type="radio" id="ABCB" name="fav_language" value="ABCB">
			                     <label for="ABCB">ABCB</label>
			                     <input type="radio" id="CACB" name="fav_language" value="CACB">
			                     <label for="CACB">CACB</label>
			                     <input type="radio" id="CCAB" name="fav_language" value="CCAB">
			                     <label for="CCAB">CCAB</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-83" data-id='83' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 83. _CDAAB_CC_DAA_BBB_CCDDD</p>
	                 			<form>
			                     <input type="radio" id="BBDAC" name="fav_language" value="BBDAC">
			                     <label for="BBDAC">BBDAC</label>
			                     <input type="radio" id="DBBCA" name="fav_language" value="DBBCA">
			                     <label for="DBBCA">DBBCA</label>
			                     <input type="radio" id="BDDCA" name="fav_language" value="BDDCA">
			                     <label for="BDDCA">BDDCA</label>
			                     <input type="radio" id="BDBDA" name="fav_language" value="BDBDA">
			                     <label for="BDBDA">BDBDA</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-84" data-id='84' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 84. A_CC_AAB_CB_</p>
	                 			<form>
			                     <input type="radio" id="BCAB" name="fav_language" value="BCAB">
			                     <label for="BCAB">BCAB</label>
			                     <input type="radio" id="BBCA" name="fav_language" value="BBCA">
			                     <label for="BBCA">BBCA</label>
			                     <input type="radio" id="ABCA" name="fav_language" value="ABCA">
			                     <label for="ABCA">ABCA</label>
			                     <input type="radio" id="AABC" name="fav_language" value="AABC">
			                     <label for="AABC">AABC</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-85" data-id='85' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 85. A_CBABC_CB_AB_C</p>
	                 			<form>
			                     <input type="radio" id="ACAB" name="fav_language" value="ACAB">
			                     <label for="ACAB">ACAB</label>
			                     <input type="radio" id="BACA" name="fav_language" value="BACA">
			                     <label for="BACA">BACA</label>
			                     <input type="radio" id="CABA" name="fav_language" value="CABA">
			                     <label for="CABA">CABA</label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB">ABAB</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  						  
						  <div class="content" id="content-86" data-id='86' style="font-size: 16px;font-weight: 600;">

							<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 86 to 95:</p>

                  			<p style="font-size:16px; font-weight: 600;">The following questions consists of two sets of figures. Figures A, B, C and D constitute the problem set while figures 1, 2, 3, and 4 constitute the answer set. A Definite relationship exists between figures A and B. You are required to establish a similar relationship between figures C and D by choosing a suitable figure D from the answer set.</p>						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 86. Problem Figures :<br/> <img src="assets/images/ntse_question_image/86.png"></p>
	                 			<form>
			                     <input type="radio" id="AABB" name="fav_language" value="AABB">
			                     <label for="AABB"><img src="assets/images/ntse_question_image/86.1.png"></label>
			                     <input type="radio" id="BBAA" name="fav_language" value="BBAA">
			                     <label for="BBAA"><img src="assets/images/ntse_question_image/86.2.png"></label>
			                     <input type="radio" id="BBAB" name="fav_language" value="BBAB">
			                     <label for="BBAB"><img src="assets/images/ntse_question_image/86.3.png"></label>
			                     <input type="radio" id="BABA" name="fav_language" value="BABA">
			                     <label for="BABA"><img src="assets/images/ntse_question_image/86.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>


						  <div class="content" id="content-87" data-id='87' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 87. Problem Figures :<br/> <img src="assets/images/ntse_question_image/87.png"></p>
	                 			<form>
			                     <input type="radio" id="ACBA" name="fav_language" value="ACBA">
			                     <label for="ACBA"><img src="assets/images/ntse_question_image/87.1.png"></label>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA"><img src="assets/images/ntse_question_image/87.2.png"></label>
			                     <input type="radio" id="CABA" name="fav_language" value="CABA">
			                     <label for="CABA"><img src="assets/images/ntse_question_image/87.3.png"></label>
			                     <input type="radio" id="BACB" name="fav_language" value="BACB">
			                     <label for="BACB"><img src="assets/images/ntse_question_image/87.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>						  						  						  						  						  						  						  

						  <div class="content" id="content-88" data-id='88' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 88. Problem Figures :<br/> <img src="assets/images/ntse_question_image/88.png"></p>
	                 			<form>
			                     <input type="radio" id="BCCC" name="fav_language" value="BCCC">
			                     <label for="BCCC"><img src="assets/images/ntse_question_image/88.1.png"></label>
			                     <input type="radio" id="BBCC" name="fav_language" value="BBCC">
			                     <label for="BBCC"><img src="assets/images/ntse_question_image/88.2.png"></label>
			                     <input type="radio" id="CCBB" name="fav_language" value="CCBB">
			                     <label for="CCBB"><img src="assets/images/ntse_question_image/88.3.png"></label>
			                     <input type="radio" id="ACBC" name="fav_language" value="ACBC">
			                     <label for="ACBC"><img src="assets/images/ntse_question_image/88.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-89" data-id='89' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 89. Problem Figures :<br/> <img src="assets/images/ntse_question_image/89.png"></p>
	                 			<form>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA"><img src="assets/images/ntse_question_image/89.1.png"></label>
			                     <input type="radio" id="BBAA" name="fav_language" value="BBAA">
			                     <label for="BBAA"><img src="assets/images/ntse_question_image/89.2.png"></label>
			                     <input type="radio" id="CCAA" name="fav_language" value="CCAA">
			                     <label for="CCAA"><img src="assets/images/ntse_question_image/89.3.png"></label>
			                     <input type="radio" id="ABAC" name="fav_language" value="ABAC">
			                     <label for="ABAC"><img src="assets/images/ntse_question_image/89.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-90" data-id='90' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 90. Problem Figures :<br/> <img src="assets/images/ntse_question_image/90.png"></p>
	                 			<form>
			                     <input type="radio" id="ABAAB" name="fav_language" value="ABAAB">
			                     <label for="ABAAB"><img src="assets/images/ntse_question_image/90.1.png"></label>
			                     <input type="radio" id="ABABA" name="fav_language" value="ABABA">
			                     <label for="ABABA"><img src="assets/images/ntse_question_image/90.2.png"></label>
			                     <input type="radio" id="AABBA" name="fav_language" value="AABBA">
			                     <label for="AABBA"><img src="assets/images/ntse_question_image/90.3.png"></label>
			                     <input type="radio" id="BABAB" name="fav_language" value="BABAB">
			                     <label for="BABAB"><img src="assets/images/ntse_question_image/90.4.png"></label>
			                  	</form>                 			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-91" data-id='91' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 91. Problem Figures :<br/> <img src="assets/images/ntse_question_image/91.png"></p>
	                 			<form>
			                     <input type="radio" id="ABBA" name="fav_language" value="ABBA">
			                     <label for="ABBA"><img src="assets/images/ntse_question_image/91.1.png"></label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB"><img src="assets/images/ntse_question_image/91.2.png"></label>
			                     <input type="radio" id="BABB" name="fav_language" value="BABB">
			                     <label for="BABB"><img src="assets/images/ntse_question_image/91.3.png"></label>
			                     <input type="radio" id="ABAA" name="fav_language" value="ABAA">
			                     <label for="ABAA"><img src="assets/images/ntse_question_image/91.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-92" data-id='92' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 92. Problem Figures :<br/> <img src="assets/images/ntse_question_image/92.png"></p>
	                 			<form>
			                     <input type="radio" id="CABC" name="fav_language" value="CABC">
			                     <label for="CABC"><img src="assets/images/ntse_question_image/92.1.png"></label>
			                     <input type="radio" id="ABCB" name="fav_language" value="ABCB">
			                     <label for="ABCB"><img src="assets/images/ntse_question_image/92.2.png"></label>
			                     <input type="radio" id="CACB" name="fav_language" value="CACB">
			                     <label for="CACB"><img src="assets/images/ntse_question_image/92.3.png"></label>
			                     <input type="radio" id="CCAB" name="fav_language" value="CCAB">
			                     <label for="CCAB"><img src="assets/images/ntse_question_image/92.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-93" data-id='93' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 93. Problem Figures :<br/> <img src="assets/images/ntse_question_image/93.png"></p>
	                 			<form>
			                     <input type="radio" id="BBDAC" name="fav_language" value="BBDAC">
			                     <label for="BBDAC"><img src="assets/images/ntse_question_image/93.1.png"></label>
			                     <input type="radio" id="DBBCA" name="fav_language" value="DBBCA">
			                     <label for="DBBCA"><img src="assets/images/ntse_question_image/93.2.png"></label>
			                     <input type="radio" id="BDDCA" name="fav_language" value="BDDCA">
			                     <label for="BDDCA"><img src="assets/images/ntse_question_image/93.3.png"></label>
			                     <input type="radio" id="BDBDA" name="fav_language" value="BDBDA">
			                     <label for="BDBDA"><img src="assets/images/ntse_question_image/93.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-94" data-id='94' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 94. Problem Figures :<br/> <img src="assets/images/ntse_question_image/94.png"></p>
	                 			<form>
			                     <input type="radio" id="BCAB" name="fav_language" value="BCAB">
			                     <label for="BCAB"><img src="assets/images/ntse_question_image/94.1.png"></label>
			                     <input type="radio" id="BBCA" name="fav_language" value="BBCA">
			                     <label for="BBCA"><img src="assets/images/ntse_question_image/94.2.png"></label>
			                     <input type="radio" id="ABCA" name="fav_language" value="ABCA">
			                     <label for="ABCA"><img src="assets/images/ntse_question_image/94.3.png"></label>
			                     <input type="radio" id="AABC" name="fav_language" value="AABC">
			                     <label for="AABC"><img src="assets/images/ntse_question_image/94.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-95" data-id='95' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 95. Problem Figures :<br/> <img src="assets/images/ntse_question_image/95.png"></p>
	                 			<form>
			                     <input type="radio" id="ACAB" name="fav_language" value="ACAB">
			                     <label for="ACAB"><img src="assets/images/ntse_question_image/95.1.png"></label>
			                     <input type="radio" id="BACA" name="fav_language" value="BACA">
			                     <label for="BACA"><img src="assets/images/ntse_question_image/95.2.png"></label>
			                     <input type="radio" id="CABA" name="fav_language" value="CABA">
			                     <label for="CABA"><img src="assets/images/ntse_question_image/95.3.png"></label>
			                     <input type="radio" id="ABAB" name="fav_language" value="ABAB">
			                     <label for="ABAB"><img src="assets/images/ntse_question_image/95.4.png"></label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>  

						  <div class="content" id="content-96" data-id='96' style="font-size: 16px;font-weight: 600;">
						  	<p style="font-size:16px; font-weight: 600;">Direction: In Question nos. 96 to 100:</p>

                  			<p style="font-size:16px; font-weight: 600;">
                  				Read the following information carefully and answer the questions that follow :
									(i)		They are A, B, C, D, E and F.
									(ii)	A is a historical place and not a hill station.
									(iii)	B and E are not historical places.
									(iv)	D is not a twin city.
									(v)		A ands B are not alike.
									(vi)	D is not a historical city.

                  			</p>				  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 96. Which two cities are hill stations ?</p>
	                 			<form>
			                     <input type="radio" id="A and F" name="fav_language" value="A and F">
			                     <label for="A and F">A and F</label>
			                     <input type="radio" id="A and E" name="fav_language" value="A and E">
			                     <label for="A and E">A and E</label>
			                     <input type="radio" id="E and D" name="fav_language" value="E and D">
			                     <label for="E and D">E and D</label>
			                     <input type="radio" id="A and D" name="fav_language" value="A and D">
			                     <label for="A and D">A and D</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-97" data-id='97' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 97. Which two cities are historical places ?</p>
	                 			<form>
			                     <input type="radio" id="D and F" name="fav_language" value="D and F">
			                     <label for="D and F">D and F</label>
			                     <input type="radio" id="A and C" name="fav_language" value="A and C">
			                     <label for="A and C">A and C</label>
			                     <input type="radio" id="A and D" name="fav_language" value="A and D">
			                     <label for="A and D">A and D</label>E and D
			                     <input type="radio" id="E and D" name="fav_language" value="E and D">
			                     <label for="E and D">E and D</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-98" data-id='98' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 98. Which city is a hill station and a twin city but not a historical place ?</p>
	                 			<form>
			                     <input type="radio" id="B" name="fav_language" value="B">
			                     <label for="B">B</label>
			                     <input type="radio" id="A" name="fav_language" value="A">
			                     <label for="A">A</label>
			                     <input type="radio" id="E" name="fav_language" value="E">
			                     <label for="E">E</label>
			                     <input type="radio" id="D" name="fav_language" value="D">
			                     <label for="D">D</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-99" data-id='99' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 99. Which two cities are neither historical places nor twin cities ?</p>
	                 			<form>
			                     <input type="radio" id="B and D" name="fav_language" value="B and D">
			                     <label for="B and D">B and D</label>
			                     <input type="radio" id="B and E" name="fav_language" value="B and E">
			                     <label for="B and E">B and E</label>
			                     <input type="radio" id="A and F" name="fav_language" value="A and F">
			                     <label for="A and F">A and F</label>
			                     <input type="radio" id="A and B" name="fav_language" value="A and B">
			                     <label for="A and B">A and B</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <div class="content" id="content-100" data-id='100' style="font-size: 16px;font-weight: 600;">						  	
                  			<div class="page-wrap-content" style="padding: 49px;background-color: #ffffff; box-shadow: 0px 0px 6px 6px #e0dfdc;">
	                  			<p style="font-weight: 600;">
	                 			 100. Which two cities are twin cities ?</p>
	                 			<form>
			                     <input type="radio" id="B and E" name="fav_language" value="B and E">
			                     <label for="B and E">B and E</label>
			                     <input type="radio" id="E and A" name="fav_language" value="E and A">
			                     <label for="E and A">E and A</label>
			                     <input type="radio" id="C and E" name="fav_language" value="C and E">
			                     <label for="C and E">C and E</label>
			                     <input type="radio" id="B and F" name="fav_language" value="B and F">
			                     <label for="B and F">B and F</label>
			                  	</form>                  			
							    <!-- <input type="checkbox" />Item <br /> -->
							    <!-- <input type="checkbox" />Item -->                  				
                  			</div>
						  </div>

						  <button type="button" class="back" style="margin-top: 10px;margin-left: 253px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;">Back</button>
						  <button type="button" class="next" style="margin-top: 10px;margin-left: 777px;padding: 12px 20px;position: absolute;color: white;font-weight: bold;text-decoration: none;">Next</button>
						</div>
						<div class="end" data-id='101'>
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
  $('body').on('click', '.next', function() {
    var id = $('.content:visible').data('id');
    var nextId = $('.content:visible').data('id') + 1;
    $('[data-id="' + id + '"]').hide();
    $('[data-id="' + nextId + '"]').show();

    if ($('.back:hidden').length == 1) {
      $('.back').show();
    }

    if (nextId == 101) {
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