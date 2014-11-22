<dl style="margin: 10px;">
    <dt>Name</dt>
    <dd><?php echo $training['Training']['name']; ?></dd>
    <dt>Description</dt>
    <dd><?php echo $training['Training']['description']; ?></dd>
    <dt>Objectif</dt>
    <dd><?php echo $training['Training']['objective']; ?></dd>
    <dt>Public</dt>
    <dd><?php echo $training['Training']['audience']; ?></dd>
    <dt>Pr&eacute;requis</dt>
    <dd><?php echo $training['Training']['prerequisite']; ?></dd>
    <dt>Programme</dt>
    <dd><?php echo $training['Training']['program']; ?></dd>
    <dt>Dur&eacute;e</dt>
    <dd><?php echo $training['Training']['duration']." ".((intval($training['Training']['duration']) > 1 )? 'jours': 'jour'); ?> </dd>
    <dt>Prix</dt>
    <dd><?php echo $training['Training']['price']; ?> DH</dd>
</dl>