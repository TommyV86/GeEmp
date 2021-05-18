<?php
//1
include_once(__DIR__."/../model/Employe.php");
include_once(__DIR__."/Common.php");

class EmployeDAO extends Common
{
    function searchByNoemp(int $noemp): Employe
    {
        
        $conn = $this->connect();
        $res = $conn->query("SELECT * FROM emp2 WHERE noemp = " . $noemp . ";");
        $data = $res->fetch_all(MYSQLI_ASSOC);
        $employe = (new Employe())
            ->setNoemp($data[0]["noemp"])
            ->setNom($data[0]["nom"])
            ->setPrenom($data[0]["prenom"])
            ->setNoserv($data[0]["noserv"])
            ->setSup($data[0]["sup"])
            ->setComm($data[0]["comm"])
            ->setSal($data[0]["sal"])
            ->setEmploi($data[0]["emploi"])
            ->setEmbauche($data[0]["embauche"]);
        
        $res->free();
        $conn->close();
        return $employe;
    }

    // recupération des données des employés, transforme ces données en objet
    function searchEmp() : array
    {
        $conn = $this->connect();
        $res = $conn->query("SELECT * FROM emp2");
        $datas = $res->fetch_all(MYSQLI_ASSOC);

        $stock = [];
        foreach($datas as $emp){
            $employe = new Employe;
            $employe->setNoemp($emp['noemp'])->setNom($emp['nom'])->setPrenom($emp['prenom'])->setEmploi($emp['emploi'])->setSup($emp['sup'])->setEmbauche($emp['embauche'])->setSal($emp['sal'])->setComm($emp['comm'])->setNoserv($emp['noserv']);
            array_push($stock, $employe);
        }

        $res->free();
        $conn->close();

        return $stock;
    }

    function update_emp()
    {
        $conn = $this->connect();

        $postForm =  "noemp = ".$_POST['noemp'].", ";
        $postForm .= "nom = '".$_POST['nom']."', ";
        $postForm .= "prenom = '".$_POST['prenom']."', ";
        $postForm .= "emploi = '".$_POST['emploi']."', ";
        $postForm .= "sup = ".$_POST['sup'].", ";
        $postForm .= "embauche = '".$_POST['embauche']."', ";
        $postForm .= "sal = '".$_POST['sal']."', ";
        $postForm .= "comm = '".$_POST['comm']."', ";
        $postForm .= "noserv = ".$_POST['noserv'];

        $conn->query("UPDATE emp2 SET ".$postForm." WHERE noemp = ".$_POST['noemp']);


        return $conn->error;
    }
}