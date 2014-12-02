<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<?php
  $this->Html->addCrumb($trainCategory['name'], array('controller' => 'trainCategories', 'action' => 'show_train_topics', $trainCategory['id']));
  $this->Html->addCrumb($trainTopic['name'], array('controller' => 'trainings', 'action' => 'show_trainings', $trainTopic['id']));
  $this->Html->addCrumb($training['name'], array('controller' => 'trainings', 'action' => 'show_training', $training['id']), array('escape' => false));
?>
<div class="newRCbox1">
    <h2 class="formation_heading">
        <?php echo $training['name']; ?>
    </h2>
    <br>
    <div class="row">
        <div class="col-lg-12">
            <center>
                <?php echo $this->Html->image(''.$training['image_path'], array('class' => 'img-responsive img-hover', 'style' => 'width: 850px; height: 200px;')); ?>
            </center>
        </div>
    </div>
    <br>

    <div class="row">
        <div class="col-lg-12 col-xs-3">
            <div class="container_block">
                <div id="tabInfoDetails">
                    <dl>
                        <dt>Description</dt>
                        <dd><?php echo $training['description']; ?></dd>
                        <dt>Objectif</dt>
                        <dd><?php echo $training['objective']; ?></dd>
                        <dt>Public</dt>
                        <dd><?php echo $training['audience']; ?></dd>
                        <dt>Pr&eacute;-requis</dt>
                        <dd><?php echo $training['prerequisite']; ?></dd>
                        <dt>M&eacute;thodes et moyens p&eacute;dagogiques</dt>
                        <dd><?php echo $training['method']; ?></dd>
                        <dt>Dur&eacute;e</dt>
                        <dd><?php echo $training['duration']; ?></dd>
                        <dt>Programme</dt>
                        <dd><?php echo $training['program']; ?></dd>
                    </dl>
                </div>
                <?php echo $this->Html->link($this->Html->image('pdf.gif') . '&nbsp;<span style="vertical-align: middle;">Télécharger la version PDF</span>', array('controller' => 'formations', 'action' => 'download_formation', $training['id'] . 'pdf'), array('escape' => false)); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
                <?php echo $this->Html->link("S'inscrire", array('controller' => 'students', 'action' => 'signup_prospect', $training['id']), array('escape' => false)); ?>
            </div>
        </div>
    </div>


</div>
<?php $this->end(); ?>


