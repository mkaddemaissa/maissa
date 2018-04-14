<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    $pdo = new PDO("mysql:host=localhost;dbname=rhbiat", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}
 
// Attempt insert query execution
try{
    // create prepared statement
    $allowed=array("jpg","jpeg","png");
    $todir="uploads/";
    if ( !!$_FILES['photo']['tmp_name'] )
    {
        $info = explode('.', strtolower( $_FILES['photo']['name']) ); // whats the extension of the file

        if ( in_array( end($info), $allowed) ) // is this file allowed
        {
            if ( move_uploaded_file($_FILES['photo']['tmp_name'], $todir . basename($_FILES['photo']['name'])) )
            {
                $path=$todir.$_FILES['photo']['name'];
            }
        }
    }

    $sql = "INSERT INTO rhemploye (cin ,nomp, age,nationalite,etatc,adresse,telephone,email,diplome,experience,photo,created_at) VALUES (:cin, :nomp,:age,:nationalite,:etatc,:adresse,:telephone,:email,:diplome,:experience,:photo,now())";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(':cin', $_REQUEST['cin']);
    $stmt->bindParam(':nomp', $_REQUEST['nomp']);
    $stmt->bindParam(':age', $_REQUEST['age']);
	$stmt->bindParam(':nationalite', $_REQUEST['nationalite']);
	$stmt->bindParam(':etatc', $_REQUEST['etatc']);
	$stmt->bindParam(':adresse', $_REQUEST['adresse']);
	$stmt->bindParam(':telephone', $_REQUEST['telephone']);
	$stmt->bindParam(':email', $_REQUEST['email']);
	$stmt->bindParam(':diplome', $_REQUEST['diplome']);
	$stmt->bindParam(':experience', $_REQUEST['experience']);
    $stmt->bindParam(':photo', $path);
    
    // execute the prepared statement
    $stmt->execute();
    header("location:contacts.php");
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);
?>