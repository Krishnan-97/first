<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style1.css'></head>
<title>Display Records</title>
</head>

<body>
  <div class="load">
    
  <div class="load1">
        <iframe width="310" height="210"
src="https://www.youtube.com/embed/N2Y2vQ-1m7M">
</iframe>
</div>



<div class="load2">     
<table class='sign'>
  
    <th><?php echo $this->lang->line('name'); ?></th>
    <th><?php echo $this->lang->line('age'); ?></th>
		<th><?php echo $this->lang->line('category'); ?></th>
    
  </tr>
  <?php
  $i=1;
  foreach($data as $row)
  {
  echo "<tr>";
  echo "<td>".$row->name."</td>";
	echo "<td>".$row->age."</td>";
	if($row->age > 30){
		echo "<td>B</td>";
	}else{
		echo "<td>A</td>";
	}
  echo "</tr>";
  $i++;
  }
   ?>
</table>
</div>


<script>
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>

</body>
</html>
