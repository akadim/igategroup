<select name="data[Formation][id]">
    <option value="">choisissez votre formation</option>
    <?php foreach($formations as $id => $formation) {?>
    <option value="<?php echo $id; ?>"><?php echo $formation; ?></option>
    <?php } ?>
</select>