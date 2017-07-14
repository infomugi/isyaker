<?php
/* @var $this SubdistrictController */
/* @var $data Subdistrict */
?>

        <div class="col-lg-6 col-xs-6">
            <!-- small box -->
            <div class="small-box bg-lime">
                <div class="inner">
                    <h3>
                        <?php echo CHtml::encode($data->name); ?>
                    </h3>
                    <p> 
                         <?php echo CHtml::encode($data->subdistrict_code); ?> </BR>                                      
                    </p>
                </div>
                <div class="icon">
                    <i class="ion ion-ios7-briefcase-outline"></i>
                </div>
                <?php echo CHtml::link('Daftar Perusahaan Kec. '.$data->name.' <i class="fa fa-arrow-circle-right"></i>', array('view', 'id'=>$data->id_subdistrict), array('class'=>'small-box-footer')); ?>
            </div>
        </div><!-- ./col -->      

 