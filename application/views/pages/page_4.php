<div class="load4">
<table class='sign'>
  
    <th><?php echo $this->lang->line('name'); ?></th>
    <th><?php echo $this->lang->line('age'); ?></th>
    <th><?php echo $this->lang->line('salary'); ?></th>
    
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->name."</td>";
  echo "<td>".$row->age."</td>";
  echo "<td>".$row->salary."</td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</div>
</div>