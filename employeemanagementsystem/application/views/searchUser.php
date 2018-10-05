<?php include('header.php');?>
	<div class="container">
		<div class="row">

			<div class="col-lg-4">
					<ul class="nav nav-pills">
					 
					  <li class="dropdown active">
					    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
					      Employee Management <span class="caret"></span>
					    </a>
					    <ul class="dropdown-menu">
					      <li><?php echo anchor("employee/createEmployee",'Create Employee')?></li>
					     <li><?php echo anchor("employee/employeeList",'view Employee')?></li>
					      
					    </ul>
					  </li>
					</ul>
			</div>
			<div class="col-lg-8">
				<?php echo form_open("dashboard/search",['class'=>'navbar-form navbar-right','role'=> 'search']); ?>
				<div class="form-group">

				<?php echo form_input(['name'=>'query','class'=>'form-control','placeholder'=>'Search']);?>
				</div>

				<?php echo form_submit(['value'=>'Search','class'=>'btn btn-success']);?>

				<?php echo form_close(); ?>
				<?php echo form_error('query','<div class="text-danger">','</div>'); ?>
			</div>
		</div>
		<div class="row">
			<?php echo anchor("employee/deleteEmployee" ,'Delete' , ['class'=>'btn btn-danger'])  ?>
		</div>
		<br>
		 <?php if( $error = $this->session->flashdata('employee_add')): ?>
		    <div class="row" >
		      <div class="col-lg-12" >
		        <div class="alert alert-dismissible alert-success">
		        <?php echo $error;?>
		        </div>
		      </div>
		    </div>
		  <?php endif; ?>
		<br>

		<div class="row">
			<table class="table table-striped table-hover ">
  <thead>
    <tr>
      <td>#</td>
      <td>First Name</td>
      <td>Username</td>
      <td>Designation</td>
      <td>User Role</td>
    </tr>
  </thead>
  <tbody>
  	<?php if (count($record)): ?>
  		<?php foreach($record as $record): ?>
  		<tr>
  		<?php if($record->user_id == 1): ?>
  		 		<td></td>
  		<?php else :?>
  			<td><?php echo form_checkbox(['class'=>'checkbox']); ?></td>
  		<?php endif;  ?>
	   <?php if($record->user_id == 1): ?>
	   		<td><?php echo $record->name; ?></td>
	   <?php else: ?>
	   	<td><?php echo anchor("employee/empPersonalDetails/{$record->user_id}",$record->name) ; ?></td>

	   <?php endif; ?>
	      <td><?php echo $record->username; ?></td>
	      <td><?php echo $record->role_name; ?></td>
	      <td><?php echo $record->role_name; ?></td>
    	</tr>

  		<?php endforeach; ?>
  	<?php else: ?>
  	<tr>
  		<td>No Record Found !</td>
    </tr>
  	<?php endif; ?>
    
  </tbody>
</table>
		 
		</div>
	</div>
<?php include('footer.php');?>