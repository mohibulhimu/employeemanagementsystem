<?php include('header.php');?>
	<div class="container" >
			<div class="" >
				<?php echo form_open("dashboard/search",['class'=>'navbar-form navbar-right','role'=> 'search']); ?>
				<div class="form-group">

				<?php echo form_input(['name'=>'query','class'=>'form-control','placeholder'=>'Search']);?>
				</div>

				<?php echo form_submit(['value'=>'Search','class'=>'btn btn-success']);?>

				<?php echo form_close(); ?>
				<?php echo form_error('query','<div class="text-danger">','</div>'); ?>
			</div>
			<h1 class="" 
				style="background-color: white;box-shadow: 0px 1px 0px black;">
					Dashboard
				</h1>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-lg-10">			
				</div>
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
		</div>
		<div class="col-lg-10" ></div>
		<?php echo form_open("employee/deleteEmployee"); ?>
		<div class="row">
			
			<input type="submit" value="Delete" class="btn btn-danger" onclick="return confirm('Are you sure')">
		</div>
		<br>
		 <?php if( $response = $this->session->flashdata('employee_add')): ?>
		    <div class="row" >
		      <div class="col-lg-12" >
		        <div class="alert alert-dismissible alert-success">
		        <?php echo $response;?>
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
      <td>SL. No.</td>
      <td>First Name</td>
      <td>Username</td>
      <td>Designation</td>
      <td>User Role</td>
      <td>Joined At</td>
    </tr>
  </thead>
  <tbody>
  	<?php if (count($result)): ?>
  		<?php $count=$this->uri->segment(3, 0); ?>
  		<?php foreach($result as $res): ?>
  		<tr>
  		<?php if($res->user_id == 1): ?>
  		 		<td></td>
  		<?php else :?>
  			<td><?php echo form_checkbox(['value'=>$res->user_id ,'name' => 'user_id[]' ,'class'=>'checkbox' ]); ?></td>
  		<?php endif;  ?>
	   <?php if($res->user_id == 1): ?>
	   		<td>#</td>
	   		<td><?php echo $res->name; ?></td>
	   <?php else: ?>
	   	<td><?= ++$count;  ?></td>
	   	<td><?php echo anchor("employee/empPersonalDetails/{$res->user_id}",$res->name) ; ?></td>

	   <?php endif; ?>
	      <td><?php echo $res->username; ?></td>
	      <td><?php echo $res->role_name; ?></td>
	      <td><?php echo $res->role_name; ?></td>
	      <td><?= date('Y-m-d H:i:s',strtotime($res->created));  ?></td>
	      <td>
	      	
	      <?= anchor("employee/edit_employee/{$res->user_id}", 'Update', ['class'=>'btn btn-primary']); ?>

	      </td>
    	</tr>

  		<?php endforeach; ?>
  	<?php else: ?>
  	<tr>
  		<td>No Record Found !</td>
    </tr>
  	<?php endif; ?>
    
  </tbody>
</table>
		 <?php echo $this->pagination->create_links(); ?>
		</div>
		<?php form_close(); ?>
	</div>
<?php include('footer.php');?>