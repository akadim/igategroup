<?php $this->start('pageTitle'); ?>
Rubriques
<?php $this->end(); ?>
<div class="row">
    <div class="col-xs-12">
        <div class="box">
            <div class="box-header">
                <h3 class="box-title">Liste des rubriques</h3>                                    
            </div><!-- /.box-header -->
            <div class="box-body table-responsive">
                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Html->link('<i class="fa fa-plus"></i> Ajouter une rubrique', array('admin' => true, 'action' => 'edit', -1), array('class' => 'btn btn-info', 'escape' => false)); ?>
                <br><br>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Libell&eacute;</th>
                            <th>Cat&eacute;gorie</th>
                            <th>Active</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $topic) { ?>
                            <tr>
                                <td><?php echo $topic['TrainTopic']['name']; ?></td>
                                <td><?php echo $topic['TrainCategory']['name']; ?></td>
                                <td>
                                    <?php echo $topic['TrainTopic']['active'] == 1 ? '<small class="badge bg-green">oui</small>' : '<small class="badge bg-red">non</small>'; ?>
                                </td>
                                <td>
                                    <div class="btn-group">
                                        <?php echo $this->Html->link('<i class="fa fa-search"></i>', "#", array('class' => 'btn btn-info showDialog', "id" => "view".$topic['TrainTopic']['id'], 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-edit"></i>', array('admin' => true, 'action' => 'edit', $topic['TrainTopic']['id']), array('class' => 'btn btn-info', 'escape' => false)); ?>
                                        <?php echo $this->Html->link('<i class="fa fa-trash-o"></i>', array('admin' => true, 'action' => 'delete', $topic['TrainTopic']['id']), array('class' => 'btn btn-info', 'escape' => false), "Voulez-vous vraiment supprimer cette ligne ?"); ?>
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