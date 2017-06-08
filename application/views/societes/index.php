<h2><?= $title ?></h2>
<?php foreach($societes as $societe) : ?>
  <h3><?php echo $societe['nomS']; ?></h3>
  <?php echo $societe['rueS']; ?>
  <?php echo $societe['villeS']; ?>
  <?php echo $societe['directeurS']; ?>
<?php endforeach; ?>
