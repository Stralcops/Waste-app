<div class="feuillePerso container p-20">
  <?php
  $user_id = $_POST["user_id"];
  $this->db->where('user_id', $user_id);
  $query = $this->db->get('t_pj');
  $query_user = $query->result();
  foreach ($query_user as $info_user) {

  ?>
   <div class="row m-0 mb-5 b-s ">
     <h1 class="f-15 w-100 center">Feuille de personnage</h1>
    <div class="col s10">
      <div class="col s10">
        <div class="row  m-0">
          <div class="col s5">
          <span class="valign-wrapper tt-u">Nom:<input id="nom_user" type="text" name="" value="<?php echo $info_user->nom_user ?>"> </span>
          </div>
          <div class="col s5">
            <span  class="valign-wrapper tt-u">Joueur: <input id="joueur_user" type="text" name="" value="<?php echo $info_user->joueur_user ?>"> </span>
          </div>
        </div>
      </div>
    <div class="row m-0">
      <div class="col s8">
        <div class="row  m-0">
          <div class="col s4">
          <span class="valign-wrapper tt-u">Peuple:<input id="peuple_user" type="text" name="" value="<?php echo $info_user->peuple_user ?>"> </span>
          </div>
          <div class="col s3">
            <span  class="valign-wrapper tt-u">Sexe: <input id="sexe_user" type="text" name="" value="<?php echo $info_user->sexe_user ?>"> </span>

          </div>
          <div class="col s5">
            <span  class="valign-wrapper tt-u">Métier: <input id="metier_user"type="text" name="" value="<?php echo $info_user->metier_user ?>"> </span>

          </div>
        </div>
      </div>
    </div>
    <div class="row  m-0">
      <div class="col s8">
        <div class="row  m-0">
          <div class="col s4">
          <span class="valign-wrapper tt-u">Origine:<input id="origine_user" type="text" name="" value="<?php echo $info_user->origine_user ?>"> </span>
          </div>
          <div class="col s8">
            <span  class="valign-wrapper tt-u">Héritage: <input id="heritage_user"type="text" name="" value="<?php echo $info_user->heritage_user ?>"> </span>
          </div>
        </div>
      </div>
    </div>
    </div>
    <div class="col s2">
      <img class="col s12 m-5" src="<?php echo $info_user->photo_pj ?>" alt="">
    </div>
  </div>
  <div class="row b-s m-0 mb-5">
    <div class="col s3 center">
      <h1 class="td-u  m-0 f-10">Bonne aventure</h1>
      <input id="cba_user" type="number" name="" min="0" max="<?php echo $info_user->ba_user ?>" value="<?php echo $info_user->cba_user ?>">/
      <input id="ba_user" type="number" name="" min="0" value="<?php echo $info_user->ba_user ?>">
    </div>
    <div class="col s3 center">
      <h1 class="td-u  m-0 f-10">Eclat</h1>
      <input id="eclat_user" type="number" min="0" name="" value="<?php echo $info_user->eclat_user ?>">
    </div>
    <div class="col s3 offset-s1">
      <h1 class="td-u  m-0 f-10">Expérience</h1>
      <input id="exp_user" type="number" min="0"name="" value="<?php echo $info_user->exp_user ?>">
    </div>
  </div>
  <div class="row m-0 mb-5">
    <div class="col s9 m-0 pr-5 pl-0 center ">
      <div class=" b-s col s12 ml-0 mr-0  mb-5">
        <h1 class="td-u f-10 m-0">Attributs</h1>
        <div class="col s12 valign-wrapper ">
          <span class="tt-u">Adr</span>esse:
          <input id="adr_user" type="number" name="" value="<?php echo $info_user->adr_user ?>">
          <span class="tt-u">pui</span>ssance:
          <input id="pui_user" type="number" name="" value="<?php echo $info_user->pui_user ?>">
          <span class="tt-u">cla</span>irvoyance:
          <input id="cla_user" type="number" name="" value="<?php echo $info_user->cla_user ?>">
          <span class="tt-u">pre</span>sance:
          <input id="pre_user" type="number" name="" value="<?php echo $info_user->pre_user ?>">
          <span class="tt-u">tre</span>mpe:
          <input id="tre_user" type="number" name="" value="<?php echo $info_user->tre_user ?>">
        </div>
      </div>
      <div class="row m-0 ">
        <div class="col s8 p-0 pr-5 m-0">
          <div class="b-s divFixe">
            <h1 class="td-u f-10 m-0">Compétences</h1>
            <div class="row m-0">
              <div class="col s6 left-align">
              <span> Arme à distance:</span>
                <input id="armesdis_user" type="number" name="" value="<?php echo $info_user->armesdis_user ?>"><br>
              <span> Coercition:</span>
                <input id="coer_user"type="number" name="" value="<?php echo $info_user->coer_user ?>"><br>
              <span> Commerce:</span>
                <input id="com_user" type="number" name="" value="<?php echo $info_user->com_user ?>"><br>
              <span> Discrétion:</span>
                <input id="dis_user" type="number" name="" value="<?php echo $info_user->dis_user ?>"><br>
              <span> Filouterie:</span>
                <input id="filou_user" type="number" name="" value="<?php echo $info_user-> ?>"><br>
              <span> Mêlée:</span>
                <input id="melee_user" type="number" name="" value="<?php echo $info_user->melee_user ?>"><br>
              <span> Monte:</span>
                <input id="monte_user" type="number" name="" value="<?php echo $info_user->monte_user ?>"><br>
              <span> Mouvements:</span>
                <input type="number" name="" value="<?php echo $info_user->mouv_user ?>"><br>
              <span> Nage:</span>
                <input id="nage_user" type="number" name="" value="<?php echo $info_user->nage_user ?>"><br>
              <span> Navigation:</span>
                <input id="navig_user" type="number" name="" value="<?php echo $info_user->navig_user ?>"><br>
              <span> Perception:</span>
                <input id="perc_user" type="number" name="" value="<?php echo $info_user->perc_user ?>"><br>
              <span> Persuasion:</span>
                <input id="persu_user" type="number" name="" value="<?php echo $info_user->persu_user ?>"><br>
              <span> Soins:</span>
                <input id="soin_user" type="number" name="" value="<?php echo $info_user->soin_user ?>"><br>
              <span> Survie:</span>
                <input id="survie_user" type="number" name="" value="<?php echo $info_user->survie_user ?>"><br>
              </div>
              <div class="col s6 left-align">
                  <span> Savoir [Hier]:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir [Malroyaume]:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir [Wasteland]:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir []:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir []:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir []:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir []:</span>
                  <input id="" type="number" name="" value=""><br>
                  <span> Savoir []:</span>
                  <input id="" type="number" name="" value=""><br>

              </div>
            </div>
          </div>
        </div>
        <div class="col s4 p-0 sante ">
          <div class="row m-0 b-s divFixe">
            <h1 class="td-u f-10 m-0 ">Santé</h1>
            <div class="col s12">
              <div class="row m-0">
                <div class="col s12 center valign-wrapper">
                  <h1 class=" m-0 f-10">Létale</h1>
                  <input id="chp_user" class="right-align"type="number" name="" value="<?php echo $info_user->chp_user ?>">/
                  <input id="hp_user" type="number" name="" value="<?php echo $info_user->hp_user ?>">
                </div>
              </div>
              <div class="row m-0">
                <div class="col s12 center valign-wrapper">
                  <h1 class=" m-0 f-10">Blessure</h1>
                  <input id="chpnl_user" class="right-align"type="number" name="" value="<?php echo $info_user->chpnl_user ?>">/
                  <input id="hp_user" type="number" name="" value="<?php echo $info_user->hp_user ?>">
                </div>
              </div>

            </div>
            <div class="row m-0 ">
              <h1 class="td-u f-10 m-0 mt-10">Pyché</h1>
              <div class="col s12">

                  <div class="col s12 center valign-wrapper">
                    <h1 class=" m-0 f-10">Niveau: </h1>
                    <input id="cpsy_user" class="right-align"type="number" name="" value="<?php echo $info_user->cpsy_user ?>">/
                    <input id="psy_user" type="number" name="" value="<?php echo $info_user->psy_user ?>">
                  </div>



              </div>

            </div>
            <div class="col s12 mt-20">
              <h1 class="td-u m-0 f-10">Capacité spéciale: </h1>
              <textarea name="text" rows="8" cols="80"></textarea>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="col s3 b-s divFixe2">
      <h1 class="f-10 td-u m-0 p-5 center">Combats</h1>
      <div class="row">
        <div class="col s6">
          <span>Initiative:</span><input id="adr_user" type="number" name="" value="<?php echo $info_user->adr_user ?>">
        </div>
        <div class="col s6">
          <span>Bonus:</span><input id="bonus_degats_user" type="number" name="" value="<?php echo $info_user->bonus_degats_user ?>">
        </div>
        <div class="col s6">
          <span>Vitesse:</span><input id="" type="number" name="" value="">
        </div>
        <div class="col s6">
          <span>Défense:</span><input id="" type="number" name="" value="">
        </div>
      </div>
      <div class="row center">
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
                <tr>
                  <td>Hache</td>
                  <td>2/0</td>
                  <td>12</td>
                  <td>11</td>
                  <td>1D6+2</td>
                </tr>
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
        </div>
      </div>
    </div>
  </div>
</div>
<style media="screen">
  .container
  {
    width: 100%;
  }
  .modal{
    width: 90%;
    height: 95vh;
    overflow: scroll;
  }

</style>
<?php } ?>
<!-- <script type="text/javascript">

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
</script> -->