<div class="modalAddUser container p-50">
  <?php
  $user_id = $_POST['user_id'];
   ?>
   <input id="user_id" type="hidden" name="" value="<?php  echo $user_id ?>">
  <h1 class="f-20 td-u f-600">Ajouter une arme</h1>
  <table id="tableArme" class="f-9">
      <tr>
        <th>Arme</th>
        <th>BM</th>
        <th>D</th>
      </tr>
      <tr>
        <td> <input type="text" id="nom_arme" name="" value=""> </td>
        <td> <input id="bonusdeg_arme" class="center-align" type="number" name="" value=""> <span class="f-600 f-15">/</span> <input id="bonusdef_arme" class="center-align" type="number" name="" value=""> </td>
        <td> <input id="nbde_arme" class="center-align" type="number" name="" value=""><span class="f-600 f-15">D</span><input id="typede_arme" class="center-align" type="number" name="" value=""> <span class="f-600 f-15">+</span> <input id="bonus_degats_arme" class="center-align" type="number" name="" value=""> </td>
      </tr>
    </table>
    <div class="row">
      <div class="col s3 offset-s9 mt-50 ">
        <button id="ajouter_arme" class="btn blue" type="button" name="button">Ajouter l'arme</button>
      </div>
    </div>
</div>
<style media="screen">
  input[type='number']
  {
    width: 45px;
    font-size: 1.2em;
  }
</style>
<script type="text/javascript">
  function ajouter_arme()
  {
    var data={
      user_id: $('#user_id').val(),
      nom_arme: $('#nom_arme').val(),
      bonusdeg_arme:$('#bonusdeg_arme').val(),
      bonusdef_arme:$('#bonusdef_arme').val(),
      nbde_arme:$('#nbde_arme').val(),
      typede_arme:$('#typede_arme').val(),
      bonus_degats_arme:$('#bonus_degats_arme').val(),
    };
    $.ajax({
      // RESTE A AJOUTER LES DONNEES DANS LA BDD EN CREANT UN CONTROLLER ET EN ENVOYANT CES DONNES DANS CELUI CI
    });

  };
</script>
