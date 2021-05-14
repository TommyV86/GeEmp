<?php

include_once(__DIR__.'/../dao/Common.php');
include_once(__DIR__.'/../model/User.php');
// le check dans le controller et la connection mysql dans le dao
class UserDAO extends Common
{
    public function register()
    {
        $conn = $this->connect();
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
                    $conn->query($query);
                    if($conn->error){
                        echo "error :".$conn->error;
                    } else { 
                        header("Location: ../loginPage.php");
                    }
                }
            }
        }
    }

    public function login()
    {
        session_start();

        $_POST['username'];
        $_POST['mdp'];

        $conn = $this->connect();
        if($conn->connect_error){
            die("connection failed : ".$conn->connect_error);
        } else{
            $query = "SELECT * FROM users WHERE username = '".$_POST['username']."'";
            $statement = $conn->query($query);

            if($statement->num_rows > 0){
                $row = $statement->fetch_array();

                if(password_verify($_POST['mdp'], $row['hashh'])){
                    $_SESSION['user'] = array(
                        'id'        =>     $row['id'],
                        'username'  =>     $row['username'],
                        'email'     =>     $row['email'],
                        'rank'      =>     $row['rank']
                    );
                    header("Location: aff_tableau.php");
                } else {
                    echo "wrong password";
                }
            } else {
                echo "username doesn't exist";
            }
        }  
    }
}