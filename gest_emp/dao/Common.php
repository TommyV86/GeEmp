<?php

class Common
{
    protected function connect() : mysqli
    {
        $conn = new mysqli("127.0.0.1", "root", "", "gest_emp");
        if($conn->error){
            $conn = "error connection".$conn->error;
        }
        return $conn;
    }
    
}