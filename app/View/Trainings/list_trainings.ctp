<select name="data[TrainTopic][id]" id="training_filter">
    <option value="">choisissez une formation</option>
    <?php foreach($trainings as $id => $training) {?>
    <option value="<?php echo $id; ?>"><?php echo $training; ?></option>
    <?php } ?>
</select>