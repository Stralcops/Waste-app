


<div class="row  valign-wrapper">
  <div class="col s6 valign-wrapper">
    <select id="select_combat" class="select2" name="">
      <option disabled selected value="">Combat</option>
      <?php
      $query = $this->db->get('t_combat');
      $query_combats = $query->result_array();
      foreach ($query_combats as $info_combat) {
        ?>
        <option value="<?php echo $info_combat['combat_id'] ?>"><?php echo $info_combat['nom_combat'] ?></option>
        <?php
      }
      ?>
    </select>
    <div class="" id="ajout_combat">
      <label for=""><i class="material-icons brown-text">add_circle</i></label>
    </div>
  </div>
  <select id="select_mob" class="col s6 select2" name="">
    <?php  foreach ($mob as $info_mob) {
      ?>
      <option value="<?php echo $info_mob->mob_id ?>"><?php echo $info_mob->nom_mob ?></option>
      <?php
    }?>
  </select>
  <div class=" " id="ajout_mob">
    <label for=""><i class="material-icons brown-text">add_circle</i></label>
  </div>
</div>
<div class="row">
  <div class="col s12">
  <p class="phrase_info">


  </p>
  </div>
</div>
<div id="section-page" class="row">



  <div class="col s6">

    <?php foreach ($pj as $info_pj):

      $pc_vie = $info_pj->chp_user*100/$info_pj->hp_user;

      $img = $info_pj->photo_pj;
      if($img == "" OR $img == null)
      {
        $img = "assets/img/noone.jpg";
      }
      ?>
      <div class="mt-20 draggable droppable " data-id="<?php echo $info_pj->pj_id ?>" >

        <span  class="ml-50 name " style="pointer-events:  none;"><?php echo $info_pj->nom_user ?></span>

        <div class="cadre">
          <div class="portrait -trigger"  href='#' data-target='1'>
            <img height="50px" width="50px" src="<?php echo base_url(). $img ?>" alt="">
          </div>
          <div class="cadre_content">
            <div class="flex">
              <span class="progressBar tt-u td-u">Vie :</span>
              <div class="border mt-20 ml-10">
                  <div  data-position="bottom" data-tooltip="<?php echo $info_pj->chp_user ?>/<?php echo $info_pj->hp_user ?>" class="bgRed tooltipped" style="height:100%;width:<?php echo $pc_vie ?>%"></div>
              </div>
            </div>
            <div class="flex">
              <span class="progressBar2 tt-u td-u">Psy :</span>
              <div class="border mt-5 ml-10">
                <div class="bgBlue" style="height:100%;width:100%"></div>
              </div>
            </div>
            <div class="row_button">
              <div data_id="<?php echo $info_pj->user_id ?>" class="boutton pt-20 btn_fiche">
                <span>Fiche</span>
              </div>
              <div class="boutton pt-20">
                <span>Manoeuvre</span>
              </div>
              <div class="boutton pt-20">
                <span>Actions</span>
              </div>
            </div>
          </div>
        </div>

      </div>



    <?php endforeach; ?>

  </div>

  <div id="liste_mob_combat" class="col s6 ">
    <?php
    // $combat_id = 1;
    // $this->db->where('combat_id', $combat_id);
    $query = $this->db->get('t_mob_combat');
    $query_mob = $query->result();
    foreach ($query_mob as $info_mob) {
      $pc_vie = $info_mob->chp_mob*100/$info_mob->hp_mob;
      ?>
      <div class="mt-35 draggable droppable " data-id="<?php echo $info_mob->combat_mob_id ?>" >
        <div class="cadre">
          <div class="portrait mob">
            <span class="pb-25 tt-u -trigger"  href='#' data-target='1'><?php echo $info_mob->nom_mob ?></span>
          </div>
          <div class="cadre_content">
            <div class="flex">
              <span class="progressBar tt-u td-u">Vie :</span>
              <div class="border mt-20 ml-10">
                <div  data-position="bottom" data-tooltip="<?php echo $info_mob->chp_mob ?>/<?php echo $info_mob->hp_mob ?>" class="bgRed tooltipped" style="height:100%;width:<?php echo $pc_vie ?>%"></div>
              </div>
            </div>
            <div class="flex">
              <span class="progressBar2 tt-u td-u">Psy :</span>
              <div class="border mt-5 ml-10">
                <div class="bgBlue" style="height:100%;width:100%"></div>
              </div>
            </div>
            <div class="row_button ">
              <p class="f-9 mxw-170 m-0 lh-12"><?php echo $info_mob->attaque_mob ?></p>
            </div>
          </div>
        </div>
      </div>


      <?php
    } ?>

  </div>
</div>
<!-- Modal HTML embedded directly into document -->

<!--  Structure -->


<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();

});

$( function() {

  $( ".draggable" ).draggable({revert: "valid",});
  $( ".droppable" ).droppable({
    drop: function( event, ui ) {


      $('#modal1').load('<?php echo base_url() ?>combats/modal_attaque', {
        id_select_user : ui.draggable.attr('data-id'),
        id_select_mob:$(this).attr('data-id'),
      });
      $('.blocker').css('z-index', "99999")
      $('#modal1').modal('open');

    }
  });
} );
</script>



<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4>Erreur du chargement</h4>
    <p>Désolé, un bug s'est produit lors du chargement du modal. Veuillez contacter dieu.</p>
  </div>
  <div class="modal-footer">
    <a href="#!" class="modal-close waves-effect waves-green btn-flat">Contacter</a>
  </div>
</div>







<style media="screen">
.blockers
{
  z-index: 100000 !important;
}

.mxw-170{
  max-width: 170px;
}
.name
{
  /* background-image: url("<?php echo base_url() ?>assets/img/planchecontour.png"); */
  background-size: contain;
  background-repeat: no-repeat;
  width: 300px !important;
  padding: 25px;

  padding-bottom: 20px;
  background-position: center;
}
.cadre
{
  background: url('<?php echo base_url("assets/img/cadre.png") ?>');
  background-repeat: no-repeat;
  background-size: contain;
}
.portrait
{
  background-image: url("<?php echo base_url() ?>assets/img/portrait_rond.png");
  background-repeat: no-repeat;
  background-size: contain;
  position: absolute;
  top:-25px;
  left: -25px;
}
.mob
{
  background-image: url("<?php echo base_url() ?>assets/img/planchecontour.png");
  width: 35%;
  /* width: 100px; */
}
.boutton
{
  background-image: url("<?php echo base_url() ?>assets/img/button.png");
  height: 20px;
  width: 20px;
  background-size: contain;
  background-repeat: no-repeat;
}

</style>
<!-- <script type="text/javascript">
$('.btn_fiche').click(function()
{
var user_id = ($(this).attr("data-id"));
$('.modal').modal();
$('#modal1').load("<?php echo base_url() ?>personnages/feuillePerso", {
user_id : user_id,
});
});
</script> -->
