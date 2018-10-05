<?php include ('header.php'); ?>
	<div class="container">
	<?php echo form_open_multipart("employee/addQualificationDetails/{$result->user_id}", ['class' => 'form-horizontal']); ?>
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
				<legend>Qualification Details</legend>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">S.S.C</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'ssc','class'=>'form-control','placeholder'=>'S.S.C','value'=>set_value('ssc',$records->ssc)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'ssc','class'=>'form-control','placeholder'=>'S.S.C','value'=>set_value('ssc')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('ssc','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">H.S.C</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'hsc','class'=>'form-control','placeholder'=>'H.S.C','value'=>set_value('hsc',$records->hsc)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'hsc','class'=>'form-control','placeholder'=>'H.S.C','value'=>set_value('hsc')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('hsc','<div class="text-danger">','</div>'); ?>
					</div>
					</div>


					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Graduation</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'graduation','class'=>'form-control','placeholder'=>'Graduation','value'=>set_value('graduation',$records->graduation)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'graduation','class'=>'form-control','placeholder'=>'Graduation','value'=>set_value('graduation')]);?>
						<?php endif; ?>        
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('graduation','<div class="text-danger">','</div>'); ?>
					</div>
					</div>

					<div class="col-lg-12">
    				<div> 
   
				      <div class="form-group">
				        <label for="inputEmail" class="col-lg-2 control-label">Post Graduation</label>
				        <div class="col-lg-10">
				        <?php if(!empty($records)): ?>
						<?php echo form_input(['name'=>'post_graduation','class'=>'form-control','placeholder'=>'Post Graduation','value'=>set_value('post_graduation',$records->post_graduation)]);?>
						<?php else :?>
						<?php echo form_input(['name'=>'post_graduation','class'=>'form-control','placeholder'=>'Post Graduation','value'=>set_value('post_graduation')]);?>
						<?php endif; ?>       
				        </div>
				      	</div>
				    	</div>
				    	<div class="form-group">
				    	<?php echo form_error('post_graduation','<div class="text-danger">','</div>'); ?>
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

	      	<?php else :?>

		        <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-success']);?>

		         <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']);?>
		     <?php endif; ?>

	      </div>
    	</div>
    <?php echo form_close(); ?>

	</div>
<?php include ('footer.php'); ?>