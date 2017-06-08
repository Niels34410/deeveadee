<?php echo form_open('clients/connexion'): ?>
  <div class="row">
    <div class="col-md-4 col-md-offset-4">
      <h1 class="text-center"><?php echo $title; ?></h1>
      <div class="form-group">
        <input type="text" name="username" class="form-control" placeholder="Pseudo" required autofocus>
      </div>
      <div class="form-group">
        <input type="password" name="username" class="form-control" placeholder="Mot de passe" required autofocus>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
    </div>
  </div>
<?php echo form_close(); ?>
