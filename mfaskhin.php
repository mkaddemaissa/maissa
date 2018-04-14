 // pour la redirection au fiche entretien si on clique sur le cin dun cv valide 
 else{
    foreach ($result as $employee) {
        $cv = $employee;
    }
    if($cv['valide'] == 1) Header("Location:fichentretien.php?cin=".$cin);
}