<?php

include_once(__DIR__.'/../Serv/EmployeService.php');
include_once(__DIR__.'/../view/aff_commun.php');


/* HOMEPAGE */
if(empty($_GET)){

    include_once(__DIR__.'/../view/aff_tableau.php');
    $empService = new EmployeService();
    $arr_emp = $empService->srchEmp();
    $content = aff_tableau2($arr_emp);

/*DETAILS*/
} elseif($_GET['details'] != ""){
    
    include_once(__DIR__.'/../view/aff_emp.php');
    $empService = new EmployeService();
    $employee = $empService->searchByNoemp($_GET['details']);
    $content = aff_details($employee);
}

/* FINAL DISPLAY PAGE */
afficherHeadHtml(__DIR__.'/css/style.css');
echo $content;
affFooterHtml();