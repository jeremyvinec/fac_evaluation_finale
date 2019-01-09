<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Eval final</title>
        <link rel="stylesheet" href="css/layout.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/nav.css">
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script>
            jQuery(document).ready(function(){
                $('#hamburger').click(function(){
                    $(this).toggleClass('open');
                });
            });
            function myFunction() {
                var x = document.getElementById("nav");
                if (x.style.display === "block") {
                    x.style.display = "none";
                } else {
                    x.style.display = "block";
                }
            }
        </script>
        <div style="width: 0px; height: 0px;"><?php require('./img/sprite_symbol_pictos.svg'); ?></div>
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="logos/LogoEnergiesCollectives_COMPLET.jpg">
            </div>
            <a href="#" id="hamburger" onclick="myFunction()">
                <span></span>
            </a>
            <nav id="nav">
                <ul class="menu">
                    <li><a href="#">Actualités</a></li>
                    <li><a href="#">Nous connaitre</a></li>
                    <li><a href="#">Nos installations</a></li>
                    <li><a href="#">Economisons</a></li>
                    <li><a href="#">En savoir plus</a></li>
                </ul>
                <ul class="souscrire">
                    <li><a href="#">Souscrire</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <section class="energie">
                <div><img class="logo" src="logos/pour_favicon.jpg"></div>
                <div>
                    <h1>L'énergie est notre affaire</h1>
                    <h4>Investissons dans la transition énergétique</h4>
                </div>
                <div class="grid">
                    <div class="cooperateurs">
                        <svg class="svg_energie">
                            <use fill="#c3a875" xlink:href="#schema_projet_cooperatif"></use>
                        </svg>
                        <h3>coopérateurs</h3>
                        <h2>190</h2>
                    </div>
                    <div class="installations_logo">
                        <svg class="svg_energie">
                            <use xlink:href="#picto_photovoltaique"></use>
                        </svg>
                        <h3>installations</h3>
                        <h2>8</h2>
                    </div>
                    <div class="production">
                        <svg class="svg_energie">
                            <use xlink:href="#picto_production_energie"></use>
                        </svg>
                        <h3>production</h3>
                        <h2>141 MWh</h2>
                    </div>
                    <div class="capital">
                        <svg class="svg_energie">
                            <use xlink:href="#schema_vente_production_energie"></use>
                        </svg>
                        <h3>capital</h3>
                        <h2>112950 €</h2>
                    </div>
                </div>
            </section>

            <div class="text_prod_conso">
                <h4>Produire et mieux consommer de l'électricité renouvelable et local c'est possible !</h4>
                <div>
                    <p>Habitants, entreprise et collectivités de Serre-Ponçon agissent ensemble, à travers la coopérative pour :</p>
                    <ul>
                        <li><p>Réduire les gaspillages énergétique : consommer moins pour produire moins.</p></li>
                        <li><p>Produire l'électricité localement : l'épargne citoyenne est investie dans les installations photovoltaïques</p></li>
                        <li><p>Agir ensemble pour l'intérêt collectif : personne = une voix.</p></li>
                    </ul>
                </div>
            </div>
            <div class="model_prod2 model_prod">
                <a href="#">
                    <h2>Comprendre notre modèle de production</h2>
                    <svg class="svg_production">
                        <use xlink:href="#plus"></use>
                    </svg>
                </a>
            </div>
            <div class="model_prod3">
                <h4>Pourquoi devenir sociétaire d'Énergies Collectives ?</h4>
                <p>
                    Pourquoi passer à l'action et prendre une ou des part(s) social(s) de la coopérative ? Comment convaincre vos proches de nous rejoindre
                    et d'investir dans la transition énergétique ? Quelques éléments de réflexion dans cet article, à faire circuler !
                </p>
                <svg class="svg_societe">
                    <use xlink:href="#plus"></use>
                </svg>
            </div>
            <div class="souscrire2">
                <h2>Souscrire ! </h2>
            </div>
            <section class="actus">
                <div class="module">
                    <div class="titre_section">
                        <h3>actualités</h3>
                        <svg class="svg">
                            <use fill="#fff" xlink:href="#fleche_droite"></use>
                        </svg>
                        <img src="photos/4.jpg">
                    </div>
                    <div>

                        <h4>Un 24 novembre de célébration</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan sem sem, ac sagittis sapien maximus et.
                            Integer ligula sapien, scelerisque id lacus quis, ultricies congue lacus.
                            Sed consectetur, leo a fringilla feugiat, odio mi lacinia nisl, a aliquam velit ante ut justo.
                            Morbi lacinia dictum ipsum, vitae sagittis lacus varius at.
                        </p>
                        <svg class="svg">
                            <use fill="#fff" xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </section>
            <section class="demarche">
                <div class="module">
                    <div class="titre_section">
                        <h3>Notre démarche</h3>
                        <img src="Photos/2.jpg">
                    </div>
                    <div>
                        <h4>Notre démarche</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan sem sem, ac sagittis sapien maximus et.
                            Integer ligula sapien, scelerisque id lacus quis, ultricies congue lacus.
                            Sed consectetur, leo a fringilla feugiat, odio mi lacinia nisl, a aliquam velit ante ut justo.
                            Morbi lacinia dictum ipsum, vitae sagittis lacus varius at.
                        </p>
                        <svg class="svg">
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </section>
            <section class="installations">
                <div class="module">
                    <div class="titre_section">
                        <h3>Nos installations</h3>
                        <img src="photos/6.jpg">
                    </div>
                    <div>
                        <h4>Atelier Burger, Embrun</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan sem sem, ac sagittis sapien maximus et.
                            Integer ligula sapien, scelerisque id lacus quis, ultricies congue lacus.
                            Sed consectetur, leo a fringilla feugiat, odio mi lacinia nisl, a aliquam velit ante ut justo.
                            Morbi lacinia dictum ipsum, vitae sagittis lacus varius at.
                        </p>
                        <svg class="svg">
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </section>
            <a href="#">
                <h2 class="model_prod">Voir toutes nos installations</h2>
            </a>
            <section class="temoignages">
                <div class="module">
                    <div class="titre_section">
                        <h3>Témoignages</h3>
                        <svg class="svg">
                            <use fill="#fff" xlink:href="#fleche_droite"></use>
                        </svg>
                        <img src="photos/5.jpg">
                    </div>
                    <div>
                        <h4>Maire de Puy-Sanières</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer accumsan sem sem, ac sagittis sapien maximus et.
                            Integer ligula sapien, scelerisque id lacus quis, ultricies congue lacus.
                            Sed consectetur, leo a fringilla feugiat, odio mi lacinia nisl, a aliquam velit ante ut justo.
                            Morbi lacinia dictum ipsum, vitae sagittis lacus varius at.
                        </p>
                        <svg class="svg">
                            <use xlink:href="#plus"></use>
                        </svg>
                    </div>
                </div>
            </section>
        </main>
        <footer>
            <div class="follow">
                <div>
                    <h2>Nous suivre</h2>
                    <a href="#">
                        <svg class="svg">
                            <use xlink:href="#schema_projet_cooperatif"></use>
                        </svg>
                    </a>
                </div>
                <div>
                    <h2>Nous contacter</h2>
                    <a href="#"><svg class="svg">
                            <use xlink:href="#mail"></use></svg>
                    </a>
                </div>
                <div>
                    <h2>Rechercher</h2>
                    <a href="#">
                        <svg class="svg">
                            <use xlink:href="#schema_projet_cooperatif"></use>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="subscribe">
                <h3>Abonnez-vous à la Newsletter</h3>
                <input type="text">
                <button type="submit">V</button>
            </div>
            <div class="partenaires">
                <p>Nos partenaires :</p>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton110.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton124.jpg"></a></div>
                <div><a href="#"><img src="partenaires/enercoop.png"></a></div>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
                <div><a href="#"><img src="partenaires/arton82.jpg"></a></div>
            </div>
        </footer>
    </body>
</html>