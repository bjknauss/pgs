<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Peter's Garden Service</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- Lightbox -->
    <link href="css/lightbox.css" rel="stylesheet">
    <link href="css/validator.css" rel="stylesheet">
    <!-- Google Analytics -->
    <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-86830070-1', 'auto');
          ga('send', 'pageview');
    </script>
</head>

<body>
<div class="container">
    <!-- row 1: header -->
    <header class="row">
        <div class="page-header">
            <div class="col-lg-7 col-sm-7">
                <h1 class="hidden-xs">Peter's Gardening Service
                    <br><small>Serving Contra Costa County, CA</small>
                </h1>
                <h3 class="visible-xs">
                    Peter's Gardening Service<br>
                    <small><a href="tel:9257654501">(925) 765-4501</a></small><br>
                    <small>Serving Contra Costa County, CA</small>
                </h3>
            </div>
            <div class="col-lg-5 col-sm-5 hidden-xs">
                <h3>Call for Landscaping Services<br>
                    <small><a href="tel:9257654501">(925) 765-4501</a></small>
                </h3>
            </div>
        </div>
    </header>

    <!-- row 2: navigation -->
    <div class="row">
        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="glyphicon glyphicon-list"></span> Menu
                </button>
            </div>
            <div class="collapse navbar-collapse" id="collapse">
                <ul class="nav navbar-nav">
                    <li id="index"><a href="index.html">Home</a></li>
                    <li id="services"><a href="services.html">Services</a></li>
                    <li id="gallery"><a href="gallery.html">Photo Gallery</a></li>
                    <li id="about"><a href="about.html">About Us</a></li>
                    <li id="contact" class="active"><a href="contact.html">Contact Us</a></li>  
                </ul>
            </div>
        </nav>
    </div>
    <!-- Start of page content -->
    <div class="row">
        <div class="col-xs-12">
            <form name="contactform" action="post" action="send_email_form.php" data-toggle="validator">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" pattern="^[A-Za-z .'-]+$" data-minlength="2" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="email_address">Email Address</label>
                    <input type="email" class="form-control" name="email_address" placeholder="you@example.com">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" name="phone_number">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="contact_pref">Preferred Method of Contact</label>
                    <select name="contact_pref" class="form-control">
                        <option value="either">No Preference</option>
                        <option value="phone">Phone Call</option>
                        <option value="email">Email</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="message" class="form-control" data-minlength="3" required></textarea>
                    <div class="help-block with-errors"></div>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
    </div>
    
    <!-- footer -->
    <footer class="row">
        <div class="col-xs-1 col-md-2"></div>
        <div class="hidden-xs hidden-sm col-md-2"><small>Peter's Garden Service</small></div>
        <div class="col-xs-2 col-md-1"><a href="index.html"><small>Home</small></a></div>
        <div class="col-xs-2 col-md-1"><a href="services.html"><small>Services</small></a></div>
        <div class="col-xs-2 col-md-1"><a href="gallery.html"><small>Gallery</small></a></div>
        <div class="col-xs-2 col-md-1"><a href="about.html"><small>About</small></a></div>
        <div class="col-xs-2 col-md-1"><a href="contact.html"><small>Contact</small></a></div>
        <div class="col-xs-1 col-md-3"></div>
        </div>
    </footer>

</div> <!-- end container -->

<!-- javascript -->
<script src="js/respond.js"></script>
<script src="js/jquery-3.1.1.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/lightbox.js"></script>

</body>
</html>
