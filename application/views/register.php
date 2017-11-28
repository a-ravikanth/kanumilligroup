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
            <div class="breadcrumbs">
	
    <div class="container">
	<ol class="breadcrumb breadcrumb1 setwow slideInLeft animated" data-wow-delay=".5s">
  <li class="breadcrumb-item"><a href="<?=base_url();?>dashboard">Home</a></li>
  <li class="breadcrumb-item active">Register</li>
</ol>	
</div>
	
    </div>
			<div class="content">
 <!-- registration -->
	<div class="main-1">
		<div class="container">
			<div class="register grid-cell">
            <h3 class="title text-center mg-top-30">Register Form</h3>
            <div class="widget-shadow col-md-8 col-md-offset-2">
                                            <div class="login-body wow fadeInUp animated animated" data-wow-delay=".7s">
		  	  <form method="post"  action="<?php echo base_url();?>register">
				 <div class="register-top-grid">
					
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
                                               <input  type="text"  value="<?php echo set_value('firstname'); ?>"   placeholder="First Name" name="firstname" >
                                               <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('firstname'); ?></div>  
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
						<input  type="text" value="<?php echo set_value('lastname'); ?>" name="lastname"  placeholder="Last Name">
                                                <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('lastname'); ?></div>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Email Address<label>*</label></span>
						 <input  type="text" name="email" value="<?php echo set_value('email'); ?>" placeholder="Email" >
                                                 <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('email'); ?></div>
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Mobile<label>*</label></span>
						 <input  type="text"  name="phone" value="<?php echo set_value('phone'); ?>" placeholder="Phone">
                                                 <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('phone'); ?></div>
					 </div>
                     <div class="wow fadeInLeft" data-wow-delay="0.4s">
								<span>Password<label>*</label></span>
								<input  type="password" class="password"  placeholder="Password"  value="<?php echo set_value('password'); ?>" name="password">
                                                                <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('password'); ?></div>
							 </div>
                             <div class="wow fadeInRight" data-wow-delay="0.4s">
								<span>Confirm Password<label>*</label></span>
								<input  type="password" class="password" name="cpassword" value="<?php echo set_value('cpassword'); ?>"  placeholder="Confirm Password">
                                                                <div style="margin-top: 0px; font-size:13px; color: red;"><?= form_error('cpassword'); ?></div>
							 </div>

					 </div>
				     <!--<div class="register-bottom-grid">
						    <h3>LOGIN INFORMATION</h3>
							 
							 
					 </div>-->
                              <div class="register-but">
        <input  class="submit-btn" style="  background-color: #fff;
                    border: 2px solid #ff5f00;
                    color: #000;
                    display: inline-block;
                    font-size: 1.2em;
                    outline: medium none;
                    padding: 0.6em 2em;
                    text-transform: uppercase;
                    transition: all 0.5s ease 0s;" type="submit" value="submit">
                              </div>
				</form>
                </div>
                </div>
			
		   </div>
		 </div>
	</div>
<!-- registration -->

</div>

	<!--footer-->
		  <?php
                require_once 'footer.php';
            ?>
	<!--footer-->
			
</body>
</html>