<?php
$log_utilisateur = $this->session->userdata('log_utilisateur');
 ?>
<!doctype html>
<head>
  <meta charset="utf-8">

  <title>Wasteland: les terres gâchées</title>

  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">

  <!-- <link rel="shortcut icon" href="/wasteland/favicon.ico"> -->
  <!-- <link rel="apple-touch-icon" href="/wasteland/apple-touch-icon.png"> -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.css">

  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/waste.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/global.css">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />



</head>

<body>
  <header>
    <h1 class="h1"><span class="visuallyhidden">Wasteland, les terres gâchées</span></h1>

    <section id="slide">
      <h3><span class="visuallyhidden">Ambiances du jeu.</span></h3>
      <div class="left"><a href="javascript:;"><span class="visuallyhidden">Image précédente</span></a></div>
      <div class="right"><a href="javascript:;"><span class="visuallyhidden">Image suivante</span></a></div>
      <ul class="img">
        <li><img src="<?php echo base_url() ?>assets/img/slide-img2.jpg" width="937" height="213" alt="Les terres gâchées"/></li>
      </ul>
    </section>

    <nav>
      <ul class="flex-center">
        <li><a href="<?php echo base_url() ?>">Accueil</a></li>
        <li><a href="<?php echo base_url() ?>joueurs">Les joueurs</a></li>
        <li><a href="<?php echo base_url() ?>combat">Combats</a></li>
        <li><a class='dropdown-trigger' href='#' data-target='dropdown1'>Ressources</a>
          <ul id='dropdown1' class='dropdown-content'>
             <li><a href="<?php echo base_url("mobs") ?>">Mobs</a></li>
             <li><a href="#!">Cartes</a></li>
          </ul>

        <li><a href="">Scénarios</a></li>
        <?php if($log_utilisateur['connect'] == "true")
        {
          ?>
          <li><a href="<?php echo base_url() ?>pages/deconnexion">Déconnexion</a></li>
          <?php
        }else{
          ?>
          <li><a href="<?php echo base_url() ?>connexion">Connexion</a></li>
          <?php
        } ?>
        <!-- <li><a href="">Boutique</a></li> -->
      </ul>
    </nav>

  </header>

  <article id="home" class="clearfix">

    <header>
    </header>
<div class="content" style="margin-top: -225px">

    <!--
    <aside id="news">
    <h3>Actualités</h3>
    <ul>
    <li>chargement ...</li>
  </ul>

</aside> -->
