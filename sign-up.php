<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" >
    <meta name="description" content="Sign up your auto body repair shop to receive local quote requests. See all the details of the request for free. Pay when you want.">
    <meta name="keywords" content="">
    <meta name="author" content="Auto Quotable">
    <meta property="og:title" content="Auto Body Repair Shop Sign Up | Auto Quotable"/>
    <meta property="og:image" content="assets/images/link-image.jpg"/>
    <meta property="og:url" content="http://www.autoquotable.com"/>
    <meta property="og:site_name" content="Auto Quotable"/>
    <meta property="og:description" content="Sign up your auto body repair shop to receive local quote requests. See all the details of the request for free. Pay when you want."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@autoquotable" />
    <meta name="twitter:title" content="Auto Body Repair Shop Sign Up | Auto Quotable"/>
    <meta name="twitter:description" content="Get more work for your auto body repair shop." />
    <meta name="twitter:image" content="assets/images/link-image.jpg" />
    <link rel="image_src" href="assets/images/link-image.jpg"/>
    <link rel="icon" href="assets/images/auto_quotable_favicon.png">
    <title>Auto Quotable | Auto Body Repair Shop Sign Up</title>
    <!-- CSS -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"/>
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
<body ng-app="MyApp">
    <div class="nav" ng-controller="MainController">
        <app-header info="navlist"></app-header>
    </div><!--//ng-controller-->

<!-- Header ========================================== -->
<header id="sign-up-page">
    <div class="container">
        <h2>Get More Work</h2>
        <h4>Auto Quotable sends you requests for auto body repair estimates from nearby customers. You choose when to send an estimate.</h4>
    </div>
</header>
<!-- Main =========================================== -->
<section id="form" class="sign-up-section">
    <h1 id="quote-title">Sign up to grow your business.</h1>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div id="success" class="alert alert-success" role="alert">Your request has been sent! We will email you soon.
                </div>
            	<div id="fail" class="alert alert-warning" role="alert">Sorry. Something went wrong. Please refresh and try again.
                </div>
                <form id="pro-sign-up" method="post" action="assets/php/sign-up-form.php" name="pro-sign-up">
                <div class="form">   
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control required" name="email" id="" required>
                </div>
                <div class="form-group">
                    <label for="bodyshop" class="form-label">Body Shop Name:</label>
                    <input type="text" class="form-control" name="bodyshop" id="" required>
                </div>
                <div class="form-group">
                    <label for="zip" class="form-label">Zip Code:</label>
                    <input type="text" class="form-control" name="zip" id="" required>
                </div>
                <div class="form-group text-group">
                    <label for="textarea" class="form-label">Leave a comment or question (optional):</label>
                    <textarea type="text" class="form-control" name="textarea" id="" rows="4" cols="15"></textarea>
                </div>
                <div class="buttons">
                    <span id="submit-area">
                        <input type="submit" class="btn btn-default" id="submit-pro-form" value="Submit">
                    </span>
                </div>  
                </div>
                <div class="terms">
                    <p>I have read and agreed to the <a href="terms-of-use.php" target="_blank">terms of use.</a></p>
                    <p><i class="fa fa-lock"></i> We hate spam and promise to keep your email safe.</p>
                </div>    
                </form>
                <div class="loading">
                    <div id="circularG">
<div id="circularG_1" class="circularG">
</div>
<div id="circularG_2" class="circularG">
</div>
<div id="circularG_3" class="circularG">
</div>
<div id="circularG_4" class="circularG">
</div>
<div id="circularG_5" class="circularG">
</div>
<div id="circularG_6" class="circularG">
</div>
<div id="circularG_7" class="circularG">
</div>
<div id="circularG_8" class="circularG">
</div>
</div>
                </div>
            </div>
        </div>
    </div><!--//modal dialog -->
</section>

<!-- Footer  ========================================== -->
    
    
    <div class="main" ng-controller="MainController">
        <app-footer info="footerList"></app-footer>
    </div><!--//ng-controller-->
    
    
<!-- Javascript -->
     <!-- Angular Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.min.js"></script>
    <script src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.12.1.js"></script>
    <!-- Jquery -->
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <!-- Angular Module -->
    <script src="assets/js/app.js"></script>
    <!-- Angular Controller -->
    <script src="assets/js/controllers/MainController.js"></script>
    <!-- Angular Directive -->
    <script src="assets/js/directives/header.js"></script>
    <script src="assets/js/directives/footer.js"></script>
    <!-- Frameworks -->
    <script src="assets/js/frameworks/bootstrap.min.js"></script>
    <script src="assets/js/frameworks/fileinput.min.js"></script>
    <script src="assets/js/form2.js"></script>
    <script src="assets/js/frameworks/jquery.validate.min.js"></script>
    <script>
        jQuery.validator.setDefaults({
            debug: true
        });

        var form = $("#pro-sign-up");
        form.validate({
            messages: {
                name: "Please enter your name.",
                email: "Please enter your email address.",
                zip: "Please enter your body shop's zip code.",
                bodyshop: "Please enter the name of your body shop."
            }
        });
        $('#submit-pro-form').click(function () {
            if (form.valid()) {
                //do nothing
            } else {
                e.preventDefault();
            }
        });
    </script>
  </body>
</html>
