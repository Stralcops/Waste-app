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
