<?php
$this->db->where('user_id', $log_utilisateur['user_id']);
$query= $this->db->get('t_pj');
$query_pj = $query->row_array();
if($log_utilisateur['connect'] == "true")
{
  ?>
<h1 class="f-20 td-u center"> <?php echo $query_pj['nom_user'] ?></h1>
  <?php

 ?>
<div class="row">
  <div class="col s12">
    <div class="row">
      <div class="col s3">
        <table>
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
                 <td>dis_user</td>
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
                 <td>Perception</td>
                 <td><?php echo $query_pj['perc_user'] ?></td>
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
      </div>
      <div class="col s3">

      </div>
    </div>
  </div>
</div>
<?php } ?>
