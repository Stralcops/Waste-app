<div class="modal-content">
  <?php
  $id_pj = $_POST['id_pj'];
  $this->db->where('pj_id', $id_pj);
  $query = $this->db->get('t_pj');
  $query_user = $query->row_array();

  $id_mob = $_POST['id_mob'];
  $this->db->where('mob_id', $id_mob);
  $query = $this->db->get('t_mob');
  $query_mob = $query->row_array();

  $id_arme =  $_POST['id_arme'];
  ?>
  <h4><?php echo $query_user['nom_user'] ;?> attaque <?php echo $query_mob['nom_mob']; ?> </h4>
  <div class="row">
    <?php if($result == 2){
      ?>
      C'est une attaqe critique !
      <?php
    } ?>
    <div class="col s12">
      <span>  Résultat du dé :</span>
      <input class="f-20" id="de_degats" type="number" name="" value="">
    </div>
  </div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Retour</a>
  <div href="#!" id="attaque" class=" waves-effect waves-green btn-flat right">Attaquer</div>
</div>
<script type="text/javascript">
$("#attaque").click(function()
{
  data = {
    de_degats : $("#de_degats").val(),
    id_mob : <?php echo $id_mob ?>,
    id_pj : <?php echo $id_pj ?>,
    result : <?php echo $result ?>,
  };
  console.log(data);
  $.ajax({
    data: data,
    url: "<?php echo base_url() ?>combats/result_attaque",
    type: "POST",
    success: function(result)
    {
      $("#modal1").modal("close");

      $("#liste_mob_combat").load(base_url +"combats/liste_mob_combat", {
        "combat_id" : $("#select_combat").val(),
        "result" : result
      });
      $(".phrase_info").html();
      Swal.fire(
        "L'attaque a réussi !",
        result,
        'success'
      );
    },
    error: function(result)
    {
      console.log(result);
    }
  });
});
</script>
