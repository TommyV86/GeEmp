<?php

include_once(__DIR__.'/../view/aff_commun.php');
include_once(__DIR__.'/../Serv/UserService.php');

?>

<body class="p-3 mb-2 bg-secondary text-white">

    <h1>Register</h1>

    <form action="/Serv/UserService.php" method="POST">

        <input type="text" class="form-control" name="username" value="" placeholder="username"><br>
        <input type="email" class="form-control" name="email" value="" placeholder="email"><br>
        <input type="password" class="form-control" name="mdp" value="" placeholder="mdp"><br>
        <input type="number" class="form-control" name="rang" value="" placeholder="rang"><br>

        <input type="submit" class="btn btn-success" name="register" value="register">

    </form>


</body>

</html>