<div class="row container">
  <div class="col s6">
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
       <img src="<?php echo $info_user->photo_pj ?>" height="auto" width="50%"alt="">
       <p>
         PV =  <input type="number" value="<?php echo $info_user->chp_user  ?>">/<?php echo $info_user->hp_user?>
         Psy =  <input type="number" value="<?php echo $info_user->cpsy_user  ?>">/<?php echo $info_user->psy_user?>
           </p>
         <h1 class="f-20">Attributs</h1>
         <p>
           <input id="id_user" type="hidden" name="" value="<?php echo $info_user->user_id ?>">
           Adresse =  <input id="adresse" type="number" value="<?php echo $info_user->adr_user  ?>"> <br>
           Puissance =  <input id="puissance" type="number" value="<?php echo $info_user->pui_user  ?>"><br>
           Clairvoyance =  <input id="clairvoyance" type="number" value="<?php echo $info_user->cla_user  ?>"><br>
           Présence =  <input id= "presence" type="number" value="<?php echo $info_user->pre_user  ?>"><br>
           Trempe =  <input id="trempe" type="number" value="<?php echo $info_user->tre_user  ?>"><br>
         </p>
   <h1 class="f-20">Compétences</h1>
   <p>
           Armes à distance =  <input id="armes_distance" type="number" value="<?php echo $info_user->armesdis_user  ?>"><br>
           Coercition =  <input id="coercition" type="number" value="<?php echo $info_user->coer_user  ?>"><br>
           Commerce =  <input id="commerce" type="number" value="<?php echo $info_user->com_user  ?>"><br>
           Discrétion =  <input id="discretion" type="number" value="<?php echo $info_user->dis_user  ?>"><br>
           Filouterie =  <input id="filouterie" type="number" value="<?php echo $info_user->filou_user  ?>"><br>
           Mélée =  <input id="melee" type="number" value="<?php echo $info_user->melee_user  ?>"><br>
           Monte =  <input id= "monte" type="number" value="<?php echo $info_user->monte_user  ?>"><br>
           Mouvement =  <input id="mouvement" type="number" value="<?php echo $info_user->mouv_user  ?>"><br>
           Nage =  <input id="nage" type="number" value="<?php echo $info_user->nage_user  ?>"><br>
           Navigation =  <input id="navigation" type="number" value="<?php echo $info_user->navig_user  ?>"><br>
           Perception =  <input id="perception"type="number" value="<?php echo $info_user->perc_user  ?>"><br>
           Persuasion =  <input id="persuasion" type="number" value="<?php echo $info_user->persu_user  ?>"><br>
           Soin =  <input id="soin" type="number" value="<?php echo $info_user->soin_user  ?>"><br>
           Survie =  <input id="survie" type="number" value="<?php echo $info_user->survie_user  ?>"><br>
      </p>
   <h1 class="f-20">Combat</h1>
   <p>
           Initiative =  <input id="initiative" type="number" value="<?php echo $info_user->adr_user  ?>"> <br>
           Bonus dégâts =  <input id="bonus_degats" disabled type="number" value="<?php echo $info_user->bonus_degats_user  ?>"> <br>


      </p>
     </div>
   </li>
<?php   } ?>
 </ul>

  </div>
  <div class="col s6">
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

  </div>
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
