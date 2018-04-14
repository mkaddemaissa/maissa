<?php
session_start();
require 'check_session.php';
check_session(0);
?>
<!DOCTYPE HTML >
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
                        <h3>Fiche d'entretien de recrutement</h3>
                    </div>

                  
                </div>
                <div class="clearfix"></div>

                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Fiche d'entretien
                                    <small></small>
                                </h2>
                                <div class="col-md-6">
                                    <form onsubmit="rechercher()" class="form-inline" id="cin_search_form"
                                          style="display: inline-block" method="post" action="#">
                                        <input onkeyup="check_key(event)" type="text" class="form-control"
                                               name="cin_to_fetch" id="cin_to_fetch" placeholder="CIN ..."
                                               required="required">
                                        <input type="submit" value="Rechercher" class="btn btn-warning"
                                               id="submit_find">
                                    </form>
                                </div>
                              
                                <div class="clearfix"></div>
                            </div>
                            <div id="result_content" class="x_content">

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
                Banque Internationale Arabe de la Tunisie
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
<script language="JavaScript">
    $(document).ready(function () {
        $('#submit_find').click(function (e) {
            e.preventDefault();
            var formData = {
                'cin_to_fetch': $('input[name=cin_to_fetch]').val()
            };
            $.ajax({
                type: 'POST',
                url: 'find_cv.php',
                data: formData
            }).done(function (data) {
                $('#result_content').html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>