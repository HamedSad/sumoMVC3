<h1>Suppression</h1>
    
<?php 

    echo 'Etes-vous certain de vouloir supprimer ' . $sport['nameSport'] . ' ?<br>';
    
    echo '<a class="btn btn-danger" href="index.php?action=suppr&amp;idSport=' . $sport['idSport'] . ' "><span class="glyphicon glyphicon-remove"></span> Oui </a>';
    echo '<a href="index.php"> Non </a>';

?>
