<?php $this->extend('../Layouts/container'); ?>
<?php $this->start('body_content'); ?>
<?php echo $this->Form->create('Prospect', array('action' => 'signup')); ?>
<?php echo $this->Form->input('name', array('label' => 'Nom complet', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Nom complet\' est requis', 'required' => 'required'));?>
<?php echo $this->Form->input('birthday', array('label' => 'Date naissance', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Date naissance\' est requis', 'required' => 'required', 'disabled' => 'disabled'));?>
<?php echo $this->Form->input('birthplace', array('label' => 'Lieu de naissance', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Lieu de naissance\' est requis', 'required' => 'required'));?>
<?php echo $this->Form->input('address', array('label' => 'Adresse', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Adresse\' est requis', 'required' => 'required'));?>
<?php echo $this->Form->input('email', array('label' => 'Nom complet', 'type' => 'email', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Email\' est requis', 'required' => 'required'));?>
<?php echo $this->Form->input('tel', array('label' => 'Tel', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'Tel\' est requis', 'required' => 'required'));?>
<?php echo $this->Form->input('gsm', array('label' => 'GSM', 'class' => 'form-control', 'data-validation-required-message' => 'Le champs \'GSM\' est requis', 'required' => 'required'));?>

<?php echo $this->Form->end();?>
<form name="sentMessage" id="contactForm" novalidate>
    <div class="control-group form-group">
        <div class="controls">
            <label>Full Name:</label>
            <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block"></p>
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Phone Number:</label>
            <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Email Address:</label>
            <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
        </div>
    </div>
    <div class="control-group form-group">
        <div class="controls">
            <label>Message:</label>
            <textarea rows="10" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
        </div>
    </div>
    <div id="success"></div>
    <!-- For success/fail messages -->
    <button type="submit" class="btn btn-primary">Send Message</button>
</form>
<?php $this->end(); ?>