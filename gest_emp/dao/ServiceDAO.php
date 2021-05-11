<?php

include_once('model/Service.php');

class ServiceDAO extends Service
{
    function searchByNoserv(int $noserv) : Service
    {
        include_once('dao/Common.php');
        $res = $conn->query("SELECT * FROM services WHERE noserv = '.$noserv.';");
        $data = $res->fetch_all(MYSQLI_ASSOC);
        $Serv = (new Service())->setNoserv($data[0]['noserv']);
        $res->free();
        $conn->close();

        return $Serv;
    }
}