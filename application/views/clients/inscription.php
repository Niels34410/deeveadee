<?php echo validation_errors(); ?>

<?php echo form_open('clients/inscription'); ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?= $title; ?></h1>
      <div class="form-group">
        <label>Nom</label>
        <input type="text" class="form-control" name="nom" placeholder="Nom">
      </div>
      <div class="form-group">
        <label>Prénom</label>
        <input type="text" class="form-control" name="prenom" placeholder="Prénom">
      </div>
      <div class="form-group">
        <label>Adresse</label>
        <input type="text" class="form-control" name="adresse" placeholder="Adresse">
      </div>
      <div class="form-group">
        <label>Code postal</label>
        <input type="text" class="form-control" name="code_postal" placeholder="Code postal">
      </div>
      <div class="form-group">
        <label>Ville</label>
        <input type="text" class="form-control" name="ville" placeholder="Ville">
      </div>
      <div class="form-group">
        <label>E-mail</label>
        <input type="email" class="form-control" name="e-mail" placeholder="E-mail">
      </div>
      <div class="form-group">
        <label>Pseudo</label>
        <input type="text" class="form-control" name="pseudo" placeholder="Pseudo">
      </div>
      <div class="form-group">
        <label>Mot de passe</label>
        <input type="password" class="form-control" name="password" placeholder="Mot de passe">
      </div>
      <div class="form-group">
        <label>Confirmer le mot de passe</label>
        <input type="password" class="form-control" name="password2" placeholder="Confirmer le mot de passe">
      </div>
      <button type="submit" class="btn btn-primary btn-block">Envoyer</button>
<?php echo form_close(); ?>
