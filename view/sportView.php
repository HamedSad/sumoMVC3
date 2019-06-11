<?php $title= $sport['nameSport']; ?>

<?php ob_start(); ?>

        
        <div class="wrapp">
            <hr>
            <h1> <?php echo $sport['nameSport'] ; ?><br></h1>
            <hr>
            <div class="textesport">

                <?php echo "<img src=" . $sport['urlImageSport'] . ">" ; ?><br><br>

                <p><?php echo $sport['titleSport'] ; ?><br><br>
                    Saison : <?php echo $sport['seasonSport'] ; ?><br><br>                     
                    Terrain : <?php echo $sport['nameField']; ?><br><br>             
                    Règles du <?php echo $sport['nameSport'] ; ?> : <?php echo $sport['descriptionSport'] ; ?><br></p>
            
                <p>Equipement : </p>
                    <div class="list">
                    <?php               
                    while($equipment = $equipments->fetch()){
                        echo "<div class='equipment'>";
                        
                            echo "<img src=" . $equipment['urlImageEquipment'] . "><br>";
                            echo "<p>" . $equipment['nameEquipment'] . "</p><br>";  
                        
                        echo "</div>";
                    }
                    ?>
                    </div>  
                
                
                
                
                


                <?php 
                    $result = ($sport['idSport']*2)+1;
                    if(($sport['idSport']) < 20){
                        echo 'Prix article unitaire : ' . $sport['idSport'] . '€' . ' X 3  = ' . $sport['idSport']*3 ;
                    }
                    else{
                        echo 'Prix article unitaire : ' . $sport['idSport'] . '€' . ' X 3  = ' . $sport['idSport']*5 ;
                    }
    echo '<br>resultat' .$result;
                ?>
                
                
                
                
                

                
            </div>
            
            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
            
            
        </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>