<div class="row container">
  <div class="col s12">
    <h1 class="white-text f-20">Voyageurs</h1>
    <ul class="collapsible">
      <?php
      $query = $this->db->get('t_pj');
      $query_user = $query->result();
      foreach ($query_user as $info_user) {
      ?>
   <li>
     <div class="collapsible-header"><?php echo $info_user->nom_user ?></div>
     <div class="collapsible-body bg-0  ">
       <div class="row">
         <div class="col s12">
           <button type="button btn red" name="button"> Attaquer </button>
         </div>
       </div>
     </div>
   </li>
<?php   } ?>
 </ul>

  </div>
  <!-- <div class="col s6">
    <h1 class="white-text f-20">Ennemis</h1>
    <ul class="collapsible">
   <li>
     <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
   <li>
     <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
     <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
   </li>
 </ul>

  </div> -->
</div>
<script type="text/javascript">
$('input').change(function()
{
update_pj();
});


function update_pj()
{
  var bonus_degats;
  var puissance = $('#puissance').val();
  switch(puissance) {
  case "1":
    bonus_degats = -2;
    break;
  case "2":
    bonus_degats = -1;
    break;
  case "4":
  bonus_degats = 0;
    break;
  case "5":
  bonus_degats = 1;
    break;
  case "6":
  bonus_degats = 2;
    break;
  case "7":
  bonus_degats = 2;
    break;
  case "8":
  bonus_degats = 3;
    break;
  case "9":
  bonus_degats = 3;
    break;
  case "10":
  bonus_degats = 4;
    break;
  case "11":
  bonus_degats = 4;
    break;
  case "12":
  bonus_degats = 5;
    break;
  case "14":
  bonus_degats = 6;
    break;
  case "16":
  bonus_degats = 7;
    break;
  case "18":
  bonus_degats = 8;
    break;
  default:
    bonus_degats = 0;
}
console.log("Bonus dégats : "+ bonus_degats);
console.log("Puissance : "+ puissance);
  $('#initiative').val( $('#adresse').val());
  $('#bonus_degats').val(bonus_degats);
   var data = {
      id_user :  $('#id_user').val(),
      adr_user :  $('#adresse').val(),
      pui_user :  $('#puissance').val(),
      cla_user :  $('#clairvoyance').val(),
      pre_user :  $('#presence').val(),
      tre_user :  $('#trempe').val(),
      armesdis_user :  $('#armes_distance').val(),
      coer_user :  $('#coercition').val(),
      com_user :  $('#commerce').val(),
      dis_user :  $('#discretion').val(),
      filou_user :  $('#filouterie').val(),
      melee_user :  $('#melee').val(),
      monte_user :  $('#mouvement').val(),
      mouv_user : $('#mouvement').val(),
      nage_user : $('#nage').val(),
      navig_user :  $('#navigation').val(),
      perc_user :  $('#perception').val(),
      persu_user :  $('#persuasion').val(),
      soin_user :  $('#soin').val(),
      survie_user :  $('#survie').val(),
      bonus_degats :  bonus_degats,
    };

  $.ajax({
    url:"<?php echo base_url() ?>Combats/update_pj",
    data: data,
    type:"POST",
    success: function(result)
    {
      console.log(result);
    },
    error: function()
    {
      alert(result);
    }
  });
}
</script>

<style media="screen">
  html
{
  background-color: #362d24;

}
</style>
