<?php
	if($this->input->post('kirim')){ //apakah tombol submit sudah diklik?
		$username 		= set_value('username');
		$nama_lengkap	= set_value('nama_lengkap');
		$alamat			= set_value('alamat');
		$telp			= set_value('telp');
		$email			= set_value('email');
	} else {
		$username		= $user->username;
		$nama_lengkap	= $user->nama_lengkap;
		$alamat			= $user->alamat;
		$telp			= $user->telp;
		$email			= $user->email;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
	
</head>
<body>

	<div id="container">

		<h1>Edit User</h1>

		<?=validation_errors()?>
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/welcome/update/<?=$user->user_id?>" method="post">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="username" placeholder="" value="<?=$username?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password" placeholder="">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Fullname</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?=$nama_lengkap?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Adresse</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="alamat" placeholder="" value="<?=$alamat?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Telephone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="telp" placeholder="" value="<?=$telp?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="email" placeholder="" value="<?=$email?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <input type="hidden" name="kirim" value="1" />
			  <button type="submit" class="btn btn-default">Simpan</button>
			</div>
		  </div>

		</form>
	</div>
</body>
</html>