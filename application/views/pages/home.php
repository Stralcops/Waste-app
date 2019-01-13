<div class="row ">
  <?php
  $query = $this->db->get('t_resume');
  foreach ($query->result() as $key)
  {

   ?>
  <div class="col s8 ">
    <h1 class="m-0 f-20">Dernière partie.</h1>
    <div class="card p-20 pt-10">
      <h2 class="f-15 m-0"><?php echo $key->nom_resume?></h2>
      <p><?php echo $key->text_resume?></p>
      <br>
      <span class="w-100 flex right">Date : <?php echo $key->date_resume ?> </span>
    </div>
   </div>
   <?php }
    ?>
   <div class="col s2 offset-s1 ">
     <h1 class="m-0 f-15">Pjs connectés.</h1>
     <div class="card p-20 pt-10">
       <ul class="sortable">
         <li class="" >Xac-thu</li>
          <!-- <li class="divider" tabindex="-1"></li> -->
         <li class="">Arthur</li>
           <!-- <li class="divider" tabindex="-1"></li> -->
         <li class="">Arthur</li>
       </ul>
     </div>
   </div>
</div>
