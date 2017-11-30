<link href="<?=base_url();?>css/wow.css" rel="stylesheet">
<link href="<?=base_url();?>css/font-awesome.min.css" rel="stylesheet">
<link href="owl.carousel.css" rel="stylesheet">

<link href='https://fonts.googleapis.com/css?family=Arvo' rel='stylesheet'>
<div class="header">
			<div class="header-top">
			<div class="container">
<!--				 <div class="lang_list">
					<select tabindex="4" class="dropdown1">
						<option value="" class="label" value="">En</option>
						<option value="1">English</option>
						<option value="2">French</option>
						<option value="3">German</option>
					</select>
   			</div>--><div class="col-md-4">
                <h3 class="white-text wow fadeInLeft animated" wow-data-delay=".4s">Kanumilli Infra Solutions Pvt.Ltd.</h3>
            </div>

                            <div class="top-right wow zoomIn animated animated" data-wow-delay=".7s" style="width: 350px;">
				<?php /*?><ul>
                                     <?php
                                    if(!empty($this->session->userdata('userid')))
                                    {?>
                                    <li  class="text"><a style="cursor: pointer; text-transform: capitalize;"><?php echo $this->session->userdata('firstname');?></a></li>
                                    <li  class="text"><a href="<?=base_url();?>login/logout" >Logout</a></li>
                                    <?php }
                                    else { ?>
                                        <li  class="text"><a href="<?=base_url();?>login">Login</a></li>
                                            <li  class="text"><a href="<?=base_url();?>register">Register</a></li>
                                   <?php }
                                    ?>
                                    <li class="text"><a href="<?=base_url();?>login">login</a></li>
					<li><div class="cart box_1">
                                                <a href="<?=base_url()?>cart">Cart
                                                            <?php if(!empty($this->cart->contents()))
                                                            {
                                                                echo $this->cart->total_items();
                                                            }
                                                            else
                                                            {
                                                                echo "0";
                                                            }
                                                    ?>

							</a>

							<div class="clearfix"> </div>
						</div></li>
				</ul><?php */?>
				</div>
				<div class="clearfix"></div>
			</div>
			</div>
			<div class="header-bottom">
					<div class="container">
<!--/.content-->
<div class="content white col-md-9">
	<nav class="navbar navbar-default " role="navigation">
	    <div class="navbar-header col-md-2 wow zoomIn animated animated" data-wow-delay=".7s">

                <h1 class="navbar-brand"><a  href="<?=base_url();?>"dashboard><img class="img-responsive logo" src="<?=base_url();?>img/kanumilli-logo2.png"/></a></h1>
	    </div>
	    <!--/.navbar-header-->
	   <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	    <div class="collapse navbar-collapse col-md-10" id="bs-example-navbar-collapse-1">
	        <ul class="nav navbar-nav">
                    <li style="text-transform: capitalize;"><a href="<?=base_url();?>dashboard">Home</a></li>
                         <?php
                        foreach ($category_list as $category)
                        {
                        ?>
		        <li class="dropdown">
		            <a style="text-transform: capitalize;" href="#" class="dropdown-toggle" data-toggle="dropdown"><?=$category->category_name?><b class="caret"></b></a>
		            <ul class="dropdown-menu multi-column columns-3">
                    <div class="col-md-8 col-sm-8">
			            <div class="row">
                                           <?php
                                                foreach ($subcate as $sub){
                                                    if($category->id==$sub->parent_category_id)
                                                    {
                                                ?>

				            <div class="col-sm-4 npd">
					            <ul class="multi-column-dropdown">
                                                        <li><a id="<?php echo $category->id.'_'.$sub->subcat_id?>" style="text-transform: capitalize;" class="list1 catimg" href="<?php echo base_url()?>ProductList/<?php echo $category->id.'/'.$sub->subcat_id;?>"><?= $sub->subcategory_name;?></a></li>
					            </ul>
				            </div>

                               <?php } }?>

                                 </div>
                                  </div>
                            <div class="col-sm-4 menu-grids">

												<div class="cat-img-responsive">
													<img class="img-responsive" id="catimgs" src="img/home-header.jpg" />
												</div>

										</div>



		            </ul>
		        </li>
                        <?php }?>
                        <li><a href="<?=base_url();?>contact">Contact Us</a></li>
                </ul>
	    </div>
	    <!--/.navbar-collapse-->
	</nav>
	<!--/.navbar-->
</div>

					<div class="col-md-3 sb-search1 wow zoomIn animated animated" data-wow-delay=".7s">

						<form id="search" action="<?php echo base_url()?>search/result" method="post">
          <input type="text" class="sb-icon-search1" id="myInput"  placeholder="Search for Product..." title="Type in a name">
					<input type="hidden" name="product_id" id="product_id">
				</form>
					</div>



<!-- search-scripts -->
					<script src="<?=base_url();?>js/classie.js"></script>
					<?php /*?><script src="<?=base_url();?>js/uisearch.js"></script><?php */?>
						<!--<script>
							new UISearch( document.getElementById( 'sb-search' ) );
						</script>-->

					<!-- //search-scripts -->
					<div class="clearfix"></div>
					</div>
				</div>
			</div>
