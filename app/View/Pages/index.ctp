<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title>IGATEGROUP</title>
        <?php echo $this->Html->css(array('eduStyleCommon', 'ou-main')); ?>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <?php echo $this->Html->script(array('ou-home-2012_new', 'igategroup')); ?>
    </head>
    <body>


       <?php echo $this->fetch('content'); ?>

        <div class="footer">	

            <div class="greyBarBottom">
            </div>	
            <center>
                Tout droits r&eacute;serv&eacute;es <strong>.</strong> IGATE &copy; <?php echo date('Y'); ?>
            </center>
        </div>
    </body>
</html>
