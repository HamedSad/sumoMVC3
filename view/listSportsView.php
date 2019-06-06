<?php $title= 'Accueil'; ?>

<?php ob_start(); ?>

            <div class="wrapp">
                  <hr>
                  <h1>Sports</h1>
                  <a href="view/addSport.php">Ajouter un sport</a><br>
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
                        
                        echo '<a class="btn btn-danger" href="index.php?action=suppr&amp;idSport=' . $data['idSport'] . ' "><span class="glyphicon glyphicon-remove"></span> Supprimer </a>';
                        
                        
                        echo '</tr>';
                    
                        }
                        //$data->closeCursor();
                ?>
                    </tbody>
                </table>  
                
              </div>             
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>