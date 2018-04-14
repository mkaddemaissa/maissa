<?php
session_start();
require 'connnexion.php';
$getCV = $pdo->prepare("SELECT * FROM entretient");
$getCV->execute();
$result = $getCV->fetchAll();
require 'check_session.php';
check_session(0);

?>
<?php
require_once 'connnexion.php';
$id = $_GET["id"];
$getCV = $pdo->prepare("SELECT * FROM entretient where id = ".$id);
$getCV->execute();
$result = $getCV->fetchAll();
$cv = $result[0];
// if(count($result) == 0){
    // Header('Location:datagreed.php');
// }
// else{
    // foreach ($result as $employee) {
        // $cv = $employee;
    // }
    // if($cv['valid'] == 1) Header("Location:fichentretien.php?cin=".$cin);
// }
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
                               
                                <div class="clearfix"></div>
                            </div>
                            <div id="result_content" class="x_content">
                                <span class='section'>Avis Ressources Humaines</span>
                                <div class='row'>
                                   
                                    <div class='col-md-10'>
                                  
                                        <form action="validate_entretien.php" method="post" class='form-horizontal form-label-left'>
											<input type="hidden" name="id" value='<?php echo"".$cv['id']; ?>' class='form-control col-md-7 col-xs-12'>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nom'>CIN: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input id='cin' name="cin" value='<?php echo"".$cv['cin']; ?>' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>

                                           

                                         
											 <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='avisrh'>
                                                    Avis RH: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='avisrh' required='required' name='avisrh'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['avisrh']; ?></textarea>
                                                </div>
                                            </div>
											 <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='pfort'>
                                                    point fort: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='pfort' required='required' name='pfort'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['pfort']; ?></textarea>
                                                </div>
                                            </div>
											 <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='pfaible'>
                                                   Point d'effort: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='pfaible' required='required' name='pfaible'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['pfaible']; ?></textarea>
                                                </div>
                                            </div>
											 <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='ddg'>Décision direction générale
                                                   : <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='ddg' required='required' name='ddg'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['ddg']; ?></textarea>
                                                </div>
                                            </div>
											 <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='createdat'>Date de l'entretient
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='createdat' required='required' name='createdat'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['createdat']; ?></textarea>
                                                </div>
                                            </div>
                                            <div class='form-group'>
                                                <div class='col-md-6 col-md-offset-7'>
                                                    <input type='submit' value="Valider" class='btn btn-warning'>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
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

</body>
</html>