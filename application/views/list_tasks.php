<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>page d'admistration</title>



<a href="<?php echo base_url()?>activite"class="btn btn-primary btn-xs">Logout</a>


	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
        <!-- Bootstrap -->
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/2.3.1/css/bootstrap.min.css'>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css"  href="<?php echo base_url();?>assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/fonts/font-awesome/css/font-awesome.css">
 <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div id="container">
<div class="navbar-header">

	    <button type="button"class="navbar-toggle"data-toggle="collapse"data-target=".navbar-collapse">

		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	    </button>

	</div>
    <div class="nav navbar-collapse collapse"id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#" class="page-scroll">Administrateur</a></li>



        <li><?php echo anchor('site/plan','Plannification');?></li>
        <li><?php echo anchor('site/rapport','Rapport');?></li>
		<li><?php echo anchor('site/chefAdmin','Rapport de tous le employés');?></li>


      </ul>
    </div>


	<table id="dataTable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Tâche</th>
				<th>Description</th>
				<!--<th>Classement</th>-->
				<th></th>
				<th>
					<a href="<?=base_url()?>index.php/welcome/add_task" class="btn btn-primary btn-sm">Add task</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($tasks as $key => $task) : ?>
			<tr>
			    <td><?php echo ($key+1); ?></td>
				<td><?php echo $task ["usertask_name"]; ?></td>
				<td><?php echo $task ["usertask_description"]; ?></td>
				<td><?php //echo $task ["sortorder"]; ?></td>
				<td>
					<a href="<?php echo base_url()?>index.php/welcome/edit_task/<?php echo $task ["usertask_id"];?>" class="btn btn-primary btn-sm">Edit</a>
					<a href="<?php echo base_url()?>index.php/welcome/delete_task/<?php echo $task ["usertask_id"];?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
				</td>
				</tr>
				<!--<td>
					<a href="<?php echo base_url()?>index.php/welcome/edit_group/<?php echo $user_profile ["usersgroup_id"];?>">Autorisation</a>
				</td>


			</tr>-->
			<?php endforeach; ?>
		</tbody>
	</table>

	<script type="text/javascript" charset="utf-8">
		$(document).ready(function() {
			$('#dataTable').dataTable();
		} );
	</script>
</body>
</html>
