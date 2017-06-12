<?php echo form_open('clients/connexion'); ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo $title; ?></h1>
      <div class="form-group">
        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required autofocus>
      </div>
      <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
    </div>
  </div>
<?php echo form_close(); ?>
