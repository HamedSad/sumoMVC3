<?php

function getSports(){
    
    $db = dbConnect();

    $req = $db->query('SELECT * FROM sports ORDER BY sports.idSport DESC');
    
    return $req;
}


function getOne($idSport){
    
    $db = dbConnect();
    
    $req = $db->prepare('SELECT sports.idSport, sports.nameSport, sports.titleSport, sports.seasonSport, sports.urlImageSport, sports.descriptionSport, equipment.idEquipment, equipment.nameEquipment, equipment.urlImageEquipment, field.idField, field.nameField 
    FROM sports 
    LEFT JOIN equipment
    ON sports.idSport = equipment.idSport
    LEFT JOIN field
    ON sports.idField = field.idField
    WHERE sports.idSport = ?');
    $req->execute(array($idSport));
    $sport = $req->fetch();
    
    return $sport;
}

function postSport($nameSport, $titleSport, $descriptionSport, $idField, $seasonSport, $urlImageSport){
    $db = dbConnect();
    $newSport = $db->prepare('INSERT INTO sports (nameSport, titleSport, descriptionSport, seasonSport, idField, urlImageSport) VALUES (?, ?, ?, ?, ?, ?)');
    
    $lines = $newSport->execute(array($nameSport, $titleSport, $descriptionSport, $idField, $seasonSport, $urlImageSport));
        
    return $lines;
    
}

function getFields(){
    $db = dbConnect();
    $all = $db->query('SELECT idField, nameField, dimensionsField, urlImageField FROM field ORDER BY nameField ASC');
    return $all;
}

function getOneField($idField){
    $db = dbConnect();
    
    $place = $db->prepare('SELECT * FROM field WHERE idField = ?');
    $place->execute(array($idField));
    $field = $place->fetch();
    
    return $field;
}

function getEquipments($idSport){
    $db = dbConnect();
    
    $equipment = $db->prepare('SELECT * FROM equipment WHERE idSport = ?');
    $equipment->execute(array($idSport));
    
    return $equipment;
}

function delete($idSport){
    $db = dbConnect();
    
    $del = $db->prepare('DELETE FROM sports WHERE idSport = ?');
    $del->execute(array($idSport));
    return $del;
}


function dbConnect(){
    
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=sumo;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
    
    
}