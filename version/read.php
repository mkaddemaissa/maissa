

<?php
session_start();
require 'connnexion.php';
$getCV = $pdo->prepare("SELECT * FROM rhemploye");
$getCV->execute();
$result = $getCV->fetchAll();
require 'check_session.php';
check_session(0);

?>
<?php
require_once 'connnexion.php';
$cin = $_GET["cin"];
$getCV = $pdo->prepare("SELECT * FROM rhemploye where valide = 0 and cin = ".$cin);
$getCV->execute();
$result = $getCV->fetchAll();
$cv = null;
if(count($result) == 0){
    Header('Location:datagreed.php');
}
else{
    foreach ($result as $employee) {
        $cv = $employee;
    }
}
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
                                <span class='section'>Besoin en dotation</span>
                                <div class='row'>
                                    <div class='col-md-2'>
                                        <div class='form-group' style='max-width:100%;'>
                                            <img src=<?php echo "".$cv['photo']; ?> style='max-width:100%;' style='border: solid 5px darkgrey'>
                                        </div>
                                    </div>
                                    <div class='col-md-10'>
                                        <form action="validate.php" method="post" class='form-horizontal form-label-left'>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nom'>CIN: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input id='cin' name="cin" value='<?php echo"".$_GET['cin']; ?>' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>

                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nom'>Nom du candidat: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input id='nom' value='<?php echo"".$cv['nomp']; ?>' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>

                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='age'>Age: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input type='number' value='<?php echo"".$cv['age']; ?>' id='age' name='age' required='required' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nationalite'>Nationalité:
                                                    <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input type='text' value='<?php echo"".$cv['nationalite']; ?>' id='nationalite' name='nationalite' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='etatc'>Etat civil:
                                                    <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input type='text' value='<?php echo"".$cv['etatc']; ?>' id='etatc' name='etatc' required='required' placeholder='' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='adresse'>Adresse:
                                                    <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input id='adresse' value='<?php echo"".$cv['adresse']; ?>' type='textarea' name='adresse' data-validate-length-range='5,20' class='optional form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label for='téléphone' class='control-label col-md-3'>Teléphone:</label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input id='telephone' value='<?php echo"".$cv['telephone']; ?>' type='number' name='telephone' data-validate-length='6,8' class='form-control col-md-7 col-xs-12' required='required'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='email'>Email <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <input type='email' value='<?php echo"".$cv['email']; ?>' id='email' name='email' required='required' class='form-control col-md-7 col-xs-12'>
                                                </div>
                                            </div>
                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='diplome'>Diplômes et formations: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='diplome' required='required' name='diplome' class='form-control col-md-7 col-xs-12'><?php echo $cv['diplome']; ?></textarea>
                                                </div>
                                            </div>


                                            <div class='item form-group'>
                                                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='experience'>Expériences
                                                    professionnelles: <span class='required'>*</span>
                                                </label>
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='experience' required='required' name='experience'
                                                    class='form-control col-md-7 col-xs-12'><?php echo $cv['experience']; ?></textarea>
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