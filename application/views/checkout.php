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
<?php  require_once 'header.php';?>

    
    
    	<!--header-->
			<div class="content">
 <!-- registration -->
	<div class="main-1">
    <div class="breadcrumbs">
	
    <div class="container">
	<ol class="breadcrumb breadcrumb1 setwow slideInLeft animated" data-wow-delay=".5s">
  <li class="breadcrumb-item"><a href="<?=base_url();?>dashboard">Home</a></li>
  <li class="breadcrumb-item active">Checkout
  </li>
</ol>	
</div>
	
    </div>
    

<div class="container">
  <div class="checkout-wrap">
    <ul id="checkout-bar" class="step1">
      <li class="step1"><span>Shipping</span></li>
      <li class="step2"><span>Order Overview</span></li>
      <li class="step3"><span>Payment</span></li>
      <li class="step4"><span>Success</span></li>
    </ul>
  </div>
  <div class="space"></div>
  
</div>


		<div class="container">
        <h3 class="steps-heading">1. Shipping Address</h3>
        <div class="col-md-8">
			<div class="register">
                           <form method="post"  action="<?php echo base_url();?>checkout">
				 <div class="register-top-grid">
					
                    <p class="checkout-SignIn">SIGN IN for a faster checkout experience, or you can continue as a guest. You will be able to create an account during checkout. </p>
                    <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Email for Order Confirmation <label>*</label></span>
                                                <input  type="text" class="reg-inputs" value=""  required="" placeholder="Email" name="email" >
					 </div>
                                        
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>First Name<label>*</label></span>
                                              <input  type="text" class="reg-inputs"  value="" required=""  placeholder="First Name" name="fname" >
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Last Name<label>*</label></span>
                                                <input  type="text" class="reg-inputs"  value=""  required="" placeholder="Last Name" name="lname" >
					 </div>
					 <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Phone<label>*</label></span>
                                                <input  type="text"  value=""  required="" placeholder="Phone" name="phone" >
					 </div>
                     
                     <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Address Line 1<label>*</label></span>
						 <input  type="text" class="reg-inputs"  value=""  required="" placeholder="Street Adress 1" name="add1" >
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Address Line 2 (Apt, Floor, Ste, etc)<label>*</label></span>
						 <input  type="text"  value="" class="reg-inputs"  placeholder="Street Adress 2" name="add2" >
					 </div>
					 
                                        <div class="wow fadeInLeft" data-wow-delay="0.4s">
						<span>Country<label>*</label></span> 	
                        <select name="country" class="countries" id="countryId" >
                            <option  name="country" value="">Select Country</option>
                        </select>
                                             <!-- <input  type="text"  value="" required=""  placeholder="Country" name="country" >-->
					 </div>
					 
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Province / Territory<label>*</label></span>
                         <select name="province" class="states" id="stateId">
                            <option  name="province" value="">Select State</option>
                        </select>
                             <!--<input  type="text"  value="" required=""   placeholder="Province / Territory" name="province" >-->
                                         </div>
                                         <div class="wow fadeInRight" data-wow-delay="0.4s">
						<span>City<label>*</label></span>
                        <select name="city" class="cities" id="cityId">
                            <option name="city" value="">Select City</option>
                        </select>
                        
						<!--<input  type="text"  value=""  required="" placeholder="City" name="city" >-->
					 </div>
					 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Postcode<label>*</label></span>
						 <input  type="text"  value="" class="reg-inputs" required=""  placeholder="Postcode" name="postcode" >
					 </div>
					 
                                        

					 <div class="clearfix"> </div>
					   <a class="news-letter" href="#">
						
					   </a>
					 </div>
                              
				    
    <div class="register-but">
    <!--    <input  style="    background-color: #fff;
        border: 2px solid #000;
        color: #000;
        display: inline-block;
        font-size: 1.2em;
        outline: medium none;
        padding: 0.6em 2em;
        text-transform: uppercase;
        transition: all 0.5s ease 0s;" type="submit" value="Continue" name="cdetail">-->
        <button type="submit" id="btn-progress" name="cdetail" type="button" class="btn btn-success">Continue</button>
    </div>
                        </form>
			
		   </div>
		 </div>
         <div class="col-md-4">
         
         	<div class="order-summary-contents">
            <div class="module-header opened">
         <h5>Order Summary</h5>
         </div>
          		<div class="order-summary-line-items clearfix">
                	<div class="grid-cell default-60 item-label">
                    Item Subtotal 
                    </div>
                    <div class="grid-cell default-40 item-value order-subtotal-value">
                    Rs.15000
                    </div>
                    <div class="grid-cell default-60 item-label">
                    Shipping 
                    </div>
                    <div class="grid-cell default-40 item-value order-subtotal-value">
                    Free
                    </div>
                    <div class="grid-cell default-60 item-label">
                    tax 
                    </div>
                    <div class="grid-cell default-40 item-value order-subtotal-value">
                    Rs0.00
                    </div>
          
          		</div>
                <div class="order-total clearfix">
                <div class="grid-cell default-60 item-label">
                Order Total 
                </div>
                <div class="grid-cell default-40 item-value order-subtotal-value">
                Rs.15000
                </div>
                </div>
                <div class="grey-border">
                </div>
                <div class="grid-cell default-100">
                <p class="footnote">Shipping and tax are calculated after the shipping step is completed.</p>
                </div>
          	</div>
         </div>
      </div>
      
	</div>
<!-- registration -->


</div>
  
   
<br>
<br>

<!--footer-->
<?php require 'footer.php';?>
<script>
$(document).ready(function() {
  $("#btn-progress").click(function() {

    var classes = ['step1', 'step2', 'step3', 'step4'];
    $('#checkout-bar').each(function() {
      this.className = classes[($.inArray(this.className, classes) + 1) % classes.length];
    });

  });
});
</script>
<script src="<?=base_url();?>js/countrystatecity.js"></script>

<!-- //footer-->
<div class="modal fade" id="header-modal" aria-hidden="true"></div>

</body>
</html>
	