<?php

$this->db->where('combat_id', $combat_id);
$query = $this->db->get('t_mob_combat');
$query_mob = $query->result();
 foreach ($query_mob as $info_mob) {
  $pc_vie = $info_mob->chp_mob*100/$info_mob->hp_mob;
  ?>
  <div class="mt-35 draggable droppable" data-id="<?php echo $info_mob->combat_mob_id ?>" >
    <div class="cadre">
      <div class="portrait mob">
        <span class="pb-25 tt-u dropdown-trigger"  href='#' data-target='dropdown1'><?php echo $info_mob->nom_mob ?></span>
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
<ul id='dropdown1' class='dropdown-content'>

</ul>



<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();

     $('.tooltipped').tooltip();
     $('.dropdown-trigger').dropdown();
});
// $("#ajout_mob").click(function()
// {
//   var data = {
//     "select_mob" : $("#select_mob").val()z
//   };
//   $.ajax({
//     url: "<?php echo base_url() ?>combats/add_mob",
//     type:"POST",
//     data : data,
//     success: function(result)
//     {
//       $("#liste_mob_combat").load('<?php echo base_url() ?>combats/liste_mob_combat');
//     },
//     error: function(result)
//     {
//       console.log(result);
//
//     }
//   });
// });
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
