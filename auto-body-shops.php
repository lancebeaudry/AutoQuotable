<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" >
    <meta name="description" content="Auto Quotable helps your business grow by sending you auto body repair quote requests from nearby customers. You choose when to quote.">
    <meta name="keywords" content="">
    <meta name="author" content="Auto Quotable">
    <meta property="og:title" content="Auto Body Shops & Professionals | Auto Quotable"/>
    <meta property="og:image" content="assets/images/link-image.jpg"/>
    <meta property="og:url" content="http://www.autoquotable.com"/>
    <meta property="og:site_name" content="Auto Quotable"/>
    <meta property="og:description" content="Auto Quotable helps your business grow by sending you auto body repair quote requests from nearby customers. You choose when to quote."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@autoquotable" />
    <meta name="twitter:title" content="Auto Body Shops & Professionals | Auto Quotable"/>
    <meta name="twitter:description" content="Get more auto body repair requests." />
    <meta name="twitter:image" content="assets/images/link-image.jpg" />
    <link rel="image_src" href="assets/images/link-image.jpg"/>
    <link rel="icon" href="assets/images/auto_quotable_favicon.png">
    <title>Auto Quotable | Auto Body Shops & Professionals</title>
    <!-- CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
    <link href="assets/css/slick.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/styles.css" rel="stylesheet">
    <link href="assets/css/styles.scss" rel="stylesheet">    
    <!-- Google Analytics -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-67804500-1', 'auto');
  ga('send', 'pageview');

</script>
  </head>
<body ng-app="MyApp" id="homepage">
    <div class="nav" ng-controller="MainController">
        <app-header info="navlist"></app-header>
    </div><!--//ng-controller-->

<!-- Header ========================================== -->
<header id="auto-body">
    <div class="header-content col-md-6 col-sm-6">
        <h1>We send you auto body repair estimate requests from nearby customers.</h1>
        <h2> You choose when to estimate.</h2>
        <a href="sign-up.php"><button type="button" class="btn btn-default try" id="sign-up">Sign Up <i class="fa fa-arrow-right"></i></button></a>
        <a href="#about"><button type="button" class="btn btn-default try" id="learn-more">Learn More <i class="fa fa-arrow-down"></i></button></a>
    </div>
</header>
<!-- Main =========================================== -->
<a name="about" class="anchor" id="about"></a>    
<section id="about" class="about-pros">
    <h2>How Does Auto Quotable Help You?</h2>
    <h5>Auto Quotable helps you grow your business. Customers fill out our form to request nearby auto body repair estimates. You can view the details of their request (for free) and if it looks like a fit, you can respond with a custom estimate and work out the details.</h5>
    <div class="container about-section">
        <div class="col-md-offset-2 col-md-4 col-sm-offset-0 col-sm-6 col-xs-12">
            <h3>1. We Send You Customer Requests</h3>
            <div class="paragraph">
                <ul>
                    <i class="fa fa-check"></i><li>Customers come to Auto Quotable for auto body repair needs.</li>
                    <i class="fa fa-check"></i><li>They fill out a simple form with their name, email, VIN, a brief description, and a photo of the issue.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-offset-0 col-md-4 col-sm-offset-0 col-sm-6 col-xs-12">
            <img src="assets/images/pros-quotes.png" alt="macbook" class="about-img" id="pros-quote"/>
        </div>
    </div>
    <div class="container about-section">
        <div class="col-md-offset-2 col-md-2 col-sm-offset-0 col-sm-6" id="show-lg-img">
            <img src="assets/images/quote-example.png" alt="iphone 6" class="about-img" id="quote-example"/>
        </div>
        <div class="col-md-offset-2 col-md-4 col-sm-offset-0 col-sm-6">
            <h3>2. You Decide Who To Send An Estimate To</h3>
            <div class="paragraph">
                <ul>
                    <i class="fa fa-check"></i><li>We email you requests from customers nearby.</li>
                    <i class="fa fa-check"></i><li>If you are interested, you can send an estimate to the customer.</li>
                    <i class="fa fa-check"></i><li>You only pay when you send an estimate.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 col-sm-2 col-xs-12" id="show-sm-img">
            <img src="assets/images/quote-example.png" alt="macbook" class="about-img" id="quote-example"/>
        </div>
    </div>
    <div class="container about-section">
        <div class="col-md-offset-2 col-md-4 col-sm-offset-0 col-sm-6">
            <h3>3. Get More Work. Over and Over Again.</h3>
            <div class="paragraph">
                <ul>
                    <i class="fa fa-check"></i><li>You and the customer work out the details.</li>
                    <i class="fa fa-check"></i><li>You save time and money looking for more jobs.</li>
                </ul>
            </div>
        </div>
        <div class="col-md-offset-0 col-md-4 col-sm-offset-0 col-sm-6">
            <img src="assets/images/repeat-jobs.png" alt="macbook" class="about-img" id="repeat-jobs"/>
        </div>
    </div>
</section>  
<section id="cta">
    <div class="container">
        <h2>Get More Work Today!</h2>
            <a href="sign-up.php"><button type="button" class="btn btn-default try" id="sign-up-bottom">Sign Up <i class="fa fa-arrow-right"></i></button></a>
    </div>
</section>
  

<!-- Footer  ========================================== -->
    <div class="main" ng-controller="MainController">
        <app-footer info="footerList"></app-footer>
    </div><!--//ng-controller-->
    
    
<!-- Javascript -->
    <!-- Angular Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Jquery -->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <!-- Angular Module -->
    <script src="assets/js/app.js"></script>
    <!-- Angular Controller -->
    <script src="assets/js/controllers/MainController.js"></script>
    <!-- Angular Directive -->
    <script src="assets/js/directives/header.js"></script>
    <script src="assets/js/directives/footer.js"></script>
<!--<script src="assets/js/directives/camera.js"></script>-->
   <script src="assets/js/directives/modal.js"></script>
    <!-- Frameworks -->
    <script src="assets/js/frameworks/bootstrap.min.js"></script>
    <script src="assets/js/frameworks/wow.min.js"></script>
    <script src="assets/js/frameworks/formvalidate.jquery.json"></script>

    <!-- Animations -->
<script>
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
var wow = new WOW(
  {
    boxClass:     'wow',      // animated element css class (default is wow)
    animateClass: 'animated', // animation css class (default is animated)
    offset:       0,          // distance to the element when triggering the animation (default is 0)
    mobile:       false,       // trigger animations on mobile devices (default is true)
    live:         true        // act on asynchronously loaded content (default is true)
  }
);
wow.init();
</script>
  </body>
</html>
