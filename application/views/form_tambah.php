<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Administration Cordaid</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING:Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  <div class="navbar navbar-default navbar-fixed-top"role="navigation">
  <a href="<?php echo base_url()?>activite"class="btn btn-danger btn-xs">Logout</a>
  <div class="container">
    
	<div class="navbar-header">
	
	    <button type="button"class="navbar-toggle"data-toggle="collapse"data-target=".navbar-collapse">
		
		    <span class="sr-only">Toggle navigation</span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
		    <span class="icon-bar"></span>
	    </button>
		<a class="navbar-brand"href=""><strong>Administration Cordaid</strong></a>
	</div>
	  <div class="nav navbar-collapse collapse">
	    <ul class="nav navbar-nav navbar-right">
		
		<li><?php echo anchor('welcome','Administrateur')?></li>
		         <li><?php echo anchor('site/plan','Plannification');?></li>
        <li><?php echo anchor('site/rapport','Rapport');?></li>
		<li><?php echo anchor('site/chefAdmin','Rapport de tous le employés');?></li>
		
		
		
		  
		</ul>
	  
	  </div>
	
	
  </div>
  </div>

	<div id="container">

		<h1>Add User</h1>

		<?=validation_errors()?>
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/welcome/create" method="post">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Username</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="username" placeholder="" value="<?=set_value('username')?>">
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
			  <input type="text" class="form-control" name="nama_lengkap" placeholder="" value="<?=set_value('nama_lengkap')?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Adresse</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="alamat" placeholder="" value="<?=set_value('alamat')?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Numero de telephone</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="telp" placeholder="" value="<?=set_value('telp')?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Email</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="email" placeholder="" value="<?=set_value('email')?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Groupe d'appartenance</label>
			<div class="col-sm-10">
			  <select type="text" class="form-control" name="group_id">
				<option value = "">Select</option>
				
				
				<?php foreach($group_list as $key => $value){ ?>
				<option value = "<?php echo $value["usersgroup_id"];?>" ><?php echo $value["usersgroup_name"];?></option>
				<?php } ?>
				
				
			  </select>
			</div>
		  </div>
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Inscrire</button>
			</div>
		  </div>

		</form>
	</div>
</body>
</html>