<?php

include_once(__DIR__.'/../Serv/EmployeService.php');
include_once(__DIR__.'/../view/aff_commun.php');
include_once(__DIR__.'/../view/aff_actions.php');
include_once(__DIR__.'/../dao/Common.php');

/* HOMEPAGE */
if(empty($_GET)){
    include_once(__DIR__.'/../view/aff_tableau.php');
    $empService = new EmployeService();
    $arr_emp = $empService->srchEmp();
    $content = aff_tableau2($arr_emp);

/* DETAILS */
} elseif(!empty($_GET['details'])){
    $empService = new EmployeService();
    $employee = $empService->searchByNoemp($_GET['details']);
    $content = aff_details($employee);
    
/* MODIFY */
} elseif(!empty($_GET['modify'])){
    $empService = new EmployeService();
    $employee = $empService->searchByNoemp($_GET['modify']);
    $content = modify_emp($employee);

} elseif($_POST && $_GET['modify_emp'] == 'process'){
    $empService = new EmployeService();
    $up_err = $empService->update_emp();

    $content = ($up_err) ? $up_err : "Success update !";
}

/* FINAL DISPLAY PAGE */
afficherHeadHtml(__DIR__.'/css/style.css');
echo $content;
affFooterHtml();