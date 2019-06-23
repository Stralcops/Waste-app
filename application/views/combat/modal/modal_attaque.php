<div class="modal-content">
  <?php
  $id_pj = $_POST['id_select_user'];
  $this->db->where('pj_id', $id_pj);
  $query = $this->db->get('t_pj');
  $query_user = $query->row_array();


  $id_mob = $_POST['id_select_mob'];
  $this->db->where('mob_id', $id_mob);
  $query = $this->db->get('t_mob');
  $query_mob = $query->row_array();
  ?>
  <h4><?php echo $query_user['nom_user'] ;?> attaque <?php echo $query_mob['nom_mob']; ?> </h4>
  <div class="row">
    <div  class=" col s6">
      <select id="arme_id" style="display: block">
        <?php
        $this->db->where('user_id', $id_pj);
        $query = $this->db->get('t_arme_user');
        $query_user_arme = $query->result_array();
        ?>
        <option value="" disabled selected>Arme</option>
        <optgroup label="Corps à corps">
          <?php
          foreach ($query_user_arme as $info_arme_user) {
            $id_arme = $info_arme_user['arme_id'];
            $this->db->where('arme_id', $id_arme);
            $query = $this->db->get('t_arme');
            $query_arme = $query->row_array();
            if($query_arme['type_arme'] == 1 OR $query_arme['type_arme'] == 2 )
            {
              ?>
              <option value="<?php echo $query_arme['arme_id'] ?>"><?php echo $query_arme['nom_arme'] ?></option>
            <?php   }
          } ?>
        </optgroup>
        <optgroup label="Distance">
          <?php
          foreach ($query_user_arme as $info_arme_user) {
            $id_arme = $info_arme_user['arme_id'];
            $this->db->where('arme_id', $id_arme);
            $query = $this->db->get('t_arme');
            $query_arme = $query->row_array();
            if($query_arme['type_arme'] == 3 OR $query_arme['type_arme'] == 4 )
            {
              ?>
          <option value="<?php echo $query_arme['arme_id'] ?>"><?php echo $query_arme['nom_arme'] ?></option>
        <?php   }
      } ?>


      </optgroup>

    </select>

  </div>

  <div  class=" col s6">
    <select id="type_attaque" style="display: block">
      <option value="" disabled selected>Type d'attaque</option>
      <option value="1">Assaut</option>
      <option value="2">Coup bas</option>
      <option value="3">Feinte</option>
      <option value="4">Attaque précise</option>
    </select>
  </div>
</div>

<div class="row ">
  <div  class=" col s1">
    <label for="">Dé :</label>
  </div>
  <div  class=" col s3 ">
    <select id="type_de" style="display: block">
      <option value="" disabled selected>Type de dé</option>
      <option value="1">10</option>
      <option value="2">20</option>

    </select>
  </div>
  <div  class=" col s2">
    <input id="result_de" class="col s12 f-20" type="number" name="" value="">
  </div>
</div>

</div>
<div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Retour</a>
  <div href="#!" id="attaque" class=" waves-effect waves-green btn-flat right">Passer la défense</div>
</div>
<script type="text/javascript">
$("#attaque").click(function()
{
  var data = {
    arme_id : $("#arme_id").val(),
    type_attaque : $("#type_attaque").val(),
    type_de : $("#type_de").val(),
    result_de : $("#result_de").val(),
    id_mob : <?php echo $id_mob ?>,
    id_pj : <?php echo $id_pj ?>,
  };
  console.log(data);
  $.ajax({
    data: data,
    url: "<?php echo base_url() ?>combats/attaque_cac",
    type: "POST",
    success: function(result)
    {
      if(result == "0")
      {
        $("#modal1").modal('close');
        $(".phrase_info").html(" !");
        Swal.fire(
          "L'L'attaque a échouée !",
          "L'ennemi a évité votre attaque",
          'error'
        )
      }
      // else if(result == "1")
      // {
      //   $('#modal1').load('<?php echo base_url() ?>combats/modal_degats', {
      //     id_mob : <?php echo $id_mob ?>,
      //     id_pj : <?php echo $id_pj ?>,
      //     id_arme : $("#arme_id").val(),
      //     result: result
      //   });
      //
      // }
      else if(result != "0")
      {
        $('#modal1').load('<?php echo base_url() ?>combats/modal_degats', {
          id_mob : <?php echo $id_mob ?>,
          id_pj : <?php echo $id_pj ?>,
          id_arme : $("#arme_id").val(),
          result: result
        });

      }

    },
    error: function(result)
    {
      console.log(result);
    }
  });
});
</script>
