<?php
//2
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../dao/EmployeDAO.php");

class EmployeService
{

    public function searchByNoemp(int $noemp): Employe
    {

        $employeDao = new EmployeDAO();
        $employe = $employeDao->searchByNoemp($noemp);
        return $employe;
    }

    public function srchEmp() : array
    {
        $employesDao = new EmployeDAO();
        $arr_emp = $employesDao->searchEmp();
        
        return $arr_emp;
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