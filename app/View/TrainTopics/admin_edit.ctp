<?php $this->start('pageTitle'); ?>
Rurbriques
<?php $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Ajout/Modification d'une rubrique</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $this->Form->create('TrainTopic', array('inputDefaults' => array('div' => false))) ?>
                <div class="box-body">
                    <div class="form-group">
                        <?php echo $this->Form->input('name', array('label' => 'Libellé', 'placeholder' => 'Libellé', 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('description', array('type' => 'textarea', 'label' => 'Description', 'id' => 'editor1')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('train_category_id', array('type' => 'select', 'label' => 'Catégorie', 'options' => $this->requestAction(array('controller' => 'TrainCategories', 'action' => 'categories')), 'class' => 'form-control')); ?>
                    </div>
                    <div class="form-group">
                        <?php echo $this->Form->input('active', array('type' => 'checkbox', 'label' => false)); ?>&nbsp;&nbsp;<label>Active</label>
                    </div>
                    <div class="box-footer">
                        <?php echo $this->Form->input('id'); ?>
                        <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
                    </div>
                </div><!-- /.box-body -->
                <?php echo $this->Form->end(); ?>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>