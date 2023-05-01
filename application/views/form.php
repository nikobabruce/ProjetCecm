<?php
 
    $id_plan="";
    $date_plan="";
	 $date_fin="";
    $type_plan="";
   
   
 if($op=="edit"){
    foreach ($sql->result() as $obj) {
        $op="";
        $id_plan=$obj->id_plan;
        $date_plan=$obj->date_plan;
        $type_plan=$obj->type_plan;
       
    
}
 }

?>
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
  <a href="<?php echo base_url()?>site/afficherplan"class="btn btn-danger btn-xs">Logout</a>
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

 <div class="panel panel-default">
     <div class="panel panel-danger"><div class="panel-heading">PLANNIFICATION</div> </div>
  <div class="panel-body"> 
    <form action="<?php echo base_url();?>site/enregistrer"method="POST" enctype="multipart/form-data">
    <input type="hidden" name="op"value="<?php echo $op;?>"class="form-control"placeholder="">
    <input type="hidden" name="id_plan"value="<?php echo $id_plan;?>"class="form-control">
	
	
            <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">Date debut </label>
                <div class="input-group date form_datetime col-md-5" data-date="2016-09-16T05:25:07Z" data-date-format="yyyy MM dd - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="10" type="text" name="date_plan"value="<?php echo $date_plan;?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
 <div class="form-group">
                <label for="dtp_input1" class="col-md-2 control-label">Date fin </label>
                <div class="input-group date form_datetime col-md-5" data-date="2015-09-16T05:25:07Z" data-date-format="dd MM yyyy - HH:ii p" data-link-field="dtp_input1">
                    <input class="form-control" size="10" type="text" name="date_plan"value="<?php echo $date_fin;?>" readonly>
                    <span class="input-group-addon"><span class="glyphicon glyphicon-remove"></span></span>
					<span class="input-group-addon"><span class="glyphicon glyphicon-th"></span></span>
                </div>
				<input type="hidden" id="dtp_input1" value="" /><br/>
            </div>
<script type="text/javascript" src="<?php echo base_url();?>assets/jquery/jquery-1.8.3.min.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap-datetimepicker.js" charset="UTF-8"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/locales/bootstrap-datetimepicker.fr.js" charset="UTF-8"></script>
<script type="text/javascript">
    $('.form_datetime').datetimepicker({
        //language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		forceParse: 0,
        showMeridian: 1
    });
	$('.form_date').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 2,
		minView: 2,
		forceParse: 0
    });
	$('.form_time').datetimepicker({
        language:  'fr',
        weekStart: 1,
        todayBtn:  1,
		autoclose: 1,
		todayHighlight: 1,
		startView: 1,
		minView: 0,
		maxView: 1,
		forceParse: 0
    });
</script>
  <div class="form-group">
    <label for="type_plan">Type de planification</label>
	<div class="input-group">
    <input type="text" class="form-control" placeholder="type de plannification"name="type_plan"value="<?php echo $type_plan;?>">
	<span class="input-group-btn">
        <button class="btn btn-default" type="button">Go!</button>
      </span>
  </div>
  </div>
   
 
  
    <button type="submit" id="place"name="userSubmit"class="btn btn-default"value="submit">Valider</button>
</form>
   </div>
   </div>
    
    
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>