<?php

function aff_details(Employe $employee){
    return 
        "noemp : ".$employee->getNoemp()." <br>".
        "nom : ".$employee->getNom();
}