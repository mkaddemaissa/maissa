<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"><img src="images/biat.jpg" alt="..."> <span>بنك تونس العربي الدولي</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_info">
                <?php if (isset($_SESSION['nom'])) echo "<span>Welcome,</span>"; ?>
                <h2><?php if (isset($_SESSION['nom'])) echo $_SESSION['nom']; ?></h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br/>

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                    <li><a href="index.php"><i class="fa fa-home"></i> Home </a>

                    </li>
                    <li><a><i class="fa fa-edit"></i> Gestion des candidats <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">


                            <li><a href="contacts.php">Consulter les candidats</a></li>
                            <li><a href="cv.php">Ajouter un cv </a></li>
                            <li><a href="fichentretien.php">Ajouter un entretien</a></li>
                          
                            
                        </ul>
                    </li>
					
					<li><a><i class="fa fa-edit"></i> Gestion offres financières <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">


                            <li><a href="offrefinanciere.php">Calculer une offre financière</a></li>
                            <li><a href="cv.php">Consulter offres financières </a></li>
                          
                          
                            
                        </ul>
                    </li>

                    <?php
                        if(isset($_SESSION['role']) && $_SESSION['role'] == "administrator" && isset($_SESSION['nom']) && $_SESSION['nom'] == 'BACEM GHALLEB'){
                            echo '<li><a><i class="fa fa-table"></i> Gestion des données <span
                                class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="datagreed.php">Validation des CVs </a></li>
                            <li><a href="tablesentretien.php">Gestion des entretiens </a></li>
                            <li><a href="tables.html">Gestion des échelons </a></li>
							<li><a href="offrefinanciere.php">Calculer une offre financière</a></li>
                        </ul>
                    </li>';
                        }
                    ?>
                </ul>
            </div>
            <div class="menu_section">
                <h3>others</h3>
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-upload"></i> Imprimer <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="contacts.php">fiche d'entretien</a></li>
							<li><a href="contacts.php">Lettre d'embauche</a></li>

                        </ul>
                    </li>
                    <li><a><i class="fa fa-calendar"></i> Extras <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">

                            <li><a href="calendrier.php">Calendrier</a></li>

                        </ul>
                    </li>


                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">
            
            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <?php
                if(isset($_SESSION['nom']))
                echo'<li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                       aria-expanded="false">
                        '.$_SESSION['nom'].'
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">
                       
                        <li><a href="lougout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>


                    </ul>
                </li>';
                else{
                    echo '<li><a href="login.php">Login</a></li>';
                }
                ?>

                
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->