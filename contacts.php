<?php
session_start();
require 'connnexion.php';
$getCV = $pdo->prepare("SELECT * FROM rhemploye");
$getCV->execute();
$result = $getCV->fetchAll();
require 'check_session.php';
check_session(0);

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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <?php include 'layout.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">
            <div class="">
                <div class="page-title">
                    <div class="title_left">
                        <h3>Tous les contacts</h3>  <a href="cv.php" class="btn btn-warning ">Ajouter un CV</a>
                    </div>

                   
                </div>

                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="x_panel">
                            <div class="x_content">
							 
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-12 text-center">

                                    </div>
                                    <div class="clearfix"></div>

                                    <?php foreach ($result as $cv) : ?>
                                       <div class="col-md-4 col-sm-4 col-xs-12 profile_details">
                                        <div class="well profile_view">
                                         <div class="col-sm-12">
											<div class="col-ms-6">
                                                <h4 class="brief">
													<i> <?= $cv['nomp']; ?> </i> 
													<?php if  ($cv['valide']==1)   : ?> <span class='glyphicon glyphicon-ok'></span> <?php endif ?>
												</h4>
											</div>
											
                                                <div class="left col-xs-7">
												
														<ul class="list-unstyled">
																<li><i class="fa fa-building"></i> Address: <?= $cv['adresse']?> </li>
																<li><i style="font-size: large" class="fa fa-phone"></i> Phone: <?=$cv['telephone'] ?></li>
														 </ul>
												 
                                                   
													<h2><a href=readrecrute.php?cin=<?=$cv['cin'] ?> > <?=$cv['cin'] ?> </a></h2>
                                                    <p><strong>About: </strong> <?=$cv['etatc']?> </p>
                                                </div>
                                                <div class="right col-xs-5 text-center"> 
												
											
                                                    <img src="<?=$cv['photo'] ?>" alt="" class="img-circle img-responsive">
													 
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
            <div class="pull-right">
               Banque internationale arabe de la tunisie 
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

<!-- Custom Theme Scripts -->
<script src="../build/js/custom.min.js"></script>
</body>
</html>