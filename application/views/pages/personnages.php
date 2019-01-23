<table id="example" class="mdl-data-table dataTable" style="width:100%">
        <thead>
            <tr>
                <th>Personnage</th>
                <th>Joueur</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
          <?php
          $query = $this->db->get('t_pj');
          $query_user = $query->result();
          foreach ($query_user as $info_user) {
          ?>
            <tr>
                <td><?php echo $info_user->nom_user ?></td>
                <td><?php echo $info_user->joueur_user ?></td>
                <td><button  data-id="<?php echo $info_user->user_id ?>" data-target="modal1" class="btn modal-trigger modalFeuille" id="feuillePerso" type="button" class="btn" name="button"> <i class="material-icons">assignment</i> </button>  </td>
            </tr>
          <?php  } ?>
        </tbody>

    </table>

    <ul class="collapsible">
      <?php
          $query = $this->db->get('t_pnj');
          $query_pnj = $query->result();
          foreach ($query_pnj as $info_pnj) {
          ?>
          <li>
            <div class="collapsible-header"><?php echo $info_pnj->nom_pnj ?></div>
            <div class="collapsible-body">
              <h1 class="f-20 f-600 m-0">Description :</h1>
              <p><?php echo $info_pnj->desc_pnj ?></p><br>
              <span class="w-100 right-align"><?php echo "Page n°".  $info_pnj->page_pnj." du livre " .  $info_pnj->livre_pnj?></span>
            </div>
          </li>
          <?php
          }
       ?>
    </ul>


<script type="text/javascript">
  $(".modalFeuille").click(function()
{
  var user_id = ($(this).attr("data-id"));
   $('.modal').modal();
   $('#modal1').load("<?php echo base_url() ?>personnages/feuillePerso", {
       user_id : user_id,
   });
});
</script>
<div id="modal1" class="modal">
   <div class="modal-content">
     <?php
     $query = $this->db->get('t_pj');
     $query_user = $query->result();
     foreach ($query_user as $info_user) {
     ?>
     <h4><?php echo $info_user->nom_user ?></h4>
     <div id="contentModal">

     </div>
   <?php  } ?>

   </div>
   <div class="modal-footer">
     <a href="#!" class="modal-close waves-effect waves-green btn-flat">Accepter</a>
   </div>
 </div>
