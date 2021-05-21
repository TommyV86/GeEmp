<?php

include_once('aff_commun.php');

function aff_details(Employe $employee){
    return 
        "noemp : ".$employee->getNoemp()." <br>".
        "nom : ".$employee->getNom();
}

function modify_emp(Employe $employee){
    
?>
    <form method="POST" action="index.php?modify_emp=process">

        <input type="number" class="form-control" name="noemp" placeholder="votre noemp" value="<?php echo $employee->getNoemp(); ?>">
        <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom" value="<?php echo $employee->getNom(); ?>">  
        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom" value="<?php echo $employee->getPrenom(); ?>">
        <input type="text" class="form-control" name="emploi" placeholder="Entrez votre emploi"value="<?php echo $employee->getEmploi(); ?>">
        <input type="text" class="form-control" name="sup" placeholder="Entrez votre supérieur"value="<?php echo $employee->getSup(); ?>">
        <input type="date" class="form-control" name="embauche" placeholder="Entrez votre date d'entrée"value="<?php echo $employee->getEmbauche(); ?>">
        <input type="number" class="form-control" name="sal" placeholder="Entrez votre salaire"value="<?php echo $employee->getSal(); ?>">
        <input type="number" class="form-control" name="comm" placeholder="Entrez votre comm"value="<?php echo $employee->getComm(); ?>">
        <input type="number" class="form-control" name="noserv" placeholder="Entrez votre numéro de service"value="<?php echo $employee->getNoserv(); ?>">

        <input type="submit" class="btn btn-success" value="Modifier">
    </form>

<?php
}

function add_emp(){
?>
    <form  method="POST" action="index.php?add_emp=process">

        <input type="number" class="form-control" name="noemp" placeholder="Entrez votre numéro d'employé"> 
        <input type="text" class="form-control" name="nom" placeholder="Entrez votre nom">
        <input type="text" class="form-control" name="prenom" placeholder="Entrez votre prénom">
        <input type="text" class="form-control" name="emploi" placeholder="Entrez votre emploi">
        <input type="text" class="form-control" name="sup" placeholder="Entrez votre supérieur">
        <input type="date" class="form-control" name="embauche" placeholder="Entrez votre date d'entrée">
        <input type="number" class="form-control" name="sal" placeholder="Entrez votre salaire">
        <input type="number" class="form-control" name="comm" placeholder="Entrez votre comm">
        <input type="number" class="form-control" name="noserv" placeholder="Entrez votre numéro de service">
        <input type="submit" class="btn btn-success" name="valider" value="valider">
    </form>

<?php
}
?>