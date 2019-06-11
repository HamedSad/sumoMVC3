<?php $title= 'Ajouter un sport'; 
require 'database.php'?>

<?php ob_start(); ?>

                  <hr>
                  <h1>Ajouter un sport</h1>
                
                  <a href='../index.php?action=listFields'>Terrains</a>             
                  <a href="../index.php?action=listSports"> Sports </a>
                
                  <hr>
                
                  <!--   Formulaire -->
                
                
                <div class="formAddSport">
                                   
                    <form action="../index.php?action=addSport&amp ?>" method="post">
                        <div>
                            <label for="nameSport">Nom du sport</label><br>
                            <input type="text" id="nameSport" name="nameSport"/><br><br />
                        </div>
                        
                        <div>
                            <label for="titleSport">Brève desciption</label><br>
                            <input id="titleSport" name="titleSport"/><br><br>
                        </div>
                        
                        <div>
                            <label for="seasonSport">Saison :</label><br>
                            <input id="seasonSport" name="seasonSport"/><br><br>
                        </div>
                        
                        <?php
                    
                    $db = Database::connect();
                    echo "<div>";
                        echo '<label for="idField">Terrain</label><br>
                            <select id="idField" name="idField">';
                
                            foreach($db->query('SELECT * FROM field') as $row){
                                echo "<option value = " .  $row['idField'] . ">" . $row['nameField'] . "</option>";
                        
                        }
                    Database::disconnect();
                        echo '</select>';
                    echo "</div>";
                    ?>
                         <br>   
                         <br>   
                        
                        <div>
                            <label for="descriptionSport">Règles du sport</label><br />
                            <textarea id="descriptionSport" name="descriptionSport"></textarea><br /><br />
                        </div>
                        
                        <div>
                            <label for="urlImageSport">Url Image Sport</label><br />
                            <input type="text" id="urlImageSport" name="urlImageSport" /><br /><br />
                        </div>
                        
                        <div>
                            <input type="submit" />
                        </div>
                    </form>  
            
                </div>
            
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>