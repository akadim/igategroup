<?php $this->start('pageTitle'); ?>
Session de formation
<?php $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des sessions de formation</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Html->link('<i class="fa fa-plus"></i> Ajouter une catégorie', array('admin' => true, 'action' => 'edit'), array('class' => 'btn btn-info', 'escape' => false)); ?>
                <br><br>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Formation</th>
                            <th>Date d&eacute;but</th>
                            <th>Date de Fin</th>
                            <th>Adresse</th>
                            <th>Ville</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($trainingSessions as $trainingSession) { ?>
                            <tr>
                                <td><?php echo $trainingSession['Training']['name']; ?></td>
                                <td><?php echo $trainingSession['TrainingSession']['start_date']; ?> </td>
                                <td><?php echo $trainingSession['TrainingSession']['end_date']; ?></td>
                                <td><?php echo $trainingSession['Location']['address']; ?></td>
                                <td><?php echo $trainingSession['Location']['city']; ?></td>
                                <td>
                                    <?php echo $trainingSession['Training']['active'] == 1 ? '<small class="badge bg-green">oui</small>' : '<small class="badge bg-red">non</small>'; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <?php echo $this->Html->link('<i class="fa fa-search"></i>', "#", array('class' => 'btn btn-info showDialog', "id" => "view".$trainingSession['Training']['id'], 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-edit"></i>', array('admin' => true, 'action' => 'edit', $trainingSession['Training']['id']), array('class' => 'btn btn-info', 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-trash-o"></i>', array('admin' => true, 'action' => 'delete', $trainingSession['Training']['id']), array('class' => 'btn btn-info', 'escape' => false), "Voulez-vous vraiment supprimer cette ligne ?"); ?>
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