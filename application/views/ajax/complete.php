<div class="panel panel-default">
  <!-- Default panel contents -->
  <div class="panel-heading">Panel heading</div>
  <div class="panel-body">
  </div>

  <!-- Table -->
  <table class="table">
      <thead>
          <tr>            
            <th>ID</th>
            <th>NAMA</th>
            <th>AJAXPAGE</th>
          </tr>
        </thead>
        <tbody>
            <?php
            foreach ($user as $key => $value) {
                echo "<tr>";
                    echo "<td>".$value->id."</td>";
                    echo "<td>".$value->nama."</td>";
                    echo "<td>".$value->ajaxpage."</td>";
                echo "</tr>";                               
            }
            ?>         
        </tbody>
  </table>
</div>

