<?php
foreach ($nom_garçon_liste as $nom_pnj) {
  ?>

  <div class="col s12 m12 l6 ">
    <div class="card bg-2 darken-1">
      <div class="card-content white-text">
        <span class="card-title"><?php echo $nom_pnj ?></span>
        <!-- <p>I am a very simple card. I am good at containing small bits of information.
        I am convenient because I require little markup to use effectively.</p> -->
      </div>
      <div class="card-action">
        <div class="save_pnj btn bg-1 c-2" data-name="<?php echo $nom_pnj ?>" >Créer ce PJ</div>
        <!-- <a href="#">This is a link</a> -->
      </div>
    </div>
  </div>


  <?php
} ?>
<script type="text/javascript">

$(".save_pnj").click(function(){
  var data = {
    "data_name" : $(this).attr('data-name'),
  }
  $.ajax({
    data: data,
    url: "<?php echo base_url("pnj/insert"); ?>",
    type : "POST",
    success : function(result){
      Swal.fire({
        type: 'success',
        input: false,
        title: 'Succés !',
        text: data['data_name']+ ' a rejoint la liste de vos PNJ !',
        footer: '<a href="<?php echo base_url("pnj/form/update/") ?>'+result+'">Vous pouvez modifier ce PNJ ici</a>'
      });

    },
    error: function(result){
      console.log(result);
    }
  });

});
</script>
