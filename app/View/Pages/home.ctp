<div class="row">
    <div class="col-lg-12 clearfix"><!-- featured posts slider -->

        <div id="carousel-featured" class="carousel slide" data-interval="4000" data-ride="carousel"><!-- featured posts slider wrapper; auto-slide -->

            <ol class="carousel-indicators"><!-- Indicators -->
                <li data-target="#carousel-featured" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-featured" data-slide-to="1"></li>
                <li data-target="#carousel-featured" data-slide-to="2"></li>
                <li data-target="#carousel-featured" data-slide-to="3"></li>
                <li data-target="#carousel-featured" data-slide-to="4"></li>
            </ol><!-- Indicators end -->

            <div class="carousel-inner"><!-- Wrapper for slides -->

                <div class="item active">
                    <img src="img/graduation.png" alt="Image slide 3" />
                    <div class="k-carousel-caption pos-1-3-right scheme-dark">
                        <div class="caption-content">
                            <h3 class="caption-title">Learning makes us stronger for life</h3>
                            <p>
                                We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/training.jpg" alt="Image slide 2" />
                    <div class="k-carousel-caption pos-1-3-left scheme-light">
                        <div class="caption-content">
                            <h3 class="caption-title">Learning makes us stronger for life</h3>
                            <p>
                                We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/certification.png" alt="Image slide 1" />
                    <div class="k-carousel-caption pos-2-3-right scheme-dark">
                        <div class="caption-content">
                            <h3 class="caption-title">Learning makes us stronger for life</h3>
                            <p>
                                We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                            </p>
                            <p>
                                <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/slide-4.jpg" alt="Image slide 4" />
                    <div class="k-carousel-caption pos-2-3-left scheme-light">
                        <div class="caption-content">
                            <h3 class="caption-title">Learning makes us stronger for life</h3>
                            <p>
                                We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                            </p>
                            <p>
                                <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="item">
                    <img src="img/slide-5.jpg" alt="Image slide 5" />
                    <div class="k-carousel-caption pos-c-2-3 scheme-dark no-bg">
                        <div class="caption-content">
                            <h3 class="caption-title title-giant">Learning makes us stronger for life</h3>
                            <p>
                                We could brag about all of the great opportunities that our students have... or you could hear it from the students themselves.
                            </p>
                            <p>
                                <a href="#" class="btn btn-sm btn-danger" title="Button">READ MORE</a>
                            </p>
                        </div>
                    </div>
                </div>

            </div><!-- Wrapper for slides end -->

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-featured" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
            <a class="right carousel-control" href="#carousel-featured" data-slide="next"><i class="fa fa-chevron-right"></i></a>
            <!-- Controls end -->

        </div><!-- featured posts slider wrapper end -->
    </div>

</div>
<br/>
<div class="row">
    <div class="col-md-3 img-portfolio">
        <a href="portfolio-item.html">
            <div class="thumbnail">
                <?php echo $this->Html->image('rubrique_1.png', array('class' => 'img-responsive img-hover')); ?>
                <div class="caption">
                    <h3>
                        Formation dipl&ocirc;mante 
                    </h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 img-portfolio">
        <a href="portfolio-item.html">
            <div class="thumbnail">
                <?php echo $this->Html->image('rubrique_2.gif', array('class' => 'img-responsive img-hover')); ?>
                <div class="caption">
                    <h3>
                        Partenriat acad&eacute;mique 
                    </h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 img-portfolio">
        <a href="portfolio-item.html">
            <div class="thumbnail">
                <?php echo $this->Html->image('rubrique_3.gif', array('class' => 'img-responsive img-hover')); ?>
                <div class="caption">
                    <h3>
                        Formation & Certification
                    </h3>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 img-portfolio">
        <a href="portfolio-item.html">
            <div class="thumbnail">
                <?php echo $this->Html->image('rubrique_4.gif', array('class' => 'img-responsive img-hover')); ?>
                <div class="caption">
                    <h3>
                        Leadership 
                    </h3>
                </div>
            </div>
        </a>
    </div>
</div>

<br/><br/>

<div class="row">
    <div class="col-xs-6 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-graduation-cap"></i> Formation diplômante</h4>
            </div>
            <div class="panel-body">
                <p>Choisissez le niveau de la formation</p>
                <?php $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'all_filieres')); ?>
                <?php echo $this->Form->create('Formation', array('controller' => 'formations', 'action' => 'search')); ?>
                <?php echo $this->Form->input('Filiere.id', array('type' => 'select', 'label' => false, 'options' => $filieres, 'escape' => false, 'id' => 'filiere_filter')); ?><br>
                Formation<br><br>
                <div id="university_training_filter">
                    <select name="data[Formation][id]" disabled="disabled">
                        <option>choisissez une formation</option>
                    </select>
                </div>
                <br />
                <center>
                    <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
                </center>
                <?php echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-certificate"></i> Formation & Certification</h4>
            </div>
            <div class="panel-body">
                <p>Choisissez le niveau de la formation</p>
                <?php $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'all_filieres')); ?>
                <?php echo $this->Form->create('Formation', array('controller' => 'formations', 'action' => 'search')); ?>
                <?php echo $this->Form->input('Filiere.id', array('type' => 'select', 'label' => false, 'options' => $filieres, 'escape' => false, 'id' => 'filiere_filter')); ?><br>
                Formation<br><br>
                <div id="university_training_filter">
                    <select name="data[Formation][id]" disabled="disabled">
                        <option>choisissez une formation</option>
                    </select>
                </div>
                <br />
                <center>
                    <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
                </center>
                <?php echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
    <div class="col-xs-6 col-lg-4">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4><i class="fa fa-fw fa-calendar"></i> Evenement</h4>
            </div>
            <div class="panel-body">
                <p>Choisissez le niveau de la formation</p>
                <?php $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'all_filieres')); ?>
                <?php echo $this->Form->create('Formation', array('controller' => 'formations', 'action' => 'search')); ?>
                <?php echo $this->Form->input('Filiere.id', array('type' => 'select', 'label' => false, 'options' => $filieres, 'escape' => false, 'id' => 'filiere_filter')); ?><br>
                Formation<br><br>
                <div id="university_training_filter">
                    <select name="data[Formation][id]" disabled="disabled">
                        <option>choisissez une formation</option>
                    </select>
                </div>
                <br />
                <center>
                    <?php echo $this->Form->submit('Valider', array('class' => 'btn btn-primary')); ?>
                </center>
                <?php echo $this->Form->end(); ?>

            </div>
        </div>
    </div>
</div>

