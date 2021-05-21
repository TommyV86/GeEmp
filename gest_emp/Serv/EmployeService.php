<?php
//2
include_once(__DIR__ . "/../model/Employe.php");
include_once(__DIR__ . "/../dao/EmployeDAO.php");

class EmployeService
{

    public function searchByNoempEmp(int $noemp): Employe
    {

        $employeDao = new EmployeDAO();
        $employe = $employeDao->searchByNoempEmp($noemp);
        return $employe;
    }

    public function srchEmployees() : array
    {
        $employesDao = new EmployeDAO();
        $arr_emp = $employesDao->searchEmployees();
        
        return $arr_emp;
    }
    
    public function update_emp()
    {
        $employeDao = new EmployeDAO();
        return $employeDao->update_emp();
    }

    public function delete_emp(int $noemp)
    {
        $employeDao = new EmployeDAO();
        return $employeDao->delete_emp($noemp);
    }

    public function add_emp()
    {
        $employeDao = new EmployeDAO();
        return $employeDao->add_employee();
    }
}