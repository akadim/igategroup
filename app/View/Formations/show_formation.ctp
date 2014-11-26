<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<div class="newRCbox1">
    <h2 class="formation_heading">
      <?php echo $formation['name']; ?>
    </h2>
    <br>
    <div class="row">
      <div class="col-lg-12">
       <center>
          <?php echo $this->Html->image($formation['image_path'], array('class' => 'img-responsive img-hover', 'style' => 'width: 850px; height: 200px;')); ?>
        </center>
      </div>
    </div>
    <br>
    
    <div class="row">
    <div class="col-lg-12 col-xs-3">
        <div class="container_block">
            <div id="tabInfoDetails">
               <ul>
                   <li><a href="#tabs-1">Description</a></li>
                   <li><a href="#tabs-2">Objectif</a></li>
                   <li><a href="#tabs-3">Comp&eacute;tence vis&eacute;e</a></li>
                   <li><a href="#tabs-4">Condition d'acc&egrave;s</a></li>
                   <li><a href="#tabs-5">Programme</a></li>
                   <li><a href="#tabs-6">Document à fournir</a></li>
               </ul>
                <div id="tabs-1">
                    <?php echo $formation['description']; ?>
                </div>
                <div id="tabs-2">
                    <?php echo $formation['objective']; ?>
                </div>
                <div id="tabs-3">
                    <?php echo $formation['skill']; ?>
                </div>
                <div id="tabs-4">
                    <?php echo $formation['accessCondition']; ?>
                </div>
                <div id="tabs-5">
                    <?php echo $formation['program']; ?>
                </div>
                <div id="tabs-6">
                    <?php echo $formation['neededDoc']; ?>
                </div>
            </div>
            <?php echo $this->Html->link($this->Html->image('pdf.gif').'&nbsp;<span style="vertical-align: middle;">Télécharger la version PDF</span>', array('controller' => 'formations', 'action' => 'download_formation', $formation['id']), array('escape' => false)); ?>&nbsp;&nbsp;|&nbsp;&nbsp;
            <?php echo $this->Html->link("S'inscrire", array('controller' => 'students', 'action' => 'signup', $formation['id']), array('escape' => false, )); ?>
        </div>
     </div>
   </div>
    
    
</div>
<?php $this->end(); ?>


