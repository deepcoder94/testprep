<?php include 'header.php'; ?>

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
    
            <div id="tabss">
    
            <ul>
                <li><a href="#fragment-1">1</a></li>
                <li><a href="#fragment-2">2</a></li>
                <li><a href="#fragment-3">3</a></li>
                <li><a href="#fragment-4">4</a></li>
                <li><a href="#fragment-5">5</a></li>
                <li><a href="#fragment-6">6</a></li>
                <li><a href="#fragment-7">7</a></li>
                <li><a href="#fragment-8">8</a></li>
                <li><a href="#fragment-9">9</a></li>
                <li><a href="#fragment-10">10</a></li>
                <li><a href="#fragment-11">11</a></li>
                <li><a href="#fragment-12">12</a></li>
                <li><a href="#fragment-13">13</a></li>
                <li><a href="#fragment-14">14</a></li>
                <li><a href="#fragment-15">15</a></li>
             </ul>

  
          <div id="fragment-1" class="ui-tabs-panel">
                 <p style="font-size:16px; font-weight: 600;">Direction : In Question nos. 1 to 10
                  There are four terms in each question. The term right to symbol : : have some relationship as the term of the left to the symbol : : and out of the four, one term is missing, which is among one of the given four alternatives. Find the correct alternatives.</p>
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
          </div>
          
          <div id="fragment-2" class="ui-tabs-panel ui-tabs-hide">
                    <p>Donec ultricies senectus tristique egestas vitae, et ac morbi habitant quam sit mi quam, malesuada leo. Vestibulum tempor Mauris tortor libero eget, egestas. eu vitae feugiat netus amet Pellentesque ante. amet, ultricies eleifend turpis sit placerat et semper. Aenean est. fames </p>
            </div>
            
          <div id="fragment-3" class="ui-tabs-panel ui-tabs-hide">
                <p>ante. Mauris Vestibulum est. fames egestas quam, leo. amet tristique sit libero egestas. ultricies mi turpis senectus Pellentesque habitant eu ac morbi netus eget, Aenean malesuada vitae, semper. eleifend et feugiat vitae amet, placerat Donec et tortor ultricies tempor quam sit </p>
            </div>
        
          <div id="fragment-4" class="ui-tabs-panel ui-tabs-hide">

          </div>
          
          <div id="fragment-5" class="ui-tabs-panel ui-tabs-hide">
                
          </div>
        
          <div id="fragment-6" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-7" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-8" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-9" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-10" class="ui-tabs-panel ui-tabs-hide">

          </div>
          
          <div id="fragment-11" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-12" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-13" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-14" class="ui-tabs-panel ui-tabs-hide">
        
          </div>
          
          <div id="fragment-15" class="ui-tabs-panel ui-tabs-hide">
            <p>The end.</p>
          </div>

        </div>
    
  </div>

        </div>

          </div>
        </div>
      </section>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2022 
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
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
    <script type="text/javascript" src="assets/js/jquery-1.3.2.min.js"></script>
    <script src="assets/js/jquery-ui-1.7.custom.min.js"></script>
    <script type="text/javascript">
    $(function() {

      var $tabs = $('#tabss').tabs();
  
      $(".ui-tabs-panel").each(function(i){
  
        var totalSize = $(".ui-tabs-panel").size() - 1;
  
        if (i != totalSize) {
            next = i + 2;
            $(this).append("<a href='#' class='next-tab mover' rel='" + next + "'>Next Page &#187;</a>");
        }
    
        if (i != 0) {
            prev = i;
            $(this).append("<a href='#' class='prev-tab mover' rel='" + prev + "'>&#171; Prev Page</a>");
        }
      
      });
  
      $('.next-tab, .prev-tab').click(function() { 
               $tabs.tabs('select', $(this).attr("rel"));
               return false;
           });
       

    });
    </script>
</body>
</html>