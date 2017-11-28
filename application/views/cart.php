
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
<!-- checkout -->
<div class="content">
<div class="cart-items">

	<div class="container">
            <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                        <div role="alert" class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                <strong>Well done!</strong>
                                <?=$this->session->flashdata('SUCCESSMSG')?>
                        </div>
        <?php } ?>	
                    <?php
                    if($cart = $this->cart->contents()){ ?>
                        <h2>My Shopping Bag (<?php if(!empty($this->cart->contents()))
                                                    {
                                                        echo $this->cart->total_items();
                                                    }
                                                    else
                                                    {
                                                        echo "0";
                                                    }
                        ?>)</h2>
                        <?php
                            echo form_open('cart/update_cart');
                            $grand_total = 0;
                            $i = 1;
                            foreach ($cart as $item)
                            {
                                echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                                echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                                echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                                echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                                echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                    ?>
			 <div class="cart-header">
                                <?php
                                        $path = "<div class='close1'></div>";
                                         echo anchor('cart/remove/' . $item['rowid'], $path); 
                                    ?>
				 
				 <div class="cart-sec simpleCart_shelfItem">
                 <table class="table table-borderless">
                        <thead>
      <tr>
        <th>Product</th>
        <th>Price</th>
        <th>Quqntity</th>
        <th>Color</th>
        <th>Size</th>
        <th>Total</th>
      </tr>
     
    </thead>
                       <tbody>
                       
      <tr>
      
        <td>
						<div class="cart-item cyc">
                                                    <img class="quicklook" id="<?=$item['id']?>" src="<?=base_url();?>upload/product/<?=$item['id']?>/<?=$item['image']?>" style="width: 100%; height: 150px; cursor: pointer;" alt="">
                                                    </div>
                                                    <p><a   style="text-transform: capitalize; cursor: pointer;"><?php echo $item['name']; ?></a></p></td>
                                                     <td><span  style="color: #333333;">Rs. <?php echo number_format($item['subtotal'], 2) ?></span></td>
                                                    <td><p>Qty: <span> <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?></span></p></td>
                                                    <td><p> <?php
                                                             $color =  $this->db->query("SELECT * FROM tbl_color where id = '".$item['color']."'");
                                                        foreach ($color->result() as $value) {?>
                                                              <span style="color: #333333;">Color:&nbsp;&nbsp; <span style="height: 16px; width: 16px; border-radius:50%;  background: #<?=$value->colorcode;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                       <?php }
                                                            ?></p></td>
                                                            <td><p> <?php
                                                             $color =  $this->db->query("SELECT * FROM tbl_size where id = '".$item['size']."'");
                                                        foreach ($color->result() as $value) {?>
                                                              <span style="color: #333333;">Size:&nbsp;&nbsp; <?=$value->size;?></span>
                                                       <?php }
                                                            ?></p></td>
                                                            <td>
															<span  style="color: #333333;">Rs. <?php echo number_format($item['subtotal'], 2) ?></span>
																<?php $grand_total = $grand_total + $item['subtotal']; ?>
                                                       </td>
                                                           
                                                    
						
					   </tr>
                       </tbody>
                       </table>
                       
					   <div class="clearfix"></div>
											
				  </div>
                  
			 </div>
                         
                         
                    <?php } 
                    ?>
                         <div class="col-md-12" >
                            <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Sub Total:</b>
                            </div>   
                             <div class="col-md-2" style="text-align: right;">
                                Rs. <?= number_format($grand_total,2)?>
                            </div>   
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8" style="text-align: right;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: left;">
                                <b>Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: right;">
                                Rs. <?= number_format($grand_total,2)?>
                            </div>   
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="col-md-12" style="text-align: right;">
                                          <button type="submit" class="btn btn-danger my-cart-btn my-cart-b" >Update Cart</button>
                                            <button type="button" class="btn btn-danger my-cart-btn my-cart-b" onClick="clear_cart()" >Clear Cart</button>
                                            <a href="<?=base_url();?>checkout" type="button" class="btn btn-danger my-cart-btn my-cart-b" >Checkout</a>
                                            <?php echo form_close(); ?>
                         </div>
                               
                 <?php }
                   else
                    { ?>
                    <div class="container">
  <div class="checkout-wrap">
    <ul id="checkout-bar" class="step4">
      <li class="step1"><span>Shipping</span></li>
      <li class="step2"><span>Order Overview</span></li>
      <li class="step3"><span>Payment</span></li>
      <li class="step4"><span>Success</span></li>
    </ul>
  </div>
  <div class="space"></div>
  
</div>
                        <tr>
                            <td class="product-name" colspan="100%" style="text-align: center;">
                                <span style="font-size: 18px;"> Your Cart HAS been empty add item!!</span>
                            </td>
                        </tr>
                   <?php }
                    ?>
                 
                 
		 </div>
		 </div>
<!-- checkout -->	

</div>
 <div class="modal fade" id="header-modal" aria-hidden="true"></div>

	<!--footer-->
		<?php
                require_once 'footer.php';
                ?>
	<!--footer-->
			
</body>
</html>
<script type="text/javascript">
        function clear_cart() {
            var result = confirm('Are you sure want to clear all bookings?');
            if (result) {
                window.location = "<?php echo base_url(); ?>clear-cart";
            } else {
                return false; // cancel button
            }
        }
</script>

