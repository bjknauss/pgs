<?php include_once("head.php"); ?>
<body>
<div class="container-fluid">
    <!-- row 1: header -->
    <?php include_once("menu.php"); ?>
    
    
    <!-- row 3: article/aside -->
    <div class="row">
        <div class="jumbotron col-sm-8">
            <h2>Welcome to Peter's Garden Service</h2>
            <p>With 20 years of experience, we can cater to all your residential or commercial landscaping needs. Our services include weeding, trimming, pruning, edging, and more.</p>

            <p><a href="services.html" class="btn btn-primary btn-lg">See Full List of Services</a></p>
        </div>
        <div class="col-sm-4 hidden-xs">
            <img class="img-responsive img-rounded" src="images/index.jpg" alt="Landscaped Yard with Retaining Wall">
        </div>



    </div><!-- end row 3 -->
    
    <!-- row 4 -->
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
<script>
$(function(){
    $("#index").addClass("active");
});
</script>
<?php include_once("head.php"); ?>
</body>
</html>
