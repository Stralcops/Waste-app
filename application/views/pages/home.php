<!-- <?php if($log_utilisateur["statut_user"]){
  ?>
  <ul class="collapsible">
  <li>
    <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
  <li>
    <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
  <li>
    <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
    <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
  </li>
</ul>

  <?php

} ?> -->
<div class="row">
  <div class="col s4">
    <select id="name_type"class="" name="">
      <option value="boy_names">PNJ Mâle</option>
      <option value="girl_names">PNJ Femelle</option>
    </select>
  </div>
  <div class="col s4" >
    <div class="btn" id="pnj_generate">
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



</script>
