<?php if($log_utilisateur['statut_user'] == 1){
  ?>
  <div class="row">
      <form  class="col s12" action="<?php echo base_url("pnj/update/"). $pnj_update['id_pnj'] ?>" method="post">
        <div class="row">
          <div class="input-field col s6">
            <input id="nom_pnj" type="text" name="nom_pnj" class="validate" value=" <?php echo $pnj_update["nom_pnj"]?>">
            <label for="nom_pnj">Nom du PNJ</label>
          </div>
        </div>
        <div class="row">
           <div class="input-field col s12">
             <textarea name="desc_pnj" id="desc_pnj" class="materialize-textarea"><?php echo $pnj_update["desc_pnj"]?></textarea>
             <label for="textarea1">Description</label>
           </div>
         </div>
         <button class="btn right brown" type="submit" name="button">Valider</button>
      </form>
    </div>
  <?php
} ?>
