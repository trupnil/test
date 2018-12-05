<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style type="text/css">

body {
    margin-top: 20px;
}


</style>

<div class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="panel-title">
                        <div class="row">
                            <div class="col-xs-6">
                                <h5><span class="glyphicon glyphicon-shopping-cart"></span> Shopping Cart</h5>
                            </div>
                            <div class="col-xs-6">
                                <button type="button" class="btn btn-primary btn-sm btn-block">
                                    <span class="glyphicon glyphicon-share-alt"></span> Continue shopping
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                   
                    <hr>

                    <?php   foreach ($this->cart->contents() as $items) { ?>
                      
               
                    <div class="row">
                        <div class="col-xs-2"><img class="img-responsive" src="<?php echo base_url() ?>Uploads/<?php echo $items['image']; ?>">
                        </div>
                        <div class="col-xs-4">
                            <h4 class="product-name"><strong><?php echo $items['name']; ?></strong></h4><h4><small>Product description</small></h4>
                        </div>
                        <div class="col-xs-6">
                            <div class="col-xs-4 text-right">
                                <h6><strong><?php echo $items['price']; ?> </strong></h6>
                            </div>
                             <div class="col-xs-4 text-right">
                                <h6><strong><?php echo $items['qty']; ?> </strong></h6>
                            </div>
                               <div class="col-xs-4 text-right">
                                <h6><strong><?php echo $items['subtotal']; ?> </strong></h6>
                            </div>
                           
                           
                        </div>
                    </div>

                     <?php   }   ?>
                    <hr>
                   
                </div>
                <div class="panel-footer">
                    <div class="row text-center">
                        <div class="col-xs-9">
                            <h4 class="text-right">Total <strong><?php echo $this->cart->total(); ?></strong></h4>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>

        <div class = "col-xs-6">

            <form method="POST" action="<?php echo base_url() ?>Home/save_cart">
  <div class="form-group">
    <label >First name</label>
    <input type="text" class="form-control" name="fname" required>
  </div>
   <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" maxlength="10"  required >
  </div>

  <div class="form-group">
    <label >Address </label>
   <textarea class="form-control" rows="5" name="address" id="comment" required ></textarea>
  </div>

  <div class="form-check">
  <label class="form-check-label">
    <input type="radio" class="form-check-input" name="payment" value="cod">Cash On Delivery
     <input type="radio" class="form-check-input" name="payment" value="online">Online
  </label>

    <a href="<?php echo base_url() ?>payumoney" class="btn btn-primary">MAKE PAYMENT</a>
  
</div>

 
 <?php  if(empty($this->session->userdata('reg_fname')))
{ ?>

<a href="<?php echo base_url() ?>Welcome/login" class="btn btn-primary"> Login First </a>

<?php 
}
else
{
  ?>

  <button type="submit" class="btn btn-primary">Confirm Order</button>
  
  <?php  
}
   ?> 
  
</form>

        </div>
    </div>
</div>


