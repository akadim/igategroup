<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
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
                    <?php echo $filiere['libelle']; ?>
                </h2>
            </div>
            <div class="tablDetails">
                <div class="tab_elements">
                    <?php foreach ($formations as $formation) {
                        $formation = current($formation);
                        ?>
                        <div class="tab_elem">
                            <div class="pull-right">
    <?php echo $this->Html->link('voir les détails', array('controller' => 'formations', 'action' => 'show_formation', $formation['id']), array('class' => 'btn btn-primary', 'escape' => false)); ?>
                            </div>
                            <div class="tab_detail">
                                <h4><?php echo $this->Html->link($formation['name'], array('controller' => 'formations', 'action' => 'show_formation', $formation['id']), array('escape' => false)); ?></h4>
    <?php echo $formation['description']; ?>
                            </div>
                        </div>
<?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->end(); ?>