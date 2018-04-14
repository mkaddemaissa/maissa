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
// Include config file
require_once 'connnexion.php';
 
// Define variables and initialize with empty values
$appmetier = $avisrh =$pfort =$pfaible =$ddg = "";
$appmetier_err = $avisrh_err = $pfort_err =$pfaible_err = $ddg_err = "";
 
// Processing form data when form is submitted
if(isset($_POST["cin"]) && !empty($_POST["cin"])){
    // Get hidden input value
    $cin = $_POST["cin"];
    
    // Validate name
    $input_appmetier = trim($_POST["appmetier"]);
    if(empty($input_name)){
        $appmetier_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["appmetier"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $appmetier_err = 'Please enter a valid name.';
    } else{
        $appmetier = $input_name;
    }
    
    // Validate age
    $input_avisrh= trim($_POST["avisrh"]);
    if(empty($input_avisrh)){
        $avisrh_err = 'Please enter an age.';
    } else{
        $avisrh= $input_avisrh;
    }
	
	
	
	  $input_pfort = trim($_POST["pfort"]);
    if(empty($input_pfort)){
        $pfort_err = 'Please enter a nationalite.';
    } else{
        $pfort = $input_pfort;
    } 
	
	
	  $input_pfaible = trim($_POST["pfaible"]);
    if(empty($input_pfaible)){
        $pfaible_err = 'Please enter an etatc.';
    } else{
        $pfaible = $input_pfaible;
    }
	
	
	  $input_ddg = trim($_POST["ddg"]);
    if(empty($input_ddg)){
        $ddg_err = 'Please enter an addresse.';
    } else{
        $ddg = $input_ddg;
		
		
		
    } 





    
    // Check input errors before inserting in database
    if(empty($appmetier_err) && empty($avisrh_err) && empty($pfort_err) && empty($pfaible_err) && empty($ddg_err)){
        // Prepare an update statement
        $sql = "UPDATE entretient SET appmetier=:appmetier ,avisrh=:avisrh ,pfort=:pfort ,pfaible=:pfaible ,ddg=:ddg  WHERE id=:id";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':appmetier', $param_appmetier);
			$stmt->bindParam(':avisrh', $param_avisrh);
			$stmt->bindParam(':pfot', $param_pfot);
			$stmt->bindParam(':pfaible', $param_pfaible);
			$stmt->bindParam(':ddg', $param_ddg);

            
            // Set parameters
            $param_appmetier = $appmetier;
            $param_avisrh = $avisrh;
            $param_pfort = $pfort;
            $param_pfaible = $pfaible;
			$param_ddg= $ddg;

			
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: tablesentretien.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }
         
        // Close statement
        unset($stmt);
    }
    
    // Close connection
    unset($pdo);
} else{
    // Check existence of id parameter before processing further
    if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
        // Get URL parameter
        $id =  trim($_GET["id"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM entretient WHERE id = :id";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':id', $id);
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $appmetier = $row["appmetier"];
                    $avisrh = $row["avisrh"];
                    $pfort = $row["pfort"];
					$pfaible = $row["pfaible"];
					$ddg = $row["ddg"];
					$cin = $row['cin'];

                } else{
                    // URL doesn't contain valid id. Redirect to error page
					
                    header("location: error.php");
                    exit();
                }
                
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        
        // Close statement
        unset($stmt);
        
        // Close connection
        unset($pdo);
    }  else{
        // URL doesn't contain id parameter. Redirect to error page
		
        header("location: error.php");
        exit();
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


                                <form class="form-horizontal form-label-left" action="updatentretien.php" method="post" novalidate enctype="multipart/form-data">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cin">CIN: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input readonly value=<?php echo "".$cin; ?> type="number" id="cin" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="appmetier"> Appréciation métier: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value="<?php echo "".$appmetier; ?>" id="appmetier" class="form-control col-md-7 col-xs-12" name="appmetier" placeholder="" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="avisrh">Avis RH: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value=<?php echo "".$avisrh; ?> type="text" id="avisrh" name="avisrh" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pfort">Points forts:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value=<?php echo "".$pfort; ?> type="text" id="pfort" name="pfort" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="pfaible">Points faible:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value=<?php echo "".$pfaible; ?> type="text" id="pfaible" name="pfaible" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

									   <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ddg">Décision direction générale:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value=<?php echo "".$ddg; ?> type="text" id="ddg" name="ddg" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>

									 <div class="col-md-6 col-md-offset-8">
                                        <button id="send" type="submit" class="btn btn-warning">Modifier</button>
                                      
                                    </div>
                                </form>
                                    <footer>

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