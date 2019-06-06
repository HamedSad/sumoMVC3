<?php

require('model/model.php');

function listSports(){
    $sports = getSports();
    require('view/listSportsView.php');
}

function sport(){
    
    $sport = getOne($_GET['idSport']);
    $equipments = getEquipments($_GET['idSport']);
    
    require('view/sportView.php');
}

function addSport($nameSport, $titleSport, $seasonSport, $idField, $descriptionSport, $urlImageSport){
    
    $lines = postSport($nameSport, $titleSport, $descriptionSport, $seasonSport, $idField, $urlImageSport);
    
    if ($lines === false){
        die('erreur addSport');
    }
    else {
        header('Location: index.php?');
    }
}

function listFieldsForm(){
    $all = getFields();
    require('view/listSportsView.php');
}

function listFields(){
    $fields = getFields();
    require('view/listFieldsView.php');
}

function field(){
    $field = getOneField($_GET['idField']);   
    require('view/fieldView.php');
}

function suppr(){
    $sup = delete($_GET['idSport']);
    require('view/listSportsView.php');
}