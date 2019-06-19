
<div class="row center pt-60 pl-60">

    <form class="col l6 s12 offset-l3 z-depth-5 center z-depth-0" method="post" action="<?php echo site_url("pages/form_connexion")?>">
      <div class="row">
        <div class="container ">
          <div class="row ">
            <br/>
            <h2 class="center td-u">Connexion</h2>
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
      <div class="row">
        <button class="btn waves-effect waves-light col m4 offset-m4 brown" type="submit" name="action">Se connecter</button>
      </div>
      <br/>
      <br/>
    </form>

</div>
