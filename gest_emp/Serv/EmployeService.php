<?php
//2
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../dao/EmployeDAO.php");

class EmployeService
{

    public function serachByNoemp(int $noemp): Employe
    {

        $employeDao = new EmployeDAO();
        $employe = $employeDao->serachByNoemp($noemp);
        return $employe;
    }

    public function affEmp()
    {
        $employesDao = new EmployeDAO();
        $employes = $employesDao->afficherEmp();
        
        return $employes;
    }
    
    // Devrait Ãªtre dans UserService
    // public function inscription(User $user): void
    // {
    //     $mdpHash = password_hash($user->getPassword(), PASSWORD_DEFAULT);
    //     $user->setPassword($mdpHash);

    //     $userDAO = new UserDAO();
    //     $userDAO->inscription($user);
    // }
}