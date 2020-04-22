<head>

<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/style.css'>
<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.js"></script></head>
<body>
  <select onchange="javascript:window.location.href='<?php echo base_url(); ?>LanguageSwitcher/switchLang/'+this.value;">
    <option value="english" <?php if($this->session->userdata('site_lang') == 'english') echo 'selected="selected"'; ?>>English</option>
    <option value="french" <?php if($this->session->userdata('site_lang') == 'french') echo 'selected="selected"'; ?>>French</option>
    <option value="italian" <?php if($this->session->userdata('site_lang') == 'italian') echo 'selected="selected"'; ?>>Italian</option>   
</select>
	

<div class="login-page">
  <div class="form">
  <?php echo form_open_multipart('pages/create',array('id' => 'form_register','method' => 'POST')); ?>
    
      <input type="text"  name='name' placeholder=<?php echo $this->lang->line('name'); ?>>
      <input type="number" name='age' placeholder=<?php echo $this->lang->line('age'); ?>>
      <input type="submit" value=<?php echo $this->lang->line('submit'); ?>>
      
    </form>
    <?php echo form_open_multipart('pages/brian'); ?>
    <input type="submit" value="Brian">
    </form>
    <br>
    <?php echo form_open_multipart('pages/stewie'); ?>
    <input type="submit" value="Stewie">
    </form>
    <script>
      $(document).ready(function()
      {
        $("#form_register").validate(
        {
          rules:{
            'name':{
              required:true,
              minlength:1
            },
            'age':{
              required:true,
              minlength:1
            }
          },
          messages:{
            'name':{
              required:"Name field is mandatory!",
              minlength:"At least 1 letter!",
            },
            'age':{
              required:"Age field is mandatory!",
              minlength:"At least 1 letter!",
            }
          }
        });
      });
    </script>
	<script>
	$('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});</script>
  </div>
</div>
</body>
