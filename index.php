<?php
require('controller/controller.php');

    if (isset($_GET['action'])){
        
        if($_GET['action'] == 'listSports'){
            listSports();
            
        }

        elseif($_GET['action'] == 'sport'){
            if(isset($_GET['idSport']) && $_GET['idSport'] > 0){
                sport();
            } else {
                echo 'erreur';
            }

        }  

        elseif($_GET['action'] == 'addSport'){
            if(!empty($_POST['nameSport']) && !empty($_POST['descriptionSport']) && !empty($_POST['titleSport']) && !empty($_POST['seasonSport'])){
                addSport($_POST['nameSport'], $_POST['titleSport'], $_POST['seasonSport'], $_POST['idField'], $_POST['descriptionSport'], $_POST['urlImageSport']);
            }
            else {
                echo 'Les champs ne sont pas tous remplis';
            }
        }

        elseif($_GET['action'] == 'listFields'){
            listFields();
        }
        
        elseif($_GET['action'] == 'field'){
            field();
        }
        
        elseif($_GET['action'] == 'suppr'){
            suppr();
        }
    
}  else  {
    
    echo listSports();
}