<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<?php
   $this->Html->addCrumb($trainCategory['name'], array('controller' => 'trainCategories', 'action' => 'show_train_topics', $trainCategory['id']));
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
                    <?php echo $trainCategory['name']; ?>
                </h2>
            </div>
            <div class="tablDetails">
                <div class="tab_elements">
                    <?php foreach ($trainTopics as $trainTopic) {
                        $trainTopic = current($trainTopic);
                        ?>
                        <div class="tab_elem">
                            <div class="pull-right">
    <?php echo $this->Html->link('voir les détails', array('controller' => 'trainings', 'action' => 'show_trainings', $trainTopic['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                            </div>
                            <div class="tab_detail">
                                <h4><?php echo $this->Html->link($trainTopic['name'], array('controller' => 'trainings', 'action' => 'show_trainings', $trainTopic['id']), array('escape' => false)); ?></h4>
    <?php echo $trainTopic['description']; ?>
                            </div>
                        </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>