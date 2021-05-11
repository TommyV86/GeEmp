<?php

function check()
{
    
    if($_POST['register'] == "register"){ 
        $userName = $_POST['username'];
        $mdp = $_POST['mdp'];
        
        if(empty($userName) || empty($mdp)){
            header("Location: ../registerPage.php");
        } else if(!preg_match("#^[a-zA-Z0-9]*$#", $userName)){
            header("Location: ../registerPage.php");
        } else {
            $hashMdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);
            if($conn->connect_error){
                die("connection failed :".$conn->connect_error);
            } else { 
                $query = "INSERT INTO users VALUES('', '".$_POST['username']."', '".$_POST['email']."', '".$hashMdp."', '".$_POST['rank']."')";
                $result = $conn->query($query);
                if($conn->error){
                    echo "error :".$conn->error;
                } else { 
                    header("Location: ../loginPage.php");
                }
            }
        }
    }
}