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

    $sql = "UPDATE rhemploye SET nomp=?, age = ?,nationalite = ?,etatc = ?,adresse = ?,telephone = ?,email = ?,diplome = ?,experience = ?,photo = ?,created_at = now() where cin = ?";
    $stmt = $pdo->prepare($sql);
    
    // bind parameters to statement
    $stmt->bindParam(1, $_REQUEST['nomp']);
    $stmt->bindParam(2, $_REQUEST['age']);
	$stmt->bindParam(3, $_REQUEST['nationalite']);
	$stmt->bindParam(4, $_REQUEST['etatc']);
	$stmt->bindParam(5, $_REQUEST['adresse']);
	$stmt->bindParam(6, $_REQUEST['telephone']);
	$stmt->bindParam(7, $_REQUEST['email']);
	$stmt->bindParam(8, $_REQUEST['diplome']);
	$stmt->bindParam(9, $_REQUEST['experience']);
    $stmt->bindParam(10, $path);
	$stmt->bindParam(11, $_POST['cin']);
    
    // execute the prepared statement
    $stmt->execute();
    echo "Records inserted successfully.";
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}
 
// Close connection
unset($pdo);

Header('Location:datagreed.php');
?>