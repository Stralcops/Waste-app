
<div class="row center  pl-60">

    <form class="col s6 offset-s3 bg-2  z-depth-5 center z-depth-3 card p-50 " method="post" action="<?php echo site_url("pages/form_connexion")?>">
      <div class="row">
        <div class="container ">
          <div class="row ">
            <br/>
            <h2 class="center td-u white-text f-20">Connexion</h2>
            <span id='msgErreurId' class="red-text center-align col l12 " ></span>
            <div class="input-field col connexionInput  l12  s12 valign-wrapper">
              <input name="mail_user" id="email" type="email" class="validate">
              <label for="mail_user">Email</label>
            </div>
          </div>
          <div class="row">
            <div class="input-field col  l12  s12">
              <input name="mdp_user" id="mdp" type="password" class=" connexionInput">
              <label for="mdp_user">Mot de passe</label>
            </div>
          </div>
        </div>
      </div>
      <?php if($erreur_identifiants){
        ?>
        <div class="row red vailgn-wrapper">
          <i class="material-icons white-text">warning</i>
          <p class="white-text">Erreur : Identifiants incorrects </p>
        </div>
        <?php
      } ?>

      <div class="row">
        <button class="btn waves-effect waves-light col s12 bg-1  c-2" type="submit" name="action">Se connecter</button>
      </div>
      <br/>
      <br/>
    </form>

</div>
