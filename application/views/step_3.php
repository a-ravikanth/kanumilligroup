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
    <div class="container">
  <div class="checkout-wrap">
    <ul id="checkout-bar" class="step3">
      <li class="step1"><span>Shipping</span></li>
      <li class="step2"><span>Order Overview</span></li>
      <li class="step3"><span>Payment</span></li>
      <li class="step4"><span>Success</span></li>
    </ul>
  </div>
  <div class="space"></div>
  
</div>
    <div class="container">
        <h3 class="steps-heading">2. Payment</h3>
        
        <div class="col-md-7">
        
			<div class="register">
            <div class="col-md-12">
            <p class="pd-btm-10">Please enter billing and payment information.</p>
        
        </div>
               <form accept-charset="UTF-8" method="post"  action="<?php echo base_url();?>checkout/step_3" class="require-validation"  id="payment-form" >
               
               <div style="margin:0;padding:0;display:inline">
               <input name="utf8" type="hidden" value="✓" />
               <input name="_method" type="hidden" value="PUT" />
               <input name="authenticity_token" type="hidden" value="qLZ9cScer7ZxqulsUWazw4x3cSEzv899SP/7ThPCOV8=" />
               </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group required'>
                <label class='control-label'>Name on Card</label>
                <input class='form-control' size='4' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-12 form-group card required'>
                <label class='control-label'>Card Number</label>
                <input autocomplete='off' class='form-control card-number' size='20' type='text'>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-xs-4 form-group cvc required'>
                <label class='control-label'>CVC</label>
                <input autocomplete='off' class='form-control card-cvc' placeholder='ex. 311' size='4' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'>Expiration</label>
                <input class='form-control card-expiry-month' placeholder='MM' size='2' type='text'>
              </div>
              <div class='col-xs-4 form-group expiration required'>
                <label class='control-label'> </label>
                <input class='form-control card-expiry-year' placeholder='YYYY' size='4' type='text'>
              </div>
            </div>
            
            <div class='form-row'>
              <div class='col-md-3 form-group'>
                <button class='form-control btn btn-primary submit-button' type='submit'>Continue</button>
              </div>
            </div>
            <div class='form-row'>
              <div class='col-md-12 error form-group hide'>
                <div class='alert-danger alert'>
                  Please correct the errors and try again.
                </div>
              </div>
            </div>
          </form>
     
        
                    
                    
                    
                </div>
                
                
                
            </div>
       
        
        
        </form>
		
         <div class="col-md-5">
         
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
		<!--<div class="container">
			<div class="register">
                           <form method="post"  action="<?php echo base_url();?>checkout/step_3">
				 <div class="register-top-grid">
					<h3>2. Payment</h3>
                                	 <div class="wow fadeInRight" data-wow-delay="0.4s">
						 <span>Payment <label>*</label></span>
						  <select name="payment" required style="background: #ffffff; border: 1px solid #e1e1e1; padding: 10px; width: 80%;">
                                                                <option value="">Select Payment Method</option>
                                                                    <option value="cash">Cash</option>
                                                                </select>
					 </div>
                                	 <div class="clearfix"> </div>
				</div>
                              
				    
    <div class="register-but">
        <input  style="    background-color: #fff;
        border: 2px solid #000;
        color: #000;
        display: inline-block;
        font-size: 1.2em;
        outline: medium none;
        padding: 0.6em 2em;
        text-transform: uppercase;
        transition: all 0.5s ease 0s;" type="submit" value="Continue" name="paymentdetail">
    </div>
                        </form>
			
		   </div>
		 </div>-->
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
<script>
$(function() {
  $('form.require-validation').bind('submit', function(e) {
    var $form         = $(e.target).closest('form'),
        inputSelector = ['input[type=email]', 'input[type=password]',
                         'input[type=text]', 'input[type=file]',
                         'textarea'].join(', '),
        $inputs       = $form.find('.required').find(inputSelector),
        $errorMessage = $form.find('div.error'),
        valid         = true;

    $errorMessage.addClass('hide');
    $('.has-error').removeClass('has-error');
    $inputs.each(function(i, el) {
      var $input = $(el);
      if ($input.val() === '') {
        $input.parent().addClass('has-error');
        $errorMessage.removeClass('hide');
        e.preventDefault(); // cancel on first error
      }
    });
  });
});

$(function() {
  var $form = $("#payment-form");

  $form.on('submit', function(e) {
    if (!$form.data('cc-on-file')) {
      e.preventDefault();
      Stripe.setPublishableKey($form.data('stripe-publishable-key'));
      Stripe.createToken({
        number: $('.card-number').val(),
        cvc: $('.card-cvc').val(),
        exp_month: $('.card-expiry-month').val(),
        exp_year: $('.card-expiry-year').val()
      }, stripeResponseHandler);
    }
  });

  function stripeResponseHandler(status, response) {
    if (response.error) {
      $('.error')
        .removeClass('hide')
        .find('.alert')
        .text(response.error.message);
    } else {
      // token contains id, last4, and card type
      var token = response['id'];
      // insert the token into the form so it gets submitted to the server
      $form.find('input[type=text]').empty();
      $form.append("<input type='hidden' name='reservation[stripe_token]' value='" + token + "'/>");
      $form.get(0).submit();
    }
  }
})
</script>
<!-- //footer-->
<div class="modal fade" id="header-modal" aria-hidden="true"></div>

</body>
</html>
	