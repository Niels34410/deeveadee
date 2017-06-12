<h2><?= $title ?></h2>
<?php foreach($dvds as $dvd) : ?>
  <h3><strong><?php echo $dvd['titreD']; ?></h3></strong><br>
  <u>Auteur :</u> <?php echo $dvd['auteurD']; ?><br>
  <u>Année :</u> <?php echo $dvd['anneeD']; ?><br>
  <u>Catégorie :</u> <?php echo $dvd['categorieD']; ?><br>
  <u>Date d'achat :</u> <?php echo $dvd['dateachatD']; ?><br>
  <u>Nombre :</u> <?php echo $dvd['nombreD']; ?><br>
  <?php echo $dvd['nomS']; ?><br>
  <?php echo $dvd['nomA']; ?>
<?php endforeach; ?>
