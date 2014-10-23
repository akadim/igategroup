<?php echo $this->extend('../Layouts/sidebar'); ?>
<?php $this->start('body_content'); ?>
<div class="row gutter"><!-- row -->

    <div class="col-lg-12 col-md-12">

        <figure class="news-featured-image">	
            <?php echo $this->Html->image($formation['image_path'], array('alt' => $formation['name'], 'class' => 'img-responsive')); ?>
        </figure>
        
        <h1 class="page-title"><?php echo $formation['name'];  ?></h1>
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

    </div>

</div><!-- row end --> 
<?php $this->end(); ?>