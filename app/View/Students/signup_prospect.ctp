<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<div class="row">
    <div class="newRCbox1">

        <h2 class="formation_heading">
            Pr&eacute;-Inscription
        </h2>
        <br><?php echo $this->Session->flash(); ?><br>
        <?php echo $this->BootstrapForm->create('Prospect'); ?>
        <?php echo $this->BootstrapForm->input('name', array('label' => 'Nom complet', 'data-validation-required-message' => 'Le champs \'Nom complet\' est requis')); ?>
        <?php echo $this->BootstrapForm->input('birthday', array('label' => 'Date naissance', 'type' => 'text', 'id' => 'datepicker', 'data-validation-required-message' => 'Le champs \'Date naissance\' est requis', 'required' => 'required', 'readonly' => 'readonly')); ?>
        <?php echo $this->BootstrapForm->input('birthplace', array('label' => 'Lieu de naissance', 'data-validation-required-message' => 'Le champs \'Lieu de naissance\' est requis', 'required' => 'required')); ?>
        <?php echo $this->BootstrapForm->input('address', array('label' => 'Adresse', 'data-validation-required-message' => 'Le champs \'Adresse\' est requis', 'required' => 'required')); ?>
        <?php echo $this->BootstrapForm->input('email', array('label' => 'Email', 'type' => 'email', 'data-validation-required-message' => 'Le champs \'Email\' est requis', 'data-validation-email-message' => 'Le champs \'Email\' est invalide', 'required' => 'required')); ?>
        <?php echo $this->BootstrapForm->input('tel', array('label' => 'Tel', 'data-validation-required-message' => 'Le champs \'Tel\' est requis', 'required' => 'required')); ?>
        <?php echo $this->BootstrapForm->input('gsm', array('label' => 'GSM', 'data-validation-required-message' => 'Le champs \'GSM\' est requis', 'required' => 'required')); ?>
        <?php echo $this->BootstrapForm->input('niveau', array('label' => 'Niveau', 'type' => 'select', 'data-validation-required-message' => 'Le champs \'Niveau\' est requis', 'required' => 'required', 'options' => array('Niveau BAC' => 'Niveau BAC', 'BAC' => 'BAC', 'BAC+2' => 'BAC+2', 'BAC+3/4' => 'BAC+3/4'))); ?>
        <?php echo $this->BootstrapForm->input('formations', array('label' => 'Formations (choisissez un ou plusieurs)', 'type' => 'select', 'data-validation-required-message' => 'Le champs \'BootstrapFormations\' est requis', 'required' => 'required', 'size' => '10', 'options' => $this->requestAction(array('controller' => 'formations', 'action' => 'formations_list')), 'multiple' => true, 'selected' => $formation, 'escape' => false)); ?>
        <?php echo $this->BootstrapForm->submit('Valider', array('class' => 'btn btn-primary')); ?>
        <?php echo $this->BootstrapForm->end(); ?>
        
    </div>
</div>
<?php $this->end(); ?>
