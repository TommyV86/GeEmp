<?php


function aff_tableau(array $arr){
    $count = count($arr);
?>

    <div class='count'>Counter : <?php echo $count; ?> employees</div>
    <a href="index.php?add_emp=form">Add</a>
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
            <th>actions</th>
        </tr>
<?php

    

    foreach($arr as $emp){
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
            echo "<td>
                    <a href=\"?details=".$emp->getNoemp()."\">Details</a>
                    <a href=\"?modify_emp=".$emp->getNoemp()."\">Modify</a>
                    <a href=\"?delete_emp=".$emp->getNoemp()."\">Delete</a>
                 </td>";
    
        echo "</tr>";
        
    }
?>
    </table>
<?php
}

?>