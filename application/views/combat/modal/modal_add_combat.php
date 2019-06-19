<div class="modal-content">
  <h4>Nouveau combat </h4>
  <div class="row">
    <div class="input-field col s6">
      <input id="nom_combat" type="text" class="validate">
      <label for="nom_combat">Nom du combat</label>
    </div>
  </div>
</div>
<div class="modal-footer">
  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Retour</a>
  <div id='ajout_combat' class="modal-close waves-effect waves-green btn-flat right">Ajouter</div>
</div>
<script type="text/javascript">
$("div #ajout_combat").click(function()
{

  var data = {
    "nom_combat" : $("#nom_combat").val()
  };

  $.ajax({
    url: "<?php echo base_url() ?>combats/add_combat",
    data: data,
    type: "POST",
    success: function(result)
    {
      location.reload();
    },
    error: function(result)
    {
      console.log(result);

    }
  });
});
</script>
