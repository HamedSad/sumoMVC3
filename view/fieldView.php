<?php $title= $field['nameField']; ?>

<?php ob_start(); ?>

        
        <div class="wrapp">
            <hr>
            <h1> <?php echo $field['nameField'] ; ?><br></h1>
            <hr>
            <div class="textesport">

                <?php echo "<img src=" . $field['urlImageField'] . ">" ; ?><br><br>

                <p>Dimensions : <?php echo $field['dimensionsField'] ; ?><br><br>                     
                    <br></p>
            </div>
            <a class="btn btn-primary" href="index.php?action=listFields"><span class="glyphicon glyphicon-arrow-left"></span> Retour aux terrains</a>
        </div>
<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>