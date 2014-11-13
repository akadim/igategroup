<div id="content">
    <div id="contentarea">
        <h1><span class="contents">Pr&eacute;sentation</span></h1>
    </div>
    <div id="contentarea">
        <div class="newRCbox1">
            <div style="text-align: justify;padding: 10px;font-size: 12px;">
                <p>
                    IGATEGROUP évolue aujourd’hui au sein d’une concurrence globale qui la conduit à transposer son positionnement vers l’excellence à l’échelon national et international. 
                </p>

                <p>
                    L’enseignement, source indirecte de développement des entreprises est devenu un secteur qui produit des compétences très compétitives où les business schools doivent innover et se différencier pour continuer d’exister.
                </p>

                <p>
                    Dans ce contexte, l’excellence et l’ouverture demeurent les valeurs clés dans lesquelles les ambitions d’IGATEGROUP puisent leur force. Investir dans une recherche de pointe visant à modeler ses formations suivant les exigences du marché du travail et un corps professoral de renommée issu à la fois de l’enseignement académique mais aussi du marché des cadres actif pour apporter une double formation à nos étudiants théorique et pratique.
                </p>

                <p>
                    Une pédagogie adaptée aux exigences d'une formation professionnelle.
                </p>

                <p>
                    L'année de formation au sein d’IGATEGROUP s’articule autour d’un enseignement théorique et pratique, d’un apprentissage de méthodes et d'outils et de la réalisation d'un projet de fin de formation. Elle fait appel aux nouvelles technologies et une partie de la formation peut être accomplie à l'étranger dans le cadre de partenariats.
                </p>

                <p>
                    La pédagogie fait une large place à l'initiative de l'étudiant et à son travail personnel, pour mettre en œuvre les connaissances et les compétences acquises. Projet de fin de formation donne lieu à l'élaboration d'un mémoire et à une soutenance orale. 
                </p>

                <p>
                    Une grande partie des enseignements est dispensée par des professionnels qui participent à part entière à la formation.
                </p>

                <p>
                    Les filières proposées par IGATEGROUP sont les plus recherchés dans le secteur d’offre d’emploi. Ci-dessous la liste les niveaux formations enseignés à IGATEGROUP.
                </p>
            </div>
        </div>
    </div>
</div>
<div id="rightbar">
    <div class="newRCbox2" style="margin-right: 10px;">
        <h1>
            <span class="contents">Fili&egrave;res</span>
        </h1>
        <div id="accordion">
            <?php
            $filieres = $this->requestAction(array('controller' => 'formations', 'action' => 'filieres'));
            foreach ($filieres as $filiere) {
                $filiere = current($filiere);
                ?>
                <h3>
                    <a href="#collapse<?php echo $filiere['id']; ?>" data-parent="#accordion" data-toggle="collapse" class="accordion-toggle collapsed">
                        <?php echo $filiere['libelle']; ?>
                    </a>
                </h3>
                <div>
                    <ul>
                        <?php
                        $formations = $this->requestAction(array('controller' => 'formations', 'action' => 'formations', $filiere['id']));
                        //print_r($formations);
                        foreach ($formations as $formation) {
                            $formation = current($formation);
                            ?>
                            <li><?php echo $this->Html->link($formation['name'], array('controller' => 'formations', 'action' => 'show', $formation['id']), array('title' => $formation['name'], 'escape' => false)); ?></li>
                        <?php } ?>
                    </ul>
                </div>
            <?php } ?>
        </div>
    </div>
</div>