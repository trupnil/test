<h2> Edit data </h2>

<?php foreach ($edit_data as $key => $value) { ?>
 


<form method="POST" action="<?php echo base_url() ?>welcome/update" >  
<label> Reg id </label>
<input type="text" name="reg_id" readonly value="<?php echo $value->reg_id ?>"><br>
<label> fname </label>
<input type="text" name="fname" value="<?php echo $value->reg_fname ?>" ><br>

<label> lname </label>
<input type="text" name="lname" value="<?php echo $value->reg_lname ?>" ><br>

<label> Email </label>
<input type="email" name="email" value="<?php echo $value->reg_email ?>" ><br>

<label> password </label>
<input type="text" name="password" value="<?php echo $value->reg_password ?>" ><br>

<label> DOB </label>
<input type="date" name="dob" value="<?php echo $value->reg_dob ?>" ><br> 
<input type="submit" name="submit" value="Update">

  </form>

  <?php }   ?>