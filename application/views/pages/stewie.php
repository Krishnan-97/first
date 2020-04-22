<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style.css'>
<table class='sign'>
  
    <th>Select user</th>
    
    
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td><a id=".$row->name." href=\"javascript://\"onclick=\"one(this.id,".$row->age.")\" >".$row->name."</a></td>";
  echo "</tr>";
  $i++;
  }
   ?>
</table>
<br>
<table class='totti'>
  <tr>
<td><label>Name:</label></td>
<td><h2><span class='lw' name='name'></span></h2></td>
</tr>
<tr>
<td><label>Age:</label></td>
<td><h2><span class='rw' name='age'></span></h2></td>
</tr>
</table>
<?php echo form_open_multipart('pages/another'); ?>
<input type='hidden' id='lo' name='name'>
<input type='hidden' id='ol' name='age'>
<label>Income:</label>
<input type="number" name='salary'>
<br>
<input type="submit">
</form>



<script>
var img = document.getElementById('lw');
                
function one(bam,mab){
  document.getElementById('lo').value=bam;
  document.getElementById('ol').value=mab;
  document.querySelector('.lw').textContent = bam;
  document.querySelector('.rw').textContent = mab;
                }      </script>