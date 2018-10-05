<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Admin Panel</title>
  	<link rel="stylesheet" href="<?php echo base_url('resources/css/bootstrap.min.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('resources/css/jquery-ui.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('resources/css/style.css');?>" />

	<script src="<?php echo base_url('resources/js/jquery-3.1.0.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-1.12.4.js'); ?>"></script>
	<script src="<?php echo base_url('resources/js/jquery-ui.js'); ?>"></script>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>


</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
  <div class="col-lg-6">
	    <div class="navbar-header">

	      <a class="navbar-brand" href="#">Employee Management System</a>
	    </div>
    </div>
       
    <div class="col-lg-6">
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav navbar-right">
	        <?php if($this->session->userdata('user_id')): ?>
	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Logout<span class="caret"></span></a>
	          <ul class="dropdown-menu" role="menu">
	            
	            <li><?php echo anchor("dashboard/changePassword" , 'Change Password'); ?></li>
	            <li><?php echo anchor("login/logout" , 'Logout'); ?></li>
	            
	            
	          </ul>
	        </li>
	  <?php else : ?>

	  <?php endif; ?>

	      </ul>

	    </div>
  </div>
</nav>


<?php $host= 'http//'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI']; ?>
<?php if($this->session->userdata('user_id')): ?>
<ul class="breadcrumb">
	<?php if(($host == 'http//'.$_SERVER['SERVER_NAME'].'/empmanagementsys/dashboard') || ($host == 'http//'.$_SERVER['SERVER_NAME'].'/empmanagementsys/index.php/dashboard')): ?>
  <li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
 <?php else: ?>
 	<li><a href="<?php echo base_url('dashboard'); ?>">Home</a></li>
 	<li><a href="<?php echo $_SERVER['PHP_SELF']; ?>">Employee</a></li>
<?php endif; ?>

</ul>
<?php else : ?>

<?php endif ; ?>