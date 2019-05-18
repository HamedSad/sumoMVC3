<?php $title= 'test'; ?>

<?php ob_start(); ?>

            <div class="wrapp">
                  <hr>
                  <h1>Menu administrateur</h1>

                  <a href='insert.php'><h5> <span class="glyphicon glyphicon-plus-sign"></span>Ajouter un sport</h5></a>
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
                                       
                <?php
                 
                    while($data = $sports->fetch()){
                    
                        echo'<tr>';

                        echo '<td><img src=' . $data['urlImageSport'] . ">" .'</td>';
                        echo '<td>' . $data['nameSport'] . '</td>';
                        echo '<td>' . $data['titleSport'] . '</td>';
                        
                        
                        echo '<td>' . '<a href="index.php?action=sport&amp;idSport=' . $data['idSport'] . ' "><span class="glyphicon glyphicon-eye-open"></span> Voir </a>';
                        
                        echo '<a class="btn btn-primary" href="update.php?idSport='. $data['idSport'] . ' "><span class="glyphicon glyphicon-pencil"></span> Modifier </a>';
                        
                        echo '<a class="btn btn-danger" href="delete.php?idSport=' . $data['idSport'] . ' "><span class="glyphicon glyphicon-remove"></span> Supprimer </a>';
                        
                        echo '<a href="viewAdmin.php?idSport=' . $data['idSport']. '">' ;
                        echo "</a>";
                        echo '</tr>';
                    
                        }
                        //$data->closeCursor();
                ?>

                     </tbody>
                 </table>
                <div class="form">
                    
                    <form action="index.php?action=addSport&amp ?>" method="post">
                        <div>
                            <label for="nameSport">Nom du sport</label><br />
                            <input type="text" id="nameSport" name="nameSport" />
                        </div>
                        
                        <div>
                            <label for="titleSport">Brève desciption</label><br />
                            <input id="titleSport" name="titleSport"/>
                        </div>
                        
                        <div>
                            <label for="seasonSport">Saison</label><br />
                            <input id="seasonSport" name="seasonSport"/>
                        </div>
                        
                        <div>
                            <label for="descriptionSport">Règles du sport</label><br />
                            <textarea id="descriptionSport" name="descriptionSport"></textarea>
                        </div>
                        
                        <div>
                            <label for="urlImageSport">Nom du sport</label><br />
                            <input type="text" id="urlImageSport" name="urlImageSport" />
                        </div>
                        
                        <div>
                            <input type="submit" />
                        </div>
                    </form>
                
                
                </div>
                
              </div>                 
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>