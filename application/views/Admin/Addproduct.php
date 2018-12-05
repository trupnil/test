<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
<?php $this->load->view('Admin/Common/css'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
     <?php $this->load->view('Admin/Common/Navbar'); ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
          <div id="page-wrapper">
            <div class="row">
                 <!-- page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!--end page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Elements -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="POST" action="<?php echo base_url() ?>Admin/Addp"  enctype="multipart/form-data">
                                          <div class="form-group">
                                            <label>Choose Category</label>
                                            <select id="cat"  class="form-control" name="category_fk">
                                                <option>Select Here</option>
                                               <?php foreach ($all_category as $key => $value) {
                                                  ?>
                                                  <option value="<?php echo $value->cat_id; ?>"> <?php echo $value->cat_name  ?> </option>
                                               <?php  }  ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Choose Category</label>
                                            <select id ="sub" class="form-control" name="sub_category">
                                                <option>Select Here</option>
                                               <?php foreach ($all_subcat as $key => $value) {
                                                  ?>
                                                  <option value="<?php echo $value->sub_id; ?>"> <?php echo $value->sub_name  ?> </option>
                                               <?php  }  ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Add Product Name</label>
<input class="form-control" name="pro_name" Placeholder="Enter Category Name">
                                             </div>
                                             <div class="form-group">
                                            <label>Add Product Price</label>
<input class="form-control" name="pro_price" Placeholder="Enter Product Price" >
                                             </div>
                                             <div class="form-group">
                                            <label>Add product Image</label>
<input class="form-control" name="image" type="file" Placeholder="Enter Category Name">
                                             </div>
                                             <div class="form-group">
                                            <label>Add Product details</label>
<textarea name="pro_details" cols="60" rows="10">  </textarea>                                             </div>
                                       <button type="submit" class="btn btn-primary">Submit Sub category</button>
                                       </form>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                     <!-- End Form Elements -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <?php    $this->load->view('Admin/Common/script');  ?>

    <script type="text/javascript">

        $(document).ready(function(){

            $('#cat').change(function(){

                //alert();
                var cat = $('#cat').val();
                //alert(cat);
                $.ajax({

                    url:"<?php echo base_url()  ?>Admin/get_sub",
                    method:"POST",
                    data:{ cat:cat },
                    success:function($data)
                    {
                        //alert(data);
                        $('#sub').html($data);
                    }



                });


            });




        });


    </script>
   
</body>

</html>
]