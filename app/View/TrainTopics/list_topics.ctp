<select name="data[TrainTopic][id]" id="topic_filter">
    <option value="">choisissez une rubrique</option>
    <?php foreach($topics as $id => $topic) {?>
    <option value="<?php echo $id; ?>"><?php echo $topic; ?></option>
    <?php } ?>
</select>