<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1.0" >
    <meta name="description" content="Request free auto body repair estimates by filling out this quick form. Nearby auto body shops will then send you estimates.">
    <meta name="keywords" content="">
    <meta name="author" content="Auto Quotable">
    <meta property="og:title" content="Request An Estimate | Auto Quotable"/>
    <meta property="og:image" content="assets/images/link-image.jpg"/>
    <meta property="og:url" content="http://www.autoquotable.com"/>
    <meta property="og:site_name" content="Auto Quotable"/>
    <meta property="og:description" content="Request free auto body repair estimates by filling out this quick form. Nearby auto body shops will then send you estimates."/>
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:site" content="@autoquotable" />
    <meta name="twitter:title" content="Request An Estimate | Auto Quotable"/>
    <meta name="twitter:description" content="Request free auto body repair estimates." />
    <meta name="twitter:image" content="assets/images/link-image.jpg" />
    <link rel="image_src" href="assets/images/link-image.jpg"/>
    <link rel="icon" href="assets/images/auto_quotable_favicon.png">
    <title>Request Auto Body Repair Estimates | Auto Quotable</title>
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
<header id="quote">
    <div class="container">
        <h2>Your Zip Code: <br><span id="zip-code"><?php echo $_POST['zip']; ?></span></h2>
        <h1 id="quote-title">Complete this form and up to 3 auto body repair shops nearby will send you an estimate.</h1>
    </div>
</header>
<!-- Main =========================================== -->
<section id="form">
    <div id="success-dialog"><i class="fa fa-car fa-4x"></i><i class="fa fa-plus fa-2x"></i><i class="fa fa-wrench fa-4x"></i><i class="fa fa-arrow-right fa-2x"></i><i class="fa fa-smile-o fa-4x"></i></div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <form id="email-form" method="post" name="email-form">
            	<div id="success" class="alert alert-success" role="alert">Your request was successfully sent! Estimates will be delivered to your email shortly.
                </div>
            	<div id="fail" class="alert alert-warning" role="alert">Sorry. Something went wrong. Please refresh and try again.
                </div>
                <div class="form">
                    <div class="form-group">
                        <?php $zip = $_POST["zip"];?>
                        <input type="hidden" name="zip" value="<?php echo htmlspecialchars($zip); ?>" placeholder="<?php echo htmlspecialchars($zip); ?>" id="zip-on-form">
                    </div>    
                <div class="form-group">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" class="form-control" name="name" id="photoUpload-name" required>
                </div>
                <div class="form-group">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control required" name="email" id="photoUpload-email" required>
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label">Phone:</label>
                    <input type="text" class="form-control" name="phone" id="photoUpload-phone">
                </div>
                <div class="form-group">
                    <label for="vin" class="form-label">Vehicle Identification Number (VIN):</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-question-circle" id="popover" title="Find Your VIN" data-toggle="popover" title="Find Your VIN" data-content="The easiest way to find your VIN is to stand outside the vehicle on the driver's side and look at the corner of the dashboard where it meets the windshield. If the VIN cannot be found there, open the driver's side door and look at the door post (where the door latches when it is closed). Your VIN should be 17 characters long."></i></div>
                        <input type="text" class="form-control" name="vin" id="photoUpload-vin" minlength="17" maxlength="17" size="17" required>
                    </div>
                </div>   
                <div class="form-group text-group">
                    <label for="textarea" class="form-label">A brief description of your problem:</label>
                    <textarea type="text" class="form-control" name="textarea" id="photoUpload-textarea" rows="4" cols="15"></textarea>
                </div>
                <div class="buttons">
                    <div class="form-group">
                        <input id="file-1" type="file" name="photo1" multiple="true" required>
                    </div>
                    <span id="submit-area">
                        <input type="submit" onclick="goog_report_conversion" class="btn btn-default" id="submit" value="Complete">
                    </span>
                </div>  
                </div>
                <div class="terms">
                    <p>I have read and agreed to the <a href="terms-of-use.php" target="_blank">terms of use.</a></p>
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
    
    
<!-- Conversion Tracking -->
    
    <!-- Google Code for AQ Form Submitted Conversion Page
In your html page, add the snippet and call
goog_report_conversion when someone clicks on the
chosen link or button. -->
<script type="text/javascript">
  /* <![CDATA[ */
  goog_snippet_vars = function() {
    var w = window;
    w.google_conversion_id = 1048665227;
    w.google_conversion_label = "VF_JCMuZ92QQi7mF9AM";
    w.google_remarketing_only = false;
  }
  // DO NOT CHANGE THE CODE BELOW.
  goog_report_conversion = function(url) {
    goog_snippet_vars();
    window.google_conversion_format = "3";
    var opt = new Object();
    opt.onload_callback = function() {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  }
  var conv_handler = window['google_trackConversion'];
  if (typeof(conv_handler) == 'function') {
    conv_handler(opt);
  }
}
/* ]]> */
</script>
<script type="text/javascript"
  src="//www.googleadservices.com/pagead/conversion_async.js">
</script>

    
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
    <script src="assets/js/form.js"></script>
    <script src="assets/js/frameworks/jquery.validate.min.js"></script>
    <script>
        jQuery.validator.setDefaults({
            debug: true
        });
        var form = $("#email-form");
        form.validate({
            messages: {
                name: "Please enter your first name.",
                email: "Please enter your email address.",
                vin: "Please provide your 17 digit VIN.",
                image: "Please provide an image of your issue."
            }
        });
        $('#submit').click(function () {
            if (form.valid()) {
                //do nothing
            } else {
                e.preventDefault();
            }
        });

    </script>
    <script>
    $("#file-1").fileinput({
		showUpload: false,
		showCaption: false,
		browseClass: "btn btn-default",
		fileType: "any",
        browseLabel: "Upload/Take Photo",
        browseIcon: '<i class="fa fa-camera"></i>',
        showRemove: false,
	}); 
    $(document).ready(function() {
        $("#test-upload").fileinput({
            'showPreview' : false,
            'allowedFileExtensions' : ['jpg', 'png','gif'],
            'elErrorContainer': '#errorBlock'
        });
    });
	</script>
  </body>
</html>
