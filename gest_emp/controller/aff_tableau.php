<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    //3
    include_once(__DIR__.'/../Serv/EmployeService.php');
    include_once(__DIR__.'/../view/aff_tab.php');
    include_once(__DIR__.'/../Serv/UserService.php');

    if($_POST['username'] && $_POST['mdp']){
        session_start();
        echo "Welcome ".$_SESSION['user']."!";
    }
    

    $empService = new EmployeService();
    $tabEmp = $empService->affEmp();
        
    ?>



    <table>
        <tr>
            <th>noemp</th>
            <th>nom</th>
            <th>prenom</th>
            <th>emploi</th>
            <th>sup</th>
            <th>embauche</th>
            <th>comm</th>
            <th>sal</th>
            <th>noserv</th>
        </tr>

        <?php 

        foreach($tabEmp as $emp){
            echo "<tr>";

                echo "<td>".$emp->getNoemp()."</td>";
                echo "<td>".$emp->getNom()."</td>";
                echo "<td>".$emp->getPrenom()."</td>";
                echo "<td>".$emp->getEmploi()."</td>";
                echo "<td>".$emp->getSup()."</td>";
                echo "<td>".$emp->getEmbauche()."</td>";
                echo "<td>".$emp->getComm()."</td>";
                echo "<td>".$emp->getSal()."</td>";
                echo "<td>".$emp->getNoserv()."</td>";

            echo "</tr>";
            
        }


        ?>

    </table>

</body>
</html>



