<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>page d'admistration</title>
        
        
       
<a href="<?php echo base_url()?>site/afficherplan"class="btn btn-primary btn-xs">Logout</a>


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
    
   

	<table id="dataTable" class="table table-striped table-bordered">
		<thead>
			<tr>
				<th>#</th>
				<th>Username</th>
				<th>Fullname</th>
				<th>Phone</th>
				<th>Email</th>
				<th>
					<a href="<?=base_url()?>index.php/welcome/create" class="btn btn-primary btn-sm">Add User</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($users->result() as $user) : ?>
			<tr>
				<td><?php echo $user->user_id ?></td>
				<td><?php echo $user->username ?></td>
				<td><?php echo $user->nama_lengkap ?></td>
				<td><?php echo $user->telp ?></td>
				<td><?php echo $user->email ?></td>
				<td>
					<a href="<?php echo base_url()?>index.php/welcome/update/<?=$user->user_id?>" class="btn btn-primary btn-sm">Edit</a>
					<a href="<?php echo base_url()?>index.php/welcome/delete/<?=$user->user_id?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus?')">Delete</a>
				</td>
			</tr>
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