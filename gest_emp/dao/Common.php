<?php

class Common
{
    public function connect() : mysqli
    {
        $conn = new mysqli("");
        if($conn->error){
            $conn = "error connection".$conn->error;
        }
        return $conn;
    }
    
}
