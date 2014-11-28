<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<div class="newRCbox1">
    
    <h2 class="formation_heading">
      Pr&eacute;-Inscription
    </h2>
    <br><?php echo $this->Session->flash(); ?><br>
    <?php echo $this->Form->create('Prospect', array('url' => array('controller'=> 'students', 'action' => 'signup_prospect')), array('inputDefaults' => array('div' => false))); ?>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('name', array('label' => 'Nom complet', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Nom complet\' est requis')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('birthday', array('label' => 'Date naissance', 'type' => 'text', 'id' => 'datepicker', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Date naissance\' est requis', 'required' => 'required', 'readonly' => 'readonly')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('birthplace', array('label' => 'Lieu de naissance', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Lieu de naissance\' est requis', 'required' => 'required')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('address', array('label' => 'Adresse', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Adresse\' est requis', 'required' => 'required')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('email', array('label' => 'Email', 'type' => 'email', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Email\' est requis', 'data-validation-email-message'=> 'Le champs \'Email\' est invalide', 'required' => 'required')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('tel', array('label' => 'Tel', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Tel\' est requis', 'required' => 'required')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('gsm', array('label' => 'GSM', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'GSM\' est requis', 'required' => 'required')); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('niveau', array('label' => 'Niveau', 'type' => 'select', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Niveau\' est requis', 'required' => 'required', 'options' => array('Niveau BAC' => 'Niveau BAC', 'BAC' => 'BAC', 'BAC+2' => 'BAC+2', 'BAC+3/4' => 'BAC+3/4'))); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <?php echo $this->Form->input('formations', array('label' => 'Formations (choisissez un ou plusieurs)', 'type' => 'select', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Formations\' est requis', 'required' => 'required', 'size' => '10', 'options' => $this->requestAction(array('controller' => 'formations', 'action' => 'formations_list')), 'multiple' => true, 'selected' => $formation, 'escape' => false)); ?>
            <div class="help-block"></div>
        </div>
    </div>
    <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
    <?php echo $this->Form->end(); ?>
</div>
<?php $this->end(); ?>