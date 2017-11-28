<!DOCTYPE html>
<!--[if IE 9]>         <html class="ie9 no-focus"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-focus"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Size List</title>

        <meta name="description" content="OneUI - Admin Dashboard Template &amp; UI Framework created by pixelcave and published on Themeforest">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="assets/img/favicons/favicon.png">

        <!-- Web fonts -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400italic,600,700%7COpen+Sans:300,400,400italic,600,700">
        <link rel="stylesheet" href="<?= base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.css">
        <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.min.css">
        <link rel="stylesheet" id="css-main" href="<?= base_url();?>assets/css/oneui.css">

    </head>
    <body>
        <div id="page-container" class="side-scroll header-navbar-fixed">
           <?php require_once(APPPATH.'views/admin/header.php'); ?>

            
            <main id="main-container">
                <div class="content">
                <?php if($this->session->flashdata('SUCCESSMSG')) { ?>
                        <div role="alert" class="alert alert-success">
                                <button data-dismiss="alert" class="close" type="button"><span aria-hidden="true">x</span><span class="sr-only">Close</span></button>
                                <strong>Well done!</strong>
                                <?=$this->session->flashdata('SUCCESSMSG')?>
                        </div>
                <?php } ?>
                    <div class="block">
                        <div class="block-header">
                            <h3 class="block-title col-lg-6" style="text-align: left;">
                                Size List 
                            </h3>
                            <span class="col-lg-6" style="text-align: right;">
                              <a class="btn btn-default btn-rounded btn-condensed btn-sm" data-toggle="tooltip" title="Add Color" href="<?=base_url();?>account/color-add"><span title="Add Color"class="fa fa-plus"></span></a>
                            </span>
                        </div>
                        <div class="block-content">
                            <table class="table table-bordered table-striped js-dataTable-full">
                                <thead>
                                    <tr>
                                        <th>Size Name</th>
                                        <th>Created Date</th>
                                        <th>Modified Date</th>
                                        <th>Created By</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($size_list as $post) 
                                    { ?>
                                    <tr>
                                        <td style="text-transform: capitalize;"><?= $post->size;?></td>
                                        <td><?= $post->created_date?></td>
                                        <td><?= $post->modified_date?></td>
                                        <td><?php if($post->created_by == "1")
                                                {
                                                    echo "Admin";
                                                }
                                                else
                                                {
                                                    echo "Website";
                                                }
                                            ?>
                                        </td>
                                        <td><?php if($post->status == "0")
                                                {
                                                    echo "Active";
                                                }
                                                else
                                                {
                                                    echo "Inactive";
                                                }
                                            ?></td>
                                         <td>
                                            <a class="btn btn-default btn-rounded btn-condensed btn-sm" type="button" data-toggle="tooltip"  title="Edit" href="<?=site_url('account/size-color/'.$post->id)?>"><i class="fa fa-pencil"></i></a>
                                            <a href="<?= base_url() . 'account/size-delete/' . $post->id ?>" data-href="" class="btn btn-danger btn-rounded btn-condensed btn-sm delete"  data-toggle="tooltip" title="Delete" ><span class="fa fa-times" title="delete"></span></a>
                                         </td>
                                        
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                 

                 
                </div>
               
            </main>
           

           <?php require_once(APPPATH.'views/admin/footer.php'); ?>
        </div>
           <div class="modal fade" id="header-modal" aria-hidden="true"></div>
      
        <script src="<?= base_url();?>assets/js/core/jquery.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/bootstrap.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/jquery.appear.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/jquery.countTo.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/jquery.placeholder.min.js"></script>
        <script src="<?= base_url();?>assets/js/core/js.cookie.min.js"></script>
        <script src="<?= base_url();?>assets/js/app.js"></script>

        <!-- Page JS Plugins -->
        <script src="<?= base_url();?>assets/js/plugins/datatables/jquery.dataTables.min.js"></script>

        <!-- Page JS Code -->
        <script src="<?= base_url();?>assets/js/pages/base_tables_datatables.js"></script>
    </body>
</html>
<script>
    	$('body').delegate('.editField', 'click', function() {

		var product_id = $(this).attr('data-product_id');
                console.log(product_id);
		var posturl = $(this).attr('data-href');
                console.log(posturl);
		var type = $(this).attr('data-type');
                console.log(type);

		$.ajax({
			type: "POST",
			url: posturl,
			data: {product_id: product_id,type: type},
			dataType: "json",
			success: function(data) {
                            var contact = data['html'];
                            var name = data['name'];
                            
                            $("#header-modal").html("<div class='modal-dialog modal-lg'>"+
                                        "<div class='modal-content'>" +
                                                "<div class='modal-header'>" +
                                                        "<button type='' class='close' data-dismiss='modal' aria-hidden='true'><i class='icons-office-52'></i></button>" +
                                                        "<h4 class='modal-title'><strong>Client</strong></h4>" +
                                                "</div>" +
                                                "<div class='modal-body' id='modal_body'>" +
                                                    "<div class='row text-center'>"+
                                                        "<div class='col-md-2'><label class='control-label'>"+name+"</label></div>"+
                                                        "<div class='col-md-8'>"+contact+"</div>"+
                                                    "</div>"+
                                                "</div>" +
                                                "<div class='modal-footer'> " +
                                                 "<button type='button' class='btn btn-success product_edit_submit_data'>Submit</button>" +
                                                        "<button type='button' class='btn btn-danger  btn-embossed bnt-square' data-dismiss='modal'>Cancle</button>" +
                                                "</div>" +
                                        "</div>"+
                                "</div>"
                            );
                            $('#header-modal').modal('show');
			}
		});
	});
        
        $('#header-modal').delegate('.product_edit_submit_data', 'click', function() {
                var product_value = $('.product_value').val();
                var product_id = $('.product_value').attr('id');
                var posturl = 'product_edit_submit';
                var type = $('.product_value').attr('data-type');
                console.log(type);
                console.log(product_id);
                $.ajax({
			type: "POST",
			url: posturl,
			data: {product_id: product_id,product_value: product_value,type:type},
			dataType: "json",
			success: function(data) {
                            if(data.success)
                            {
                                location.reload();
                            }
			}
		});
        });
        
    </script>