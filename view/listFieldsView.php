<?php $title= 'Terrains'; ?>

<?php ob_start(); ?>

            <div class="wrapp">
                  <hr>
                  <h1>Terrains</h1>

                  <hr>
                <div class="terrain">                     
                <?php
                 
                    while($data = $fields->fetch()){
                        echo "<div class='card'>" ;
                        
                            echo '<a href="index.php?action=field&amp;idField=' . $data['idField'] . ' "> ' . '<img src="' . $data['urlImageField'] . '"/><br>' .'</a>';
        
                            echo "<p>" . $data['nameField'] . '</p><br>' ; 

                            echo "<br><br>" ;
                        
                        echo "</div>";
                        
                        }
                        //$data->closeCursor();
                ?>
                </div>
                <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>