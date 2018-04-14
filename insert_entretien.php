<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=rhbiat", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
try{
    // create prepared statement
   

	$sql = "INSERT INTO entretient (cin ,appmetier, avisrh ,pfort,pfaible,ddg ,  createdat ) VALUES (:cin, :appmetier , :avisrh , :pfort , :pfaible , :ddg , now())";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':cin', $_REQUEST['cin']);
    $stmt->bindParam(':appmetier', $_REQUEST['appmetier']);
    $stmt->bindParam(':avisrh', $_REQUEST['avisrh']);
	$stmt->bindParam(':pfort', $_REQUEST['pfort']);
	$stmt->bindParam(':pfaible', $_REQUEST['pfaible']);

	$stmt->bindParam(':ddg', $_REQUEST['ddg']);

    
    // execute the prepared statement
    $stmt->execute();
    header("location:contacts.php");
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>