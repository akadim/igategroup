<?php echo $this->extend('../Layouts/sidebar'); ?>
<?php $this->start('body_content'); ?>

<div class="row gutter"><!-- row -->

    <div class="col-lg-12 col-md-12">
        <h1 class="page-title">Inscription</h1><br/>
        <?php echo $this->Form->create("Etudiant", array('inputDefaults' => array('div' => false)));?>
        <div class="row">
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
            </div>
            <div class="form-group col-lg-6 col-md-6 col-sm-12">
                <?php echo $this->Form->input('name', array('label' => 'Nom')); ?>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
        <form id="contactform" method="post" action="#">
            <div class="row"><!-- starts row -->
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="contactName"><span class="required">*</span> Name</label>
                    <input type="text" aria-required="true" size="30" value="" name="contactName" id="contactName" class="form-control requiredField" />
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="email"><span class="required">*</span> E-mail</label>
                    <input type="text" aria-required="true" size="30" value="" name="email" id="email" class="form-control requiredField" />
                </div>
            </div><!-- ends row -->

            <div class="row"><!-- starts row -->
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="contactPhone">Phone / Cell</label>
                    <input type="text" aria-required="true" size="30" value="" name="contactPhone" id="contactPhone" class="form-control" />
                </div>
                <div class="form-group col-lg-6 col-md-6 col-sm-12">
                    <label for="contactSchool">Select School</label>
                    <select name="contactSchool" id="contactSchool" class="form-control">
                        <option value="High School">High School</option>
                        <option value="Middle School">Middle School</option>
                        <option value="Intermediate School">Intermediate School</option>
                        <option value="Primary School">Primary School</option>
                    </select>
                </div>
            </div><!-- ends row -->

            <div class="row"><!-- starts row -->
                <div class="form-group col-lg-12">
                    <label for="contactSubject">Message Subject</label>
                    <input type="text" aria-required="true" size="30" value="" name="contactSubject" id="contactSubject" class="form-control" />
                </div>
            </div><!-- ends row -->

            <div class="row"><!-- starts row -->
                <div class="form-group clearfix col-lg-12">
                    <label for="comments"><span class="required">*</span> Message</label>
                    <textarea aria-required="true" rows="5" cols="45" name="comments" id="comments" class="form-control requiredField mezage"></textarea>
                </div>

                <div class="form-group clearfix col-lg-12 text-right remove-margin-bottom">
                    <input type="hidden" name="submitted" id="submitted" value="true" />
                    <input type="submit" value="Send Message" id="submit" name="submit" class="btn btn-default" />
                </div>
            </div><!-- ends row -->
        </form>
    </div>

</div><!-- row end --> 
<?php $this->end(); ?>