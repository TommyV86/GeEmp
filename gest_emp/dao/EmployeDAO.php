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
        $employe = (new Employe())->setNoemp($data[0]["noemp"])->setNom($data[0]["nom"]);
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

        $conn->close();

        return $stock;
    }
}