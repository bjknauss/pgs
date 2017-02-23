<?php include_once("head.php"); ?>

<body>
<div class="container-fluid">
    <!-- row 1: header -->
    <?php include_once("menu.php"); ?>
    
    <!-- row 3: article/aside -->
    <div class="row">
        <div class="col-md-3">
            <h3>Landscape Maintenance Services</h3>
            <ul class="services">
                <li>Mowing</li>
                <li>Weeding</li>
                <li>Edging</li>
                <li>Trimming</li>
                <li>Pruning</li>
                <li>Repair Work</li>
            </ul>
        </div>
        <div class="col-md-9">
            <h2>Landscape Design and Installation</h2>
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/lawn.jpg" alt="Lawn Thumbnail">
                        <div class="caption">
                            <h3>Lawn<br><small>Real and Artificial Lawn Installation</small></h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/garden.jpg" alt="Garden Thumbnail">
                        <div class="caption">
                            <h3>Plants and Garden</h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-xs-block"></div>
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/wall.jpg" alt="Retaining Wall Thumbnail">
                        <div class="caption">
                            <h3>Retaining Walls<br>
                                <small>Build and Repair Retaining Walls</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/patio.jpg" alt="Patio Thumbnail">
                        <div class="caption">
                            <h3>Patios<br>
                                <small>Design and Build Patios</small>
                            </h3>
                        </div>
                    </div>
                </div>
                <div class="clearfix visible-xs"></div>
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/concrete.jpg" alt="Concrete Thumbnail">
                        <div class="caption">
                            <h3>Concrete</h3>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4 col-xs-6">
                    <div class="thumbnail">
                        <img class="img-responsive img-rounded" src="images/services/irrigation.jpg" alt="Irrigation Thumbnail">
                        <div class="caption">
                            <h3>Irrigation<br>
                                <small>Install and Repair Irrigation</small>
                            </h3>
                        </div>
                    </div>
                </div>
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
    $("#services").addClass("active");
});
</script>
<?php include_once("js_includes.php"); ?>
</body>
</html>
