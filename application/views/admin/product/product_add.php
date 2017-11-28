<!DOCTYPE html>
<html class="no-focus">
    <head>
        <meta charset="utf-8">
        <title>Product Add</title>
        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/js/plugins/slick/slick-theme.min.css">
        
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/css/oneui.css">
        <link rel="stylesheet" id="css-main" href="<?php echo base_url(); ?>assets/js/jquery.multiselect.css">

    </head>
    <body>
            <div id="page-container" class="side-scroll header-navbar-fixed">
         
       
       <?php      require_once(APPPATH.'views/admin/header.php'); ?>
            <!-- Main Container -->
            <main id="main-container">
                

                <!-- Page Content -->
                <div class="content">
                    <div class="row">
                        <div class="col-lg-12">
                            <!-- Main Dashboard Chart -->
                            <div class="block">
                                <div class="block-header">
                                    <ul class="block-options">
                                        <li>
                                            <button type="button" data-toggle="block-option" data-action="refresh_toggle" data-action-mode="demo"><i class="si si-refresh"></i></button>
                                        </li>
                                    </ul>
                                    <h3 class="block-title">New Product Register</h3>
                                </div>
                                <div class="block-content block-content-full bg-gray-lighter ">
                                      <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                                          
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Code<span class="text-danger">*</span>&nbsp;&nbsp;<a style="cursor: pointer;" class="AutoGenerate">Auto Generate</a></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="product_code" value="<?php echo set_value('product_code'); ?>" name="product_code" placeholder="Product Code" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_code'); ?></div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Name<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" id="product_name" value="<?php echo set_value('product_name'); ?>" name="product_name" placeholder="Product Name" >
                                                 <div style="margin-top: 0px; color: red;"><?= form_error('product_name'); ?></div>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Description<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <textarea class="form-control input-lg" id="product_description"  name="product_description" placeholder="Product Description" rows="4" ><?php echo set_value('product_description'); ?></textarea>
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_description'); ?></div>
                                            </div>
                                        </div>
                                       
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Category<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="product_category" id="subcategoryview" >
                                                    <option value="">Select category</option>
                                                    <?php
                                                    foreach ($category_list as $post)
                                                    {?>
                                                    <option value="<?=$post->id?>"><?=$post->category_name?></option>
                                                   <?php }
                                                    ?>
                                                   
                                                </select>
                                                 <div style="margin-top: 0px; color: red;"><?= form_error('product_category'); ?></div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group" >
                                            <div id="subcat">
                                                <label class="col-md-2 control-label">Sub Category<span class="text-danger">*</span></label>
                                                <div class="col-md-7">
                                                    <select class="form-control" multiple="" name="sub_category_id[]" >
                                                    </select>
                                                </div>
                                            </div>
                                        </div> 
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Color Product<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                    <select  class="form-control" name="colorproduct[]"  multiple id="colorproduct">
                                                   <?php
                                                        foreach ($color_list as $post)
                                                        {?>
                                                        <option value="<?=$post->id?>"><?=$post->color_name;?></option>
                                                       <?php }
                                                   ?>
                                                   </select>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Size Product<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                    <select   class="form-control" name="sizeproduct[]"  multiple id="sizeproduct">
                                                   <?php
                                                        foreach ($size_list as $post)
                                                        {?>
                                                        <option value="<?=$post->id?>"><?=$post->size;?></option>
                                                       <?php }
                                                   ?>
                                                   </select>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label  class="col-md-2 control-label">Related Product<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                    <select  class="form-control" name="relatedproduct[]"  multiple id="relatedproduct">
                                                   <?php
                                                        foreach ($product_list as $post)
                                                        {?>
                                                        <option value="<?=$post->id?>"><?=$post->product_name?></option>
                                                       <?php }
                                                   ?>
                                                   </select>
                                            </div>
                                        </div>  
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Type<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <select class="form-control" name="product_type" >
                                                    <option value="">Select type</option>
                                                    <option value="1">Latest</option>
                                                    <option value="2">Popular</option>
                                                    <option value="3">Feature</option>
                                                    
                                                </select>
                                                 <div style="margin-top: 0px; color: red;"><?= form_error('product_type'); ?></div>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Product Image<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <img id="previewimage" onclick="$('#uploadFile').click();" src="<?php echo base_url(); ?>images/product_image.gif" style="cursor: pointer;height: 210px;width: 210px;position: relative;z-index: 10;"/>
                                                <input type="file" id="uploadFile" name="product_image" style="position: absolute; margin: 0px auto; visibility: hidden;" accept="image/*" />
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_image'); ?></div>
                                            </div>
                                        </div>
                                          <hr><div style="text-align: center; font-weight: 100; font-size: 20px;">Product Price Detail</div><hr>
                                         <div class="form-group">
                                            <label class="col-md-2 control-label">Rate<span class="text-danger">*</span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text"  name="rate" value="<?php echo set_value('rate'); ?>" placeholder="Product Price"  id="rate">
                                                   <div style="margin-top: 0px; color: red;"><?= form_error('rate'); ?></div>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Quantity<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control quantity" type="text" id="quantity" name="quantity" placeholder="Quantity Price"  >
                                                 <div style="margin-top: 0px; color: red;"></div>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Gross Amount<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" readonly="" value="" id="gross" name="gross_amount" placeholder="Gross Amount"  >
                                                 <div style="margin-top: 0px; color: red;"></div>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Discount(%)<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control discount" type="text" value="<?php echo set_value('product_discount'); ?>" id="discount" name="product_discount" placeholder="Product Discount" >
                                                <div style="margin-top: 0px; color: red;"><?= form_error('product_discount'); ?></div>
                                            </div>
                                        </div>
                                          
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Net Amount<span class="text-danger"></span></label>
                                            <div class="col-md-7">
                                                <input class="form-control" type="text" readonly="" value="" id="net" name="net_amount" placeholder="Net Product" >
                                            </div>
                                        </div>
                                     
                                       <div class="form-group">
                                            <div class="col-md-8 col-md-offset-2">
                                                <button class="btn btn-sm btn-primary" name="submit" type="submit"><i class="fa fa-check"></i>Submit Product</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- END Main Dashboard Chart -->
                        </div>
                     
                    </div>
                  
                </div>
                <!-- END Page Content -->
            </main>
        <?php      require_once(APPPATH.'views/admin/footer.php'); ?>
        </div>
    
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/app.js"></script>
        <script src="<?php echo base_url(); ?>assets/js/jquery.multiselect.js"></script>
        
        
    </body>
</html>
<script>

$('#relatedproduct').multiselect({
    columns: 1,
    placeholder: 'None Selectd',
    search: true,
    selectAll: true
});
$('#colorproduct').multiselect({
    columns: 1,
    placeholder: 'None Selectd',
    search: true,
    selectAll: true
});
$('#sizeproduct').multiselect({
    columns: 1,
    placeholder: 'None Selectd',
    search: true,
    selectAll: true
});

</script>
<script>
    
$('document').ready(function()
{ 
	function readURL(input) {
		if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                            $('#previewimage').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(input.files[0]);
		}
	}
		$("#uploadFile").change(function(){
			readURL(this);
		});
                
		$(".AutoGenerate").click(function(){
                    
		});
                
        $('.AutoGenerate').bind("click", function() {
            $.post("<?php echo base_url() . 'account/product/product-code' ?>", {}, function(data) {
                    $('#product_code').val(data);
            });
	});
        
        $('#subcategoryview').change(function(event)
        {   
            var category_id = $(this).val()
            $.ajax({
			url:'<?=site_url('account/subcategory_view')?>',
			data:"category_id="+category_id,
			type:"post",
			dataType: "json",
			success: function(data) {
				$('#subcat').html(data.html);
			}
		});
        });
        
        
        
        
var quantity_blur=function()
{
    var quantity = $('#quantity').val().trim();
    if(quantity==='' || isNaN(quantity))
    {
        $('#quantity').val('1');
        quantity='1';
    }

    var rate = parseFloat($('#rate').val());
    var gross = parseFloat(rate * quantity);
    
    $('#gross').val(gross.toFixed(2));
};

var discount_blur=function()
{
    var discount = $('#discount').val().trim();
    if(discount==='' || isNaN(discount))
    {
        $('#discount').val('0');
        discount='0';
    }
    var gross = $('#gross').val();
    var net = gross - (gross*discount/100);
    
    $('#net').val(net.toFixed(2));
}

 $('.quantity').blur(quantity_blur);
 $('.discount').blur(discount_blur);
 
 
 
        
       
	
});
</script>