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
	        	<li class="nav-item"><a href="<?=base_url('Indexcntrl')?>" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="<?=base_url('About')?>" class="nav-link">About</a></li>
            <li class="nav-item active"><a href="<?=base_url('Menu')?>" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="<?=base_url('Blog')?>" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="<?=base_url('Contact')?>" class="nav-link">Contact</a></li>
            <li class="nav-item cta"><a href="<?=base_url('Login')?>" class="nav-link">Login/Sign up</a></li>
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
            <h1 class="mb-2 bread">Our Specialties</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="<?=base_url('index.html')?>">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Menu <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
	
<section class="ftco-section">
      <div class="container-fluid px-4">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Specialties</span>
            <h2 class="mb-4">Our Menu</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Breakfast</h3>
            </div>
            <?php
            foreach($breakfast as $value)
            {
            ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?=base_url('uploaded/'.$value->image)?>"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3><?= $value->name?></h3>
                  </div>
                  <div class="one-forth">
                    <span class="price"><?= $value->price?>Rs</span>
                  </div>
                </div>
                <p><span><?= $value->info?></span></p>
              </div>
            </div>
            <?php
            }
            ?>
          </div>


          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Lunch</h3>
            </div>
            <?php foreach($lunch as $value) { ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?=base_url('uploaded/'.$value->image)?>"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3><?= $value->name?></h3>
                  </div>
                  <div class="one-forth">
                    <span class="price"><?= $value->price?>Rs</span>
                  </div>
                </div>
                <p><span><?= $value->info?></span></p>
              </div>
            </div>
            
          <?php }
          ?>
          </div>
          

          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Dinner</h3>
            </div>
            <?php foreach($dinner as $value) { ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?=base_url('uploaded/'.$value->image)?>"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3><?= $value->name?></h3>
                  </div>
                  <div class="one-forth">
                    <span class="price"><?= $value->price?>Rs</span>
                  </div>
                </div>
                <p><span><?= $value->info?></span></p>
              </div>
            </div>
            
          <?php }
          ?>
          </div>
          <!--  -->
          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Desserts</h3>
            </div>
             <?php foreach($desserts as $value) { ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?=base_url('uploaded/'.$value->image)?>"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3><?= $value->name?></h3>
                  </div>
                  <div class="one-forth">
                    <span class="price"><?= $value->price?>Rs</span>
                  </div>
                </div>
                <p><span><?= $value->info?></span></p>
              </div>
            </div>
            
          <?php }
          ?>
          </div>
          
          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Drinks</h3>
            </div>
             <?php foreach($drinks as $value) { ?>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(<?=base_url('uploaded/'.$value->image)?>"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3><?= $value->name?></h3>
                  </div>
                  <div class="one-forth">
                    <span class="price"><?= $value->price?>Rs</span>
                  </div>
                </div>
                <p><span><?= $value->info?></span></p>
              </div>
            </div>
            
          <?php }
          ?>
          </div>

          <div class="col-md-6 col-lg-4 menu-wrap">
            <div class="heading-menu text-center ftco-animate">
              <h3>Special</h3>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Beef with potatoes</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
            <div class="menus d-flex ftco-animate">
              <div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
              <div class="text">
                <div class="d-flex">
                  <div class="one-half">
                    <h3>Grilled Crab with Onion</h3>
                  </div>
                  <div class="one-forth">
                    <span class="price">$29</span>
                  </div>
                </div>
                <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
              </div>
            </div>
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
                <li class="ftco-animate"><a href="<?=base_url('#')?>"><span class="icon-twitter"></span></a></li>
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
    
  </body>
</html>