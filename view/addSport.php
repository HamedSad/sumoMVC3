<?php $title= 'Ajouter un sport'; ?>

<?php ob_start(); ?>

            <div class="wrapp">
                  <hr>
                  <h1>Ajouter un sport</h1>
                
                  <a href='../index.php?action=listFields'>Terrains</a>             
                  <a href="../index.php?action=listSports"> Sports </a>
                
                  <hr>
                
                  <!--   Formulaire -->
                
                
                <div class="form">
                                   
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
                        
                        <div>
                            <label for="idField">Terrain</label><br>
                            <select id="idField" name="idField">

                                <option value=1>Partout</option>
                                <option value=2>Gymnase</option>
                                <option value=3>Piscine</option>
                                <option value=4>Oval</option>
                                <option value=12>Ring</option>                              
                            </select>
                            
                        </div>
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
                    
                
                
              </div>             
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>