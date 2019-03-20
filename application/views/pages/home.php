<?php

if($log_utilisateur['connect'] == "true" AND $log_utilisateur['statut_user'] != 1 )
{
  $this->db->where('user_id', $log_utilisateur['user_id']);
  $query= $this->db->get('t_pj');
  $query_pjs = $query->result_array();
  foreach ($query_pjs as $query_pj) {
    $pc_vie = $query_pj['chp_user']*100/$query_pj["hp_user"];
    ?>
    <h1 class="f-20 td-u center"> <?php echo $query_pj['nom_user'] ?></h1>

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
            <img height="auto" width="100%" src="<?php if($query_pj['photo_pj']!= ""){echo $query_pj['photo_pj'];}else{echo "https://worldofwarcraft.judgehype.com/screenshots/judgehype/2018/1523259670/13.jpg";} ?>" alt="<?php  echo $log_utilisateur['prenom_user'] ?>">
              <div class="col s12 left pl-40">
                <div class="row">
                  <span class=" tt-u td-u">Vie :</span>
                  <div class="border mt-5 w-100 valign-wrapper" style="height:17px;;">
                    <div class="bgRed" style="height:100%;width:<?php echo  $pc_vie ?>%">  <span class="white-text"><?php  echo $query_pj['chp_user']. " / " .$query_pj["hp_user"]; ?></span></div>
                  </div>
                  <span class=" tt-u td-u">Psy :</span>
                  <div class="border mt-5 w-100 ">
                    <div class="bgBlue" style="height:100%;width:100%"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col s12 left pl-40">
              <div class="row">
                <div class="col s12">
                  <table class="liste_arme">
                    <thead>
                      <tr>
                        <th>Arme</th>
                        <th>BM</th>
                        <th>Capp. off.</th>
                        <th>Def.</th>
                        <th>D.</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $this->db->where('user_id', $query_pj['pj_id']);
                      $query = $this->db->get('t_arme_user');
                      $query_arme_user = $query->result_array();
                      foreach ($query_arme_user as $info_arme_user) {
                        $id_arme = $info_arme_user['arme_id'];
                        $this->db->where('arme_id', $id_arme);
                        $query = $this->db->get('t_arme');
                        $query_armes = $query->result_array();
                        foreach ($query_armes as $query_arme) {
                          // code...
                          $cap_off = $query_pj['pui_user'] + $query_pj['melee_user'] + $query_arme['bonusdeg_arme'];
                          $cap_def = $query_pj['tre_user'] + $query_pj['melee_user'] + 5 + $query_arme['bonusdef_arme'];
                          ?>
                          <tr>
                            <td><?php echo $query_arme['nom_arme'] ?></td>
                            <td><?php echo $query_arme['bonusdeg_arme'] ?>/<?php echo $query_arme['bonusdef_arme'] ?></td>
                            <td><?php echo $cap_off ?></td>
                            <td><?php echo $cap_def ?></td>
                            <td><?php echo $query_arme['nbde_arme'] ?>D<?php echo $query_arme['typede_arme'] ?>+<?php echo $query_arme['bonusde_arme'] ?></td>
                            <td></td>
                          </tr>
                          <?php
                        }

                      }
                      ?>

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php
    }
  }else if($log_utilisateur['connect'] == "true" AND $log_utilisateur['statut_user'] == 1 )
  {

    $query= $this->db->get('t_pj');
    $query_pjs = $query->result_array();
    foreach ($query_pjs as $query_pj) {
      $pc_vie = $query_pj['chp_user']*100/$query_pj["hp_user"];
      ?>
      <h1 class="f-20 td-u center"> <?php echo $query_pj['nom_user'] ?></h1>

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
              <img height="auto" width="100%" src="<?php if($query_pj['photo_pj']!= ""){echo $query_pj['photo_pj'];}else{echo "https://worldofwarcraft.judgehype.com/screenshots/judgehype/2018/1523259670/13.jpg";} ?>" alt="<?php  echo $log_utilisateur['prenom_user'] ?>">
                <div class="col s12 left pl-40">
                  <div class="row">
                    <span class=" tt-u td-u">Vie :</span>
                    <div class="border mt-5 w-100 valign-wrapper" style="height:17px;;">
                      <div class="bgRed" style="height:100%;width:<?php echo  $pc_vie ?>%">  <span class="white-text"><?php  echo $query_pj['chp_user']. " / " .$query_pj["hp_user"]; ?></span></div>
                    </div>
                    <span class=" tt-u td-u">Psy :</span>
                    <div class="border mt-5 w-100 ">
                      <div class="bgBlue" style="height:100%;width:100%"></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col s3">
                <div class="row">
                  <div class="col s12">
                    <table class="liste_arme">
                      <thead>
                        <tr>
                          <th>Port</th>
                          <th>Armure</th>
                          <th>Protection</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $this->db->where('user_id', $query_pj['pj_id']);
                        $query = $this->db->get('t_armure_user');
                        $query_armure_user = $query->result_array();
                        foreach ($query_armure_user as $info_armure_user) {
                          $id_armure = $info_armure_user['armure_id'];
                          $this->db->where('armure_id', $id_armure);
                          $query = $this->db->get('t_armure');
                          $query_armures = $query->result_array();
                          foreach ($query_armures as $query_armure) {
                            // code...
                            ?>
                            <tr>
                              <td class="">  <p>
                                <label>
                                  <input checked type="checkbox" />
                                  <span></span>
                                </label>
                              </p></td>
                              <td><?php echo $query_armure['nom_armure'] ?></td>
                              <td><?php echo $query_armure['protec_armure'] ?></td>
                            </tr>
                            <?php
                          }

                        }
                        ?>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="row">

                <div class="col s12 left pl-40">
                  <div class="row">
                    <div class="col s12">
                      <table class="liste_arme">
                        <thead>
                          <tr>
                            <th>Arme</th>
                            <th>BM</th>
                            <th>Capp. off.</th>
                            <th>Def.</th>
                            <th>D.</th>
                            <th>Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $this->db->where('user_id', $query_pj['pj_id']);
                          $query = $this->db->get('t_arme_user');
                          $query_arme_user = $query->result_array();
                          foreach ($query_arme_user as $info_arme_user) {
                            $id_arme = $info_arme_user['arme_id'];
                            $this->db->where('arme_id', $id_arme);
                            $query = $this->db->get('t_arme');
                            $query_armes = $query->result_array();
                            foreach ($query_armes as $query_arme) {
                              // code...
                              $cap_off = $query_pj['pui_user'] + $query_pj['melee_user'] + $query_arme['bonusdeg_arme'];
                              $cap_def = $query_pj['tre_user'] + $query_pj['melee_user'] + 5 + $query_arme['bonusdef_arme'];
                              ?>
                              <tr>
                                <td><?php echo $query_arme['nom_arme'] ?></td>
                                <td><?php echo $query_arme['bonusdeg_arme'] ?>/<?php echo $query_arme['bonusdef_arme'] ?></td>
                                <td><?php echo $cap_off ?></td>
                                <td><?php echo $cap_def ?></td>
                                <td><?php echo $query_arme['nbde_arme'] ?>D<?php echo $query_arme['typede_arme'] ?>+<?php echo $query_arme['bonusde_arme'] ?></td>
                                <td><div class="b-s"><img height="20px"src="https://static.thenounproject.com/png/52312-200.png">Attaque</div> </td>
                              </tr>
                              <?php
                            }

                          }
                          ?>

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php
      }

    }?>
