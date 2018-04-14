<?php
session_start();
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
                        <h3>Curriculum vitae</h3>
                    </div>

                   
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>BESOIN EN DOTATION
                                    <small></small>
                                </h2>
                               
                                <div class="clearfix"></div>
                            </div>
                            <div class="x_content">


                                <form class="form-horizontal form-label-left" action="insert.php" method="post" novalidate enctype="multipart/form-data">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cin">CIN: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" id="cin" name="cin" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom du candidat: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="nom" class="form-control col-md-7 col-xs-12" data-validate-length-range="6" data-validate-words="2" name="nomp" placeholder="" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">Age: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="number" id="age" name="age" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationalite">Nationalité:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="nationalite" name="nationalite" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="etatc">Etat civil:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="text" id="etatc" name="etatc" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adresse">Adresse:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="adresse" type="textarea" name="adresse" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="téléphone" class="control-label col-md-3">Teléphone:</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="telephone" type="number" name="telephone" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="photo"> PHOTO</label>
                                        <input type="file" name="photo" id="photo" alt="" class="img-circle img-responsive">
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="diplome">Diplômes et formations: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="diplome" required="required" name="diplome" class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="experience">Expériences
                                            professionnelles: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="experience" required="required" name="experience"
                                                      class="form-control col-md-7 col-xs-12"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-md-offset-8">
                                        <button id="send" type="submit" class="btn btn-warning">Enregistrer</button>
                                      
                                    </div>
                                </form>
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
                        <!-- validator -->
                        <script src="../vendors/validator/validator.js"></script>

                        <!-- Custom Theme Scripts -->
                        <script src="../build/js/custom.min.js"></script>

</body>
</html>
