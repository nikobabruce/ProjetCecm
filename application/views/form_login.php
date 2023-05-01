<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login</title>

	<script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
	
	<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
        
	<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
        <style type="text/css">
            .page-body{
	
	width:450px;
        height: 550px;
	border-radius:10px 10px 10px 10px;
	background-color:orange;
	padding-left:30px;
	padding-right:30px;
	padding-top:10px;
	margin-top:10px;
	position: center;
        margin-left: 20px;
        
	}
        video#fullscreen{
            position: fixed;
            right: 0;
            bottom: 0;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            
        }
        </style>
	
</head>
<body>
<nav class="navbar navbar-default navbar-fixed-top">
  
</nav>
    <video autoplay loop muted id="fullscreen">
        <source src="<?php echo base_url();?>video/Cordaid Open Data.mp4"type="video/mp4">
        
    </video>
	<div id="container">
            
            
            
            
            
            
           <div class="row">
	
	 <div class="col-md-4">
	 
	     <div class="panel page-default">
	       <div class="page-body">

		<h1>Connexion</h1>
               <hr>
               <br/>
		<?=validation_errors()?>
                <div ><?php $this->session->flashdata('error')?></div>
		<form class="form-horizontal" role="form" action="<?=base_url()?>index.php/login" method="post">
		
		  <div class="form-group">
			<label for="inputEmail3" class="col-sm-2 control-label">Username     </label>
			<div class="col-sm-10">
			  <input type="text" class="form-control" name="username" placeholder="votre nom" value="<?=set_value('username')?>">
			</div>
		  </div>
		  <br/>
		  <div class="form-group">
			<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
			<div class="col-sm-10">
			  <input type="password" class="form-control" name="password" placeholder="votre mot de pass">
			</div>
		  </div>
		  
		
		  
		  <div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
			  <button type="submit" class="btn btn-default">Login</button>
			</div>
		  </div>

		</form>
                </div>
             </div>  
         </div>  
         </div>
	
      </div>
    <footer></footer>
</body>
</html>