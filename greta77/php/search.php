<?php
header('Content-Type: application/html');

$requete = $pdo->query('SELECT id, nom_formation, date_entree, date_sortie, duree, niveau_entree, niveau_sortie, financement FROM formation LIMIT 1');


while($formations=$requete->fetch(PDO::FETCH_ASSOC))   {

?>

    <div class="col-lg-3 col-md-6">
        <div class="service-item">
            <img src="img/icon-1.png" alt="Icon">
            <h3><?php echo $formations['nom_formation']; ?></h3>
            <p><?php echo $formations['date_entree']; ?></p>
            <p><?php echo $formations['date_sortie']; ?></p>
            <p><?php echo $formations['duree']; ?>mois</p>
            <p><?php echo $formations['niveau_entree']; ?></p>
            <p><?php echo $formations['niveau_sortie']; ?></p>
            <p><?php echo $formations['financement']; ?></p>
            <p><a href="index.php?details=<?php echo $formations['id']; ?>">En savoir plus</a></p>
            <p><a href="index.php?formulaire=<?php echo $formations['id']; ?>">Postuler</a></p>
        </div>
    </div>
    <?php
}
?>