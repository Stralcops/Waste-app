<?php if($log_utilisateur['statut_user'] == 1){
  ?>
  <div class="row">
    <div class="col offset-s4 s4">
      <select id="name_type"  class="input" name="">
        <option value="boy_names">PNJ Mâle</option>
        <option value="girl_names">PNJ Femelle</option>
      </select>
    </div>
    <div class="col s4" >
      <div class="btn brown" id="pnj_generate">
        Générer des PNJ
      </div>
    </div>
  </div>


  <script type="text/javascript">
  $('#pnj_generate').click(function(){
    $('#content_pnj').load('<?php echo base_url('pnj/pnj_generate'); ?>', {
      "name_type" : $("#name_type").val()
    })
  });
  </script>
  <div class="row " id="content_pnj">

  </div>


  <hr class="bg-2"/>

</script>
<?php
} ?>
<h1 class="f-20 center mb-50">Les dernières séances</h1>
<div class="resume">
  <?php foreach ($resume as $key) {
    ?>
    <div class="content_resume mb-30">
      <h2 class="f-15"><?php echo $key['nom_resume'] ?></h2>
      <br>
      <p><?php echo $key['text_resume'] ?></p>
    </div>
    <?php
  }  if($log_utilisateur['statut_user'] == 1){?>
    <div class="mt-50">
      <a id="new_resume"  href="#modal1" class="btn-floating btn-large waves-effect waves-light brown right modal-trigger"><i class="material-icons">add</i></a>
    </div>

  <?php } ?>
</div>

<!-- Modal Structure -->
<div id="modal1" class="modal">
  <div class="modal-content">
    <h4 class="f-20">Nouveau résumé</h4>
    <div class="form_resume row">
      <input id="nom_resume" class="col s6" type="text" name="nom_resume" value="">
      <textarea id="text_resume" class="col s8" name="text_resume" rows="8" cols="80"></textarea>
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
    "nom_resume" : $("#nom_resume").val(),
    "text_resume" : $("#text_resume").val(),
  };
  $.ajax({
    data : data,
    type: 'POST',
    url : "<?php echo base_url("resume/insert") ?>",
    success : function(){
      location.reload();
      Swal.fire(
        'Ajouté !',
        'Le nouveau résumé a bien été ajouté !',
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
