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
    // $allowed=array("jpg","jpeg","png");
    // $todir="uploads/";
    // if ( !!$_FILES['photo']['tmp_name'] )
    // {
        // $info = explode('.', strtolower( $_FILES['photo']['name']) ); // whats the extension of the file

        // if ( in_array( end($info), $allowed) ) // is this file allowed
        // {
            // if ( move_uploaded_file($_FILES['photo']['tmp_name'], $todir . basename($_FILES['photo']['name'])) )
            // {
                // $path=$todir.$_FILES['photo']['name'];
            // }
        // }
    // }

    $sql = "UPDATE entretient SET appmetier=?, pfort = ?,pfaible = ?,avisrh = ?,ddg = ? where id = ?";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(1, $_REQUEST['appmetier']);
    $stmt->bindParam(2, $_REQUEST['pfort']);
	$stmt->bindParam(3, $_REQUEST['pfaible']);
	$stmt->bindParam(4, $_REQUEST['avisrh']);
	$stmt->bindParam(5, $_REQUEST['ddg']);
	

	$stmt->bindParam(6, $_POST['cin']);
    
    // execute the prepared statement
    $stmt->execute();
   
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);

Header('Location:tablesentretien.php');
?>