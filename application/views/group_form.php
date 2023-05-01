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
   
<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/welcome/save_group" method="post">
		
	<div class="form-group">
			<input type="hidden" name="usersgroup_id" value = "<?php echo $usersgroup_id;?>">
			<label for="usersgroup_name" class="col-sm-2 control-label">Groupe name</label>
			
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="usersgroup_name" placeholder="" value="<?php echo $usersgroup_name;?>">
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="usersgroup_description" class="col-sm-2 control-label">Description</label>
			<div class="col-sm-10">
			  <textarea type="text" class="form-control" name="usersgroup_description" placeholder="">
					<?php echo $usersgroup_description;?>
			  </textarea>
			</div>
		  </div>
		  
		  <div class="form-group">
			<label for="sortorder" class="col-sm-2 control-label">Ordre</label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="sortorder" placeholder="" value="<?php echo $sortorder;?>">
			</div>
		  </div>
		 
			<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Save</button>
			</div>
		  </div>
</form>
				  
	 </div>
</body>
</html>