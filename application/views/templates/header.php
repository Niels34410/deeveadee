<html>
  <head>
    <title>Deeveadee</title>
    <link rel="stylesheet" href="<?php echo base_url("/css/bootstrap.css"); ?>" />
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="http://deeveadee.my">Deeveadee</a>
        </div>
        <div id="navbar">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo base_url(); ?>index.php/dvd">DVD</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/about">About</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/societes">Sociétés</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?php echo base_url(); ?>index.php/clients/connexion">Connexion</a></li>
            <li><a href="<?php echo base_url(); ?>index.php/clients/inscription">Inscription</a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">
      <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
      <?php endif ;?>
      <?php if($this->session->flashdata('login_failed')): ?>
        <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
      <?php endif ;?>
      <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
      <?php endif ;?>
