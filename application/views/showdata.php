<table border="2" cellspacing="4" cellpadding="4">  

<tr>
	<tH> Reg id </th>
		<tH> Reg fname </th>
			<tH> Reg lname </th>
				<tH> Reg email </th>
					<tH> Reg password </th>
						<tH> Reg dob </th>
							<th colspan="2">Action</tH>
	</tr>


	<?php foreach ($all_data as $key => $value) { ?>

	<tr>
		<td> <?php echo $value->reg_id; ?> </tD>
			<td> <?php echo $value->reg_fname; ?> </tD>
				<td> <?php echo $value->reg_lname; ?> </tD>
					<td> <?php echo $value->reg_email; ?> </tD>
						<td> <?php echo $value->reg_password; ?> </tD>
							<td> <?php echo $value->reg_dob; ?> </tD>
								<td> <a href="<?php echo base_url() ?>welcome/delete/<?php echo $value->reg_id; ?>">Delete</a> </tD>

									<td> <a href="<?php echo base_url() ?>welcome/edit/<?php echo $value->reg_id; ?>">Edit</a> </tD>

	</tr>
	
	<?php  }   ?>



 </table>