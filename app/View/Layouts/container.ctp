<?php echo $this->Html->css(array('bootstrap.min', 'modern-business', 'style2', 'layout', 'eduStyleCommon', 'datepicker3'), array('inline' => false)); ?>
<?php echo $this->Html->script(array('bootstrap.min', 'bootstrap-datepicker', 'jqBootstrapValidation', 'igategroup'), array('inline' => false)); ?>
<div class="container" style="padding-left: 110px; padding-right: 110px;">
<?php echo $this->fetch('body_content'); ?>
</div>