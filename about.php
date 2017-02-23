<?php include_once("head.php"); ?>

<body>
<div class="container-fluid">
    <!-- row 1: header -->
    <?php include_once("menu.php"); ?>

    <br>
    <div class="row">
        <article class="col-sm-9 col-sm-push-3">
            <dl class="dl-horizontal">
                <dt>About Us</dt>
                <dd>
                    20 Years of Experience<br>
                    Commercial and Residential Service<br>
                    Bonded and Insured<br>
                    References Available<br>
                </dd><br>
                <dt>Hours of Operation</dt>
                <dd>
                    Mon-Sat: 8am-5pm<br>
                    Sun: Closed<br>
                    <em>Note: Hours may vary depending on work scheduled.</em>
                </dd><br>
                <dt>Location</dt>
                <dd>
                    Based in Brentwood, CA<br>
                    Serving the Contra Costa area
                </dd>
            </dl>
        </article>
        <aside class="col-sm-3 col-sm-pull-9">
            <address>
                <strong>Peter's Garden Service</strong><br>
                Brentwood, CA 94513<br>
                <abbr title="Phone">P: </abbr><a href="tel:9257654501"> (925)765-4501</a>
            </address>
            <br>
            <address>
                <strong>Pedro Dominguez</strong><br>
                <a href="mailto:petersgardenservice@gmail.com">petersgardenservice@gmail.com</a>
            </address><br>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-2 col-md-3 hidden-sm hidden-xs">
                    </div>
                    <div class="col-xs-5 col-md-3">
                        <a href="https://plus.google.com/+petersgardenservice">
                            <img src="icons/googleplus.png" alt="Google Plus logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-5 col-md-3">
                        <a href="https://www.yelp.com/biz/peters-gardening-service-brentwood">
                            <img src="icons/yelp.png" alt="Yelp logo" class="img-responsive">
                        </a>
                    </div>
                    <div class="col-xs-2 col-md-3 hidden-sm hidden-xs">
                    </div>
                </div>

            <!-- <button type="button" class="btn btn-danger btn-block">Yelp</button>
            <button type="button" class="btn btn-primary btn-block">Facebook</button> -->
        </aside>
    </div>


    <!-- row 4 -->

    <!-- footer -->
    <?php include_once("footer_menu.php"); ?>
</div> <!-- end container -->
<script>
$(function(){
    $("#about").addClass("active");
});
</script>
<?php include_once("js_includes.php"); ?>
</body>
</html>
