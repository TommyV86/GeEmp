<?php
//2
include_once(__DIR__ . "/Serv/Serv.php");

// Controller

if ($_POST) {
    $employeService = new EmployeService();
    $data = $employeService->serachByNoemp($_POST['noemp']);

    print_r($data);
} else {

?>
    <form action="" method="POST">
        <label for="noemp">Saisissez votre référence :</label>
        <input type="text" name="noemp">
        <input type="submit" value="Search">
    </form>
<?php
}


?>