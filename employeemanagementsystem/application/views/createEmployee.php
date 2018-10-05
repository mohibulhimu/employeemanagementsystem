<?php include('header.php'); ?>

<div class="container">
<?php echo form_open("employee/insertEmployee",['class'=>'form-horizontal' ]);?>
  <fieldset>
    <legend>Create Employee</legend>
    
    <div class="col-lg-8">
    <div> 
   
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Name</label>
        <div class="col-lg-10">
		<?php echo form_input(['name'=>'name','class'=>'form-control', 'value'=>set_value('name'), 'placeholder'=>'Name']);?>        
        </div>
      </div>
    </div>
    <div class="form-group">
    <?php echo form_error('name','<div class="text-danger">','</div>'); ?>


      <label for="inputEmail" class="col-lg-2 control-label">User Name</label>
      <div class="col-lg-10">
        <?php echo form_input(['name'=>'username','class'=>'form-control', 'value'=>set_value('username') , 'placeholder'=>'Valid Email']);?>
      </div>
    </div>
    <?php echo form_error('username','<div class="text-danger">', '</div>'); ?>
    

    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'password']);?>
      </div>
    </div>    
    <?php echo form_error('password','<div class="text-danger">', '</div>'); ?>
    <div class="form-group">


    <div class="form-group">
    <label for="inputEmail" class="col-lg-2 control-label">User Role</label>
      <div class="col-lg-10">

       <select class="form-control" name="user_role_id" style="margin-left: 10px">
       <option></option>
       <option value=<?php echo $result?> >	Admin
       	</option>
       	<option value=<?php echo $result?> >Employee	
       	</option>
       </select>
       <br>
      </div>
    </div>    
    <?php echo form_error('user_role_id','<div class="text-danger">', '</div>'); ?>


    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">

        <?php echo form_submit(['value'=>'Submit','class'=>'btn btn-success']);?>

         <?php echo form_reset(['value'=>'Reset','class'=>'btn btn-default']);?>

      </div>
    </div>
    </div>
  </fieldset>
<?php echo form_close(); ?>
 </div>

<?php include('footer.php'); ?>
