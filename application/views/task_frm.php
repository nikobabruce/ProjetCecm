 <div class="col-sm-6 col-sm-offset-3">
 <div class="panel panel-default">

                    <div class="panel-body">
                        <?php echo form_open('welcome/save_task/',array('class' => 'form-horizontal')).
					form_hidden(array( 'usertask_id' => isset($task['usertask_id'])?$task['usertask_id']:''));?>

<?php
$label_attr = array('class' => 'col-sm-3 control-label');

	echo '<div class="form-group '.((form_error('usertask_name')=='')?'':'has-error').'">'.form_label("Tache:", 'usertask_name', $label_attr).

	'<div class="col-sm-9">'.form_dropdown('usertask_name', $usertask_name ,isset($task['usertask_name'])?$task['usertask_name']:'','class="form-control"').'<small class="text-danger"><em>'.form_error('usertask_name').'</em></small></div></div>'.

	'<div class="form-group '.((form_error('usertask_description')=='')?'':'has-error').'">'.form_label('Description :', 'usertask_description', $label_attr).

	'<div class="col-sm-9">'.form_textarea(array( 'name' => 'usertask_description',
						'id' => 'usertask_description',
						'rows'=> 6,
						'cols'=> 40,
						'class' => 'form-control',
						'value' => set_value('usertask_description',isset($task['usertask_description'])?$task['usertask_description']:'')
						)).'<small class="text-danger"><em>'.form_error('usertask_description').'</em></small></div></div>';?>

      <div class="form-group">
    <div class="col-sm-offset-0 col-sm-10">
                  <button type="submit" class="btn btn-primary">Enregister</button>
                  <button type="reset" class="btn" onClick="history.go(-1);return true;">Annuler</button>
                                </div>

                            </div>
                       <?php
                       echo form_close();
					   ?>

                    </div>

</div></div>
