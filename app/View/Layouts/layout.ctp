<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <title>IGATEGROUP</title>
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <?php echo $this->Html->css(array('bootstrap', 'jquery-ui', 'layout', 'eduStyleCommon', 'style2')); ?>
        <?php echo $this->Html->script(array('JSUtils', 'JSSerializer', 'BreadcrumbManager', 'igategroup')); ?>
    </head>
    <body>

        <header id="ou_header_top_main2">

            <div id="headerTop">		
                <div id="headerTop_left">			
                    <a href="/"><?php echo $this->Html->image('logo.gif', array('style' => 'width: 108px; height: 1.7cm;')); ?></a>		
                </div>		
            </div>	

            <nav>
                <div id="headerMenu" class="gradient">	

                    <div class="menuInner">

                        <ul id="navigation">
                            <li>	
                                <div class="headerSearchBox">	
                                    <div class="courseSearchHolder">	
                                        <form id="searchForm1" name="searchForm1" method="post" action="#">	
                                            <input value="38" name="p_org_id" type="hidden">	
                                            <input value="38" name="p_country" type="hidden">	
                                            <input value="F" name="p_lang" type="hidden">
                                            <input value="" name="p_search_category_id" type="hidden">	
                                            <label class="headerSearchBoxLable" for="p_search_keyword">Recherche formation</label>
                                            <input name="p_search_keyword" id="p_search_keyword" class="headerSearchBox_text autoComp" autocomplete="off" maxlength="4000" value="" placeholder="Recherche formation" type="text">
                                            <a class="xSearchButton" href="JavaScript:searchKeyword();">Search</a>	
                                            <div id="HeaderAutoitems" class="autoCompHold">
                                            </div>	
                                        </form>	
                                    </div>	
                                </div>
                            </li>
                            <li class="top-level">
                                <p>
                                    <?php echo $this->Html->link('Présentation', array('controller' => 'pages', 'action' => 'presentation'), array('escape' => false)); ?>
                                </p>
                            </li>
                            <li class="top-level">
                                <p>
                                    <?php echo $this->Html->link('Formation diplômante<b></b>', array('controller' => 'formations', 'action' => 'index'), array('escape' => false)); ?>
                                </p>
                                <div class="submenu gradient">


                                    <div class="menuPad">

                                        <div id="mosaicHead_pillar" class="columns">
                                            <h2>IGATE</h2>
                                            <?php
                                            $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'filieres'));
                                            ?>
                                            <ul>
                                                <?php foreach ($filieres as $filiere) { ?>
                                                    <li>
                                                        <a href="#"><?php echo $filiere['Filiere']['libelle']; ?><b></b></a>

                                                        <div class="submenu2 gradient onecolcol"><h3><?php echo $filiere['Filiere']['libelle']; ?></h3>
                                                            <ul>
                                                                <?php
                                                                $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'formations', $filiere['Filiere']['id']));
                                                                foreach ($formations as $formation) {
                                                                    ?>
                                                                    <li>
                                                                        <?php echo $this->Html->link($formation['Formation']['name'], array('controller' => 'formations', 'action' => 'show', $formation['Formation']['id'])); ?>
                                                                    </li>
                                                                <?php } ?>      
                                                            </ul>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </div>

                                        <div id="mosaicHead_pillar" class="columns">
                                            <h2>Licence</h2>
                                            <?php
                                            $organizers = $this->requestAction(array('controller' => 'formations', 'action' => 'organizers'));
                                            ?>
                                            <ul>
                                                <?php foreach ($organizers as $organizer) { ?>
                                                    <li>
                                                        <a href="#"><?php echo $organizer['Formation']['organizer']; ?><b></b></a>

                                                        <div class="submenu2 gradient onecolcol"><h3><?php echo $organizer['Formation']['organizer']; ?></h3>
                                                            <ul>
                                                                <?php
                                                                $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'licences', $organizer['Formation']['organizer']));
                                                                foreach ($formations as $formation) {
                                                                    ?>
                                                                    <li>
                                                                        <?php echo $this->Html->link($formation['Formation']['name'], array('controller' => 'formations', 'action' => 'show', $formation['Formation']['id']), array('escape' => false)); ?>
                                                                    </li>
                                                                <?php } ?>      
                                                            </ul>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </div>



                                        <div id="mosaicHead_pillar" class="columns">
                                            <h2>Master</h2>
                                            <?php
                                            $organizers = $this->requestAction(array('controller' => 'formations', 'action' => 'organizers'));
                                            ?>
                                            <ul>
                                                <?php foreach ($organizers as $organizer) { ?>
                                                    <li>
                                                        <a href="#"><?php echo $organizer['Formation']['organizer']; ?><b></b></a>

                                                        <div class="submenu2 gradient onecolcol"><h3><?php echo $organizer['Formation']['organizer']; ?></h3>
                                                            <ul>
                                                                <?php
                                                                $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'masters', $organizer['Formation']['organizer']));
                                                                foreach ($formations as $formation) {
                                                                    ?>
                                                                    <li>
                                                                        <?php echo $this->Html->link($formation['Formation']['name'], array('controller' => 'formations', 'action' => 'show', $formation['Formation']['id']), array('escape' => false)); ?>
                                                                    </li>
                                                                <?php } ?>      
                                                            </ul>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </div>

                                        <div id="mosaicHead_pillar" class="columns">
                                            <h2>IGATE</h2>
                                            <?php
                                            $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'filieres'));
                                            ?>
                                            <ul>
                                                <?php foreach ($filieres as $filiere) { ?>
                                                    <li>
                                                        <a href="#"><?php echo $filiere['Filiere']['libelle']; ?><b></b></a>

                                                        <div class="submenu2 gradient onecolcol"><h3><?php echo $filiere['Filiere']['libelle']; ?></h3>
                                                            <ul>
                                                                <?php
                                                                $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'formations', $filiere['Filiere']['id']));
                                                                foreach ($formations as $formation) {
                                                                    ?>
                                                                    <li>
                                                                        <?php echo $this->Html->link($formation['Formation']['name'], array('controller' => 'formations', 'action' => 'show', $formation['Formation']['id'])); ?>
                                                                    </li>
                                                                <?php } ?>      
                                                            </ul>
                                                        </div>
                                                    </li>
                                                <?php } ?>

                                            </ul>
                                        </div>

                                    </div>
                                </div>
                            </li>
                            <li class="top-level">
                                <p>
                                    <?php echo $this->Html->link('Formation Continue<b></b>', array('controller' => 'trainings', 'action' => 'index'), array('escape' => false)); ?>
                                </p>
                            </li>
                            <li class="top-level">
                                <p>
                                    <?php echo $this->Html->link('Certification<b></b>', array('controller' => 'certifications', 'action' => 'index'), array('escape' => false)); ?>
                                </p>
                            </li>
                            <li class="top-level">	
                                <p>
                                    <?php echo $this->Html->link('Contact', array('controller' => 'contacts', 'action' => 'index')); ?>
                                </p>	
                            </li>	
                            <li class="top-level right_text">	
                                <p>
                                    <?php echo $this->Html->link('Connexion', '#', array('id' => "show_connect_form")); ?>
                                </p>
                            </li>
                        </ul>
                    </div>	
                </div>	
            </nav>
            <div id="breadCrumb" class="gradient">
                <div class="menuInner2">	
                    <div class="breadCrumb_left_txt">
                        <?php echo $this->Html->link('<span style="color:red">Home</span>', "/", array('escape' => false)); ?>
                    </div>	

                    <!--
                     <div class="breadCrumb_right_txt LiveChatBlock">	<b></b>
                         <a href="JavaScript:liveChatWin();">Chat en ligne</a>	

                     </div>	
                    -->
                </div>
            </div>
        </header>

        <div class="container">
            <div class="row row-offcanvas row-offcanvas-right">
                <div class="col-xs-12 col-sm-12">
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>

        <div style="clear: both;"></div>

        <footer id="footer">
            <div class="container">

                <div class="row">

                    <!-- col #1 -->
                    <div class="spaced col-md-4 col-sm-4">

                        <span class="footer-title">Contactez <strong>Nous</strong></span><br><br>

                        <p>Site 1:</p>
                        <div class="contact-box">
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    05 22 20 20 16
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    39, Rue Omar Slaoui Plateau Taoufiq, 5ème étage Mers Sultan, Casablanca
                                </div>
                            </div>
                        </div>
                        <p>Site 2:</p>
                        <div class="contact-box">
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    05 22 62 62 09
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    594, Bd Chouhada, Lot Zemouri,HM, Casablanca
                                </div>
                            </div>
                        </div>

                        <p>Site 3:</p>
                        <div class="contact-box">
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="contact-content">
                                    05 22 62 99 62
                                </div>
                            </div>
                            <div class="contact-row">
                                <div class="contact-icon">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="contact-content">
                                    272, Bd Tachfine, Hakam II, Casablanca
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- /col #1 -->

                    <!-- col #2 -->
                    <div class="spaced col-md-8 col-sm-8 hidden-sm hidden-xs">

                        <div class="row">

                            <div class="col-md-4">
                                <span class="footer-title">R&Eacute;SEAUX SOCIAUX<br><br>
                                    <div class="social-media pull-right"> 
                                        <!--@todo: replace with company social media details--> 
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a target="_blank" href="https://www.facebook.com/Igategroup.ma"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a> 
                                        <a href="#"><i class="fa fa-google-plus"></i></a> 
                                    </div>
                            </div>

                            <div class="col-md-4"></div>

                            <div class="col-md-4">

                            </div>

                        </div>

                    </div>
                    <!-- /col #2 -->

                </div>

            </div>

            <hr>

            <div class="copyright">
                <div class="container text-center fsize12">
                    IGATEGROUP • Tout droits r&eacute;serv&eacute;s &copy; <?php echo date('Y'); ?>
                </div>
            </div>
        </footer>


    </body>

</html>