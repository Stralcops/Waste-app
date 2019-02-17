<div class="modalAddUser container p-50">
  <?php
  $user_id = $_POST['user_id'];
   ?>
   <input id="user_id" type="hidden" name="" value="<?php  echo $user_id ?>">
  <h1 class="f-20 td-u f-600">Ajouter une arme</h1>

    <div class="row">
      <div class="col s3 offset-s9 mt-50 ">
        <select class="" name="">
          <option value=""></option>
      
        </select>
        <button id="ajouter_arme" class="btn blue" type="button" name="button">Ajouter l'arme</button>
      </div>
    </div>
</div>
