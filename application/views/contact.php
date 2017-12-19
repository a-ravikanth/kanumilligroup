<!--
Au<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Kanumilli Infra</title>
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

<style>

    .modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
    </style>

</head>
<body>
<body>
<?php  require_once 'header.php';?>
  <!---->

<div class="breadcrumbs">

    <div class="container">
	<ol class="breadcrumb breadcrumb1 setwow slideInLeft animated" data-wow-delay=".5s">
  <li class="breadcrumb-item"><a href="<?=base_url();?>dashboard">Home</a></li>
  <li class="breadcrumb-item active">Contact Us</li>
</ol>
</div>

    </div>
<!-- contact -->
<div class="contact">
<div class="gallery">
<h3 class="text-center">How To Find Us</h3>
</div>
			<p class="text-center"></p>
<div class="address"><!--address-->
		<div class="container">

			<div class="address-row">
				<div class="col-md-6 address-left wow fadeInLeft animated animated" data-wow-delay=".5s" >
					<div class="address-grid">
						<span style="color:#ffffff"><?php echo $this->session->flashdata('msg');?></span>
						<h4 class="wow fadeIndown animated animated" data-wow-delay=".5s" >DROP US A LINE </h4>
						<form name="contact" id="contact" method="post" action="<?php echo base_url();?>contact/sendemail">
							<input name="name" class="wow fadeIndown animated animated" data-wow-delay=".6s" placeholder="Name" required="" style="visibility: visible; animation-delay: 0.6s;" type="text">
							<input name="email" class="wow fadeIndown animated animated" data-wow-delay=".7s" placeholder="Email" required="" style="visibility: visible; animation-delay: 0.7s;" type="email">
							<input name="subject" class="wow fadeIndown animated animated" data-wow-delay=".8s" placeholder="Subject" required="" style="visibility: visible; animation-delay: 0.8s;" type="text">
							<textarea name="message" class="wow fadeIndown animated animated" data-wow-delay=".8s" placeholder="Message" required="" style="visibility: visible; animation-delay: 0.8s;"></textarea>
							<input class="wow fadeIndown animated animated" data-wow-delay=".9s" value="SEND" style="visibility: visible; animation-delay: 0.9s;" type="submit">
						</form>
					</div>
				</div>
				<div class="col-md-6 address-right">
					<div class="address-info wow fadeInRight animated animated" data-wow-delay=".5s" >
						<h4>ADDRESS</h4>
						<p>Plot No-C60,Film Nagar,Road No-1,Jubilee Hills, Hyderabad, Telangana-500033.</p>
					</div>
					<div class="address-info address-mdl wow fadeInRight animated animated" data-wow-delay=".7s" >
						<h4>PHONE </h4>
						<p>+91 9100725555</p>
						<p>+91 8008674444</p>
					</div>
					<div class="address-info wow fadeInRight animated animated" data-wow-delay=".6s" >
						<h4>MAIL</h4>
						<p> info@kanumilligroup.com</p>
						<p> prasad@kanumilligroup.com</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="spec ">

				<div class="ser-t">
					<b></b>
					<span><i></i></span>
					<b class="line"></b>
				</div>
		</div>
             <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                        <div role="alert" class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                <strong>Well done!</strong>
                                <?=$this->session->flashdata('SUCCESSMSG')?>
                        </div>
                <?php } ?>

		<div class=" contact-w3">


			<div class="col-md-12 contact-left">

			</div>

		<div class="clearfix"></div>
	</div>
	</div>
</div>
<!-- //contact -->

<!--footer-->
<?php require 'footer.php';?>
<!-- //footer-->
<!-- tabs -->

  <script src="<?=base_url();?>js/easyResponsiveTabs.js" type="text/javascript"></script>
</body>
</html>
