<?php include ('header.php'); ?>
	<div class="container">
	<?php echo form_open_multipart("employee/update_employee/{$res->user_id}", ['class' => 'form-horizontal']); ?>
	<?php echo form_hidden('user_id',$res->user_id); ?>
	<!-- <?php echo form_hidden('emp_role_id',$res->user_role_id); ?> -->
		<div class="row">
			<div class="col-lg-3">
				<legend>Employee Details</legend>
				
				<div class="list-group">
				<a href="" class="list-group-item">
				<?php if(!empty($res)): ?>
					<img src=<?php echo $res->avatar; ?> style="width:230px">
				<?php else :?>
					<img src=<?php echo base_url('resources/images/avatar.png');?> style="width:230px" >
				<?php endif; ?>
				</a>
				<br>
				<?php echo form_upload(['name'=>'avatar','class'=>'form-control']); ?>
				<?php if(isset($upload_error)) echo $upload_error; ?>
				<br>
					<ul class="nav nav-pills nav-stacked">
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empPersonalDetails/{$res->user_id}"); ?>">Personal Details</a></li>
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empContactDetails/{$res->user_id}"); ?>">Contact Details</a></li>
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empQualificationDetails/{$res->user_id}"); ?>">Qualification Details</a></li>

					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<legend>Personal Details</legend>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">First Name</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'first_name','class'=>'form-control','placeholder'=>'First Name','value'=>set_value('first_name',$res->first_name)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'first_name','class'=>'form-control','placeholder'=>'First Name','value'=>set_value('first_name')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('first_name','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Midle Name</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'midle_name','class'=>'form-control','placeholder'=>'Midle Name','value'=>set_value('midle_name',$res->midle_name)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'midle_name','class'=>'form-control','placeholder'=>'Midle Name','value'=>set_value('midle_name')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('midle_name','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Last Name</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'last_name','class'=>'form-control','placeholder'=>'Last Name','value'=>set_value('last_name',$res->last_name)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'last_name','class'=>'form-control','placeholder'=>'Last Name','value'=>set_value('last_name')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('last_name','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name','value'=>set_value('username',$res->username)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'User Name','value'=>set_value('username')]);?>
						<?php endif; ?>       
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('username','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Gender</label>
				      <div class="col-lg-10">
				      <?php if(!empty($res)): ?>
				      <select class="form-control" name="gender">
				      		<option><?php echo $res->gender ;?></option>
				        	<option>Male</option>
				        	<option>Female</option>
				        </select>
				        <?php else :?>
						<select class="form-control" name="gender">
				      		<option></option>
				        	<option>Male</option>
				        	<option>Female</option>
				        </select>
						<?php endif; ?>
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('gender','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Nationality</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'nationality','class'=>'form-control','placeholder'=>'Nationality','value'=>set_value('nationality',$res->nationality)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'nationality','class'=>'form-control','placeholder'=>'Nationality','value'=>set_value('nationality')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('nationality','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				      <label for="inputEmail" class="col-lg-2 control-label">Marital Status</label>
				      <div class="col-lg-10">
				      <?php if(!empty($res)): ?>
				      <select class="form-control" name="marital_status">
				        	<option><?php echo $res->marital_status;?></option>
				        	<option>Single</option>
				        	<option>Married</option>
				        	<option>Divorced</option>
				        </select>
				        <?php else :?>
				        	<select class="form-control" name="marital_status">
				        	<option></option>
				        	<option>Single</option>
				        	<option>Married</option>
				        	<option>Divorced</option>
				        </select>
				        <?php endif; ?>
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('marital_status','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Date Of Birth</label>
				        <div class="col-lg-10">
				        <?php if(!empty($res)): ?>
						<?php echo form_input(['name'=>'dob', 'class'=>'form-control','type'=>'date', 'placeholder'=> 'dd-mm-yyyy' , 'value'=>set_value('dob',$res->dob)]); ?>
						<?php else :?>
						<?php echo form_input(['name'=>'dob', 'class'=>'form-control','type'=>'date', 'placeholder'=> 'dd-mm-yyyy' , 'value'=>set_value('dob')]); ?>
						<?php endif; ?>
						</div>       
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('dob','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<br>
					<br>
					<br>
					<br>
					<br>
					<br>

		<div class="form-group">
	      <div class="col-lg-12 col-lg-offset-5">
	      

		        <?php echo form_submit(['value'=>'Update','class'=>'btn btn-success']);?>

		         <?php echo form_reset(['value'=>'Cancel','class'=>'btn btn-default']);?>
		     

	      </div>
    	</div>
    <?php echo form_close(); ?>

	</div>
<?php include ('footer.php'); ?>