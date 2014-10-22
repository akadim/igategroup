<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IGATE GROUP</title>
    
    <!-- Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
    <?php echo $this->Html->css(array('../font-awesome/css/font-awesome.min', '../js/dropdown-menu/dropdown-menu', '../bootstrap/css/bootstrap.min.css', '../js/fancybox/jquery.fancybox.css', '../js/audioplayer/audioplayer.css', '../rs-plugin/css/settings.css', 'style.css')); ?>

  </head>
  
  <body role="document">
  
    <!-- device test, don't remove. javascript needed! -->
    <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
    <!-- device test end -->
    
    <div id="k-head" class="container"><!-- container + head wrapper -->
    
    	<div class="row"><!-- row -->
        
            <nav class="k-functional-navig"><!-- functional navig -->
        
                <ul class="list-inline pull-right">
                    <li><a href="#">Jobs</a></li>
                    <li><a href="#">Calendar</a></li>
                    <li><a href="#">Directions</a></li>
                </ul>
        
            </nav><!-- functional navig end -->
        
        	<div class="col-lg-12">
        
        		<div id="k-site-logo" class="pull-left"><!-- site logo -->
                
                    <h1 class="k-logo">
                        <a href="index-2.html" title="Home Page">
                            <?php echo $this->Html->image("logo.png", array('alt' => 'IGATE GROUP', 'class' => 'img-responsive', 'style' => 'margin-top: 20px;')); ?>
                        </a>
                    </h1>
                    
                    <a id="mobile-nav-switch" href="#drop-down-left"><span class="alter-menu-icon"></span></a><!-- alternative menu button -->
            
            	</div><!-- site logo end -->

            	<nav id="k-menu" class="k-main-navig"><!-- main navig -->
        
                    <ul id="drop-down-left" class="k-dropdown-menu">
                        <li>
                            <a href="/" title="Acceuil">Acceuil</a>
                        </li>
                        <li>
                            <?php echo $this->Html->link('Présentation', array('action' => 'presentation'), array('title' => 'Présentation IGATE')); ?>
                        </li>
                        <li>
                            <a href="courses.html" title="Formations disponibles">Formations</a>
                        </li>
                        <li>
                            <a href="#" class="Pages Collection" title="Certifications disponibles">Certifications</a>
                            <ul class="sub-menu">
                                <li><a href="news-single.html">News Single Page</a></li>
                                <li><a href="events-single.html">Events Single Page</a></li>
                                <li><a href="courses-single.html">Course Single Page</a></li>
                                <li><a href="gallery-single.html">Gallery Single Page</a></li>
                                <li><a href="news-stacked.html">News Stacked Page</a></li>
                                <li><a href="search-results.html">Search Results Page</a></li>
                                <li>
                                    <a href="#">Menu Test</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Second Level 01</a></li>
                                        <li>
                                            <a href="#">Second Level 02</a>
                                            <ul class="sub-menu">
                                                <li><a href="#">Third Level 01</a></li>
                                                <li><a href="#">Third Level 02</a></li>
                                                <li><a href="#">Third Level 03</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Second Level 03</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="about-us.html" title="Contact IGATE GROUP">Contact</a>
                            <ul class="sub-menu">
                                <li><a href="full-width.html">Full Width Page</a></li>
                                <li><a href="sidebar-left.html">Sidebar on Left</a></li>
                                <li><a href="formatting.html">Formatting</a></li>
                                <li><a href="school-leadership.html">School Leadership</a></li>
                                <li><a href="gallery.html">Gallery</a></li>
                                <li><a href="404.html">404 Error</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact-us.html" title="Espace étudiant">Connexion</a>
                        </li>
                    </ul>
        
            	</nav><!-- main navig end -->
            
            </div>
            
        </div><!-- row end -->
    
    </div><!-- container + head wrapper end -->
    
    <div id="k-body"><!-- content wrapper -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="k-breadcrumbs col-lg-12 clearfix"><!-- breadcrumbs -->
                
                	<ol class="breadcrumb">
                    	<li><a href="#">Home</a></li>
                    </ol>
                    
                </div><!-- breadcrumbs end -->
                
            </div><!-- row end -->
            
            <?php echo $this->fetch('content'); ?>
        
        </div><!-- container end -->
    
    </div><!-- content wrapper end -->
    
    <div id="k-footer"><!-- footer -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row no-gutter"><!-- row -->
            
            	<div class="col-lg-4 col-md-4"><!-- widgets column left -->
            
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_nav_menu"><!-- widgets list -->
                    
                                <h1 class="title-widget">Liens utiles</h1>
                                
                                <ul>
                                	<li><a href="#" title="menu item">Formations diplômantes</a></li>
                                    <li><a href="#" title="menu item">Partenariat acad&eacute;mique</a></li>
                                    <li><a href="#" title="menu item">Formations des entreprises</a></li>
                                    <li><a href="#" title="menu item">Certification</a></li>
                                    <li><a href="#" title="menu item">Contact</a></li>
                                </ul>
                    
							</li>
                            
                        </ul>
                         
                    </div>
                    
                </div><!-- widgets column left end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column center -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_recent_news"><!-- widgets list -->
                    
                                <h1 class="title-widget">School Contact</h1>
                               

                                    <div id="accordion" class="panel-group">
                                    
                                        <div class="panel panel-default"><!-- accordion panel one -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#collapseOne" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                                                       Site 1
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseOne">
                                                <div class="panel-body">
                                                    <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                		              <span class="m-contact-street" itemprop="street-address">39, Rue Omar Slaoui Plateau Taoufiq, 5ème étage Mers Sultan</span>
                                		              <span class="m-contact-city-region">
                                		                 <span class="m-contact-city" itemprop="locality">Casablanca, Maroc</span>
                                		              </span>
                                	                </div>
                                	                <div class="m-contact-tel-fax">
                                    	         <span class="m-contact-tel">Tel: <span itemprop="tel">05 22 20 20 16</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default"><!-- accordion panel two -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#collapseTwo" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed"> 
                                                        Site 2
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseTwo">
                                                <div class="panel-body">
                                                    <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                		              <span class="m-contact-street" itemprop="street-address">594, Bd Chouhada, Lot Zemouri, HM</span>
                                		              <span class="m-contact-city-region">
                                		                 <span class="m-contact-city" itemprop="locality">Casablanca, Maroc</span>
                                		              </span>
                                	                </div>
                                	                <div class="m-contact-tel-fax">
                                    	         <span class="m-contact-tel">Tel: <span itemprop="tel">05 22 62 62 09</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="panel panel-default"><!-- accordion panel three -->
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a href="#collapseThree" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                                                       Site 3
                                                    </a>
                                                </h4>
                                            </div>
                                            <div class="panel-collapse collapse" id="collapseThree">
                                                <div class="panel-body">
                                                    <div class="m-contact-address" itemprop="address" itemscope itemtype="http://data-vocabulary.org/Address">
                                		              <span class="m-contact-street" itemprop="street-address">Bd Tachfine, Hakam II</span>
                                		              <span class="m-contact-city-region">
                                		                 <span class="m-contact-city" itemprop="locality">Casablanca, Maroc</span>
                                		              </span>
                                	                </div>
                                	                <div class="m-contact-tel-fax">
                                    	         <span class="m-contact-tel">Tel: <span itemprop="tel">05 22 62 99 62</span></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                
                                <div class="social-icons">
                                
                                	<ul class="list-unstyled list-inline">
                                    
                                    	<li><a href="#" title="Contact us"><i class="fa fa-envelope"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    
                                    </ul>
                                
                                </div>
                    
							</li>
                            
                        </ul>
                        
                    </div>
                    
                </div><!-- widgets column center end -->
                
                <div class="col-lg-4 col-md-4"><!-- widgets column right -->
                
                    <div class="col-padded col-naked">
                    
                        <ul class="list-unstyled clear-margins"><!-- widgets -->
                        
                        	<li class="widget-container widget_sofa_flickr"><!-- widgets list -->
                    
                                <h1 class="title-widget">FACEBOOK</h1>
                                
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FIgategroup.ma&amp;width&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:290px;" allowTransparency="true"></iframe>
                    
			      </li>
                            
                        </ul> 
                        
                    </div>
                
                </div><!-- widgets column right end -->
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- footer end -->
    
    <div id="k-subfooter"><!-- subfooter -->
    
    	<div class="container"><!-- container -->
        
        	<div class="row"><!-- row -->
            
            	<div class="col-lg-12">
                
                	<p class="copy-text text-inverse">
                    &copy; <?php echo date('Y');?> IGATE GROUP. Tout droits r&eacute;serv&eacute;s.
                    </p>
                
                </div>
            
            </div><!-- row end -->
        
        </div><!-- container end -->
    
    </div><!-- subfooter end -->

    <!-- jQuery -->
    <?php echo $this->Html->script(array('../jQuery/jquery-2.1.1.min', '../jQuery/jquery-migrate-1.2.1.min', '../bootstrap/js/bootstrap.min', 'dropdown-menu/dropdown-menu', 'fancybox/jquery.fancybox.pack', 'fancybox/jquery.fancybox-media', 'jquery.fitvids', 'jquery.easy-pie-chart', 'theme', '../rs-plugin/js/jquery.themepunch.plugins.min', '../rs-plugin/js/jquery.themepunch.revolution.min')); ?>

    <script type="text/javascript">

		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:500,
					hideThumbs:false,
					navigationType:"none",
					fullWidth:"on",
					forceFullWidth:"on"
				});

		});	//ready

	</script>
    
  </body>
</html>
