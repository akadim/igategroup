<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>IGATE GROUP</title>

        <!-- Styles -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,700,800" rel="stylesheet" type="text/css"><!-- Google web fonts -->
        <?php echo $this->Html->css(array('../font-awesome/css/font-awesome.min', '../js/dropdown-menu/dropdown-menu', '../bootstrap/css/bootstrap.min.css', '../js/fancybox/jquery.fancybox.css', '../js/audioplayer/audioplayer.css', '../rs-plugin/css/settings.css', 'style.css', 'megamenu')); ?>

    </head>

    <body role="document">

        <!-- device test, don't remove. javascript needed! -->
        <span class="visible-xs"></span><span class="visible-sm"></span><span class="visible-md"></span><span class="visible-lg"></span>
        <!-- device test end -->

        <div id="k-head"><!-- container + head wrapper -->

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

                    <nav class="content" id="k-menu"><!-- main navig -->



                        <div class="gradient" id="headerMenu">	

                            <div class="responseMenu">

                                <div class="mmenuH"><b class="mmenu"></b>
                                </div><a href="/"><b class="mlogo"></b></a>

                                <div class="muserH"><b class="muser"></b>
                                </div>
                            </div>	

                            <div class="menuInner">
                                <ul id="navigation">
                                    <li class="top-level">

                                        <p><a href="/pls/web_prod-plq-dad/ou_product_category.getAllProductsPage">Formations<b></b></a></p>

                                        <div class="submenu gradient">

                                            <div class="menuPad">
                                                <?php
                                                $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'filieres'));
                                                foreach ($filieres as $filiere) {$filiere = current($filiere);
                                                    ?>
                                                    <div id="mosaicHead_pillar" class="columns">  
                                                        <h2><?php echo $filiere['libelle']; ?></h2>
                                                        <ul>
                                                            <?php
                                                            $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'formations', $filiere['id']));
                                                            //print_r($formations);
                                                            foreach ($formations as $formation) {
                                                                $formation = current($formation);
                                                                ?>
                                                                <li>
                                                                <?php echo $this->Html->link($formation['name'], array('controller' => 'formations', 'action' => 'show', $formation['id']), array('title' => $formation['name'], 'escape' => false)); ?>
                                                                </li>
                                                             <?php } ?>
                                                        </ul>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                            </div>
                                        </div></li>
                                    <li class="top-level">

                                        <p><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=39">Certification<b></b></a></p>

                                        <div class="submenu gradient">

                                            <div class="menuPad">

                                                <div id="mosaicHead_pillar" class="columns"><h2>Certification by Product</h2>
                                                    <ul>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=1&amp;p_mode=Certification">Applications<b></b></a>

                                                            <div class="submenu2 gradient twocol"><h3>Applications</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=10&amp;p_mode=Certification">ATG Web Commerce<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>ATG Web Commerce</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=60#tabs-3">ATG Developer</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=9&amp;p_mode=Certification">Agile<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Agile</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=80#tabs-3">Agile Product Lifecycle Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=12&amp;p_mode=Certification">CRM On Demand<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>CRM On Demand</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=63#tabs-3">Oracle CRM On Demand</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=13&amp;p_mode=Certification">Demantra<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Demantra</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=64#tabs-3">Demantra</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=14&amp;p_mode=Certification">E-Business Suite<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>E-Business Suite</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=71#tabs-3">E-Business Suite Financial Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=73#tabs-3">E-Business Suite Human Capital Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=75#tabs-3">E-Business Suite Manufacturing</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=78#tabs-3">E-Business Suite Order Fulfillment</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=79#tabs-3">E-Business Suite Procurement</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=311#tabs-3">E-Business Suite Project Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=316#tabs-3">E-Business Suite Supply Chain Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=317#tabs-3">E-Business Suite Tools and Technology  </a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=438&amp;p_mode=Certification">Eloqua<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Eloqua</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=439#tabs-3">Oracle Eloqua Marketing Cloud Service</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=15&amp;p_mode=Certification">Endeca<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Endeca</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=338#tabs-3">Oracle Endeca Commerce</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=18&amp;p_mode=Certification">Fusion Applications<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Fusion Applications</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=94#tabs-3">Fusion Financials</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=126#tabs-3">Fusion Human Capital Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=97#tabs-3">Fusion Procurement</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=331#tabs-3">Fusion Project Portfolio Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=99#tabs-3">Fusion Supply Chain Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=433#tabs-3">Oracle Fusion Governance, Risk and Compliance</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=36&amp;p_mode=Certification">Hyperion<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Hyperion</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=190#tabs-3">Data Relationship Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=192#tabs-3">Hyperion Financial Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=197#tabs-3">Planning</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=20&amp;p_mode=Certification">JD Edwards EnterpriseOne<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>JD Edwards EnterpriseOne</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=114#tabs-3">JD Edwards Financial Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=109#tabs-3">JD Edwards Project Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=111#tabs-3">JD Edwards Supply Chain Execution (Logistics)</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=112#tabs-3">JD Edwards Tools and Technology</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=359#tabs-3">Manufacturing and Engineering </a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=454&amp;p_mode=Certification">Oracle Commerce<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Commerce</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=457#tabs-3">Oracle Commerce Developer</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=361&amp;p_mode=Certification">Oracle Financials Applications<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Financials Applications</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=362#tabs-3">Oracle FLEXCUBE </a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=363&amp;p_mode=Certification">Oracle Global Trade Management<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Global Trade Management</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=364#tabs-3">Oracle Global Trade Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=22&amp;p_mode=Certification">Oracle Policy Automation<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Policy Automation</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=118#tabs-3">Oracle Policy Modeling</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=451&amp;p_mode=Certification">Oracle Sales Cloud<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Sales Cloud</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=93#tabs-3">Oracle Sales Cloud</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                                <ul class="noborder">
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=452&amp;p_mode=Certification">Oracle Social Cloud<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Social Cloud</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=453#tabs-3">Oracle Social Relationship Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=23&amp;p_mode=Certification">Oracle Transportation Management<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Transportation Management</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=120#tabs-3">Oracle Transportation Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=365&amp;p_mode=Certification">Oracle Unified Method<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Unified Method</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=366#tabs-3">Oracle Unified Method</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=24&amp;p_mode=Certification">PeopleSoft<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>PeopleSoft</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=121#tabs-3">PeopleSoft Campus Solutions</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=106#tabs-3">PeopleSoft Financial Management </a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=96#tabs-3">PeopleSoft Human Capital Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=128#tabs-3">PeopleTools - Tools and Technology</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=25&amp;p_mode=Certification">Primavera<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Primavera</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=129#tabs-3">Primavera Contract Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=131#tabs-3">Primavera P6 Enterprise Project Portfolio Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=133#tabs-3">Primavera Portfolio Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=26&amp;p_mode=Certification">RightNow<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>RightNow</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=354#tabs-3">RightNow CX Cloud Services</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=27&amp;p_mode=Certification">Siebel<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Siebel</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=140#tabs-3">CRM Applications</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=379#tabs-3">Oracle Customer Hub</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=376#tabs-3">Oracle iStore</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=339&amp;p_mode=Certification">Taleo<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Taleo</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=356#tabs-3">Taleo Enterprise Edition (TEE)</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=29&amp;p_mode=Certification">User Productivity Kit (UPK)<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>User Productivity Kit (UPK)</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=367#tabs-3">Oracle User Productivity Kit</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=2&amp;p_mode=Certification">Database<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Database</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=350&amp;p_mode=Certification">Database Application Development<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Database Application Development</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=172#tabs-3">Oracle Application Express (Oracle APEX)</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=178#tabs-3">SQL and PL/SQL</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=406&amp;p_mode=Certification">MySQL<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>MySQL</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=159#tabs-3">MySQL Database Administration</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=160#tabs-3">MySQL Developer</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=32&amp;p_mode=Certification">Oracle Database<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Database</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=410#tabs-3">Database Cloud</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=162#tabs-3">Oracle Database 10g </a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=163#tabs-3">Oracle Database 11g</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=385#tabs-3">Oracle Database 12c</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=368#tabs-3">Oracle Spatial 11g</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=165#tabs-3">Oracle9i Database</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=440&amp;p_mode=Certification">Enterprise Management<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Enterprise Management</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=443&amp;p_mode=Certification">Oracle Application Testing Suite<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Application Testing Suite</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=447#tabs-3">Application Quality Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=441&amp;p_mode=Certification">Oracle Enterprise Manager<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Enterprise Manager</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=444#tabs-3">Enterprise Manager</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=414&amp;p_mode=Certification">Foundation<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Foundation</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=417&amp;p_mode=Certification">Oracle IT Architecture<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle IT Architecture</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=418#tabs-3">Oracle Technical Architecture</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=415&amp;p_mode=Certification">Project Lifecycle Management<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Project Lifecycle Management</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=416#tabs-3">Lifecycle Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=4&amp;p_mode=Certification">Industries<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Industries</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=41&amp;p_mode=Certification">Oracle Communications<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Oracle Communications</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=218#tabs-3">Billing and Revenue Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=429#tabs-3">Network Session Delivery and Control Infrastructure (Acme Packet)</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=222#tabs-3">Order and Service Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=225#tabs-3">Service Delivery</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=437#tabs-3">Session Border Control</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=226#tabs-3">Unified Communications Suite</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=42&amp;p_mode=Certification">Oracle Health Sciences<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Oracle Health Sciences</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=227#tabs-3">Oracle Argus</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=230#tabs-3">Oracle Life Sciences Data Hub</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=43&amp;p_mode=Certification">Oracle Insurance<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Insurance</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=234#tabs-3">Documaker</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=236#tabs-3">Policy Administration</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=44&amp;p_mode=Certification">Oracle Retail<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Retail</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=237#tabs-3">Merchandise Operations Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=238#tabs-3">Merchandise Planning and Optimization</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=239#tabs-3">Retail Technology Group</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=240#tabs-3">Stores</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=241#tabs-3">Supply Chain</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=370&amp;p_mode=Certification">Oracle Tax Applications<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Tax Applications</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=371#tabs-3">Oracle Public Sector Revenue Management</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=45&amp;p_mode=Certification">Oracle Utilities<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Oracle Utilities</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=242#tabs-3">Customer Care and Billing</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=246#tabs-3">Meter Data Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=247#tabs-3">Mobile Workforce Management</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=435#tabs-3">Smart Grid Gateway</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=5&amp;p_mode=Certification">Java and Middleware<b></b></a>

                                                            <div class="submenu2 gradient twocol"><h3>Java and Middleware</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=46&amp;p_mode=Certification">Application Server and Infrastructure<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Application Server and Infrastructure</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=251#tabs-3">Coherence</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=256#tabs-3">Weblogic Server</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=47&amp;p_mode=Certification">Business Intelligence<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Business Intelligence</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=258#tabs-3">BI Applications</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=259#tabs-3">BI Enterprise Edition (BI EE)</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=88#tabs-3">Endeca Information Discovery</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=183#tabs-3">Essbase</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=195#tabs-3">Interactive Reporting</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=30&amp;p_mode=Certification">Data Integration<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Data Integration</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=145#tabs-3">Data Integrator (ODI)</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=148#tabs-3">GoldenGate</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=37&amp;p_mode=Certification">Identity Management<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>Identity Management</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=202#tabs-3">Access Manager</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=209#tabs-3">Identity Manager</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=377&amp;p_mode=Certification">Involver<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Involver</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=378#tabs-3">Oracle Cloud Application Foundation</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=48&amp;p_mode=Certification">Java<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Java</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=264#tabs-3">Java EE</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=266#tabs-3">Java ME</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=267#tabs-3">Java SE</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=33&amp;p_mode=Certification">Middleware Development Tools<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Middleware Development Tools</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=166#tabs-3">Application Development Framework</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=169#tabs-3">Forms and Reports</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=49&amp;p_mode=Certification">SOA and BPM<b></b></a>

                                                                        <div class="submenu3 gradient twocol"><h3>SOA and BPM</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=271#tabs-3">AIA</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=274#tabs-3">BPM</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=279#tabs-3">SOA Suite</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                                <ul class="noborder">
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=52&amp;p_mode=Certification">WebCenter<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>WebCenter</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=291#tabs-3">WebCenter Content</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=292#tabs-3">WebCenter Portal</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=293#tabs-3">WebCenter Sites</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=6&amp;p_mode=Certification">Operating Systems<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Operating Systems</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=358&amp;p_mode=Certification">Oracle Linux<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Linux</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=295#tabs-3">Linux Administration</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=53&amp;p_mode=Certification">Oracle Solaris<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Oracle Solaris</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=296#tabs-3">Solaris 10 Administration</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=434#tabs-3">Solaris 11 Administration</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=7&amp;p_mode=Certification">Systems<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Systems</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=38&amp;p_mode=Certification">Engineered Systems<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Engineered Systems</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=212#tabs-3">Exadata</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=253#tabs-3">Exalogic Elastic Cloud</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=214#tabs-3">Exalytics</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=54&amp;p_mode=Certification">Servers<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Servers</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=301#tabs-3">Server Administration</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=357&amp;p_mode=Certification">Storage<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Storage</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=303#tabs-3">NAS Administration</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=304#tabs-3">Pillar Axiom 600</a><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=306#tabs-3">Tape Storage Administration</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/ou_product_category.getPillarPage?p_pillar_id=8&amp;p_mode=Certification">Virtualization<b></b></a>

                                                            <div class="submenu2 gradient onecol"><h3>Virtualization</h3>
                                                                <ul>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=399&amp;p_mode=Certification">Desktop Virtualization<b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Desktop Virtualization</h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=405#tabs-3">Oracle Virtual Desktop Infrastructure</a>
                                                                            </div>
                                                                        </div></li>
                                                                    <li><a href="/pls/web_prod-plq-dad/ou_product_category.getFamilyPage?p_family_id=55&amp;p_mode=Certification">Server Virtualization <b></b></a>

                                                                        <div class="submenu3 gradient onecol"><h3>Server Virtualization </h3>

                                                                            <div><a href="/pls/web_prod-plq-dad/ou_product_category.getPage?p_cat_id=308#tabs-3">Oracle VM</a>
                                                                            </div>
                                                                        </div></li>
                                                                </ul>
                                                            </div></li>
                                                        <li><a href="/pls/web_prod-plq-dad/db_pages.getpage?page_id=632">View all Certifications</a></li>
                                                        <li></li>
                                                    </ul>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Exams
                                                        </dt>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=651">ALL EXAMS</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=206">Retirements</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=182">Beta Exams</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=224">New Releases</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Preparation
                                                        </dt>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=50">Steps to Become Certified</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=112">Approved Courses</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=99">Course Submission Form</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=208">Practice Exams</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=51">Testing and Registration</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=640">Exam Prep Seminars</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=655">Discount Packages</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=670">Upgrade Your Certification</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Support
                                                        </dt>
                                                        <dd><a href="http://education.oracle.com/pls/eval-eddap-dcd/OU_SUPPORT_OCP.home?p_source=OCP">Contact Oracle Certification Support</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=459">Help Center</a>
                                                        </dd>
                                                        <dd><a href="https://education.oracle.com/pls/eval-eddap-dcd/ocp_interface.ocp_candidate_login?p_include=Y">CertView</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=291">Update Contact Information</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=138">Policies and Agreements</a>
                                                        </dd>
                                                    </dl>
                                                    <dl>
                                                        <dt class="mTop20">Benefits
                                                        </dt>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=73">Why Get Oracle Certified</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=659">Certification Benefits</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns noborder">
                                                    <dl>
                                                        <dt>News and Community
                                                        </dt>
                                                        <dd><a href="http://blogs.oracle.com/certification/">Oracle Certification Blog</a>
                                                        </dd>
                                                        <dd><a href="http://forums.oracle.com/forums/forum.jspa?forumID=459">Oracle Certification Forum</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=195">Certification E-Magazine</a>
                                                        </dd>
                                                        <dd><a href="http://education.oracle.com/education/otn/">Oracle Certification Masters</a>
                                                        </dd>
                                                        <dd><a href="http://twitter.com/OracleCert">Oracle Certification on Twitter</a>
                                                        </dd>
                                                        <dd><a href="http://www.linkedin.com/groups?gid=25436">Oracle Certification on Linkedin</a>
                                                        </dd>
                                                        <dd><a href="http://www.facebook.com/home.php?src=fftb#!/pages/Oracle-Certification/48429458822">Oracle Certification on Facebook</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div></li>
                                    <li class="top-level">

                                        <p><a href="/pls/web_prod-plq-dad/db_pages.getpage?page_id=539&amp;p_key=Oracle_University_Community">Community<b></b></a></p>

                                        <div class="submenu gradient">

                                            <div class="menuPad">

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Facebook
                                                        </dt>
                                                        <dd><a target="_blank" href="http://www.facebook.com/oracleedu">Oracle University</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://www.facebook.com/oraclecertification">Oracle Certification</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://facebook.com/javacertifiedprofessional">Java Certified Professional</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://www.facebook.com/solariscertifiedprofessional">Solaris Certified Professional</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://facebook.com/mysqlcertifiedprofessional">MySQL Certified Professional</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Twitter
                                                        </dt>
                                                        <dd><a target="_blank" href="http://twitter.com/Oracle_Edu">Oracle University</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://twitter.com/oraclecert">Oracle Certification</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://twitter.com/javacert">Java</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://twitter.com/solariscert">Oracle Solaris</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="http://twitter.com/mysqlcert">MySQL</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>LinkedIn
                                                        </dt>
                                                        <dd><a target="_blank" title="Oracle University LinkedIn community" href="http://linkd.in/Linkedin_OU_SocialMedia">Oracle University LinkedIn community</a>
                                                        </dd>
                                                        <dd><a target="_blank" title="LinkedIn Oracle Certified Associates, Professionals, Experts, and Masters" href="http://www.linkedin.com/groups/Oracle-Certified-Associates-Professionals-Experts-25436?trk=myg_ugrp_ovr&amp;goback=%2Egmp_62503">Oracle Certified Associates, Professionals, Experts &amp; Masters (OCA/OCP/OCE/OCM)</a>
                                                        </dd>
                                                        <dd><a target="_blank" title="This group is members only" href="http://www.linkedin.com/groups?mostPopular=&amp;gid=85485&amp;trk=myg_ugrp_ovr&amp;goback=%2Egmp_62503">Certified Java Programmer</a>
                                                        </dd>
                                                        <dd><a target="_blank" title="This group is members only" href="http://www.linkedin.com/groups?mostPopular=&amp;gid=85486&amp;trk=myg_ugrp_ovr&amp;goback=%2Egmp_62503">Certified Java Developer</a>
                                                        </dd>
                                                        <dd><a target="_blank" title="This group is members only" href="http://www.linkedin.com/groups?mostPopular=&amp;gid=48087&amp;trk=myg_ugrp_ovr&amp;goback=%2Egmp_62503">Certified Java Enterprise Architect</a>
                                                        </dd>
                                                        <dd><a target="_blank" title="This group is members only" href="http://www.linkedin.com/groups?mostPopular=&amp;gid=48088&amp;trk=myg_ugrp_ovr&amp;goback=%2Egmp_62503">Certified Solaris Administrator</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns">
                                                    <dl>
                                                        <dt>Google Plus
                                                        </dt>
                                                        <dd><a target="_blank" href="https://plus.google.com/109560021464887498322?prsrc=3">Oracle University</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="https://plus.google.com/b/113500064962743640193/113500064962743640193/posts">Java Training &amp; Certification</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="https://plus.google.com/b/100401022675740325426/100401022675740325426/posts">Solaris Training &amp; Certification</a>
                                                        </dd>
                                                    </dl>
                                                </div>

                                                <div class="columns noborder">
                                                    <dl>
                                                        <dt>Blogs
                                                        </dt>
                                                        <dd><a target="_blank" href="https://blogs.oracle.com/oracleuniversity/">Oracle University</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="https://blogs.oracle.com/certification/">Oracle Certification</a>
                                                        </dd>
                                                        <dd><a target="_blank" href="https://blogs.oracle.com/OU_trainers/">Oracle Trainers</a>
                                                        </dd>
                                                        <br>
                                                        <dt>Pinterest
                                                        </dt>
                                                        <dd><a target="_blank" href="http://pinterest.com/OracleEdu/">Oracle University</a>
                                                        </dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div></li>

                                    <li class="top-level right_text">	

                                        <p><a href="JavaScript:void(0);">Help<b></b></a></p>	

                                        <div class="submenu gradient">

                                            <div class="menuPad">
                                                <dl>	
                                                    <dd><a target="_top" href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=225">Customer Service</a>
                                                    </dd>	
                                                    <dd><a target="_top" href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=121">Help</a>
                                                    </dd>	
                                                </dl>
                                            </div>
                                        </div>	</li>	
                                    <li class="top-level right_text menuCart">	

                                        <p>	<a href="JavaScript:void(0);">

                                                <span class="shoppingCartIcon">
                                                </span>Cart<b></b></a></p>	

                                        <div class="submenu gradient">

                                            <div class="menuPad">
                                                <dl>	
                                                    <dd><a href="http://education.oracle.com/pls/web_prod-plq-dad/show_desc.redirect?redir_type=11">View Cart</a>
                                                    </dd>	
                                                    <dd><a target="_top" href="http://education.oracle.com/pls/web_prod-plq-dad/db_pages.getpage?page_id=518">Order Status</a>
                                                    </dd>	
                                                </dl>
                                            </div>
                                        </div>	</li>
                                </ul>
                            </div>	
                        </div>


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
                            &copy; <?php echo date('Y'); ?> IGATE GROUP. Tout droits r&eacute;serv&eacute;s.
                        </p>

                    </div>

                </div><!-- row end -->

            </div><!-- container end -->

        </div><!-- subfooter end -->

        <!-- jQuery -->
<?php echo $this->Html->script(array('../jQuery/jquery-2.1.1.min', '../jQuery/jquery-migrate-1.2.1.min', '../bootstrap/js/bootstrap.min', 'dropdown-menu/dropdown-menu', 'fancybox/jquery.fancybox.pack', 'fancybox/jquery.fancybox-media', 'jquery.fitvids', 'jquery.easy-pie-chart', 'theme', '../rs-plugin/js/jquery.themepunch.plugins.min', '../rs-plugin/js/jquery.themepunch.revolution.min', 'megamenu')); ?>

        <script type="text/javascript">

            var revapi;

            jQuery(document).ready(function () {

                revapi = jQuery('.tp-banner').revolution(
                        {
                            delay: 9000,
                            startwidth: 1170,
                            startheight: 500,
                            hideThumbs: false,
                            navigationType: "none",
                            fullWidth: "on",
                            forceFullWidth: "on"
                        });

            });	//ready

        </script>

    </body>
</html>
