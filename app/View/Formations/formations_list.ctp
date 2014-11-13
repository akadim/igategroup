<select name="data[Formation][id]">
    <?php foreach($formations as $id => $formation) {?>
    <option value="<?php echo $id; ?>"><?php echo $formation; ?></option>
    <?php } ?>
</select>