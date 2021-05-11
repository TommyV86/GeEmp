<?php

include_once('model/Users.php');
// le check dans le controller et la connection mysql dans le dao
class UserDAO extends Users
{
    public function inscription()
    {
        include_once("dao/Common.php");
        session_start();
        if($_POST['register'] == "register"){ 
            $userName = $_POST['username'];
            $mdp = $_POST['mdp'];
            
            if(empty($userName) || empty($mdp)){
                header("Location: ../registerPage.php");
            } else if(!preg_match("#^[a-zA-Z0-9]*$#", $userName)){
                header("Location: ../registerPage.php");
            } else {
                $hashMdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
                $conn;
                if($DB->connect_error){
                    die("connection failed :".$DB->connect_error);
                } else { 
                    $query = "INSERT INTO users VALUES('', '".$_POST['username']."', '".$_POST['email']."', '".$hashMdp."', '".$_POST['rank']."')";
                    $result = $DB->query($query);
                    if($DB->error){
                        echo "error :".$DB->error;
                    } else { 
                        header("Location: ../loginPage.php");
                    }
                }
            }
        }
    }
}