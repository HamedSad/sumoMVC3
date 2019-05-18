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
                    Terrain : <?php echo   $sport['nameField']; ?><br><br>             
                    Règles du <?php echo $sport['nameSport'] ; ?> : <?php echo $sport['descriptionSport'] ; ?><br></p>
            </div>
            <a class="btn btn-primary" href="index.php"><span class="glyphicon glyphicon-arrow-left"></span> Retour</a>
        </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>