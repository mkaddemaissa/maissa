<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>BIAT</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include 'layout.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <!-- top tiles -->
            <div class="row tile_count">
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-user"></i> Direction</span>
                    <div class="count"><h4>Mohamed AGREBI </h4></div>
                    <div class="count"><h4>Ismail MABROUK</h4></div>

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-clock-o"></i> Création</span>
                    <div class="count"><h4>29 Mars 1976</h4></div>

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-money"></i> Capital social </span>
                    <div class="count green">170 MD</div>

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-gavel"></i> Forme juridique</span>
                    <div class="count"><h4>Société anonyme</h4></div>

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-map-marker"></i> Siège Social</span>
                    <div class="count"><h4>Avenue Habib </h4>
                        <h4>Bourguiba </h4></div>

                </div>
                <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
                    <span class="count_top"><i class="fa fa-globe"></i> Site Web</span>
                    <div class="count"><h4><a href="http:\\www.biat.com.tn">www.biat.com.tn</a></h4></div>

                </div>
            </div>
            <!-- /top tiles -->

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="dashboard_graph">

                        <div class="row x_title">
                            <div class="col-md-6">
                                <h3>PLUS QU’UNE BANQUE </h3>
                            </div>
                            <div class="col-md-6">
                                <div id="reportrange" class="pull-right"
                                     style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                                    <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    <span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-sm-9 col-xs-12">
                            <div class="image"><img style="max-width: 100%" src="images/biiat.jpg""></div>
                        </div>
                    </div>
                </div>


            </div>
            <br/>

            <div class="row">


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Présentation générale</h2>

                            <div class="clearfix"></div>

                            <div class="x_content">
                                <h5>Créée en 1976, la BIAT – Banque Internationale arabe de Tunisie – est aujourd’hui la
                                    première banque du pays et se classe au premier rang sur de nombreux indicateurs.
                                    Elle représente 16 % de part de marché, en moyenne, sur le panel des dix premières
                                    banques de la place en termes de dépôts.

                                    La BIAT, banque universelle, a développé toutes les activités de banque et constitue
                                    un groupe bancaire avec ses filiales dans les domaines de l’assurance, de la gestion
                                    d’actifs, du capital-investissement ou de l’intermédiation boursière
                                </h5>

                                <div class="clearfix"></div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320 overflow_hidden">
                        <div class="x_title">
                            <h2>HISTOIRE</h2>

                            <div class="clearfix"></div>

                            <div class="x_content">
                            </div>
                        </div>
                        <h5> En regroupant les agences tunisiennes de la Société Marseillaise de Crédit (SMC) et de la
                            British Bank of the Middle East (BBME), installées en Tunisie depuis des dizaines d’années,
                            Mansour Moalla et Habib Bourguiba Jr, rejoints par Mokhtar Fakhfakh fondent, en février
                            1976, la Banque Internationale Arabe de Tunisie.

                            Elle est officiellement enregistrée au registre du commerce le 1er avril 1976. Elle
                            s’installe en plein coeur de Tunis, avenue Habib Bourguiba, dans les anciens locaux du
                            magasin « Maison modèle ».
                        </h5>


                    </div>
                </div>


                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel tile fixed_height_320">
                        <div class="x_title">
                            <h2>Ressources humaines</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">
                                <h5>Développant des métiers qui se fondent, par définition, sur les relations humaines,
                                    la BIAT a toujours eu comme ambition d’être un employeur de référence. Cette
                                    ambition s’appuie sur une « politique du capital humain » qui place les femmes et
                                    les hommes au cœur de sa politique de ressources humaines.</h5>


                            </div>
                        </div>
                    </div>
                </div>

            </div>


            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Responsabilité sociétale </h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <div class="dashboard-widget-content">

                                <ul class="list-unstyled timeline widget">
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>Banque engagée</a>
                                                </h2>

                                                <p class="excerpt"><h5>Banque de référence en Tunisie, la BIAT entend
                                                    jouer pleinement son rôle sociétal et économique pour le
                                                    développement du pays. Engagée auprès des acteurs économiques et de
                                                    la jeunesse depuis plusieurs décennies, la BIAT assure son
                                                    développement dans le respect et en accompagnant toutes les parties
                                                    prenantes de son activité : elle intègre ainsi la responsabilité
                                                    sociale dans sa stratégie et ses projets de développement.</h5>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>Mécénat culturel</a>
                                                </h2>

                                                <p class="excerpt"> <h5>La BIAT est un mécène de la culture en Tunisie
                                                    depuis de nombreuses années. Parmi les opérations emblématiques
                                                    qu’elle a soutenues : la création et l’équipement de la médiathèque
                                                    de l’Ariana, la restauration et la réhabilitation du théâtre
                                                    municipal de Tunis, l’appui aux Journées Cinématographiques de
                                                    Carthage(JCC) et au festival international de Carthage… Au-delà de
                                                    ces actions d’envergure nationale, la BIAT parraine et accompagne de
                                                    nombreux événements locaux, fidèle en cela à ses engagements de
                                                    proximité. Ainsi, en 2007, la Banque a lancé la 1ère édition de BIAT
                                                    Expo : cinq éditions de cet événement ont permis à des artistes de
                                                    divers horizons – peintres, sculpteurs, photographes – d’exposer
                                                    leurs œuvres au siège de la BIAT.</h5>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="block">
                                            <div class="block_content">
                                                <h2 class="title">
                                                    <a>Sponsoring sportif</a>
                                                </h2>

                                                <p class="excerpt"> <h5>Très représentatif des valeurs humaines et
                                                    sociales de la BIAT, sport rassemblant un vaste et multiple public,
                                                    de toutes catégories sociales confondues, le football constitue la
                                                    principale activité sportive vers laquelle la Banque a choisi
                                                    d’orienter sa politique de sponsoring. Que ce soit pour les clubs
                                                    nationaux ou pour les équipes régionales ou locales, la BIAT est
                                                    associée à plusieurs équipes ou manifestations dans le pays.</h5>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-md-8 col-sm-8 col-xs-12">





                        <!-- Start to do list -->
                      
                        <!-- End to do list -->

                        <!-- start of weather widget -->
                        <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Weather
                                        <small></small>
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="temperature"><b>Monday</b>, 07:30 AM
                                                <span>F</span>
                                                <span><b>C</b></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="weather-icon">
                                                <canvas height="84" width="84" id="partly-cloudy-day"></canvas>
                                            </div>
                                        </div>
                                        <div class="col-sm-8">
                                            <div class="weather-text">
                                                <h2>Tunisia <br><i>Partly Cloudy Day</i></h2>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="weather-text pull-right">
                                            <h3 class="degrees">23</h3>
                                        </div>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="row weather-days">
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Mon</h2>
                                                <h3 class="degrees">25</h3>
                                                <canvas id="clear-day" width="32" height="32"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Tue</h2>
                                                <h3 class="degrees">25</h3>
                                                <canvas height="32" width="32" id="rain"></canvas>
                                                <h5>12 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Wed</h2>
                                                <h3 class="degrees">27</h3>
                                                <canvas height="32" width="32" id="snow"></canvas>
                                                <h5>14 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Thu</h2>
                                                <h3 class="degrees">28</h3>
                                                <canvas height="32" width="32" id="sleet"></canvas>
                                                <h5>15 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Fri</h2>
                                                <h3 class="degrees">28</h3>
                                                <canvas height="32" width="32" id="wind"></canvas>
                                                <h5>11 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <div class="daily-weather">
                                                <h2 class="day">Sat</h2>
                                                <h3 class="degrees">26</h3>
                                                <canvas height="32" width="32" id="cloudy"></canvas>
                                                <h5>10 <i>km/h</i></h5>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- end of weather widget -->
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
                Banque internationale arabe de la tunisie <a href="https://biat.com.tn"></a>
            </div>
            <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="../vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="../vendors/nprogress/nprogress.js"></script>
<!-- Chart.js -->
<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
<!-- gauge.js -->
<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
<!-- bootstrap-progressbar -->
<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
<!-- iCheck -->
<script src="../vendors/iCheck/icheck.min.js"></script>
<!-- Skycons -->
<script src="../vendors/skycons/skycons.js"></script>
<!-- Flot -->
<script src="../vendors/Flot/jquery.flot.js"></script>
<script src="../vendors/Flot/jquery.flot.pie.js"></script>
<script src="../vendors/Flot/jquery.flot.time.js"></script>
<script src="../vendors/Flot/jquery.flot.stack.js"></script>
<script src="../vendors/Flot/jquery.flot.resize.js"></script>
<!-- Flot plugins -->
<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
<!-- DateJS -->
<script src="../vendors/DateJS/build/date.js"></script>
<!-- JQVMap -->
<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<!-- bootstrap-daterangepicker -->
<script src="../vendors/moment/min/moment.min.js"></script>
<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>

</body>
</html>
