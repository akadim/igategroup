<?php $this->start('pageTitle'); ?>
Sessions des formations
<?php $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ajout/Modification d'une session de formation</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $this->Form->create('TrainingSession', array('inputDefaults' => array('div' => false))) ?>
                <div class="box-body">
                    <div class="form-group">
                        <?php echo $this->Form->input('training_id', array('type' => 'select', 'label' => 'Formation', 'options' => $this->requestAction(array('controller' => 'Trainings', 'action' => 'trainings')), 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('start_date', array('type' => 'text', 'label' => 'Date début', 'dateFormat' => 'd/m/Y', 'placeholder' => '__/__/____', 'class' => 'form-control datemask')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('end_date', array('type' => 'text', 'label' => 'Date fin', 'dateFormat' => 'd/m/Y', 'placeholder' => '__/__/____', 'class' => 'form-control datemask')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('Location.address', array('label' => 'Adresse', 'placeholder' => 'Adresse', 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('Location.zipcode', array('label' => 'Code postale', 'placeholder' => 'Code postale', 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('Location.city', array('label' => 'Ville', 'placeholder' => 'Ville', 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('Location.country', array('label' => 'Pays', 'placeholder' => 'Pays', 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => false)); ?>&nbsp;&nbsp;<label>Active</label>
                    </div>
                    <div class="box-footer">
                        <?php echo $this->Form->input('Location.id'); ?>
                        <?php echo $this->Form->input('id'); ?>
                        <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
                    </div>
                </div><!-- /.box-body -->
                <?php echo $this->Form->end(); ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>