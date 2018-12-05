<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
   <?php  $this->load->view('Admin/Common/css'); ?>

    <!-- Page-Level CSS -->
  
</head>

<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
       <?php  $this->load->view('Admin/Common/Navbar'); ?>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                 <!-- end  page header -->
            </div>
            
         
           
           
                <div class="col-lg-6">
                     <!--    Context Classes  -->
                    <div class="panel panel-default">
                       
                        <div class="panel-heading">
                           All category
                        </div>
                        
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category Name</th>
                                            <tH colspan="2"> Action</th>
                                            
                                        </tr>
                                    </thead>


                                  
                                        <?php foreach ($all_category as $key => $value) { ?>
                                          <tbody>

                                         <tr class="success">
                                            <td><?php echo $value->cat_id; ?></td>
                                            <td><?php echo $value->cat_name; ?></td>
                                             <td> <a href="">Delete</a> </td>
                                              <td><a href="">Edit</a></td>
                                        </tr>
                                         </tbody>
                                           
                                     <?php   }  ?>

                                                                                   </tr>
                                        
                                   
                                </table>
                            </div>
                        </div>
                    </div>
                    <!--  end  Context Classes  -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <?php $this->load->view('Admin/Common/script'); ?>
    <!-- Page-Level Plugin Scripts-->
    

</body>

</html>
