<?php $this->start('pageTitle'); ?>
Formations
<?php $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des formations</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Html->link('<i class="fa fa-plus"></i> Ajouter une catégorie', array('admin' => true, 'action' => 'edit'), array('class' => 'btn btn-info', 'escape' => false)); ?>
                <br><br>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Libell&eacute;</th>
                            <th>Durée</th>
                            <th>Prix</th>
                            <th>Rubriques</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trainings as $training) { ?>
                            <tr>
                                <td><?php echo $training['Training']['name']; ?></td>
                                <td><?php echo $training['Training']['duration']." ".((intval($training['Training']['duration']) > 1 )? 'jours': 'jour'); ?> </td>
                                <td><?php echo $training['Training']['price']; ?> DH</td>
                                <td><?php echo $training['TrainTopic']['name']; ?></td>
                                <td>
                                    <?php echo $training['Training']['active'] == 1 ? '<small class="badge bg-green">oui</small>' : '<small class="badge bg-red">non</small>'; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <?php echo $this->Html->link('<i class="fa fa-search"></i>', "#", array('class' => 'btn btn-info showDialog', "id" => "view".$training['Training']['id'], 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-edit"></i>', array('admin' => true, 'action' => 'edit', $training['Training']['id']), array('class' => 'btn btn-info', 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-trash-o"></i>', array('admin' => true, 'action' => 'delete', $training['Training']['id']), array('class' => 'btn btn-info', 'escape' => false), "Voulez-vous vraiment supprimer cette ligne ?"); ?>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div>
</div>

<dialog id="dialog" title="Information" style="display: none;">
    
</dialog>