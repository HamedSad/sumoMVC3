<?php $title= 'Accueil'; ?>

<?php ob_start(); ?>

            <div class="wrapp">
                  <hr>
                  <h1>Sports</h1>
                
                  <a href='index.php?action=listFields'>Terrains</a> 
                
                  <hr>
                
                    <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Sport</th>
                            <th>Description</th>
                            <th>Actions</th>
                        </tr>                   
                    </thead>
                    
                        <tbody>
                       
                        
                        <!-- Tous les sports  -->
                <?php
                 
                    
                    while($data = $sports->fetch()){
                    
                        echo'<tr>';

                        echo '<td><img src=' . $data['urlImageSport'] . ">" .'</td>';
                        echo '<td>' . $data['nameSport'] . '</td>';
                        echo '<td>' . $data['titleSport'] . '</td>';
                        
                        
                        echo '<td>' . '<a href="index.php?action=sport&amp;idSport=' . $data['idSport'] . ' "><span class="glyphicon glyphicon-eye-open"></span> Voir </a>';
                        
                        echo '<a class="btn btn-primary" href="update.php?idSport='. $data['idSport'] . ' "><span class="glyphicon glyphicon-pencil"></span> Modifier </a>';
                        
                        echo '<a class="btn btn-danger" href="delete.php?idSport=' . $data['idSport'] . ' "><span class="glyphicon glyphicon-remove"></span> Supprimer </a>';
                        
                        
                        echo '</tr>';
                    
                        }
                        //$data->closeCursor();
                ?>
                        

                    </tbody>
                </table>
                
                  <!--   Formulaire -->
                
                
                <div class="form">
                    
                    <h1>Ajouter un sport</h1>
                    
                    <form action="index.php?action=addSport&amp ?>" method="post">
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