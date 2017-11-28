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
            <?php /*?><div class="rsidebar span_1_of_left">
	
				 
					<section  class="sky-form">
				   <div class="sidebar-row">
                   <h4>Category</h4>
						 <?php
                                                foreach ($category_list as $category)
                                                {
                                                ?>
						<ul class="faq">
						<li class="item1"><a href="#">Frocks &amp; Dresses<span class="glyphicon glyphicon-menu-down"></span></a>								 <li class="sort subitem1" style="text-transform: capitalize;"><a href="<?=base_url();?>category/<?=$category->id;?>"><?=$category->category_name?>
                         <?php 
                                                foreach ($subcate as $sub){
                                                    if($category->id==$sub->parent_category_id)
                                                    {
                                                ?>
								<ul style="display: none;">
                                <li><a  style="text-transform: capitalize;" class="list1" href="<?php echo base_url()?>ProductList/<?php echo $category->id.'/'.$sub->subcat_id;?>"><?= $sub->subcategory_name;?></a></li>
									<li class="subitem1"><a href="#">Party Wear</a></li>										
									<li class="subitem1"><a href="#">Night Wear</a></li>										
									<li class="subitem1"><a href="#">Bath Time</a></li>									
								</ul>
                                <?php } }?>
							</li>
						<li class="item2"><a href="#">Shorts &amp; Jeans<span class="glyphicon glyphicon-menu-down"></span></a>
								<ul style="display: none;">
									<li class="subitem1"><a href="#">Girls</a></li>										
									<li class="subitem1"><a href="#">Boys</a></li>										
									<li class="subitem1"><a href="#">Baby by age</a></li>										
								</ul>
							</li>
							<li class="item3"><a href="#">Protection <span class="glyphicon glyphicon-menu-down"></span></a>
								<ul style="display: none;">
									<li class="subitem1"><a href="#">Sweaters</a></li>										
									<li class="subitem1"><a href="#">Rain Jackets</a></li>										
									<li class="subitem1"><a href="#">Caps &amp; Gloves</a></li>										
								</ul>
							</li>
						</ul>
                         <?php }?>
                         
					
						<script type="text/javascript">
							$(function() {
							
								var menu_ul = $('.faq > li > ul'),
									   menu_a  = $('.faq > li > a');
								
								menu_ul.hide();
								
							
								menu_a.click(function(e) {
									e.preventDefault();
									if(!$(this).hasClass('active')) {
										menu_a.removeClass('active');
										menu_ul.filter(':visible').slideUp('normal');
										$(this).addClass('active').next().stop(true,true).slideDown('normal');
										
									} else {
										$(this).removeClass('active');
										$(this).next().stop(true,true).slideUp('normal');
									}
								});
							
							});
						</script>
						
					</div>
                    </section>
				 <section  class="sky-form">
                  <div id="subpanel" class="sidebar-row">
					<h4>Filter By Price</h4> 
							<div class="row row1 scroll-pane jspScrollable" style="overflow: hidden; padding: 0px; width: 223px;" tabindex="0">						
                           
						
                        <div class="scroll-pane">
                            <label class="checkbox">
                            <input name="checkbox" type="checkbox"><i></i>Under &#8377 10,000 </label>
                            <label class="checkbox">
                            <input name="checkbox" type="checkbox"><i></i>&#8377 10,000 - &#8377 20,000</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>&#8377 20,000 - &#8377 30,000</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>&#8377 30,000 - &#8377 40,000</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>&#8377 40,000 - &#8377 50,000</label>
                            
                       	 </div> 
                         </div>          
						<div id="slider-range" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"><div class="ui-slider-range ui-widget-header" style="left: 4.24444%; width: 73.5333%;"></div><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 4.24444%;"></a><a class="ui-slider-handle ui-state-default ui-corner-all" href="#" style="left: 77.7778%;"></a></div>							
						<input id="amount" style="border: 0;  font-weight: normal;" type="text">
						<script type="text/javascript"> 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							}); 
						</script>
						<script type="text/javascript" src="js/jquery-ui.js"></script>
						
					</div>
				   </section>
                   <section  class="sky-form">
                  <div id="subpanel" class="sidebar-row">
						<h4>DISCOUNTS</h4>
					<div class="row row1 scroll-pane jspScrollable" style="overflow: hidden; padding: 0px; width: 223px;" tabindex="0">
							
							
						<div class="scroll-pane">
                            <label class="checkbox">
                            <input name="checkbox" type="checkbox"><i></i>Upto - 10% (20)</label>
                            <label class="checkbox">
                            <input name="checkbox" type="checkbox"><i></i>70% - 60% (5)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>50% - 40% (7)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>30% - 20% (2)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>10% - 5% (5)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>30% - 20% (7)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>10% - 5% (2)</label>
                            <label class="checkbox"><input name="checkbox" type="checkbox"><i></i>Other(50)</label>
                       	 </div>
				    </div>
				  </div>
				<section>
				
					 <script type="text/javascript" src="<?=base_url();?>js/jquery-ui.min.js"></script>
					 <link rel="stylesheet" type="text/css" href="<?=base_url();?>css/jquery-ui.css">
					
  
				   
							   
			 </div><?php */?>
		
		 <div class="col-md-12 col-sm-12 product-model-sec wow fadeInUp animated animated" data-wow-delay=".5s">
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
                     <div class="more products col-md-3">
					 <div class="product-grid" >
						 <span> </span>				
						<div class="product-img b-link-stripe b-animate-go  thickbox">
                                                   <a href="<?=base_url();?>ProductDetail/<?=$post->id;?>">
                                                    <img class="img-responsive products-catlog"   src="<?=base_url();?>/upload/product/<?=$post->id;?>/<?=$post->product_image;?>" style="width: 100%;  cursor: pointer;"  alt=""></a>
                                                    
                                                    
						</div>
                        <div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name galy-info">
                                                            <h4 style="color: #000;margin: 0.5em 0 0; text-transform: capitalize; line-height: 21px; font-size: 14px;"><?=$post->product_name;?></h4>								
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
                    
            $("#header-modal").delegate("#addcartform","submit",function(e){       
                    var color = document.forms["productformcart"]["color"].value;
                    if (color == null || color == "") {
							document.getElementById("error").innerHTML ="Color must be Selected. Click for select.";
                            
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
                        $('.data_values').removeClass('active1');
                        $("#"+id).addClass('active1');
                        $("#colorProduct").val(id.slice(1));
                    });
                     $("#header-modal").delegate(".data_values_size","click",function(e){
                        var id = $(this).attr('id');
                        $('.data_values_size').removeClass('active1');
                        $("#"+id).addClass('active1');
                        $("#sizeProduct").val(id.slice(4));
                    });

                    
                   
        });
	</script>
</body>
</html>
