
  <div class="col s12">
    <h1 class="m-0 td-u f-10">Arme de mêlée</h1>

      <table class="f-9">
          <tr>
            <th>Arme</th>
            <th>BM</th>
            <th>Cap. ofF;</th>
            <th>Déf</th>
            <th>D</th>
          </tr>
          <?php
          $i=0;
        


          $this->db->where('user_id', $id_user);
          $this->db->select('arme_id');
          $query = $this->db->get("t_arme_user");
          $query_arme_user = $query->result();
          foreach ($query_arme_user as $info_arme_user) {
            $id_arme = $info_arme_user->arme_id;

              $this->db->where("arme_id", $id_arme);
              $query = $this->db->get('t_arme');
              $query_arme = $query->result();
              foreach ($query_arme as $info_arme) {
                $nom_arme =  $info_arme->nom_arme;
                $bonusdeg_arme = $info_arme->bonusdeg_arme;
                $bonusdef_arme = $info_arme->bonusdef_arme;

                ?>

                <tr id="trArme<?php echo  $i  ?>">
                  <td id="nom_arme"><?php echo $nom_arme ?></td>
                  <td id="bonusdeg_arme"><?php echo $bonusdeg_arme ?>/<?php echo $bonusdef_arme ?></td>
                  <input type="hidden" name="" id="bonus_degats_arme"value=" <?php echo $info_arme->bonusdeg_arme ?>">
                  <input type="hidden" name="" id="bonus_def_arme"value="<?php echo $info_arme->bonusdef_arme ?>">
                  <td class="cap_off_user"></td>
                  <td class="def_user"></td>
                  <td class=""><?php echo $info_arme->nbde_arme ?>D<?php echo $info_arme->typede_arme  ?>+<?php echo $info_arme->bonusde_arme ?> </td>
                </tr>
                <script type="text/javascript">
                $(document).ready(function()
              {

                  calcul_arme(<?php echo $i ?>, <?php echo $info_user->pui_user ?>, <?php echo $info_user->melee_user ?>, <?php echo $info_arme->bonusdeg_arme ?>, <?php echo $info_user->tre_user ?>, <?php echo $info_arme->bonusdef_arme ?>);



                function calcul_arme(row, puissance_user, melee_user, bonus_degats_arme, tre_user, bonus_def_arme)
                {
                  var cap_off_user =parseInt(puissance_user) + parseInt(melee_user) + parseInt(bonus_degats_arme);
                  var def_user = parseInt(tre_user)  + parseInt(melee_user) + 5 + parseInt(bonus_def_arme);
                  $('#trArme'+row+' .cap_off_user').html(cap_off_user);
                  $('#trArme'+row+' .def_user').html(def_user);

                }




              });

                </script>
                <?php
              }

              $i++;
          }
           ?>

        </table>

    </div>
  <div class="col s12">
    <h1 class="m-0 td-u f-10">Arme à distance</h1>

    <table class="f-9">
        <tr>
          <th>Arme</th>
          <th>BM</th>
          <th>Cap. ofF;</th>
          <th>Portée</th>
          <th>D</th>
        </tr>
        <tr>
          <td>Arc</td>
          <td>2/0</td>
          <td>9</td>
          <td>10/30/50</td>
          <td>1D10+1</td>
        </tr>
      </table>
  </div>
  <h1 class="m-0 td-u f-10">Protections</h1>

    <div class="col s12 valign-wrapper">
      <input id="" type="checkbox" name="" value="">
      <input id="" class="f-5" type="text" name="" value="">
      <input id="" class="inputNumberS"  type="number" name="" value="">
    </div>
