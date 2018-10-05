<?php include ('header.php'); ?>
	<div class="container">
	<?php echo form_open_multipart("employee/addContactDetails/{$result->user_id}", ['class' => 'form-horizontal']); ?>
	<?php echo form_hidden('user_id',$result->user_id); ?>
	<?php //echo form_hidden('emp_role_id',$result->user_role_id); ?>
		<div class="row">
			<div class="col-lg-3">
				<legend>Employee Details</legend>
				
				<div class="list-group">
				<a href="" class="list-group-item">
				<?php if(!empty($profile_pic)): ?>
					<img src="<?php echo $profile_pic->avatar;?>" style="width:230px">
				<?php else :?>
					<img src="<?php echo base_url('resources/images/avatar.png'); ?>" style="width:230px" >
				<?php endif; ?>
				</a>
				<br>
				<?php echo form_upload(['name'=>'avatar','class'=>'form-control']); ?>
				<?php if(isset($upload_error)) echo $upload_error; ?>
				<br>
					<ul class="nav nav-pills nav-stacked">
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empPersonalDetails/{$result->user_id}"); ?>">Personal Details</a></li>
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empContactDetails/{$result->user_id}"); ?>">Contact Details</a></li>
					<li class="btn btn-default"><a href="<?php echo base_url("employee/empQualificationDetails/{$result->user_id}"); ?>">Qualification Details</a></li>

					</ul>
				</div>
			</div>
			<div class="col-lg-9">
				<legend>Contact Details</legend>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Address Line1</label>
				        <div class="col-lg-10">
						<?php if(!empty($records)): ?>
				   		<?php echo form_input(['name'=>'addressLine1', 'class'=>'form-control', 'placeholder'=>'Address Line1', 'value'=>set_value('addressLine1',$records->addressLine1)]); ?>
						<?php else :?>
						<?php echo form_input(['name'=>'addressLine1', 'class'=>'form-control', 'placeholder'=>'Address Line1', 'value'=>set_value('addressLine1')]); ?>
						<?php endif; ?> 
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('addressLine1','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Address Line2</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'addressLine2','class'=>'form-control','placeholder'=>'Address Line2','value'=>set_value('addressLine2',$records->addressLine2)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'addressLine2','class'=>'form-control','placeholder'=>'Address Line2','value'=>set_value('addressLine2')]);?>
						<?php endif; ?>
						        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('addressLine2','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">City</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'city','class'=>'form-control','placeholder'=>'City','value'=>set_value('city',$records->city)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'city','class'=>'form-control','placeholder'=>'City','value'=>set_value('city')]);?>
						<?php endif; ?>       
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('city','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Thana</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'thana','class'=>'form-control','placeholder'=>'Thana','value'=>set_value('thana',$records->thana)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'thana','class'=>'form-control','placeholder'=>'Thana','value'=>set_value('thana')]);?>
						<?php endif; ?>     
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('thana','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Zip Code</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'zip_code','class'=>'form-control','placeholder'=>'Zip Code','value'=>set_value('zip_code',$records->zip_code)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'zip_code','class'=>'form-control','placeholder'=>'Zip Code','value'=>set_value('zip_code')]);?>
						<?php endif; ?>      
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('zip_code','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Country</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'country','class'=>'form-control','placeholder'=>'Country','value'=>set_value('country',$records->country)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'country','class'=>'form-control','placeholder'=>'Country','value'=>set_value('country')]);?>
						<?php endif; ?>          
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('country','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Mobile No</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'mobile','class'=>'form-control','placeholder'=>'Mobile','value'=>set_value('mobile',$records->mobile)]);?>
						<?php else: ?>
						<?php echo form_input(['name'=>'mobile','class'=>'form-control','placeholder'=>'Mobile','value'=>set_value('mobile')]);?>
						<?php endif; ?>       
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('mobile','<div class="text-danger">','</div>'); ?>
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
	      	<?php if(!empty($records)): ?>
		        
	      	<?php else: ?>
		        
		        <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-success']);?>

		         <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']);?>
		    <?php endif; ?>

	      </div>
    	</div>
    <?php echo form_close(); ?>

	</div>
<?php include ('footer.php'); ?>