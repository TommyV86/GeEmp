<?php

include_once(__DIR__.'/../Serv/EmployeService.php');
include_once(__DIR__.'/../view/aff_commun.php');
include_once(__DIR__.'/../view/aff_actions.php');
include_once(__DIR__.'/../dao/Common.php');

session_start();

/* HOMEPAGE */
if(empty($_GET)){
    include_once(__DIR__.'/../view/aff_tableau.php');
    $empService = new EmployeService();
    $arr_emp = $empService->srchEmployees();
    $content = aff_tableau($arr_emp);

/* DETAILS */
} elseif(!empty($_GET['details'])){
    $empService = new EmployeService();
    $employee = $empService->searchByNoempEmp($_GET['details']);
    $content = aff_details($employee);
    
/* MODIFY */
} elseif(!empty($_GET['modify_emp'])){
    $empService = new EmployeService();
    $employee = $empService->searchByNoempEmp($_GET['modify']);
    $content = modify_emp($employee);

} elseif($_POST && isset($_GET['modify_emp']) && $_GET['modify_emp'] == 'process'){
    $empService = new EmployeService();
    $up_err = $empService->update_emp();

    $content = ($up_err) ? $up_err : "Success update !";

/* DELETE */    
} elseif(!empty($_GET['delete_emp'])){
    $empService = new EmployeService();
    $content = $empService->delete_emp($_GET['delete_emp']);

    
/* ADD */
} elseif($_GET['add_emp'] == 'form'){
    $content = add_emp(); 
} elseif($_GET['add_emp'] == 'process'){
    $empService = new EmployeService();
    $content = $empService->add_emp();
}

/* FINAL DISPLAY PAGE */
afficherHeadHtml(__DIR__.'/css/style.css');
echo $content;
affFooterHtml();