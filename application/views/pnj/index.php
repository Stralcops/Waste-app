<table id="liste_pnj" class="display data_table">
  <thead>
    <tr>
      <th>Nom du personnage</th>
      <th style="width: 50%">Description</th>
    <?php if($log_utilisateur['statut_user'] == 1){ ?>  <th style="width: 20%">Action</th> <?php } ?>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($pnj as $info_pnj) {
      ?>

      <tr>
        <td><?php echo $info_pnj['nom_pnj'] ?></td>
        <td><?php echo $info_pnj['desc_pnj'] ?></td>
      <?php if($log_utilisateur['statut_user'] == 1){?>  <td>
          <div class="row ">
            <a href="<?php echo base_url("pnj/form/update/"). $info_pnj['id_pnj'] ?>"  class="edit btn brown white-text col s6 m-0">
              <i class="material-icons">edit</i>
            </a>

            <a href="<?php echo base_url("pnj/form/delete/"). $info_pnj['id_pnj'] ?>"  class="edit btn red white-text col s4 m-0">

              <i class="material-icons">delete</i>
            </a>
          </div>

        </td>  <?php } ?>
      </tr>

      <?php
    }  ?>

  </tbody>
</table>
<div class="mt-50">
  <a id="new_pnj"  href="#modal1" class="btn-floating btn-large waves-effect waves-light brown right modal-trigger"><i class="material-icons">add</i></a>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4 class="f-20">Nouveau PNJ</h4>
    <div class="form_resume row">
      <input id="nom_pnj" class="col s6" type="text" name="nom_pnj" value="">
      <textarea id="desc_pnj" class="col s8" name="desc_pnj" rows="8" cols="80"></textarea>
      Page <input type="number" id="page_pnj" name="page_pnj" value=" col s2"> du livre <input id="livre_pnj" type="number" name="livre_pnj" value="">
    </div>
  </div>
  <div class="modal-footer">
    <div id="add_resume" href="#!" class="modal-close right waves-effect waves-green btn-flat">Ajouter</div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function(){
  $('.modal').modal();
});
$("#add_resume").click(function(){
  var data = {
    "nom_pnj" : $("#nom_pnj").val(),
    "desc_pnj" : $("#desc_pnj").val(),
    "page_pnj" : $("#page_pnj").val(),
    "livre_pnj" : $("#livre_pnj").val(),
  };
  $.ajax({
    data : data,
    type: 'POST',
    url : "<?php echo base_url("pnj/insert_new_pnj") ?>",
    success : function(){
      location.reload();
      Swal.fire(
        'Ajouté !',
         $("#nom_pnj").val()+' a bien été ajouté !',
        'success'
      )
    },
    error: function(result){
      console.log(result);
      Swal.fire(
        'Oops... !',
        "Une erreur s'est produite.",
        'error'
      )
    }
  });
});
</script>
