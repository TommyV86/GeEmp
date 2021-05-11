<?php
//4
include_once("model/Employe.php");


class EmployeDAO extends Employe
{
    function serachByNoemp(int $noemp): Employe
    {
        include_once("dao/Common.php");
        
        $res = $conn->query("SELECT * FROM emp2 WHERE noemp = " . $noemp . ";");
        $data = $res->fetch_all(MYSQLI_ASSOC);
        $employe = (new Employe())->setNoemp($data[0]["noemp"])->setNom($data[0]["nom"]);
        $res->free();
        $conn->close();
        return $employe;
    }
}