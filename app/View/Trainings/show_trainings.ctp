<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<?php
   $this->Html->addCrumb($trainCategory['name'], array('controller' => 'trainCategories', 'action' => 'show_train_topics', $trainCategory['id']));
   $this->Html->addCrumb($trainTopic['name'], array('controller' => 'trainings', 'action' => 'show_trainings', $trainTopic['id']));
?>
<!-- Image Header -->
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg-12 col-xs-3">
        <div class="container_block">
            <div class="tablHeading">
                <h2 class="filiere_heading" style="padding-left:12px; font-size:16px;">
                    <?php echo $trainTopic['name']; ?>
                </h2>
            </div>
            <div class="tablDetails">
                <div class="tab_elements">
                    <?php foreach ($trainings as $training) {
                        $training = current($training);
                        ?>
                        <div class="tab_elem">
                            <div class="pull-right">
    <?php echo $this->Html->link('voir les détails', array('controller' => 'trainings', 'action' => 'show_training', $training['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                            </div>
                            <div class="tab_detail">
                                <h4><?php echo $this->Html->link($training['name'], array('controller' => 'trainings', 'action' => 'show_training', $trainTopic['id']), array('escape' => false)); ?></h4>
    <?php echo $training['description']; ?>
                            </div>
                        </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>