<!-- Image Header -->
<div class="row">
    <div class="col-lg-12">
        <img class="img-responsive" src="http://placehold.it/1200x300" alt="">
    </div>
</div>
<br><br>
<div class="row">
    <div class="col-lg-12 col-xs-3">
        <div class="container_block">
            <div class="tablHeading">
                <h2 class="filiere_heading" style="padding-left:12px; font-size:16px;">
                    <?php echo $formation['name']; ?>
                </h2>
            </div>
            <div id="tabInfoDetails">
               <ul>
                   <li><a href="#tabs-1">Description</a></li>
                   <li><a href="#tabs-2">Objectif</a></li>
                   <li><a href="#tabs-3">Comp&eacute;tence vis&eacute;e</a></li>
                   <li><a href="#tabs-4">Condition d'acc&egrave;s</a></li>
                   <li><a href="#tabs-5">Programme</a></li>
                   <li><a href="#tabs-6">Document à fournir</a></li>
               </ul>
                <div id="tabs-1">
                    <?php echo $formation['description']; ?>
                </div>
                <div id="tabs-2">
                    <?php echo $formation['objective']; ?>
                </div>
                <div id="tabs-3">
                    <?php echo $formation['skill']; ?>
                </div>
                <div id="tabs-4">
                    <?php echo $formation['accessCondition']; ?>
                </div>
                <div id="tabs-5">
                    <?php echo h($formation['programme']); ?>
                </div>
                <div id="tabs-6">
                    <?php echo $formation['neededDoc']; ?>
                </div>
            </div>
        </div>
    </div>
</div>