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
$nomp = $age = $nationalite=$etatc=$adresse=$telephone=$email=$photo=$diplome=$experience = "";
$nomp_err = $age_err = $nationalite_err =$etatc_err=$adresse_err=$telephone_err=$email_err=$photo_err=$diplome_err=$experience_err= "";
 
// Processing form data when form is submitted
if(isset($_POST["cin"]) && !empty($_POST["cin"])){
    // Get hidden input value
    $cin = $_POST["cin"];
    
    // Validate name
    $input_name = trim($_POST["nomp"]);
    if(empty($input_name)){
        $nomp_err = "Please enter a name.";
    } elseif(!filter_var(trim($_POST["nomp"]), FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z'-.\s ]+$/")))){
        $nomp_err = 'Please enter a valid name.';
    } else{
        $nomp = $input_name;
    }
    
    // Validate age
    $input_age = trim($_POST["age"]);
    if(empty($input_age)){
        $age_err = 'Please enter an age.';     
    } else{
        $age = $input_age;
    }
	
	
	
	  $input_nationalite = trim($_POST["nationalite"]);
    if(empty($input_nationalite)){
        $nationalite_err = 'Please enter a nationalite.';     
    } else{
        $nationalite = $input_nationalite;
    } 
	
	
	  $input_etatc = trim($_POST["etatc"]);
    if(empty($input_etatc)){
        $etatc_err = 'Please enter an etatc.';     
    } else{
        $etatc = $input_etatc;
    }
	
	
	  $input_addresse = trim($_POST["addresse"]);
    if(empty($input_addresse)){
        $addresse_err = 'Please enter an addresse.';     
    } else{
        $addresse = $input_addresse;
		
		
		
    } 
	$input_telephone = trim($_POST["telephone"]);
    if(empty($input_telephone)){
        $telephone_err = 'Please enter a telephone.';     
    } else{
        $telephone = $input_telephone;
    } 



	$input_email = trim($_POST["email"]);
    if(empty($input_email)){
        $email_err = 'Please enter an email.';     
    } else{
        $email = $input_email;
    } 


	$input_diplome = trim($_POST["diplome"]);
    if(empty($input_diplome)){
        $diplome_err = 'Please enter a diplome.';     
    } else{
        $diplome = $input_diplome;
    }
	
	
	  $input_experience = trim($_POST["experience"]);
    if(empty($input_experience)){
        $experience_err = 'Please enter an experience.';     
    } else{
        $experience = $input_experience;
    } 



    
    // Check input errors before inserting in database
    if(empty($nomp_err) && empty($age_err) && empty($nationalite_err) && empty($etatc_err) && empty($adresse_err)&& empty($telephone_err) && empty($email_err)  && empty($diplome_err) && empty($experience_err)){
        // Prepare an update statement
        $sql = "UPDATE rhemploye SET nomp=:nomp,age=:age,nationalite=:nationalite ,etatc=:etatc ,adresse=:adresse ,telephone=:telephone ,email=:email , diplome=:diplome, experience=:experience WHERE cin=:cin";
 
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':nomp', $param_nomp);
			$stmt->bindParam(':age', $param_age);
			$stmt->bindParam(':nationalite', $param_nationalite);
			$stmt->bindParam(':etatc', $param_etatc);
			$stmt->bindParam(':adresse', $param_adresse);
			$stmt->bindParam(':telephone', $param_telephone);
            $stmt->bindParam(':email', $param_email);
            $stmt->bindParam(':diplome', $param_diplome);
            $stmt->bindParam(':experience', $param_experience);
            
            // Set parameters
            $param_nomp = $nomp;
            $param_age = $age;
            $param_nationalite = $nationalite;
            $param_etatc = $etatc;
			$param_adresse= $adresse;
			$param_telephone = $telephone;
			$param_email = $email;
			$param_diplome = $diplome;
			$param_experience = $experience;
			
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                // Records updated successfully. Redirect to landing page
                header("location: datagreed.php");
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
    if(isset($_GET["cin"]) && !empty(trim($_GET["cin"]))){
        // Get URL parameter
        $cin =  trim($_GET["cin"]);
        
        // Prepare a select statement
        $sql = "SELECT * FROM rhemploye WHERE cin = :cin";
        if($stmt = $pdo->prepare($sql)){
            // Bind variables to the prepared statement as parameters
            $stmt->bindParam(':cin', $param_cin);
            
            // Set parameters
            $param_cin = $cin;
            
            // Attempt to execute the prepared statement
            if($stmt->execute()){
                if($stmt->rowCount() == 1){
                    /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                    $row = $stmt->fetch(PDO::FETCH_ASSOC);
                
                    // Retrieve individual field value
                    $nomp = $row["nomp"];
                    $age = $row["age"];
                    $nationalite = $row["nationalite"];
					$etatc = $row["etatc"];
					$adresse = $row["adresse"];
					$telephone = $row["telephone"];
					$email = $row["email"];
					$diplome = $row["diplome"];
					$experience = $row["experience"];
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


                                <form class="form-horizontal form-label-left" action="updatee.php" method="post" novalidate enctype="multipart/form-data">
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="cin">CIN: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value=<?php echo "".$cin; ?> type="number" id="cin" name="cin" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nom">Nom du candidat: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value="<?php echo "".$nomp; ?>" id="nom" class="form-control col-md-7 col-xs-12" name="nomp" placeholder="" required="required" type="text">
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="age">Age: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value=<?php echo "".$age; ?> type="number" id="age" name="age" required="required" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="nationalite">Nationalité:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value=<?php echo "".$nationalite; ?> type="text" id="nationalite" name="nationalite" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="etatc">Etat civil:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input value=<?php echo "".$etatc; ?> type="text" id="etatc" name="etatc" required="required" placeholder="" class="form-control col-md-7 col-xs-12">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="adresse">Adresse:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input id="adresse" value=<?php echo "".$adresse; ?> type="text" name="adresse" data-validate-length-range="5,20" class="optional form-control col-md-7 col-xs-12" <?php echo $adresse; ?>>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label for="téléphone" class="control-label col-md-3">Teléphone:</label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <input  value=<?php echo "".$telephone; ?> id="telephone" type="number" name="telephone" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" required="required">
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="email">Email <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
										
                                            <input type="email" id="email" name="email" value=<?php echo "".$email; ?> required="required" class="form-control col-md-7 col-xs-12"> </input>
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
                                            <textarea id="diplome" required="required" name="diplome" class="form-control col-md-7 col-xs-12"><?php echo $diplome; ?></textarea>
                                        </div>
                                    </div>


                                    <div class="item form-group">
                                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="experience">Expériences
                                            professionnelles: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 col-xs-12">
                                            <textarea id="experience" required="required" name="experience"
                                                      class="form-control col-md-7 col-xs-12"><?php echo $experience; ?></textarea>
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