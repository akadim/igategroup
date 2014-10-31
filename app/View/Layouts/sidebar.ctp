<div class="row no-gutter"><!-- row -->

    <div class="col-lg-8 col-md-8"><!-- doc body wrapper -->

        <div class="col-padded"><!-- inner custom column -->

            <?php echo $this->fetch('body_content'); ?>

        </div><!-- inner custom column end -->

    </div><!-- doc body wrapper end -->

    <div id="k-sidebar" class="col-lg-4 col-md-4"><!-- sidebar wrapper -->

        <div class="col-padded col-shaded"><!-- inner custom column -->

            <ul class="list-unstyled clear-margins"><!-- widgets -->

                <li class="widget-container widget_nav_menu"><!-- widget -->

                    <h1 class="title-widget">Fili&egrave;res</h1>

                    <div id="accordion" class="panel-group">

                        <?php
                        $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'filieres'));
                        foreach ($filieres as $filiere) {
                            $filiere = current($filiere);
                            ?>
                            <div class="panel panel-default"><!-- accordion panel one -->
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="#collapse<?php echo $filiere['id']; ?>" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
    <?php echo $filiere['libelle']; ?>
                                        </a>
                                    </h4>
                                </div>
                                <div class="panel-collapse collapse" id="collapse<?php echo $filiere['id']; ?>">
                                    <div class="panel-body">
                                        <ul>
                                            <?php
                                              $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'formations', $filiere['id']));
                                              //print_r($formations);
                                              foreach($formations as $formation) { $formation = current($formation);
                                             ?>
                                              <li>
                                                   <?php echo $this->Html->link( $formation['name'], array('controller' => 'formations', 'action' => 'show', $formation['id']), array('title' => $formation['name'], 'escape' => false) ); ?>
                                              </li>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

<?php } ?>

                    </div>

                </li>

                <li class="widget-container widget_up_events"><!-- widget -->

                    <h1 class="title-widget">Upcoming Events</h1>

                    <ul class="list-unstyled">

                        <li class="up-event-wrap">

                            <h1 class="title-median"><a href="#" title="Annual alumni game">Annual alumni game</a></h1>

                            <div class="up-event-meta clearfix">
                                <div class="up-event-date">Jul 25, 2015</div><div class="up-event-time">9:00 - 11:00</div>
                            </div>

                            <p>
                                Fusce condimentum pulvinar mattis. Nunc condimentum sapien sit amet odio vulputate, nec suscipit orci pharetra... <a href="#" class="moretag" title="read more">MORE</a> 
                            </p>

                        </li>

                        <li class="up-event-wrap">

                            <h1 class="title-median"><a href="#" title="School talents gathering">School talents gathering</a></h1>

                            <div class="up-event-meta clearfix">
                                <div class="up-event-date">Aug 25, 2015</div><div class="up-event-time">8:30 - 10:30</div>
                            </div>

                            <p>
                                Pellentesque lobortis, arcu eget condimentum auctor, magna neque faucibus dui, ut varius diam neque sed diam... <a href="#" class="moretag" title="read more">MORE</a> 
                            </p>

                        </li>

                        <li class="up-event-wrap">

                            <h1 class="title-median"><a href="#" title="School talents gathering">Campus "Open Doors"</a></h1>

                            <div class="up-event-meta clearfix">
                                <div class="up-event-date">Sep 04, 2015</div><div class="up-event-date">Sep 11, 2015</div>
                            </div>

                            <p>
                                Donec fringilla lacinia laoreet. Vestibulum ultrices blandit tempor. Aenean magna elit, varius eget quam a, posuere... <a href="#" class="moretag" title="read more">MORE</a> 
                            </p>

                        </li>

                    </ul>

                </li>

                <li class="widget-container widget_newsletter"><!-- widget -->

                    <h1 class="title-titan">IGATE Newsletter</h1>

                    <form role="search" method="get" class="newsletter-form" action="#">
                        <div class="input-group">
                            <input type="text" placeholder="Your e-mail address" autocomplete="off" class="form-control newsletter-form-input" name="email" />
                            <span class="input-group-btn"><button type="submit" class="btn btn-default">VALIDER!</button></span>
                        </div>
                        <span class="help-block">* Entrez votre email pour s'incrire.</span>
                    </form>

                </li>

            </ul><!-- widgets end -->

        </div><!-- inner custom column end -->

    </div><!-- sidebar wrapper end -->

</div><!-- row end -->