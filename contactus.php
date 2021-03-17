<?php include('header.php'); ?>
<body>
<?php include('navbar.php'); ?>

    <!-- Page Content -->
    <section class="py-5" style="background-image: url('a.jpg');">
      <div class="container">
        <h1><b>Contact Us</b></h1>
        
      <!-- Contact us form-->
      <div class="container">
<div class="col-md-5" id="contact_form">
    <div class="form-area">  
        <form role="form">
        
                    <h3 style="margin-bottom: 25px; text-align: center;"></h3>
            <div class="form-group">
            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
          </div>
                    <div class="form-group">
                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                        <!-- <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                     -->
                    </div>
            
        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit</button>
        
        </form>
    </div>
</div>
</div>
<br>
<br>
</section>

<?php
	include('conn.php');
if(isset($_POST['submit']))
{


	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
 $subject=$_POST['subject'];
 $message=$_POST['message'];

	
	$sql="insert into contact_info (name, email, mobile, subject, message) values ('$name', '$email', '$mobile', '$subject','$message')";
	$conn->query($sql);
}
?>

      <!-- Contact us form ends Here-->
<?php
include "footer.php";
?>


  </body>

</html>

<!-- assets -->    
    
    <!-- <script src="assets/js/bootstrap.bundle.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/js/bootstrap.js"></script> -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/source.bootstrap.min.js"></script>
    <!-- <script src="assets/js/contact_us.js"></script> -->
    <!-- <script src="assets/js/dropdown.js"></script> -->
    <!-- <script src="assets/js/jquery.js"></script> -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- <script src="assets/js/payment.js"></script> -->
    <!-- <script src="assets/js/restaurant.js"></script> -->
    <!-- <script src="assets/js/result.js"></script> -->
    <!-- <script src="assets/js/review.js"></script> -->
    <!-- <script src="assets/js/sign_in.js"></script> -->
    <!-- <script src="assets/js/sign_up.js"></script> -->

    <!-- <link href="assets/css/account_header.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/animate.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/source.bootstrap.min.css" rel="stylesheet">
    <!-- <link href="assets/css/bootstrap-grid.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-grid.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/bootstrap-reboot.min.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/checkout.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/check-radio.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/contact_us.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/delivery.css" rel="stylesheet"> -->
    <link href="assets/css/half-slider.css" rel="stylesheet">
    <link href="assets/css/index.css" rel="stylesheet">
    <!-- <link href="assets/css/payment.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/profile.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/result.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/review.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_in.css" rel="stylesheet"> -->
    <!-- <link href="assets/css/sign_up.css" rel="stylesheet"> -->