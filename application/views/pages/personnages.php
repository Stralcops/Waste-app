<table id="example" class="display" style="width:100%">
        <thead>
            <tr>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Matthieu</td>
                <td>Xac'thu</td>
                <td>12</td>
                <td>34</td>
                <td>28</td>
                <td>Blessé</td>
            </tr>

        </tfoot>
    </table>
    <table id="example3" class="display dataTable" style="width:100%">
            <thead>
                <tr>
                  <th>Joueur</th>
                  <th>Personnage</th>
                  <th>Jet</th>
                  <th>Vie</th>
                  <th>Psy</th>
                  <th>Etat</th>
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
                    <td>
                      <a class='dropdown-trigger btn red darken-4 ' href='#' data-target='dropdown1'><i class="material-icons">settings</i> </a>
                      <ul id='dropdown1' class='dropdown-content'>
                        <li><a href="#!">Acheter</a></li>
                        <!-- <li><a href="#!"></a></li> -->

                      </ul>

                    </td>

                </tr>
    <?php } ?>
            </tfoot>
        </table>
