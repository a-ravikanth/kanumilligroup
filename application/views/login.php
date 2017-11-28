<!DOCTYPE HTML>
<html>
<head>
<title>Developer</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url();?>css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url();?>js/jquery.min.js"></script>
<!-- cart -->
		<script src="<?=base_url();?>js/simpleCart.min.js"> </script>
	<!-- cart -->
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-3.1.1.min.js"></script>
<script src="<?=base_url();?>js/imagezoom.js"></script>

						<!-- FlexSlider -->
  <script defer src="<?=base_url();?>js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?=base_url();?>css/flexslider.css" type="text/css" media="screen" />

<script>
// Can also be used with $(document).ready()
$(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide",
    controlNav: "thumbnails"
  });
});
</script>



</head>
<body>
	<!--header-->
		<?php 
                require_once 'header.php';
                ?>
			<!--header-->
			<!--contact-->
            <div class="breadcrumbs">
	
    <div class="container">
	<ol class="breadcrumb breadcrumb1 setwow slideInLeft animated" data-wow-delay=".5s">
  <li class="breadcrumb-item"><a href="<?=base_url();?>dashboard">Home</a></li>
  <li class="breadcrumb-item active">Login</li>
</ol>	
</div>
	
    </div>
			<div class="content">
 <div class="main-1">
 
		<div class="container">
<div class="login-page">
			   <div class="account_grid">
			   <div class="col-md-5 login-left  wow fadeInLeft animated animated" data-wow-delay=".5s">
			  	 <h3>NEW CUSTOMERS</h3>
				 <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                                 <a class="acount-btn" href="<?=base_url()?>register">Create an Account</a>
			   </div>
               <div class="col-md-1">
               </div>
			   <div class="col-md-6 login-right">
               <h3 class="title text-center">REGISTERED CUSTOMERS</span></h3>
			<p class="text-center">If you have an account with us, please log in. </p>
			 
                                  <?php if($this->session->flashdata('error')) { ?>
                                                    <div role="alert" class="alert alert-danger">
                                                            <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                                            <?=$this->session->flashdata('error')?>
                                                    </div>
                                            <?php } ?>
                                            <div class="widget-shadow">
                                            <div class="login-body wow fadeInUp animated animated" data-wow-delay=".7s">
				<form action="<?=base_url();?>login/verify" method="post">
				  <div>
                                      <span>Email Address <label style="color: #ff3333;">*</label></span>
                                        <input type="text" required="" name="email" placeholder="Email" > 
				  </div>
				  <div>
					<span>Password <label style="color: #ff3333;    ">*</label></span>
                                        <input type="password" class="password" name="password" required="" placeholder="Password"> 
				  </div>
                  <div class="forgot-grid">
						<label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Remember me</label>
						<div class="forgot">
							<a href="#">Forgot Password?</a>
						</div>
						<div class="clearfix"> </div>
					</div>
				  <input type="submit" value="Login">
			    </form>
                </div>
			   </div>
               <div class="login-page-bottom">
			<h5> - OR -</h5>
			<div class="social-btn"><a href="#"><i>Sign In with Facebook</i></a></div>
			<div class="social-btn sb-two"><a href="#"><i>Sign In with Twitter</i></a></div>
		</div>
               </div>	
			   <div class="clearfix"> </div>
			 </div>
		   </div>
		   </div>
	</div>
	</div>

</div>

	<!--footer-->
		<?php 
                require_once 'footer.php';
                ?>
	<!--footer-->
			
</body>
</html>