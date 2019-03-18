<?php
$this->db->where('user_id', $log_utilisateur['user_id']);
$query= $this->db->get('t_pj');
$query_pj = $query->row_array();
if($log_utilisateur['connect'] == "true" AND $log_utilisateur['statut_user'] != 1 )
{
  $pc_vie = $query_pj['chp_user']*100/$query_pj["hp_user"];
  ?>
  <h1 class="f-20 td-u center"> <?php echo $query_pj['nom_user'] ?></h1>
  <?php

  ?>
  <div class="row mt-20">
    <div class="col s12">
      <div class="row">
        <div class="col s2 offset-s1">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Adresse</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $query_pj['adr_user'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s2">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Puissance</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $query_pj['pui_user'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s2">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Clairvoyance</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $query_pj['cla_user'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s2">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Présence</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $query_pj['pre_user'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="col s2">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Trempe</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td><?php echo $query_pj['tre_user'] ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="col s12">
      <div class="row">
        <div class="col s3">
          <table class="liste_competences">
            <thead>
              <tr>
                <th>Compétence</th>
                <th>Niveau</th>
              </tr>
            </thead>

            <tbody>
              <tr>
                <td>Distance</td>
                <td><?php echo $query_pj['armesdis_user'] ?></td>
              </tr>
              <tr>
                <td>Coercition</td>
                <td><?php echo $query_pj['coer_user'] ?></td>
              </tr>
              <tr>
                <td>Commerce</td>
                <td><?php echo $query_pj['com_user'] ?></td>
              </tr>
              <tr>
                <td>Discrétion</td>
                <td><?php echo $query_pj['dis_user'] ?></td>
              </tr>
              <tr>
                <td>Filouterie</td>
                <td><?php echo $query_pj['filou_user'] ?></td>
              </tr>
              <tr>
                <td>Mêlée</td>
                <td><?php echo $query_pj['melee_user'] ?></td>
              </tr>
              <tr>
                <td>Monte</td>
                <td><?php echo $query_pj['melee_user'] ?></td>
              </tr>
              <tr>
                <td>Mouvement</td>
                <td><?php echo $query_pj['mouv_user'] ?></td>
              </tr>
              <tr>
                <td>Nage</td>
                <td><?php echo $query_pj['nage_user'] ?></td>
              </tr>
              <tr>
                <td>Navigation</td>
                <td><?php echo $query_pj['navig_user'] ?></td>
              </tr>
              <tr>
                <td>Perception</td>
                <td><?php echo $query_pj['perc_user'] ?></td>
              </tr>
              <tr>
                <td>Persuasion</td>
                <td><?php echo $query_pj['persu_user'] ?></td>
              </tr>
              <tr>
                <td>Soin</td>
                <td><?php echo $query_pj['soin_user'] ?></td>
              </tr>
              <tr>
                <td>Survie</td>
                <td><?php echo $query_pj['survie_user'] ?></td>
              </tr>

            </tbody>
          </table>
        </div>
        <div class="col s6 center photo_pj mt-10">
          <img height="auto" width="100%" src="<?php echo $query_pj['photo_pj'] ?>" alt="<?php  echo $log_utilisateur['prenom_user'] ?>">
          <div class="col s12 left pl-40">
            <div class="row">
                <span class=" tt-u td-u">Vie :</span>
                <div class="border mt-5 w-100">
                  <div class="bgRed" style="height:100%;width:<?php echo  $pc_vie ?>%"></div>
                </div>

                <span class=" tt-u td-u">Psy :</span>
                <div class="border mt-5 w-100 ">
                  <div class="bgBlue" style="height:100%;width:100%"></div>
                </div>

            </div>
          </div>
        </div>
        <div class="col s3 left pl-40">
          <div class="row">


          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
