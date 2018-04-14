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
	<meta charset="UTF-8">
    <title>BIAT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <style type="text/css">
        .wrapper{
            width: 650px;
            margin: 0 auto;
        }
        .page-header h2{
            margin-top: 0;
        }
        table tr td:last-child a{
            margin-right: 15px;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>

  

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
                        <h3>Gestion des Entretiens</h3>
                    </div>
                </div>
				 
        <div class="container-fluid">
		<div class="clearfix"></div>
            <div class="row">
			
                        <div class="x_panel">
                            <div class="x_title">
               
                    <div class="page-header clearfix">
					 <h2 class="pull-left">Entretiens</h2>
                        <a href="fichentretien.php" class="btn btn-warning pull-right">Ajouter un entretien</a>
                    </div>
                    <?php
                    // Include config file
                    require_once 'connnexion.php';
                    
                    // Attempt select query execution
                    $sql = "SELECT * FROM rhemploye where valide = 1";
                    if($result = $pdo->query($sql)){
                        if($result->rowCount() > 0){
                            echo "<table class='table table-bordered table-striped'>";
                                echo "<thead>";
                                    echo "<tr>";
                                        echo "<th>#</th>";
                                        echo "<th>Name</th>";
                                        echo "<th>Entretiens</th>";
                                        
                                    echo "</tr>";
                                echo "</thead>";
                                echo "<tbody>";
                                while($row = $result->fetch()){
                                    echo "<tr>";
                                        echo "<td>" . $row['cin'] . "</td>";
                                        echo "<td>" . $row['nomp'] . "</td>";
										$sql="SELECT * FROM entretient WHERE cin="  .$row['cin']; 
										$result2=$pdo->query($sql);
                                        echo "<td><ul>";
											while ($entretien=$result2->fetch()) {
												
												$check = ($entretien['valid'] == 0) ? "<a style='margin: 0' href='readentretien.php?id=".$entretien['id'] ."'><span style='display:inline-block; margin-left: 5px;' class='glyphicon glyphicon-ok'></span></a>" : "<span style='color:#0f0; display:inline-block; margin-left: 5px;' class='glyphicon glyphicon-ok'></span>";
												echo "<li>".$entretien['createdat'] ;
												echo $check;
												if ($entretien['valid'] == 1) {
													echo '<i class="fa fa-upload"></i>';
												} else {
													echo "<a style='margin: 0;' href='editentretien.php?id=".$entretien['id'] ."'><span style='margin-left: 5px;' class='glyphicon glyphicon-edit'></span></a>";
													echo "<a style='margin: 0;' href='deletentretien.php?id=".$entretien['id'] ."'><span style='margin-left: 5px;' class='glyphicon glyphicon-trash'></span></a>";
												}
												
												echo "</li>";
											}
										echo "</ul></td>";
                                      
                                    echo "</tr>";
                                }
                                echo "</tbody>";                            
                            echo "</table>";
                            // Free result set
                            unset($result);
                        } else{
                            echo "<p class='lead'><em>No records were found.</em></p>";
                        }
                    } else{
                        echo "ERROR: Could not able to execute $sql. " . $mysqli->error;
                    }
                    
                    // Close connection
                    unset($pdo);
                    ?>
                </div>
            </div>        
      
    </div>
							
							
							
							
							
							
							
							
							
							
							
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