<ul class="collapsible">
<!-- armes -->
  <li>
    <div class="collapsible-header"><i class="fas fa-skull-crossbones"></i>  <h1 class="m-0 f-10">Armes</h1></div>
    <div class="collapsible-body"><table id="example" class="display dataTable" style="width:100%">
            <thead>
                <tr>
                    <th>Arme</th>
                    <th>Bonus maniement</th>
                    <th>Dé</th>
                    <th>Dégats</th>
                    <th>Rareté</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
                $i = 0;
              $query = $this->db->get('t_arme');
              foreach ($query->result() as $row)
              {

                $i++;
           ?>
                <tr>
                    <td> <?php echo $row->nom_arme ?></td>
                    <td> <?php
                    if($row->bonusdeg_arme == NULL OR $row->bonusdeg_arme == 0 )
                    {
                      echo "0";
                    }
                    else{
                        echo $row->bonusdeg_arme;
                    }
                     ?>
                     / <?php
                     if($row->bonusdef_arme == NULL OR $row->bonusdef_arme == 0 )
                     {
                       echo "0";
                     }
                     else{
                         echo $row->bonusdef_arme;
                     } ?></td>
                    <td><?php echo $row->nbde_arme ?>D<?php echo $row->typede_arme ?>
                      <?php if ($row->bonusde_arme != NULL){
                         echo "+".$row->bonusde_arme;
                     }
                     ?></td>
                    <td><?php echo $row->rar_arme ?></td>
                    <td>
                      <?php if($row->type_arme > 0)
                      {
                        echo "Létal";
                      }
                      else{
                        echo "Non létal";
                      }?>
                    </td>
                    <td class="">
                      <a class='dropdown-trigger grey-text ' href='#' data-target='dropdown<?php echo $i  ?>'><i class="material-icons">settings</i> </a>

                      <ul id='dropdown<?php echo $i  ?>' class='dropdown-content'>
                        <li class=" center"> <a  class=" center green-text"> <i class="material-icons m-0">local_grocery_store</i> </a></li>
                        <li>   <a class=" center blue-text "> <i class="material-icons">create</i></a></li>
                        <li>   <a id="swalRemove" class="swalRemove center red-text "> <i class="material-icons">delete</i></a></li>

                      </ul>
                    </td>

                </tr>
    <?php } ?>
            </tfoot>
        </table></div>


  </li><!-- armes -->
  <!-- armure -->
  <li>
    <div class="collapsible-header"><i class="fas fa-tshirt"></i>  <h1 class="m-0 f-10">Armures</h1></div>
    <div class="collapsible-body"><table id="example2" class="display dataTable" style="width:100%">
            <thead>
                <tr>
                    <th>Armure</th>
                    <th>Protection</th>
                    <th>Rareté</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $query = $this->db->get('t_armure');
              foreach ($query->result() as $row)
              {
           ?>
                <tr>
                    <td> <?php echo $row->nom_armure ?></td>
                    <td> <?php
                    if($row->protec_armure == NULL OR $row->protec_armure == 0 )
                    {
                      echo "0";
                    }
                    else{
                        echo $row->protec_armure;
                    }
                     ?>
                   </td>
                   <td> <?php
                     if($row->rar_armure == NULL OR $row->rar_armure == 0 )
                     {
                       echo "0";
                     }
                     else{
                         echo $row->rar_armure;
                     } ?></td>
                    <td><?php echo $row->cout_armure ?> Pz
                    </td>
                    <td class="row">
                      <li><a  class="swalRemove btn blue darken-4 col s4"> <i class="material-icons">local_grocery_store</i> </a></li>
                      <li><a id="swalRemove" class="swalRemove red darken-4 btn col s4 offset-s1"> <i class="material-icons">delete</i></a></li>

                    </td>

                </tr>
    <?php } ?>
            </tfoot>
        </table></div>


  </li>  <!-- armure -->
  <li>
    <div class="collapsible-header"><i class="fas fa-gift"></i>  <h1 class="m-0 f-10">Objets</h1></div>
    <div class="collapsible-body"><table id="example2" class="display dataTable" style="width:100%">
            <thead>
                <tr>
                    <th>Armure</th>
                    <th>Protection</th>
                    <th>Rareté</th>
                    <th>Prix</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
              <?php
              $query = $this->db->get('t_armure');
              foreach ($query->result() as $row)
              {
           ?>
                <tr>
                    <td> <?php echo $row->nom_armure ?></td>
                    <td> <?php
                    if($row->protec_armure == NULL OR $row->protec_armure == 0 )
                    {
                      echo "0";
                    }
                    else{
                        echo $row->protec_armure;
                    }
                     ?>
                   </td>
                   <td> <?php
                     if($row->rar_armure == NULL OR $row->rar_armure == 0 )
                     {
                       echo "0";
                     }
                     else{
                         echo $row->rar_armure;
                     } ?></td>
                    <td><?php echo $row->cout_armure ?> Pz
                    </td>
                    <td class="row">
                      <a class='dropdown-trigger btn red darken-4 ' href='#' data-target='dropdown1'><i class="material-icons">settings</i> </a>
                      <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Acheter</a></li>
                        <!-- <li><a href="#!"></a></li> -->

                      </ul>

                    </td>

                </tr>
    <?php } ?>
            </tfoot>
        </table></div>


  </li>  <!-- armure -->
</ul>





<!-- <div class="col s8 ">

  <div class="card p-20 pt-10">


  </div>
 </div> -->
