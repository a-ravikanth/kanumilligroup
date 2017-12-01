<!DOCTYPE HTML>
<html>
<head>
<title>Developer</title>
<link href="<?=base_url();?>css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
<link href="<?=base_url();?>css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?=base_url();?>css/owl.carousel.css" rel="stylesheet">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script src="<?=base_url();?>js/jquery.min.js"></script>
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-3.1.1.min.js"></script>
	<!-- cart -->
		<script src="<?=base_url();?>js/simpleCart.min.js"> </script>
	<!-- cart -->
<!-- the jScrollPane script -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.jscrollpane.min.js"></script>

<!-- //the jScrollPane script -->
<script type="text/javascript" src="<?=base_url();?>js/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" id="sourcecode">
			$(function()
			{
				$('.scroll-pane').jScrollPane();
			});
		</script>
<link href="<?=base_url();?>css/form.css" rel="stylesheet" type="text/css" media="all" />
		<!-- the mousewheel plugin -->
    <script type="text/javascript" src="<?=base_url();?>js/jquery.mousewheel.js"></script>
    <style>
    .active1
    {
        border: 2px solid #ff5f00;
    }
    .modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
    </style>
</head>
<body>
	<!--header-->
		<?php require_once 'header.php';?>
			<!--header-->
			<div class="content">
	<div class="product-model">
     <div class="breadcrumbs">

    <div class="container">
	<ol class="breadcrumb breadcrumb1 setwow slideInLeft animated" data-wow-delay=".5s">
  <li class="breadcrumb-item"><a href="<?=base_url();?>dashboard">Home</a></li>
  <li class="breadcrumb-item active"><?php
             foreach ($subcate as $title)
                {
                    if($title->subcat_id == $subcat_id)
                    { ?>

                    <span style="text-transform: capitalize;"><?=$title->subcategory_name;?></span>
		<div class="clearfix"> </div>
                   <?php }
                }?>
  </li>
</ol>
</div>

    </div>
			 <div class="container">
     

		 <div class="col-md-12 col-sm-12 product-model-sec wow fadeInUp animated animated" data-wow-delay=".5s" id="list">
                     <?php
                     if(!empty($productlist))
                                    {
                                        foreach ($productlist as $post)
                                        {
                                            $id = $post->id;
                                            $name = $post->product_name;
                                            $description = $post->product_description;
                                            $price = $post->product_price;
                                            $image = $post->product_image;
                                        ?>
                     <div class="more products col-md-3 col-sm-6 col-xs-12">
					 <div class="product-grid" >
						<span class="onsale">
													<span class="sale-bg"></span>
													<span class="sale-text">Sale</span>
												</span>
						<div class="product-img b-link-stripe b-animate-go  thickbox">
                                                   
                                                    <img class="img-responsive products-catlog"   src="<?=base_url();?>/upload/product/<?=$post->id;?>/<?=$post->product_image;?>" style="width: 100%;  cursor: pointer;"  alt="">
                                                   
                                                    <div class="b-wrapper quicklook" id="<?=$post->id;?>" style="cursor: pointer;">
							<h3 class="b-animate b-from-left  b-delay03">							
							<button>Add to Cart</button>
							</h3>
							</div>


						</div>
                        <div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name galy-info">
                                                            <a href="<?=base_url();?>ProductDetail/<?=$post->id;?>"><h4 style="color: #000;margin: 0.5em 0 0; text-transform: capitalize; line-height: 21px; font-size: 14px;"><?=$post->product_name;?></h4> </a>
								<?php /*?><span class="item_price">Rs. <?=$post->product_price;?></span><?php */?>
                                </div>



								<!--<input type="button" class="item_add items" value="+">-->
								<div class="clearfix"> </div>
							</div>
                            <div class="">
                                <h4 class="blue-text text-center"><a href="<?=base_url();?>ProductDetail/<?=$post->id;?>">More Details</a></h4>
                                </div>
                                

						</div>

					</div>
                                    <?php } }?>
                     <div class="col-md-12">
                            <div style="text-align: right;">
                        <ul class="pagination" style="">
                             <?php foreach ($linked as $link) {
                                 ?>
                                  <li><?=$link?></li>
                            <?php } ?>
                        </ul>
                    </div>
                     </div>
				</div>


	      </div>
		</div>
</div>
                        <div class="modal fade" id="header-modal" aria-hidden="true">

                         </div>
	<!--footer-->
		<?php require_once 'footer.php';?>
	<!--footer-->

       <script type="text/javascript">
            
		$(document).ready(function() {
                    
           /* $("#header-modal").delegate("#addcartform","submit",function(e){       
                    var color = document.forms["productformcart"]["color"].value;
                    if (color == null || color == "") {
                            alert("Color must be Selected. Click for select.");
                            return false;
                    }

                    var size = document.forms["productformcart"]["size"].value;
                    if (size == null || size == "") {
                            alert("Size must be Selected. Click for select.");
                            return false;
                    }
            });
                    */
                     
                         
                   
                  /*   $("#header-modal").delegate(".data_values","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values').removeClass('active1');
                        $("#"+id).addClass('active1');
                        $("#colorProduct").val(id.slice(1));
                    });
                     $("#header-modal").delegate(".data_values_size","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values_size').removeClass('active1');
                        $("#"+id).addClass('active1');
                        $("#sizeProduct").val(id.slice(4));
                    });*/

                    
                    $('.quicklook').click(function() {
                        var product_id = $(this).attr('id');
                        $.ajax({
                                type: "POST",
                                url: "<?=base_url();?>product/SingleProuctDetail",
                                data: {product_id: product_id},
                                dataType: "json",
                                success: function(data) {
                                     $("#header-modal").html(data.success);
                                      $('#header-modal').modal('show');  
                                }
                               
                        });
                });
        });
	</script>
</body>
</html>
