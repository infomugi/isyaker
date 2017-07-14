<?php
/* @var $this UseraccountsController */
/* @var $model Useraccounts */
$this->pageTitle='Detail Accounts - ' . $model->fullname;
?>

<?php if(Yii::app()->user->record->level==1): ?>
  <div class="btn-toolbar">

    <span class="visible-xs">

      <?php echo CHtml::link('<i class="fa fa-plus"></i>',
        array('create'),
        array('class' => 'btn btn-warning btn-flat','title'=>'Add Account'));
        ?>
        <?php echo CHtml::link('<i class="fa fa-tasks"></i>',
          array('index'),
          array('class' => 'btn btn-warning btn-flat', 'title'=>'List Account'));
          ?>
          <?php echo CHtml::link('<i class="fa fa-table"></i>',
            array('admin'),
            array('class' => 'btn btn-warning btn-flat','title'=>'Manage Account'));
            ?>
            <?php echo CHtml::link('<i class="fa fa-edit"></i>', 
              array('update', 'id'=>$model->id_user,
                ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Account'));
                ?>

                <?php echo CHtml::link('<i class="fa fa-edit"></i>', 
                  array('password', 'id'=>$model->id_user,
                    ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Password'));
                    ?>

                    <?php echo CHtml::link('<i class="fa fa-lock"></i>', 
                      array('assignment', 'id'=>$model->id_user,
                        ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Level'));
                        ?>

                        <?php echo CHtml::link('<i class="fa fa-image"></i>', 
                          array('avatar', 'id'=>$model->id_user,
                            ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Avatar'));
                            ?>                


                          </span> 

                          <span class="hidden-xs">

                            <?php echo CHtml::link('Add',
                              array('create'),
                              array('class' => 'btn btn-warning btn-flat','title'=>'Add Account'));
                              ?>
                              <?php echo CHtml::link('List',
                                array('index'),
                                array('class' => 'btn btn-warning btn-flat', 'title'=>'List Account'));
                                ?>
                                <?php echo CHtml::link('Manage',
                                  array('admin'),
                                  array('class' => 'btn btn-warning btn-flat','title'=>'Manage Account'));
                                  ?>
                                  <?php echo CHtml::link('Edit', 
                                    array('update', 'id'=>$model->id_user,
                                      ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Account'));
                                      ?>

                                      <?php echo CHtml::link('Password', 
                                        array('password', 'id'=>$model->id_user,
                                          ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Password'));
                                          ?>

                                          <?php echo CHtml::link('Level', 
                                            array('assignment', 'id'=>$model->id_user,
                                              ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Level'));
                                              ?>

                                              <?php echo CHtml::link('Avatar', 
                                                array('avatar', 'id'=>$model->id_user,
                                                  ), array('class' => 'btn btn-warning btn-flat', 'title'=>'Edit Avatar'));
                                                  ?>

                                                  <?php     
                                                  if($model->status==0)
                                                  {
                                                    ?>

                                                    <?php echo CHtml::link('Verifikasi',
                                                     array('status','id'=>$model->id_user,'id_user'=>$model->id_user),
                                                     array('class' => 'btn btn-flat btn-warning'));
                                                     ?>

                                                     <?php }else{?>

                                                     <span class="btn btn-flat btn-warning btn-small disabled">Verified</span>

                                                     <?php } ?>

                                                     <span class="btn btn-flat btn-danger btn-small disabled"><?php echo Useraccounts::model()->status($model->level); ?></span>

                                                   <?php endif; ?>                                  

                                                 </span>  

                                               </div>

                                               <HR>

                                                <div class="col-xs-12">
                                                  <!-- Default box -->
                                                  <div class="box box-solid">
                                                    <div class="box-header">
                                                      <h3 class="box-title"><?php echo CHtml::link(CHtml::encode($model->fullname), array('view', 'id'=>$model->id_user)); ?></h3>
                                                      <div class="box-tools pull-right">
                                                        <button class="btn btn-default btn-sm" data-widget="collapse"><i class="fa fa-minus"></i></button>
                                                        <button class="btn btn-default btn-sm" data-widget="remove"><i class="fa fa-times"></i></button>
                                                      </div>
                                                    </div>
                                                    <div class="box-body" style="text-align:center;">


                                                      <div style="padding:5px;margin-top:10px">
                                                        <?php echo CHtml::image(Yii::app()->request->baseurl.'/dokumen/avatar/'.$model->image,"Foto Profile",array("width"=>130,"class"=>"img-circle")); ?>
                                                      </div>

                                                      <b><?php echo $model->email; ?></b>
                                                      <br /> 
                                                      <i class="fa fa-user"></i> <?php echo Useraccounts::model()->level($model->level); ?>
                                                      -
                                                      <i class="fa fa-calendar"></i> <?php echo $model->birth; ?>
                                                      -
                                                      <i class="fa fa-map-marker"></i> <?php echo $model->gender="L" ? "Male" : "Female"; ?>
                                                      -
                                                      <i class="fa fa-info"></i> Join Date : <?php echo $model->create_time; ?>
                                                       -
                                                      <i class="fa fa-tags"></i> Division : <?php echo $model->Division->name; ?>

                                                         

                                                  </div><!-- /.box-body -->
                                                </div><!-- /.box -->
                                              </div>

