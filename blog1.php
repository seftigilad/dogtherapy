<!DOCTYPE html>
<html lang="he">
	<head>
		<title>כלבנות טיפולית בתאל ואיימי בלוג</title>
		<link rel="icon" href="favicon.ico" type="image/x-icon"/>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="כלבנות טיפולית, חוגי כלבנות, טיפול רגשי בבעלי חיים לילדים">
		<meta name="keywords" content="כלבנות טיפולית, חוגי כלבנות, טיפול רגשי בבעלי חיים לילדים, באר יעקב">
		<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
	
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
		<link rel="stylesheet" href="css/animate.css">
		
		<link rel="stylesheet" href="css/owl.carousel.min.css">
		<link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="css/magnific-popup.css">
		
		<link rel="stylesheet" href="css/flaticon.css">
		<link rel="stylesheet" href="css/style.css">
	  </head>
  <body>

  <div class="wrap">
			<div class="container">
				<div class="row">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="tel:0526416831" class="mr-2"><span class="fa fa-phone mr-1"></span> 052-6416831</a> 
							<a href="mailto:gilsefti@gmail.com"><span class="fa fa-paper-plane mr-1"></span> gilsefti@gmail.com</a>
							<a href="https://wa.me/+972526416831?text=%D7%A9%D7%9C%D7%95%D7%9D%2C%20%D7%94%D7%92%D7%A2%D7%AA%D7%99%20%D7%93%D7%A8%D7%9A%20%D7%94%D7%90%D7%AA%D7%A8%20%D7%95%D7%90%D7%A0%D7%99%20%D7%9E%D7%A2%D7%95%D7%A0%D7%99%D7%99%D7%9F%2F%D7%AA%20%D7%91%D7%A4%D7%A8%D7%98%D7%99%D7%9D%20%D7%A2%D7%9C%20%D7%9B%D7%9C%D7%91%D7%A0%D7%95%D7%AA%20%D7%98%D7%99%D7%A4%D7%95%D7%9C%D7%99%D7%AA" target="_blank"><span class="fa fa-whatsapp mr-1"></span> שלחו הודעה </a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media">
			    		<p class="mb-0 d-flex">
			    			<a  href="https://www.facebook.com/profile.php?id=61558537584241" target="_blank" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>			    	
			    		</p>
		        </div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">כלבנות טיפולית וחוגים </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> תפריט
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="index.html" class="nav-link">ראשי</a></li>
	          <li class="nav-item "><a href="about.html" class="nav-link">בואו נכיר</a></li>          
            <li class="nav-item "><a href="pricing.html" class="nav-link">טיפול ומחיר</a></li>   
			<li class="nav-item "><a href="class.html" class="nav-link">חוגי כלבנות</a></li>   
			<li class="nav-item "><a href="why.html" class="nav-link">למה כלבנות טיפולית</a></li>          
			<li class="nav-item active"><a href="blog.php" class="nav-link">בלוג</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">בואו נדבר</a></li>			
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_5.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">       
            <h1 class="mb-0 bread"></h1>
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section">
      <div class="container">
      <?php

// Directory where JSON files are located
$directory = './json_files/';

// Check if the directory exists

    // Open directory
    if ($dh = opendir($directory)) {
        // Array to hold JSON file contents
        $jsonContents = [];

        // Read directory contents
        while (($file = readdir($dh)) !== false) {
            // Check if file is a JSON file
        
                // Read JSON file content
                $json = file_get_contents($directory . $file);
                // Decode JSON content
                $data = json_decode($json, true);

                $title = $data['title'] ;
                $content = substr($data['content'],0,250);

                $jsonContents[] = [
                    'filename' => $file,
                    'title' => $title,
                    'content' => $content
                ];
                // Store file content in array
              
            
        }

        // Close directory handle
        closedir($dh);

        // Output JSON file contents
        if (!empty($jsonContents)) {         
            foreach ($jsonContents as $item) {              
              
                echo '<div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                <div class="text text-center">';
                  
                    echo "<h3 class='heading mb-3'><a href=blogentry/{$item['filename']}>{$item['title']}</a></h3>";     
                  echo "<p>{$item['content']}</p>";
                 
                  echo '</div>
              </div>
            </div>';
                
        
            }
        } else {
            echo "<p>No JSON files found in directory.</p>";
        }

          
             
    }  
            

?>   
          </div>
         
     
        </div>
  
      </div>
    </section>	

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">כלבנות טיפולית. טיפול רגשי בבעלי חיים</a></h2>
              <p>כלבים הם לא כל החיים שלנו,
				אבל הם הופכים את חיינו שלמים.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
              
                <li class="ftco-animate"><a  href="https://www.facebook.com/profile.php?id=61558537584241" target="_blank"><span class="fa fa-facebook"></span></a></li>
          
              </ul>
            </div>
          </div>  
         
       
      
        </div>
      </div>
    
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
