
function update_pj()
{
     var data = {
        id_user :  $('#user_id').val(),
        joueur_user :  $('#joueur_user').val(),
        peuple_user :  $('#peuple_user').val(),
        sexe_user :  $('#sexe_user').val(),
        metier_user :  $('#metier_user').val(),
        origine_user :  $('#origine_user').val(),
        heritage_user :  $('#heritage_user').val(),
        photo_pj :  $('#photo_pj').val(),
        ba_user :  $('#ba_user').val(),
        cba_user :  $('#cba_user').val(),
        eclat_user :  $('#eclat_user').val(),
        exp_user :  $('#exp_user').val(),
        chp_user :  $('#chp_user').val(),
        hp_user :  $('#hp_user').val(),
        chpnl_user :  $('#chpnl_user').val(),
        cpsy_user :  $('#cpsy_user').val(),
        psy_user :  $('#psy_user').val(),
        nom_user :  $('#nom_user').val(),
        adr_user :  $('#adr_user').val(),
        pui_user :  $('#pui_user').val(),
        cla_user :  $('#cla_user').val(),
        pre_user :  $('#pre_user').val(),
        tre_user :  $('#tre_user').val(),
        armesdis_user :  $('#armesdis_user').val(),
        coer_user :  $('#coer_user').val(),
        com_user :  $('#com_user').val(),
        dis_user :  $('#dis_user').val(),
        filou_user :  $('#filou_user').val(),
        melee_user :  $('#melee_user').val(),
        monte_user :  $('#monte_user').val(),
        mouv_user : $('#mouv_user').val(),
        nage_user : $('#nage_user').val(),
        navig_user :  $('#navig_user').val(),
        perc_user :  $('#perc_user').val(),
        persu_user :  $('#persu_user').val(),
        soin_user :  $('#soin_user').val(),
        survie_user :  $('#survie_user').val(),
        cap_user : $('#cap_user').val(),
        bonus_degats :  $('#bonus_degats').val(),
        bonus_vitesse :  $("#vit_user").val(),
      };
  console.log(data);
    $.ajax({
      url:wasteConfig.baseUrl+"Personnages/update_pj",
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

function calcul_pj()
{

  var c_bonne_aventure =  parseInt($('#cba_user').val());
  var bonne_aventure =  parseInt($('#ba_user').val());
  var eclat =  parseInt($('#eclat_user').val());
  var experiance =  parseInt($('#exp_user').val());
  var adresse = parseInt( $('#adr_user').val());
  var puissance =  parseInt($('#pui_user').val());
  var clairvoyance=  parseInt( $('#cla_user').val());
  var presence = parseInt( $('#pre_user').val());
  var trempe =  parseInt($('#tre_user').val());
  var arme_distance = parseInt( $('#armesdis_user').val());
  var coercition =  parseInt($('#coer_user').val());
  var commerce =  parseInt($('#com_user').val());
  var discretion =  parseInt($('#dis_user').val());
  var filouterie =  parseInt($('#filou_user').val());
  var melee =  parseInt($('#melee_user').val());
  var monte =  parseInt($('#monte_user').val());
  var mouvements =  parseInt($('#mouv_user').val());
  var nage = parseInt( $('#nage_user').val());
  var navigation =  parseInt($('#navig_user').val());
  var perception =  parseInt($('#perc_user').val());
  var savoir_hier =  parseInt($('#s_hier_user').val());
  var savoir_wasteland =  parseInt($('#s_wasteland_user').val());
  var  chp= parseInt( $('#chp_user').val());
  var hp =  parseInt($('#hp_user').val());
  var hpnl = parseInt( $('#hpnl_user').val());
  var chpnl =  parseInt($('#chpnl_user').val());
  var cpsy = parseInt( $('#cpsy_user').val());
  var psy = parseInt( $('#psy_user').val());
  var capacite_special = parseInt( $('#cap_user').val());
  var initiative =  parseInt($('#initiative_user').val());
  var bonus_degats = parseInt( $('#bonus_degats').val());
  var defense = parseInt( $('#def_user').val());
  var vitesse = parseInt( $('#vit_user').val());
  //table de calcul bonus Vitesse
  var bonus_vitesse;
  var bonus_degats;

  var addresses = {
    1: -2, 2: -1,
  };

  bonus_vitesse = addresses[adresse];
  switch(adresse) {
    case 1:
    bonus_vitesse = -2;
    break;
    case 2:
    bonus_vitesse = -1;
    break;
    case 3:
    bonus_vitesse = -1;
    break;
    case 4:
    bonus_vitesse = 0;
    break;
    case 5:
    bonus_vitesse = 0;
    break;
    case 6:
    bonus_vitesse = 0;
    break;
    case 7:
    bonus_vitesse = 1;
    break;
    case 8:
    bonus_vitesse = 1;
    break;
    case 9:
    bonus_vitesse = 2;
    break;
    case 10:
    bonus_vitesse = 2;
    break;
    case 11:
    bonus_vitesse = 3;
    break;
    case 12:
    bonus_vitesse = 3;
    break;
    case 13:
    bonus_vitesse = 4;
    break;
    case 14:
    bonus_vitesse = 4;
    break;
    case 15:
    bonus_vitesse = 5;
    break;
    case 16:
    bonus_vitesse = 5;
    break;
    case 17:
    bonus_vitesse = 6;
    break;
    case 18:
    bonus_vitesse = 6;
    break;
    default:
    bonus_vitesse = 0;
  }
  switch(puissance) {
    case 1:
    bonus_degats = -2;
    break;
    case 2:
    bonus_degats = -1;
    break;
    case 4:
    bonus_degats = 0;
    break;
    case 5:
    bonus_degats = 1;
    break;
    case 6:
    bonus_degats = 2;
    break;
    case 7:
    bonus_degats = 2;
    break;
    case 8:
    bonus_degats = 3;
    break;
    case 9:
    bonus_degats = 3;
    break;
    case 10:
    bonus_degats = 4;
    break;
    case 11:
    bonus_degats = 4;
    break;
    case 12:
    bonus_degats = 5;
    break;
    case 14:
    bonus_degats = 6;
    break;
    case 16:
    bonus_degats = 7;
    break;
    case 18:
    bonus_degats = 8;
    break;
    default:
    bonus_degats = 0;
  }

  //calculs
  var bonus_def = 0;

  $('#initiaive_user').val(adresse); //initiative
  $('#def_user').val(trempe + 5 + bonus_def); // defense
  $('#vit_user').val(bonus_vitesse); //bonus_vitesse   AJOUTER BONUS PEUPLE
  $('#bonus_degats').val(bonus_degats); // bonus_degat
  $('#hp_user').val((puissance + trempe) * 2 +5);
  $('#psy_user').val((clairvoyance + trempe) * 2 +5);
  $("#armure_portee").prop("checked");

  //=================================
  var row = 0;
  $(".cap_off_user").each(function()
  {
    $("#trArme"+row+" .cap_off_user").text(puissance + melee + parseInt($("#trArme"+row+" #bonus_degats_arme").val()));
    row++;
  });
}

$(document).ready(function() {
  $("#modal1").on("change", "input", function() {
    calcul_pj();
    update_pj();

  });

  $(".modalFeuille").click(function()
{
  var user_id = ($(this).attr("data-id"));
   $('.modal').modal();
   $('#modal1').load( wasteConfig.baseUrl + "personnages/feuillePerso", {
       user_id : user_id,
   }, function(data) {

     calcul_pj();
   });
});
});
