
<div class="row">
  <div class="col s6">
    <label for="">Type d'attque :</label>
    <select class="" name="">
      <?php foreach ($attaques as $info_attaque): ?>

        <option value="  <?php echo $info_attaque->id_attaque;?>">  <?php echo $info_attaque->nom_attaque;?></option>

      <?php endforeach; ?>
    </select>



  </div>
</div>
<div class="row">
  <div class="col s6">
    <label for="">Arme :</label>
<?php foreach ($arme_user as $info_arme): ?>
<?php var_dump($info_arme) ; ?>
<?php endforeach; ?>

  </div>
</div>
