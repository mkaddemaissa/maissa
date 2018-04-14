<?php


try{
    $pdo = new PDO("mysql:host=localhost;dbname=rhbiat", "root", "");
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
    die("ERROR: Could not connect. " . $e->getMessage());
}

try{
    $cin = $_POST["cin_to_fetch"];
    $getCV = $pdo->prepare("SELECT * FROM rhemploye where cin = ".$cin);
    $getCV->execute();
    $result = $getCV->fetchAll();
    if(count($result) == 1){
        foreach ($result as $cv){
            if($cv['valide'] == 0){
                echo "<div style='margin:auto'><h3>Ce CV n'est pas encore validé.</h3></div>";
            }
            else
                echo"<span class='section'>Besoin en dotation</span>
<div class='row'>
    <div class='col-md-2'>
        <div class='form-group' style='max-width:100%;'>
            <img src='".$cv['photo']."' style='max-width:100%;' style='border: solid 5px darkgrey'>
        </div>
    </div>
    <div class='col-md-10'>
        <form method='post' action='insert_entretien.php' class='form-horizontal form-label-left'>
            <input type='text' value='".$_POST["cin_to_fetch"]."' hidden name='cin'>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nom'>Nom du candidat: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input id='nom' value='".$cv['nomp']."' class='form-control col-md-7 col-xs-12' data-validate-length-range='6' data-validate-words='2' name='nomp' placeholder='' required='required' type='text'>
                </div>
            </div>

            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='age'>Age: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input type='number' value='".$cv['age']."' id='age' name='age' required='required' class='form-control col-md-7 col-xs-12'>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='nationalite'>Nationalité:
                    <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input type='text' value='".$cv['nationalite']."' id='nationalite' name='nationalite' class='form-control col-md-7 col-xs-12'>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='etatc'>Etat civil:
                    <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input type='text' value='".$cv['etatc']."' id='etatc' name='etatc' required='required' placeholder='' class='form-control col-md-7 col-xs-12'>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='adresse'>Adresse:
                    <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input id='adresse' value='".$cv['adresse']."' type='textarea' name='adresse' data-validate-length-range='5,20' class='optional form-control col-md-7 col-xs-12'>
                </div>
            </div>
            <div class='item form-group'>
                <label for='téléphone' class='control-label col-md-3'>Teléphone:</label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input id='telephone' value='".$cv['telephone']."' type='number' name='telephone' data-validate-length='6,8' class='form-control col-md-7 col-xs-12' required='required'>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='email'>Email <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <input type='email' value='".$cv['email']."' id='email' name='email' required='required' class='form-control col-md-7 col-xs-12'>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='diplome'>Diplômes et formations: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                    <textarea id='diplome' required='required' name='diplome' class='form-control col-md-7 col-xs-12'>".$cv['diplome']."</textarea>
                </div>
            </div>


            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='experience'>Expériences
                    professionnelles: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                            <textarea id='experience' required='required' name='experience'
                                                      class='form-control col-md-7 col-xs-12'>".$cv['experience']."</textarea>
                </div>
            </div>
			
            <span class='section'>Avis RH</span>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='textarea'>
                    Points forts: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='textarea' required='required' name='pfort'
                                                              class='form-control col-md-7 col-xs-12'></textarea>
                </div>
            </div>
			 <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='textarea'>Points
                    d'effort: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='textarea' required='required' name='pfaible'
                                                              class='form-control col-md-7 col-xs-12'></textarea>
                </div>
            </div>
			 <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='textarea'>Appréciation
                    métier: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='textarea' required='required' name='appmetier'
                                                              class='form-control col-md-7 col-xs-12'></textarea>
                </div>
            </div>
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='textarea'>Avis
                    RH: <span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                                    <textarea id='textarea' required='required' name='avisrh'
                                                              class='form-control col-md-7 col-xs-12'></textarea>
                </div>
            </div>
            <div class='x_title'>
                <h2>Avis RH:</h2>
            
                <div class='clearfix'></div>
            </div>
           
            <div class='item form-group'>
                <label class='control-label col-md-3 col-sm-3 col-xs-12' for='textarea'>Décision
                    de la direction générale:<span class='required'>*</span>
                </label>
                <div class='col-md-6 col-sm-6 col-xs-12'>
                                            <textarea id='textarea' required='required' name='ddg'
                                                      class='form-control col-md-7 col-xs-12'></textarea>
                </div>
            </div>
            <div class='form-group'>
                <div class='col-md-6 col-md-offset-7'>
                    <button id='send' type='submit' class='btn btn-warning'>Valider</button>
                    <button type='button' class='btn btn-dark'>Imprimer</button>
                    <button type='button' class='btn btn-warning'>Annuler</button>
                </div>
            </div>
        </form>
    </div>
</div>";
        }
    }
    else{
        echo"<div style='margin:auto'><h3>Aucun CV n'appartient à cette carte d'identité.</h3></div>";
    }
} catch(PDOException $e){
    die("ERROR: Could not able to execute $sql. " . $e->getMessage());
}

// Close connection
unset($pdo);
?>