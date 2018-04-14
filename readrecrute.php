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
$getCV = $pdo->prepare("SELECT * FROM rhemploye where cin = ".$cin);
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
   // if($cv['valide'] == 1) Header("Location:fichentretien.php?cin=".$cin);
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
                            <h3>Curriculum vitae</h3>
                        </div>

                  </div>
                  <div class="clearfix"></div>

                  <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="x_panel">
                            <div class="x_title">
                                <h2>Consulter les infos
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
                                       
                                            
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>CIN</span>
                                                    <p class='form-control'><?php echo"".$_GET['cin']; ?></p>
                                                </div>
                                            

                                            
                                                <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Nom du candidat</span>
                                                    <p class='form-control'><?php echo"".$cv['nomp']; ?></p>
                                                </div>
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Age</span>
                                                    <p class='form-control'><?php echo"".$cv['age']; ?></p>
                                                </div>
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Nationalité</span>
                                                    <p class='form-control'><?php echo"".$cv['nationalite']; ?></p>
                                                </div>
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Etat civil</span>
                                                    <p class='form-control'><?php echo"".$cv['etatc']; ?></p>
                                                </div>
												
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Adresse</span>
                                                    <p class='form-control'><?php echo"".$cv['adresse']; ?></p>
                                                </div>
												
												
												
												
												
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Teléphone</span>
                                                    <p class='form-control'><?php echo"".$cv['telephone']; ?></p>
                                                </div>
												
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>E-mail</span>
                                                    <p class='form-control'><?php echo"".$cv['email']; ?></p>
                                                </div>
												
												
												 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Diplômes et formations</span>
                                                    <p class='form-control'><?php echo"".$cv['diplome']; ?></p>
                                                </div>
                                            
											
											
											 <div class='col-md-6 col-sm-6 col-xs-12'>
													<span>Expériences proffessionnelles</span>
                                                    <p class='form-control'><?php echo"".$cv['experience']; ?></p>
                                                </div>
                                            

                                      
                                            <div class='form-group'>
                                                <div class='col-md-6 col-md-offset-7'>
                                                  <!--<input type='submit' value="Valider" class='btn btn-warning'> --> 
													<a href="contacts.php" class='btn btn-warning' > Retour </a>
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