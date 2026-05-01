<!DOCTYPE html>
<html lang="he">
	<head>
  <?php
 $requestedUrl = $_GET['url'];
 $directory = './json_files/';
 $json = file_get_contents($directory . $requestedUrl);
 $data = json_decode($json, true);
 $title = isset($data['title']) ? $data['title'] : 'N/A';
 echo   "<title>{$title}</title>";
?>            

		
        <base href="../" >
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
        <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-M8LHLD66");
    </script>
	  </head>
  <body>
 <noscript>
  <iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-M8LHLD66"
        height="0"
        width="0"
        style="display: none; visibility: hidden">
      </iframe>
    </noscript>
  	    <div class="contact-bar py-2 fixed-top green-bar">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-6 mb-2 mb-md-0">
            <p class="mb-0 phone pl-md-2">
              <a href="tel:0526416831" class="mr-2" style="color: #fff">
                <span class="fa fa-phone mr-1"></span> 052-6416831
              </a>
              <a
                href="https://wa.me/+972526416831?text=%D7%A9%D7%9C%D7%95%D7%9D%2C%20%D7%94%D7%92%D7%A2%D7%AA%D7%99%20%D7%93%D7%A8%D7%9A%20%D7%94%D7%90%D7%AA%D7%A8%20%D7%95%D7%90%D7%A0%D7%99%20%D7%9E%D7%A2%D7%95%D7%A0%D7%99%D7%99%D7%9F%2F%D7%AA%20%D7%91%D7%A4%D7%A8%D7%98%D7%99%D7%9D%20%D7%A2%D7%9C%20%D7%9B%D7%9C%D7%91%D7%A0%D7%95%D7%AA%20%D7%98%D7%99%D7%A4%D7%95%D7%9C%D7%99%D7%AA"
                target="_blank"
                style="color: #fff"
              >
                <span class="fa fa-whatsapp mr-1"></span> שלחו הודעה
              </a>
              <a
                href="https://www.facebook.com/profile.php?id=61558537584241"
                target="_blank"
                style="color: #fff"
              >
                <span class="fa fa-facebook-f"
                  ><i class="sr-only">Facebook</i></span
                >
              </a>
            </p>
          </div>
          <div class="col-12 col-md-6 text-md-end"></div>
        </div>
      </div>
    </div>
    <nav
      class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light nav-margin"
      id="ftco-navbar"
    >
	    <div class="container">
	      <a class="navbar-brand" href="index.html">כלבנות טיפולית וחוגים </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> תפריט
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="index.html" class="nav-link">ראשי</a></li>
	          <li class="nav-item "><a href="about.html" class="nav-link">בואו נכיר</a></li>          
             <li class="nav-item"><a href="pricing.html" class="nav-link">טיפול ומחיר</a></li>
             <li class="nav-item"><a href="class.html" class="nav-link">חוגי כלבנות</a></li>
             <li class="nav-item"><a href="fear.html" class="nav-link">פחד מכלבים</a></li>
          <li class="nav-item">
              <a href="gefen.html" class="nav-link"> גפ"ן</a>
            </li>
			<li class="nav-item active"><a href="blog.php" class="nav-link">בלוג</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">יצירת קשר</a></li>			
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
          	
          </div>
        </div>
      </div>
    </section>

		<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 ftco-animate">
          	<p>
              <img src="images/image_1.jpg" alt="" class="img-fluid">
            </p>
            <?php
            $requestedUrl = $_GET['url'];
            $directory = './xml_files/';
            $filePath = $directory . $requestedUrl;
            // Decode JSON content
            $xml = simplexml_load_file($filePath);
            
            $title = isset($xml->title) ?  $xml->title  : 'N/A';
            $content = isset($xml->content) ? $xml->content : 'N/A';
            echo   "<h2 class='mb-3'>{$title}</h2>";
            echo "<p>{$content}</p>";
              
            ?>            

             
          

     

          </div> <!-- .col-md-8 -->
         

        </div>
      </div>
    </section> <!-- .section -->

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">כלבנות טיפולית. טיפול רגשי בבעלי חיים</a></h2>
              <p>כלבים הם לא כל החיים שלנו,
				אבל הם הופכים את חיינו שלמים.</p>              
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