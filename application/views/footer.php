<div class="main-content-home">

	<div class="list-service">
		<div class="container">
			<!--<div class="introduct-service">
<div class="introduct_service ">
<div class="ship delivery"><i class="fa fa-ship" aria-hidden="true"></i>
<p>Free delivery</p></div>
<div class="medkit delivery"><p>Guarantee</p></div>
<div class="shield delivery">
<p>Payment secured</p>
</div>
<div class="support delivery "><p>Support 24/7</p></div>
</div>
</div>-->		</div>
	</div>
</div>
<div class="footer-search">
     <div class="form_search">
<div class="container">
<div class="row">
<div class="col-md-6 col-sm-12 col-xs-12 wp-form">
<div class="text_form">Sign Up for Our Newsletter</div>
</div>
<div class="col-md-6 col-sm-12 col-xs-12 wp-field">
<div class="form-newletter"><form id="sub_email">
	<input class="search_input error" id="user_email" name="user_email" type="email" value="" placeholder="Enter your email" required>
	<button class="subscribe" name="subscribe" type="button" id="subscribe">Subscribe</button>
	<div id="sub_error">
	</div>
</form>
</div>
</div>
</div>
</div>
</div></div>
<div class="footer-section">
			<div class="container">
				<div class="footer-grids text_footer">

					<div class="col-md-4 col-sm-6 col-xs-12">
<h4 class="footer-static-title">CONTACT</h4>
<hr>
<div class="map_marker">
 Plot No-C60,Film Nagar, Road No-1, Jubilee Hills, Hyderabad, Telangana-500033.</div>
<div class="fax">
Hotline: +91 9100725555</div>
<div class="envelope">
 Email: info@kanumilligroup.com</div>
<br> <span class="twitter"></span> <span class="facebook"></span></div>
<div class="col-md-4 footer-grid">
					<h4 class="footer-static-title">Category</h4>
                    <hr>
					<ul>
                                            <li><a href="<?=base_url();?>">Home</a></li>
						<?php
                                                    foreach ($category_list as $categ)
                                                    {
                                                    ?>
                                                           <li><a href="<?=base_url();?>category/<?=$categ->id?>" style="text-transform: capitalize;"><?=$categ->category_name?></a></li>
                                                    <?php }?>
					</ul>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 footer-grid " >
					<h4 class="footer-static-title">Customer Services</h4>
                    <hr>
					<ul>

                                                <li><a href="<?=base_url()?>term">Terms & Conditions</a></li>
                                                <li><a href="<?=base_url()?>faqs">Faqs</a></li>

                                                <li><a href="<?=base_url()?>contact">Contact</a></li>
					</ul>
					</div>


				<div class="clearfix"></div>
				</div>
			</div>

		</div>
        <div class="footer-bottom">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
        <small class="copyright">
    Copyright @ 2017 by <span> <a href="#"> Kanumilli Infra Solutions Pvt.Ltd.</a></span>  All Rights Reserved
</small>      </div>

    </div>
  </div>
</div>
        <script src="<?=base_url();?>js/wow.min.js"></script>
    <script src="<?=base_url();?>js/wow.js"></script>
    <script src="<?=base_url();?>js/jquery.jscrollpane.min.js"></script>

    <script>
    new WOW().init();
</script>
<script>
$('#subscribe').on('click', function(e){
        //e.preventDefault();
        var email = $('#user_email').val();
				var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
				//regex.test(email);
        if (regex.test(email)) {
					$.ajax({
								 url: "<?php echo base_url();?>/dashboard/email_subscribe",
								 type: "POST",
								 data: {email:email},
								 dataType: "json",
								 success: function (response) {
										if(response.status){
											$('#sub_error').html(response.message);
											console.log(response.message);
											$('#user_email').val('');
										}else{
											$('#sub_error').html(response.message);
											console.log(response.message);
										}
								 },
								 error: function(jqXHR, textStatus, errorThrown) {
									 $('#sub_error').html();
										console.log(textStatus, errorThrown);
								 }
						 });
            //this.submit();
        }else{
					$('#user_email').focus();
					$('#sub_error').html('please enter valid email');
					console.log('wrong email');
					return false;
				}
    });
/*function looseCharacterMatch(a, b) {
  a = a.split("");
  b = b.substring(0,a.length);
  var c = true;
  for (var i = 0; i < a.length; i++) {
    if (b.replace(a[i], "") == b) {
      c = false;
    }
    b = b.replace(a[i], "");
  }
  return c;
}

$("#myInput").on("keyup", function () {
  var value = $(this).val().toLowerCase();

  $("#list").children().each(function () {
    var text = $(this).text().toLowerCase();
    $(this)[!looseCharacterMatch(value,text) ? 'hide':'show']();
  });
});*/
</script>
