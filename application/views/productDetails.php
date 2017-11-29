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
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="<?=base_url();?>js/jquery.min.js"></script>

<!-- cart -->
		<script src="<?=base_url();?>js/simpleCart.min.js"> </script>
	<!-- cart -->
<script type="text/javascript" src="<?=base_url();?>js/bootstrap-3.1.1.min.js"></script>
<script src="<?=base_url();?>js/imagezoom.js"></script>

						<!-- FlexSlider -->
<?php /*?>  <script defer src="<?=base_url();?>js/jquery.flexslider.js"></script>
<link rel="stylesheet" href="<?=base_url();?>css/flexslider.css" type="text/css" media="screen" /><?php */?>



<style>
    .active
    {
        border: 2px solid #ff5f00;
    }
    .active_size
    {
        border: 2px solid #ff5f00;
    }
    .modal-header {
    border-bottom: 0px solid #e5e5e5;
    min-height: 16.4286px;
    padding: 15px;
}
.red{
color:red;
}
    </style>

</head>
<body>
	<!--header-->
		<?php
                require_once 'header.php';
                ?>
			<!--header-->
	<div class="content" id="productdetails">
		<div class="single">
			<div class="container">
				<div class="single-info">
					<?php /*?><div class="col-md-4 single-grid1">
						<h2>Category</h2>
							<ul>
                                                <?php
                                                foreach ($category_list as $category)
                                                {
                                                ?>
                                                            <li style="text-transform: capitalize;"><a href="<?=base_url();?>category/<?=$category->id;?>"><?=$category->category_name?></a></li>
                                                <?php }?>
                                                </ul>
					</div><?php */?>
                                    <?php
                                    foreach ($product_detail as $detail)
                                    {
                                                $id = $detail->id;
                                                $name = $detail->product_name;
                                                $description = $detail->product_description;
                                                $price = $detail->product_price;
                                                $image  =  $detail->product_image;
                                    ?>

					<div class="col-md-4 col-sm-6  npd wow fadeInLeft animated animated" data-wow-delay=".5s">


							<ul class="slider">
								<li data-thumb="<?=base_url();?>/upload/product/<?=$detail->id;?>/<?=$detail->product_image;?>">
                                 <div > <img class="img-responsive big-image" src="<?=base_url();?>/upload/product/<?=$detail->id;?>/<?=$detail->product_image;?>" > </div>
								</li>

							</ul>
						</div>

                    <div class="col-md-7  col-md-offset-1 col-sm-12">
					<div class="simpleCart_shelfItem wow fadeInRight animated animated" data-wow-delay=".5s">
                                            <h3 style="text-transform: capitalize;"><?=$detail->product_name?></h3>

                    <div class="galry">
								<div>
									<?php /*?><h2 class="item_price">Rs. <?=$detail->product_price;?></h2><?php */?>
								</div>

								<div class="clearfix"></div>
							</div>
                                                <p style="text-align:justify;"><?=$detail->product_description?></p>


                                                        <?php /*?><ul class="size">
                                                            <h3>Color</h3>
        						<?php
                                                        $color_data = explode(",", $detail->color_id);
                                                        $color =  $this->db->query("SELECT * FROM tbl_color");
                                                        foreach ($color->result() as $value) {
                                                            foreach ($color_data as $color_value) {
                                                                if($color_value == $value->id)
                                                                {?>
                                                                <li class="color" id="<?php echo $value->id;?>" onClick="setColorValue('<?php echo $value->id;?>')">
                                                                        <div style=" height: 16px; width:16px;border-radius: 50%; background-color:#<?php echo $value->colorcode;?>;"></div>
                                                                </li>
                                                                <?php }
                                                            }
                                                        }
                                                        ?>
                                                        <div id="colorerror"></div>
                                                        </ul><?php */?>




							<div>

                                                            <form action="<?=base_url();?>cart/add" method="post" name="productform" onSubmit="return validateForm()">



                                                    <div class="tag col-md-12 npd">
                                                            <h3 class="category"> Category : <a style="text-transform: capitalize; cursor: pointer;">
                                                                                <?php
                                                                                $cat  = $this->db->query('SELECT * FROM tbl_category WHERE id ='.$detail->category_id.' ');
                                                                                foreach ($cat->result() as $value) {
                                                                                 echo $value->category_name;
                                                                                }
                                                                                ?>
                                                                                 </a></h3>
								<!--<p>Tag : <a href="#"> Lorem ipsum </a></p>-->
							</div>
                                                    <?php echo form_hidden('id', $id);
                                                    echo form_hidden('name', $name);

                                                    echo form_hidden('image', $image);
                                            ?>
                                                    <button type="button" class="add-cart button button--moema button--border-thick button--size-s" data-toggle="modal" data-target="#myModal">Enquiry Form</button>

                                               <?php
//                                                echo form_close();
                                            ?>
                                                                </form>




                                                                <br>
							</div>

					</div>
                    </div>

					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
<!-- collapse -->
		<div class="collpse">
		<div class="container">


		<!--<div class="panel-group collpse" id="accordion" role="tablist" aria-multiselectable="true">
		  <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
			<div class="panel-heading" role="tab" id="headingOne">
			  <h4 class="panel-title">
				<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
				  Description
				</a>
			  </h4>
			</div>
			<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
			  <div class="panel-body">
				<?=$detail->product_description?>
			  </div>
			</div>
		  </div>
		  <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
			<div class="panel-heading" role="tab" id="headingFour">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				  Specifications
				</a>
			  </h4>
			</div>
			<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			  <div class="panel-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		  </div>
          <div class="panel panel-default wow fadeInUp animated" data-wow-delay=".5s">
			<div class="panel-heading" role="tab" id="headingFour">
			  <h4 class="panel-title">
				<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
				  help
				</a>
			  </h4>
			</div>
			<div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
			  <div class="panel-body">
				Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
			  </div>
			</div>
		  </div>
		</div>-->   <?php }?>
        <div class="col-md-10 col-md-offset-1">
        <table class="table-striped">
        <thead>
      <tr>
        <th>Diameter (mm)</th>
        <th>Working Length (mm)</th>
        <th>Part Number</th>
            <th>Pack Quantity</th>
      </tr>
    </thead>
    <tbody>
    <tr>
    <td>16.0</td>
    <td>200</td>
    <td>2608685860</td>
    <td>1</td>
    </tr>
        <tr>
    <td>16.0</td>
    <td>400</td>
    <td>2608685861</td>
    <td>1</td>
    </tr>
        <tr>
    <td>18.0</td>
    <td>200</td>
    <td>2608685862</td>
    <td>1</td>
    </tr>
        <tr>
    <td>18.0</td>
    <td>2400</td>
    <td>2608685863</td>
    <td>1</td>
    </tr>
        <tr>
    <td>20.0</td>
    <td>200</td>
    <td>2608685864</td>
    <td>1</td>
    </tr>
        <tr>
    <td>20.0</td>
    <td>400</td>
    <td>2608685865</td>
    <td>1</td>
    </tr>
        <tr>
    <td>22.0</td>
    <td>400</td>
    <td>2608685866</td>
    <td>1</td>
    </tr>
        <tr>
    <td>22.0</td>
    <td>200</td>
    <td>2608685867</td>
    <td>1</td>
    </tr>
        <tr>
    <td>25.0</td>
    <td>400</td>
    <td>2608685868</td>
    <td>1</td>
    </tr>
        <tr>
    <td>25.0</td>
    <td>200</td>
    <td>2608685869</td>
    <td>1</td>
    </tr>
        <tr>
    <td>28.0</td>
    <td>400</td>
    <td>2608685870</td>
    <td>1</td>
    </tr>
        <tr>
    <td>28.0</td>
    <td>200</td>
    <td>2608685871</td>
    <td>1</td>
    </tr>
    </tbody>
        </table>
        </div>
	</div>
</div>
<!-- collapse -->
		<div class="related-products">
			<div class="container">
				<h3>Related Products</h3>
				<div class="product-model-sec single-product-grids">
                                     <?php
                                        foreach ($related_product_detail as $post)
                                        {
                                            foreach ($post as $data)
                                            {

                                            if(!empty($data))
                                            {

                                                foreach ($data as $value)
                                                {

                                                    $id = $value->id;
                                                    $name = $value->product_name;
                                                    $description = $value->product_description;
                                                    $price = $value->product_price;
                                                    $image  =  $value->product_image;
                                            ?>



                                    	 <div class="product-grid  col-md-3 c0l-sm-6 col-xs-12"  >
						<div class="more-product"><span> </span></div>
						<div class="product-img b-link-stripe b-animate-go  thickbox">
                                                    <img class=""   src="<?=base_url();?>/upload/product/<?=$value->id;?>/<?=$value->product_image;?>" style="width: 100%; height: 300px; cursor: pointer;"  alt="">
                                                    <div class="b-wrapper quicklook" id="<?=$value->id;?>" style="cursor: pointer;">
							<h4 class="b-animate b-from-left  b-delay03">
							<button> Quick View </button>
							</h4>
							</div>
						</div>
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
                                                            <h4 style="color: #ff5f00; text-transform: capitalize; font-size: 14px;line-height: 21px;"><?=$value->product_name;?></h4>
								<?php /*?><span class="item_price">Rs. <?=$value->product_price;?></span><?php */?>

								<!--<input type="text" class="item_quantity" value="1" />-->
                                                            <!--<button type="submit" class="item_add items" name="action">View Look</button>-->



								<!--<input type="button" class="item_add items" value="+">-->
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
                                     <?php } }
                                                        else
                                                        {
                                                            echo "No Item Found!!";
                                                        }

                                                            }
                                                    }?>
					<div class="clearfix"> </div>
				</div>
			</div>
		</div>
</div>
<div class="container">

  <!-- Trigger the modal with a button -->


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enquiry Form</h4>
        </div>
         <form name="enquiry" action="" onSubmit="return validate_form();" method="post">
        <div class="modal-body">
        <div class="row">
        <div class="form-group col-md-6" >
        <label for="Product Name" class="enquiry-label">Product Name</label><br>
          <input type="text" name="productname" readonly value="<?=$detail->product_name?>">

         </div>
       <div class="form-group col-md-6" >
       <label for="name" class="enquiry-label"> Quantity <span class="red">*</span></label><br>
          <input type="number" name="equantity" min="1" required>
       </div>
        <div class="form-group col-md-12" >
        <label for="name" class="enquiry-label">Full Name <span class="red">*</span></label><br>
        <span class="col-md-6 npl">
          <input type="text"  name="efname" value="" placeholder="First Name" required>
          <div id="error"></div>
          </span>
          <span class="col-md-6 npr">
          <input type="text" name="elname" value=""  placeholder="Last Name" required="">
          <div id="error"></div>
          </span>
          </div>
         <div class="form-group col-md-6">
        <label for="name" class="enquiry-label">Email <span class="red">*</span></label><br>
          <input type="email" name="eemail" value="" required="">
          <div id="error"></div>
          </div>
          <br>
          <div class="form-group col-md-6">
        <label for="name" class="enquiry-label">Contact Number <span class="red">*</span></label><br>
          <input type="text" name="ephone" value=""  required="">
          <div id="error"></div>
          </div>
          <div class="form-group col-md-12" >
        <label for="name" class="enquiry-label">Address</label><br>
        <span class="col-md-6 npl">
          <input type="text" name="eaddress1" value="" placeholder="Street Address Line 1 ">
          </span>
          <span class="col-md-6 npr">
          <input type="text" name="eaddress2" value="" placeholder="Street Address Line 2 ">
          </span>
          </div>
          <div class="form-group col-md-6">
           <label for="name" class="enquiry-label">City</label><br>
          <input type="text" name="ecity" value="">
          </div>
          <div class="form-group col-md-6">
           <label for="name" class="enquiry-label">State</label><br>
          <input type="text" name="estate" value="">

          </div>
          <div class="form-group col-md-2">
         <input class="btn btn-danger" type="Submit"  value="Submit">
         </div>

        </div>
        </div>
        </form>
        <!--<div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>-->
      </div>

    </div>
  </div>

</div>
                       <!-- <div class="modal fade" id="header-modal" aria-hidden="true" ></div>-->
	<!--footer-->
		<?php
                require_once 'footer.php';
                ?>
	<!--footer-->


</body>
</html>
<script type="text/javascript">

		$(document).ready(function() {

             $("#header-modal").delegate("#addcartform","submit",function(e){
		var color = document.forms["productformcart"]["color"].value;
		var size = document.forms["productformcart"]["size"].value;
		if ((color == null || color == "") && (size == null || size == "")) {
			document.getElementById("error").innerHTML ="Color and Size must be Selected. Click for select.";
			return false;
		}
		if (color == null || color == "") {
			document.getElementById("error").innerHTML ="Color must be Selected. Click for select.";
			return false;
		}


		if (size == null || size == "") {
		document.getElementById("error").innerHTML ="Size must be Selected. Click for select.";
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
    <script type="text/javascript">
	function validate_form() {
            if (enquiry.efname.value=="") {
                document.getElementById("error").innerHTML ="Please Enter  Your FirstName";
				document.enquiry.efname.focus();
                 return false;
				 }
          if (!isNaN(enquiry.efname.value)){
			document.getElementById("error").innerHTML ="Please Enter Only Characters";
				document.enquiry.efname.select();
                 return false;
			}
			 if (enquiry.elname.value=="") {
                document.getElementById("error").innerHTML ="Please Enter  Your LastName";
				document.enquiry.elname.focus();
                 return false;
				 }
          if (!isNaN(enquiry.elname.value)){
			document.getElementById("error").innerHTML ="Please Enter Only Characters";
				document.enquiry.elname.select();
                 return false;
			}

			if(!(/^\d{10}$/).test(enquiry.ephone.value)){
			 document.getElementById("error_phnum").innerHTML ="Please Enter  Correct Phone Number";
			 	document.enquiry.ephone.focus();
                return false;
			}
         //alert("Form Submitted Successfully");
				 //alert(enquiry.equantity.value);
				 var stat;
				 $.ajax({
						type: "POST",
						url: "<?php echo base_url(); ?>" + "product/submitEqform",
						async: false,
						dataType: 'json',
						data: {fname: enquiry.efname.value, lname:enquiry.elname.value, qty:enquiry.equantity.value, product:enquiry.productname.value,email:enquiry.eemail.value,phone:enquiry.ephone.value,add1:enquiry.eaddress1.value,add2:enquiry.eaddress2.value,city:enquiry.ecity.value,state:enquiry.estate.value },
						success: function(res) {
						if (res)
						{
						// Show Entered Value
						if(res.status)
						{
							alert(res.message);
							stat = true;
						}else{
							alert(res.message);
							stat = false;
						}
						}
						}
				});
				return stat;

        }
	</script>
