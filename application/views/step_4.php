
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
  <div class="checkout-wrap">
    <ul id="checkout-bar" class="step2">
      <li class="step1"><span>Shipping</span></li>
      <li class="step2"><span>Order Overview</span></li>
      <li class="step3"><span>Payment</span></li>
      <li class="step4"><span>Success</span></li>
    </ul>
  </div>
  <div class="space"></div>
  
</div>
	<div class="container">
            <h2>3. Order Overview</h2>
			<form class="checkout_form clearfix" action="<?php echo base_url()?>checkout/step_4" method="post"> 
                    <?php $i = 1; ?>
                <?php
                if(!empty($this->cart->contents()))
                {
                            $total = 0;
                            foreach ($this->cart->contents() as $item){
                            echo form_hidden('rowid[]', $item['rowid']);
                                    $total = $total + (($item['qty']) * ($item['price']));
                                ?>
			 <div class="cart-header">
                              
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
        <img  src="<?=base_url();?>upload/product/<?=$item['id']?>/<?=$item['image']?>" style="width: 100%; height: 150px; cursor: pointer;" alt="">
        </div>
        <p><a style="text-transform: capitalize; cursor: pointer;"><?php echo $item['name']; ?></a></p></td>
         <td><p>Rs. <?php echo number_format($item['price'], 2); ?> </p></td>
       
        <td><span><?php echo $item['qty'] ; ?></span></td>
        <td><p> <?php
                                                             $color =  $this->db->query("SELECT * FROM tbl_color where id = '".$item['color']."'");
                                                        foreach ($color->result() as $value) {?>
                                                              <span>Color:&nbsp;&nbsp; <span style="height: 16px; border-radius:50%; width: 16px; background: #<?=$value->colorcode;?>">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></span>
                                                       <?php }
                                                            ?></p></td>
<td><p> <?php  $color =  $this->db->query("SELECT * FROM tbl_size where id = '".$item['size']."'");
                                                        foreach ($color->result() as $value) {?>
                                                              <span>Size:&nbsp;&nbsp; <?=$value->size;?></span>
                                                       <?php }
                                                            ?></p></td>
       
        <td> <span  style="color: #333333;">Rs. <?php echo ($item['qty']) * ($item['price']); ?></span></td>
        
      </tr>
                                                    
						
					   
					  </tbody>
                      
                      </table>
						
			 </div>
                         
                         
                    <?php } 
                    ?>
                         <div class="col-md-12" >
                            <div class="col-md-8" style="text-align: center;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: center;">
                                <b>Sub Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: center;">
                                Rs. <?php echo $total;?>
                            </div>   
                         </div>
                         <div class="col-md-12">
                             <div class="col-md-8" style="text-align: center;">
                                <!--Sub Total--> 
                            </div>   
                            <div class="col-md-2" style="text-align: center;">
                                <b>Total:</b>
                            </div>   
                            <div class="col-md-2" style="text-align: center;">
                                Rs. <?php echo $total;?>
                            </div>   
                         </div>
                         <br>
                         <br>
                         <br>
                         <div class="col-md-12" style="text-align: right;">
                                             <input style="background: #ff5f00; color: #ffffff;" class="btn my-cart-btn my-cart-b" type="submit" name="confirm" value="Confirm">
                                            
                                          
                         </div>
                        </form>
                               
                 <?php }?>
                 </div>
		 </div>
<!-- checkout -->	

</div>
 	<!--footer-->
		<?php
                require_once 'footer.php';
                ?>
	<!--footer-->
			
</body>
</html>
