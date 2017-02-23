<?php include_once("head.php"); ?>

<body>
<div class="container">
    <!-- row 1: header & navigation -->
    <?php include_once("menu.php"); ?>
    
    <!-- Start of page content -->
    <div class="row">
        <div class="col-xs-12">
            <form name="contactform" method="post" action="send_email_form.php" data-toggle="validator">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" pattern="^[A-Za-z .'-]+$" data-minlength="2" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="email_address">Email Address</label>
                    <input type="email" class="form-control" name="email_address" id="email_address" placeholder="you@example.com" required>
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label for="email_confirm">Confirm Email</label>
                    <input type="email" class="form-control" name="email_confirm" placeholder="you@example.com" data-match="#email_address" required>
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
    <?php include_once("footer_menu.php"); ?>

</div> <!-- end container -->

<?php include_once("js_includes.php"); ?>
<script src="js/validator.js"></script>

<script>
$(function(){
    $("#contact").addClass("active");
});
</script>

</body>
</html>
