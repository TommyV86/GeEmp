<?php
//fichier inutile 
include_once('aff_commun.php');

function afficherTableau(){
    afficherHeadHtml(__DIR__ . "/../css/style.css");
?>

<body>
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
    </table>
</body>


<?php
}
?>