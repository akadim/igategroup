<?php echo $this->extend('../Layouts/sidebar'); ?>
<?php $this->start('body_content'); ?>
<div class="row gutter"><!-- row -->

    <div class="col-lg-12 col-md-12">

        <figure class="news-featured-image">	
            <?php echo $this->Html->image($formation['image_path'], array('alt' => $formation['name'], 'class' => 'img-responsive')); ?>
        </figure>

        <h1 class="page-title"><?php echo $formation['name']; ?></h1>
        <div class="news-body">
            <?php echo $formation['description']; ?>
            <h6>Objectif</h6>
            <p>
                <?php echo $formation['objective']; ?>
            </p>
            <h6>Comp&eacute;tence visées</h6>
            <p>
                <?php echo $formation['skill']; ?>
            </p>
            <h6>Conditions d'acc&egrave;s</h6>
            <p>
                <?php echo $formation['accessCondition']; ?>
            </p>
            <h6>Programme</h6>
            <p>
                <?php echo $formation['program']; ?>
            </p>
            <h6>Pi&egrave;ces &agrave; fournir</h6>
            <p>
                <?php echo $formation['neededDoc']; ?>
            </p>
        </div>
        <center>
            <?php echo $this->Html->link("<i class='custom-button-icon fa fa-check-square-o'></i>
                <span class='custom-button-wrap'>
                    <span class='custom-button-title'>S'inscrire</span>
                    <span class='custom-button-tagline'>Remplir le formulaire d'inscription</span>
                </span>
                <em></em>", array('controller' => 'etudiants', 'action' => 'signup', $formation['id']), array('title' => 'S\'inscrire', 'class' => 'custom-button cb-green', 'width' => '400px', 'escape' => false)); ?>
        </center>
    </div>

</div><!-- row end --> 
<?php $this->end(); ?>