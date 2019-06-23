<table id="liste_mob" class="display data_table">
  <thead>
    <tr>
      <th>Nom</th>
      <th>Attaque</th>
              <?php if($log_utilisateur['statut_user'] == 1){?>
      <th>Action</th>
    <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($mob as $key) {
      ?>

      <tr>
        <td><?php echo $key['nom_mob'] ?></td>
        <td><?php echo $key['attaque_mob'] ?></td>
        <?php if($log_utilisateur['statut_user'] == 1){?>

          <td>
            <div class="row ">
              <a href="<?php echo base_url("mob/form/update/"). $key['mob_id'] ?>"  class="edit btn brown white-text col s6 m-0">
                <i class="material-icons">edit</i>
              </a>
              <a href="<?php echo base_url("mob/form/delete/"). $key['mob_id'] ?>"  class="edit btn red white-text col s4 m-0">

                <i class="material-icons">delete</i>
              </a>
            </div>

          </td>
        <?php } ?>
      </tr>

      <?php
    }  ?>

  </tbody>
</table>
