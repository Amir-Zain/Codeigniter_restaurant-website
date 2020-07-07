<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Appetizer - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?=base_url('css/open-iconic-bootstrap.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/animate.css')?>">
    
    <link rel="stylesheet" href="<?=base_url('css/owl.carousel.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/owl.theme.default.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/magnific-popup.css')?>">

    <link rel="stylesheet" href="<?=base_url('css/aos.css')?>">

    <link rel="stylesheet" href="<?=base_url('css/ionicons.min.css')?>">

    <link rel="stylesheet" href="<?=base_url('css/bootstrap-datepicker.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/jquery.timepicker.css')?>">

    
    <link rel="stylesheet" href="<?=base_url('css/flaticon.css')?>">
    <link rel="stylesheet" href="<?=base_url('css/icomoon.css')?>">
    <link href="<?=base_url('assets/css/mdtimepicker.css" rel="stylesheet" type="text/css')?>">

    <link rel="stylesheet" href="<?=base_url('css/style.css')?>">
  </head>
  <body>
    <div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+ 1235 2355 98</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">youremail@email.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>8:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="<?=base_url('index.html')?>">Appetizer</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	  <li class="nav-item"><a href="<?=base_url('Home')?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?=base_url('Fabout')?>" class="nav-link">About</a></li>
            <li class="nav-item"><a href="<?=base_url('Fmenu')?>" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="<?=base_url('Fblog')?>" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="<?=base_url('Fcontact')?>" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="<?=base_url('Freservation')?>" class="nav-link">Book A Table</a></li>&nbsp;&nbsp;
            <li class="nav-item cta"><a href="<?=base_url('Logincntrl/logout')?>" class="nav-link">Logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Reservation</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('index.html')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Reservation <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	<style>
   .box2{

    background-color: #1079F2;
    border-radius: 5px;
   } 
.modal {
  text-align: center;
}
.modal-content {
     border: none;
}
.myModal .modal-body {
    position: relative;
    padding: 40px;
    display: inline-block;
    text-align: left;
}
.myModal .modal-dialog {
    margin: 70px 50px;
    display: inline-block;
}
.myModal .close {
    display: block;
    position: absolute;
    width: 40px;
    height: 40px;
    right: -35px;
    top: -35px;
    background: transparent url(../images/close.svg) no-repeat center center !important;
    background-size: 20px 20px !important;
    text-indent: 100%;
    white-space: nowrap;
    overflow: hidden;
    border: none;
}
@media (min-width: 576px) {
.myModal .modal-dialog {
    max-width: 750px;
}
}
}

.hover_bkgr_fricc{
    background:rgba(0,0,0,.4);
    cursor:pointer;
    display:none;
    height:100%;
    position:fixed;
    text-align:center;
    top:0;
    width:100%;
    z-index:10000;
}
.hover_bkgr_fricc .helper{
    display:inline-block;
    height:100%;
    vertical-align:middle;
}
.hover_bkgr_fricc > div {
    background-color: #fff;
    box-shadow: 10px 10px 60px #555;
    display: inline-block;
    height: auto;
    max-width: 551px;
    min-height: 100px;
    vertical-align: middle;
    width: 60%;
    position: relative;
    border-radius: 8px;
    padding: 15px 5%;
}
.popupCloseButton {
    background-color: #fff;
    border: 3px solid #999;
    border-radius: 50px;
    cursor: pointer;
    display: inline-block;
    font-family: arial;
    font-weight: bold;
    position: absolute;
    top: -20px;
    right: -20px;
    font-size: 25px;
    line-height: 30px;
    width: 30px;
    height: 30px;
    text-align: center;
}
.popupCloseButton:hover {
    background-color: #ccc;
}
.trigger_popup_fricc {
    cursor: pointer;
    font-size: 20px;
    margin: 20px;
    display: inline-block;
    font-weight: bold;

}
.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  
  display: inline-block;
  width: 10.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}
.cbox{

  width: 20px;
  height: 20px;
}
.txt5{
  font-weight: bolder;
}
.txt8{
  font-weight: bold;
}
.slider{ 
  width: 100%;
  margin: 50% auto;
}


  </style>

		<section class="ftco-section ftco-no-pt ftco-no-pb">
			<div class="container-fluid px-0">
				<div class="row d-flex no-gutters">
          <div class="col-md-6 order-md-last ftco-animate makereservation p-4 p-md-5 pt-5">
          	<div class="py-md-5">
	          	<div class="heading-section ftco-animate mb-5">
		          	<span class="subheading">Book a table</span>
		            <h2 class="mb-4">Make Reservation</h2>
		          </div>
	            <form action="<?=base_url('front/Freservationcntrl/insert')?>" method="post">
	              <div class="row">
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Name</label>
	                    <input type="text" class="form-control" name="name" placeholder="Your Name">
	                  </div>
	                </div>
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Email</label>
	                    <input type="text" class="form-control" name="email" placeholder="Your Email">
	                  </div>
	                </div>
	                
	                <div class="col-md-6">
	                  <div class="form-group">
	                    <label for="">Phone Number</label>
	                    <input type="text" class="form-control"  name="mobile" placeholder="Phone Number">
	                  </div>
	                </div>

                   <div class="col-md-6">
                          <div class="form-group">
                          <label for="">Date</label>
                          <input type="text" class="form-control" name="datex" id="book_date" placeholder="Choose Date">
                          </div>
                        </div>

                        <?php
  
    

   $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM table_tb where status='Available'")->result(); 
                  foreach ($count4 as $key => $value) { 
 $value->count_rows;
}

?>


                      <div class="col-md-6">
                    <div class="form-group">
                      <label for="">Select Seats</label>
                      

                      <?php
$count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM table_tb where status='Available'")->result();
$c="6";
$d="0";
foreach ($count4 as $key => $value) { 
 $value->count_rows;
}
if($value->count_rows >= $c)
{
  echo "<input type='range' min='1' max='6' value='1' name='seats' class='form-control' id='slider1'> <label for='' id='value1'>1</label>";
}
elseif ($value->count_rows > $d ) {
  echo "<input type='range' min='1' max='$value->count_rows' name='seats' value='1' class='form-control' id='slider1'> <label for='' id='value1'>1</label>";
  
}
else {
  echo "<h3>Sorry, All seats are booked</h3>";
}
?>
<p>*There are <b><?php echo $value->count_rows; ?></b> seats available now
                      
                      
                      
                    </div>
                  </div>

                          <div class="col-md-6">
                          <div class="form-group">
                          <label for="projectinput6">Available Times</label>
                            <select class="form-control" name="time">
                              <?php
                              foreach($time as $value)
                              {
                               ?>
                              
                            <option value="<?=$value->time?>"><?=$value->time?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </div>
                      </div>

                      
                

	                
	                <div class="col-md-12 mt-3">
	                  <div class="form-group">
	                    <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
	                  </div>
	                </div>
	              </div>
	            </form>
	          </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
						<div id="map"></div>
					</div>
        </div>
			</div>
		</section>


   

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container-fluid px-md-5 px-3">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Appetizer</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="<?=base_url('#')?>><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="<?=base_url('#')?>"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="<?=base_url('#')?>"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Open Hours</h2>
              <ul class="list-unstyled open-hours">
                <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Newsletter</h2>
            	<p>Far far away, behind the word mountains, far from the countries.</p>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Instagram</h2>
              <div class="thumb d-sm-flex">
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
	            	</a>
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
	            	</a>
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
	            	</a>
	            </div>
	            <div class="thumb d-flex">
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
	            	</a>
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
	            	</a>
	            	<a href="<?=base_url('#')?>" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
	            	</a>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="<?=base_url('https://colorlib.com')?>" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="<?=base_url('js/jquery.min.js')?>"></script>
  <script src="<?=base_url('js/jquery-migrate-3.0.1.min.js')?>"></script>
  <script src="<?=base_url('js/popper.min.js')?>"></script>
  <script src="<?=base_url('js/bootstrap.min.js')?>"></script>
  <script src="<?=base_url('js/jquery.easing.1.3.js')?>"></script>
  <script src="<?=base_url('js/jquery.waypoints.min.js')?>"></script>
  <script src="<?=base_url('js/jquery.stellar.min.js')?>"></script>
  <script src="<?=base_url('js/owl.carousel.min.js')?>"></script>
  <script src="<?=base_url('js/jquery.magnific-popup.min.js')?>"></script>
  <script src="<?=base_url('js/aos.js')?>"></script>
  <script src="<?=base_url('js/jquery.animateNumber.min.js')?>"></script>
  <script src="<?=base_url('js/bootstrap-datepicker.js')?>"></script>
  <script src="<?=base_url('js/jquery.timepicker.min.js')?>"></script>
  <script src="<?=base_url('js/scrollax.min.js')?>"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?=base_url('js/google-map.js')?>"></script>
  <script src="<?=base_url('js/main.js')?>"></script>
  <script>
    //POPUP AJAX CODE
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
  $(window).load(function () {
    $(".trigger_popup_fricc").click(function(){
       $('.hover_bkgr_fricc').show();
    });
    $('.hover_bkgr_fricc').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
    $('.popupCloseButton').click(function(){
        $('.hover_bkgr_fricc').hide();
    });
});
</script>
<script src="<?=base_url('assets/js/mdtimepicker.js')?>"></script>
<script>
  $(document).ready(function(){
    $('.timepicker').mdtimepicker(); //Initializes the time picker
  });
</script> 


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
        $('input[type=range]').on("input", function () {
            var sid = this.id.substr(6);
            var val = $(this).val();
            $("#value" + sid).text(val);
        });
    })
</script>
    
  </body>
</html>

<!--  <div class="col-md-6">
                    <div class="form-group">
                      <br>
                      <button class="box2 btn-primary py-3 px-2" id="myBtn"><a class="box2 btn-primary py-2 px-1" href="#0" data-toggle="modal" data-target="#myModal">Select Seats</a></button>
                      
                              </div>
                            </div>

                  
                  <div class="col-md-12 mt-3">
                    <div class="form-group">
                      <input type="submit" value="Make a Reservation" class="btn btn-primary py-3 px-5">
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch pb-5 pb-md-0">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>
 -->


    <!-- <div class="modal myModal" id="myModal">
      <div class="modal-dialog">

                                        *****MY FIRST POP UP AJAX FORM*********
        
          <button type="button" class="close" data-dismiss="modal"></button>
        <div class="modal-content">

          <div class="modal-body" >
            <h1 align="center" class="txt5">Select Seats</h1>
            <form class="form"   method="post">
                    <div class="form-body">
                      <div class="row">

*There are<?php/* foreach ($rows as $counts)
{
  */
  ?>

  &nbsp;<p class="txt8"><?php
  /* echo $rows['count_rows'];
*/
   ?></p>&nbsp;
    
    <?php
    /*
}
*/
?> seats available now
                       
                        

                        
                       
                      
              

<ul class="days">

  <?php
  /*
    Code for count specific row only need (view page)

   $count4 = $this->db->query("SELECT COUNT(*) as count_rows FROM table_tb where status='Available'")->result(); 
                  foreach ($count4 as $key => $value) { 
echo $value->count_rows;
}
*/
?>
<?php
/*
foreach ($table as $value) {
  
?>
<li><input type="checkbox" name="seats" value="1" class="cbox"><?=$value->table_name?></li>
<?php
}
*/
?>


  
  
</ul>


                          
                        
                        <div class="col-md-12">
                        <div class="form-group">
                        <button type="submit" class="btn btn-primary">
                        <i class="icon-check2"></i> Submit</button>
                        </div>
                        </div>
                      </div>
                    </div>
                  </form>
          </div>
 -->