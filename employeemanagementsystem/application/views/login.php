<?php include('header.php'); ?> 
<div class="container">
<?php echo form_open("login/user_login",['class'=>'form-horizontal' ]);?>
  <fieldset>
    <legend>Login</legend>
    <?php if( $error = $this->session->flashdata('login_response')): ?>
    <div class="row" >
      <div class="col-lg-6" >
        <div class="alert alert-dismissible alert-danger">
        <?php echo $error;?>
        </div>
      </div>
    </div>
  <?php endif; ?>
    <div class="col-lg-6">
    <div> 
      <div class="form-group">
        <label for="inputEmail" class="col-lg-2 control-label">Email</label>
        <div class="col-lg-10">

<?php echo form_input(['name'=>'username','class'=>'form-control','placeholder'=>'Email','value'=>set_value('username')]);?>
        

        </div>
      </div>
    </div>

    <div class="form-group">
    <?php echo form_error('username','<div class="text-danger">','</div>'); ?>
      <label for="inputEmail" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">

        <?php echo form_password(['name'=>'password','class'=>'form-control','placeholder'=>'Password']);?>

      </div>
    </div>
    
     
    <?php echo form_error('password','<div class="text-danger">', '</div>'); ?>
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