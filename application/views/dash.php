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
        <style>
          
  .data_values.active
    {
        border: 2px solid #ff5f00;
    }
	.data_values_size.active
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
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
         <div class="carousel-caption wow fadeInLeft animated animated" data-wow-delay=".5s">
        <h3 class="icon-container">
         <!-- <span class="glyphicon glyphicon-glass"></span>-->
        </h3>
        <h3>
         
        </h3>
        </div>
        <img src="<?=base_url();?>img/slider/banner2.jpg" class="img-responsive" alt="" style="width:100%;">
        
      </div>

      <div class="item">
      <div class="carousel-caption wow fadeInRight animated animated" data-wow-delay=".5s">
        <h3 class="icon-container">
         <!-- <span class="glyphicon glyphicon-glass"></span>-->
        </h3>
        <h3>
         
        </h3>
        </div>
        <img src="<?=base_url();?>img/slider/banner5.jpg" class="img-responsive" alt="" style="width:100%;">
      </div>
    
      <div class="item">
      <div class="carousel-caption wow fadeInLeft animated animated" data-wow-delay=".5s">
        <h3 class="icon-container">
     <!--     <span class="glyphicon glyphicon-glass"></span>-->
        </h3>
        <h3>
          
        </h3>
        </div>
        <img src="<?=base_url();?>img/slider/banner4.jpg" class="img-responsive" alt="" style="width:100%;">
      </div>
      <div class="item">
       <div class="carousel-caption wow fadeInRight animated animated" data-wow-delay=".5s">
        <h3 class="icon-container">
      <!--    <span class="glyphicon glyphicon-glass"></span>-->
        </h3>
        <h3>
       
        </h3>
        </div>
        <img src="<?=base_url();?>img/slider/banner1.jpg" class="img-responsive" alt="" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <!--<a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>-->
  </div>
			<!--header-->
		<div class="banner-section">
			<div class="container">
				<div class="banner-grids">
					<div class="col-md-6 banner-grid wow fadeInLeft animated animated" data-wow-delay=".5s">
						<h3>Innovation leader with 129 years of tradition</h3>
						<p>Bosch is the leading name in the field of modern power tools with its cutting edge technologies
for the past 129 years. Powered with its own research and development team, Bosch aims to
develop innovative accessories for all applications to promote efficient working with reduced
labour. Bosch has also registered several hundred patents with its innovative applications and
has transformed the accessories sector with its brilliance. Experience the best. Always.</p>
						<div class="wow fadeInLeft animated animated shop-button" data-wow-delay=".5s">
                        
                        </div>
					</div>
				<div class="col-md-6 banner-grid1  wow zoomIn animated animated" data-wow-delay=".5s">
						<img src="<?=base_url();?>images/p2.png" class="img-responsive"  alt=""/>
				</div>
				<div class="clearfix"></div>
                <div class="double-line">
                </div>
			</div>
		</div>
		</div>
		<?php /*?><div class="banner-bottom">
		<div class="gallery-cursual">
	
		<div id="owl-demo" class="owl-carousel text-center">
                    <?php   foreach ($slider as $slide)
                    {?>
                    <div class="item" >
                            <img class="lazyOwl" data-src="<?= base_url();?>upload/slider/<?=$slide->id?>/<?=$slide->name?>" style="height: 220px;" alt="name">
			</div>
                     <?php }
                    ?>
		</div>
		
		</div>
		</div><?php */?>
		<div class="gallery">
                <div class="container ">
			<h3>Popular Products</h3>
            <a href="#" class="nav-tabs-dropdown btn btn-block btn-primary">Tabs</a>
            <ul id="nav-tabs-wrapper" class="nav nav-tabs nav-tabs-horizontal nav-tabs-popular">
              <li class="active"><a class="link link--kumya" href="#htab1" data-toggle="tab"><span data-letters="All Products">All Products</span></a></li>
              <li><a class="link link--kumya" href="#htab2" data-toggle="tab"><span data-letters="Power Tools">Power Tools</span></a></li>
              <li><a class="link link--kumya" href="#htab3" data-toggle="tab"><span data-letters="Power Tool Accessories" >Power Tool Accessories</span></a></li>
              <!--<li><a class="link link--kumya" href="#htab4" data-toggle="tab"><span data-letters="kitchen">kitchen</span></a></li>
              <li><a class="link link--kumya" href="#htab5" data-toggle="tab"><span data-letters="personal care" >personal care</span></a></li>-->
            
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="htab1">
			<div class="gallery-grids">
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 col-xs-12 col-sm-6  gallery-grid">
                <div class="wow flipInY animated gallery-popular">
                
                                  <a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"><img class="quicklook product-catlog" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style="cursor: pointer;" alt=""/>  </a>
                                  <div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						
					<div class="clearfix"></div>
					</div>
					</div>
					<div class="quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
					
                                            <p><a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"> More Details </a></p>
					
					</div>
                                  
					
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="htab2">
			<div class="gallery-grids">
            
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 col-xs-12 col-sm-6  gallery-grid">
                <div class="wow flipInY animated gallery-popular">
                                    <a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"><img class="quicklook product-catlog" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style=" width: 100%; cursor: pointer;" alt=""/> </a>
                                    <div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						
					<div class="clearfix"></div>
					</div>
					</div>
					<div class="quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
					
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"> More Details </a></p>
					
					</div>
                                   
					
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="htab3">
			<div class="gallery-grids">
            
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 col-xs-12 col-sm-6  gallery-grid">
                <div class="wow flipInY animated gallery-popular">
                                   <a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"><img class="quicklook product-catlog" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style=" width: 100%; cursor: pointer;" alt=""/>   </a>
                                    <div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						<?php /*?><div class="prices">
                                                    <h5  class="item_price" style="color: #000;font-size: 1em;font-weight: 600;">Rs. <?=$popular->product_price;?></h5>
						</div><?php */?>
					<div class="clearfix"></div>
					</div>
					</div>
					<div class="quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
				
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"> More Details </a></p>
					
					</div>
                                 
					
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="htab4">
			<div class="gallery-grids">
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 col-xs-12 col-sm-6  gallery-grid">
                 <div class="wow flipInY animated gallery-popular">
               
                                    <a><img class="quicklook product-catlog" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style=" width: 100%; cursor: pointer;" alt=""/>   </a>
					
                                 
					<div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						<div class="prices">
                                                    <h5  class="item_price" style="color: #333333;">Rs. <?=$popular->product_price;?></h5>
						</div>
					<div class="clearfix"></div>
					</div>
					</div>
                    <div class="quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
					
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"> More Details </a></p>
					
					</div>
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
            </div>
            <div role="tabpanel" class="tab-pane fade" id="htab5">
			<div class="gallery-grids">
                            <?php 
                                if(!empty($popular_product))
                                {
                                    foreach ($popular_product as $popular)
                                    { 
                                        
                                        $id = $popular->id;
                                        $name = $popular->product_name;
                                        $description = $popular->product_description;
                                        $price = $popular->product_price;
                                        $image = $popular->product_image;
                                    ?>
				<div class="col-md-3 col-xs12 col-sm-6  gallery-grid">
                <div class="wow flipInY animated gallery-popular">
                
                                    <a><img class="quicklook product-catlog" id="<?=$popular->id;?>" src="<?=base_url();?>/upload/product/<?=$popular->id;?>/<?=$popular->product_image;?>" style="width: 100%; cursor: pointer;" alt=""/> </a>
					
                                   
					<div class="galy-info">
						<p><?=$popular->product_name;?></p>
						<div class="galry">
						<?php /*?><div class="prices">
                                                    <h5  class="item_price" style="color: #000;font-size: 1em;font-weight: 600;">Rs. <?=$popular->product_price;?></h5>
						</div><?php */?>
					<div class="clearfix"></div>
					</div>
					</div>
                    <div class="quicklook" id="<?=$popular->id;?>" style="cursor: pointer;">
					
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$popular->id;?>"> More Details </a></p>
					
					</div>
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
            </div>
            </div>
		</div>
		</div>
                        
                        
            <div class="gallery">
                <div class="container">
			<h3>Latest Products</h3>
			<div class="gallery-grids">
                              <?php 
                                    if(!empty($latest_product))
                                    {
                                    foreach ($latest_product as $latest)
                                    { 
                                                                $id = $latest->id;
                                                                $name = $latest->product_name;
                                                                $description = $latest->product_description;
                                                                $price = $latest->product_price;
                                                                $image = $latest->product_image;
                                    ?>
				<div class="col-md-3 col-xs-12 col-sm-6 gallery-grid ">
                <div class="trend wow zoomIn animated animated" data-wow-delay=".5s">
                
                                   <p><a href="<?=base_url();?>ProductDetail/<?=$latest->id;?>"><img class="quicklook product-catlog" id="<?=$latest->id;?>" src="<?=base_url();?>/upload/product/<?=$latest->id;?>/<?=$latest->product_image;?>" style= "width: 100%; cursor: pointer;" alt=""/>
					
                                    </a>
					<div class="galy-info">
						<p><?=$latest->product_name;?></p>
						<div class="galry">
						<?php /*?><div class="prices">
						<h5  class="item_price" style="color: #000;font-size: 1em;font-weight: 600;">Rs. <?=$latest->product_price;?></h5>
						</div><?php */?>
					<div class="clearfix"></div>
					</div>
					</div>
                    <div class="quicklook" id="<?=$latest->id;?>" style="cursor: pointer;">
					
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$latest->id;?>"> More Details </a></p>
					
					</div>
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
                    
                        
            <div class="gallery">
                <div class="container">
			<h3>Feature Products</h3>
			<div class="gallery-grids">
                                <?php 
                                 if(!empty($feature_product))
                                    {
                                    foreach ($feature_product as $feature)
                                    { 
                                            $id = $feature->id;
                                            $name = $feature->product_name;
                                            $description = $feature->product_description;
                                            $price = $feature->product_price;
                                            $image = $feature->product_image;
                                        ?>
				<div class="col-md-3 col-xs-12 col-sm-6 gallery-grid ">
                <div class="trend wow zoomIn animated animated" data-wow-delay=".5s">
                                    <a href="<?=base_url();?>ProductDetail/<?=$feature->id;?>"><img class="quicklook product-catlog" id="<?=$feature->id;?>" src="<?=base_url();?>/upload/product/<?=$feature->id;?>/<?=$feature->product_image;?>" style="width: 100%; cursor: pointer;" alt=""/>
					
                                    </a>
					<div class="galy-info">
						<p><?=$feature->product_name;?></p>
						<div class="galry">
						<?php /*?><div class="prices">
						<h5 class="item_price" style="color: #000;font-size: 1em;font-weight: 600;">Rs. <?=$feature->product_price;?></h5>
						</div><?php */?>
					<div class="clearfix"></div>
					</div>
					</div>
                    <div class="quicklook" id="<?=$feature->id;?>" style="cursor: pointer;">
					
                                             <p><a href="<?=base_url();?>ProductDetail/<?=$feature->id;?>"> More Details </a></p>
					
					</div>
				</div>
                </div>
                             <?php }
                                }
                                else
                                {
                                     echo "No Item available!!";
                                } ?>
				<div class="clearfix"></div>
			</div>
		</div>
		</div>
                        
	
                       
	<!--footer-->
		<?php require_once 'footer.php';?>
	<!--footer-->
	<script src="<?=base_url();?>js/owl.carousel.js"></script>
    
        <script>
                $(document).ready(function() {
                        $("#owl-demo").owlCarousel({
                                items : 5,
                                lazyLoad : true,
                                autoPlay : true,
                                pagination : false,
                        });
                });
        </script>	
</body>
</html>

<script type="text/javascript">
            	$(document).ready(function() {
                    
                                 $("#header-modal").delegate("#addcartform","submit",function(e){       
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
                    
                     
                         
                   
                     $("#header-modal").delegate(".data_values","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values').removeClass('active');
                        $("#"+id).addClass('active');
                        $("#colorProduct").val(id.slice(1));
                    });
                     $("#header-modal").delegate(".data_values_size","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values_size').removeClass('active');
                        $("#"+id).addClass('active');
                        $("#sizeProduct").val(id.slice(4));
                    });

            
        });
	</script>
    <script>
	$('.nav-tabs-dropdown').each(function(i, elm) {
    
    $(elm).text($(elm).next('ul').find('li.active a').text());
    
});
  
$('.nav-tabs-dropdown').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).toggleClass('open').next('ul').slideToggle();
    
});

$('#nav-tabs-wrapper a[data-toggle="tab"]').on('click', function(e) {

    e.preventDefault();
    
    $(e.target).closest('ul').hide().prev('a').removeClass('open').text($(this).text());
      
});
	</script>
    