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

            <p><a href="services.php" class="btn btn-primary btn-lg">See Full List of Services</a></p>
        </div>
        <div class="col-sm-4 hidden-xs">
            <img class="img-responsive img-rounded" src="images/index.jpg" alt="Landscaped Yard with Retaining Wall">
        </div>



    </div><!-- end row 3 -->
    
    <!-- row 4 -->
    <?php include_once("footer_menu.php"); ?>

</div> <!-- end container -->
<script>
$(function(){
    $("#index").addClass("active");
});
</script>
<?php include_once("head.php"); ?>
</body>
</html>
