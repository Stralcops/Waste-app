<!DOCTYPE html>
 <html>
   <head>
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/materialize.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css"  media="screen,projection"/>
     <link type="text/css" rel="stylesheet" href="<?php echo base_url() ?>assets/css/global.css"  media="screen,projection"/>
     <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/material-design-lite/1.1.0/material.min.css" rel="stylesheet">
     <link href="https://cdn.datatables.net/1.10.19/css/dataTables.material.min.css" rel="stylesheet">
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
     <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>

     <!--Let browser know website is optimized for mobile-->
     <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
   </head>

   <body>
     <div class="nav red darken-4 z-depth-3 valign-wrapper">
       <div class="nav-wrapper">
           <ul id="nav-mobile" class="right hide-on-med-and-down">
             <li><a href="<?php echo base_url() ?>">Accueil</a></li>

             <li> <a class='dropdown-trigger ' href='<?php echo base_url() ?>objets.php' data-target='dropdown1'>Objets</a></li>

               <li><a href="personnages.php">Liste des personnages</a></li>
           </ul>
         </div>
     </div>
     <!-- <div class="side  z-depth-4">
     </div> -->
     <div id="content" class="container">
