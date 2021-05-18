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
    
    public function update_emp()
    {
        $employeDao = new EmployeDAO();
        return $employeDao->update_emp();
    }
}