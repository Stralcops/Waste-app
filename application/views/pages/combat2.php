<script type="text/javascript">

$(document).ready(function()
{
  $('#testmodal').modal();
});
</script>

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
      <div class="mt-20 draggable droppable " data-id="<?php echo $info_pj->user_id ?>" >

        <span class="ml-50 name"><?php echo $info_pj->nom_user ?></span>

        <div class="cadre">
          <div class="portrait">
            <img height="50px" width="50px" src="<?php echo base_url(). $img ?>" alt="">
          </div>
          <div class="cadre_content">
            <div class="flex">
              <span class="progressBar tt-u td-u">Vie :</span>
              <div class="border mt-20 ml-10">
                <div class="bgRed" style="height:100%;width:<?php echo $pc_vie ?>%"></div>
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

  <div class="col s6 ">
    <?php foreach ($mob as $info_mob) {
      $pc_vie = $info_mob->chp_mob*100/$info_mob->hp_mob;
      ?>
      <div class="mt-35 draggable droppable" data-id="<?php echo $info_mob->mob_id ?>" >
        <div class="cadre">
          <div class="portrait mob">
            <span class="pb-25 tt-u"><?php echo $info_mob->nom_mob ?></span>
          </div>
          <div class="cadre_content">
            <div class="flex">
              <span class="progressBar tt-u td-u">Vie :</span>
              <div class="border mt-20 ml-10">
                <div class="bgRed" style="height:100%;width:<?php echo $pc_vie ?>%"></div>
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



<script type="text/javascript">
$( function() {

  $( ".draggable" ).draggable({revert: "valid",});
  $( ".droppable" ).droppable({
    drop: function( event, ui ) {
      // $('.draggable').css('display', 'none');
      // var id_joueur = $(this).attr('data-id');

      $('#modal1').modal();
      $('#modal1').load('<?php echo base_url() ?>combats/modal_attaque', {
        id_select_user : ui.draggable.attr('data-id'),
        id_select_mob:$(this).attr('data-id'),
      });
      $('.blocker').css('z-index', "99999")

    }
  });
} );
</script>









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
