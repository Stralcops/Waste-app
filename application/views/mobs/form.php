<?php if($log_utilisateur['statut_user'] == 1){
  ?>
  <div class="row">
      <form  class="col s12" action="<?php echo base_url("mob/update/"). $mob_update['mob_id'] ?>" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input id="nom_mob" type="text" name="nom_mob" class="validate" value=" <?php echo $mob_update["nom_mob"]?>">
            <label for="nom_mob">Nom du MOB</label>
          </div>
        </div>
        <div class="row">
           <div class="input-field col s12">
             <textarea name="attaque_mob" id="attaque_mob" class="materialize-textarea"><?php echo $mob_update["attaque_mob"]?></textarea>
             <label for="textarea1">Attaque</label>
           </div>
         </div>
         <button class="btn right brown" type="submit" name="button">Valider</button>
      </form>
    </div>
  <?php
} ?>
