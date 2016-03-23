<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" >
    <meta name="description" content="Sorry the page you are looking for does not exist.">
    <meta name="keywords" content="">
    <meta name="author" content="Auto Quotable">
    <meta property="og:title" content="Contact Us | Auto Quotable"/>
    <meta property="og:image" content="assets/images/link-image.jpg"/>
    <meta property="og:url" content="http://www.autoquotable.com"/>
    <meta property="og:site_name" content="Auto Quotable"/>
    <meta property="og:description" content="Sorry the page you are looking for does not exist."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@autoquotable" />
    <meta name="twitter:title" content="Contact Us | Auto Quotable"/>
    <meta name="twitter:description" content="Sorry the page you are looking for does not exist." />
    <meta name="twitter:image" content="assets/images/link-image.jpg" />
    <link rel="image_src" href="assets/images/link-image.jpg"/>
    <link rel="icon" href="assets/images/auto_quotable_favicon.png">
    <title>Auto Quotable | 404 Page</title>
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
<body ng-app="MyApp">
    <div class="nav" ng-controller="MainController">
        <app-header info="navlist"></app-header>
    </div><!--//ng-controller-->

<!-- Header ========================================== -->
<header id="pricing">
    <div class="container">
        <h1>404 Error. Sorry, That Page Does Not Exist.</h1>
    </div>
</header>
<!-- Main =========================================== -->
<section id="contact">
    <div class="container">
        <div class="col-md-4 col-sm-4 col-sm-offset-4 col-md-offset-4">
            <i class="fa fa-envelope fa-3x"></i>
            <h4><a href="mailto:contact@autoquotable.com">contact@autoquotable.com</a></h4>
        </div>
    </div>
</section>
<section id="form">    
     <div class="container">
         <div class="row info">
             <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
                 <div class="content2">
                     <h2 id="contact-title">Send Us A Message</h2>
                    <form role="form" action="assets/php/form.php" method="post" id="contact-form" name="contact-form">
                        <div class="form-group">
                            <label for="name" class="form-label">Name:</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" class="form-control" name="email" required>
                        </div>
                        <div class="form-group textplace">
                            <label for="textarea" class="form-label">Your Message:</label>
                            <textarea class="form-control" rows="5" name="msg" required></textarea>
                        </div>
                        <span id="submit-area">
                            <input type="submit" class="btn btn-default" id="notify" value="Submit">
                        </span>    
                    </form> 
                    <div id="success-form" class="alert alert-success" role="alert">Successfully sent! We will get back to you as soon as possible.
                    </div>
                    <div id="fail-form" class="alert alert-warning" role="alert">Sorry. Something went wrong. Please try again.
                    </div>
                 </div>     
             </div>
         </div>
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

        var form = $("#contact-form");
        form.validate({
            messages: {
                name: "Please enter your name.",
                email: "Please enter your email address.",
                msg: "Please enter a message."
            }
        });
        $('#notify').click(function () {
            if (form.valid()) {
                //do nothing
            } else {
                e.preventDefault();
            }
        });
    </script>
  </body>
</html>
