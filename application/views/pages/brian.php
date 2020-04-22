
<link rel='stylesheet' type='text/css' href='<?php echo base_url(); ?>css/home.css'></head>
<div class="full">
<div class="gras">
<table>
                <tr>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="lw"></td>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="st"></td>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="rw"></td>
                </tr>
                <tr>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="lcb"></td>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="cb"></td>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="rcb"></td>
                </tr>
                <tr>
                  <td></td>
                  <td><img src="<?php echo base_url(); ?>images/c.svg" alt="" height="100px" width="100px" id="gk"></td>
                  <td></td>
                </tr>
              </table>
              </div>
              
              <div class="side">

              <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">LW </button>
                <div id="myDropdown" class="dropdown-content">
                  <a onclick="son(); son1();">Son</a>
                  <a onclick="mane(); mane1();">Mane</a>
                  <a onclick="neymar(); neymar1();">Neymar</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction1()" class="dropbtn">ST </button>
                <div id="myDropdown1" class="dropdown-content">
                  <a onclick="kane(); kane1();">Kane</a>
                  <a onclick="ronaldo(); ronaldo1();">Ronaldo</a>
                  <a onclick="suarez(); suarez1();">Suarez</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction2()" class="dropbtn">RW </button>
                <div id="myDropdown2" class="dropdown-content">
                  <a onclick="salah(); salah1();">Salah</a>
                  <a onclick="messi(); messi1();">Messi</a>
                  <a onclick="bernardo(); bernardo1();">Bernardo</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction3()" class="dropbtn">LCB</button>
                <div id="myDropdown3" class="dropdown-content">
                  <a onclick="vertonghen(); vertonghen1();">Vertonghen</a>
                  <a onclick="laporte(); laporte1();">Laporte</a>
                  <a onclick="robertson(); robertson1();">Robertson</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction4()" class="dropbtn">CB </button>
                <div id="myDropdown4" class="dropdown-content">
                  <a onclick="pique(); pique1();">Pique</a>
                  <a onclick="koulibaly(); koulibaly1();">Koulibaly</a>
                  <a onclick="virgil(); virgil1();">Virgil</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction5()" class="dropbtn">RCB</button>
                <div id="myDropdown5" class="dropdown-content">
                  <a onclick="toby(); toby1();">Toby</a>
                  <a onclick="ramos(); ramos1();">Ramos</a>
                  <a onclick="walker(); walker1();">Walker</a>
                  
                </div>
              </div>
              <br>


              <div class="dropdown">
                <button onclick="myFunction6()" class="dropbtn">GK </button>
                <div id="myDropdown6" class="dropdown-content">
                  <a onclick="ederson(); ederson1();">Ederson</a>
                  <a onclick="allison(); allison1();">Allison</a>
                  <a onclick="degea(); degea1();">De Gea</a>
                  
                </div>
              </div>
             
            </div>
            <div class="bot">
              <table class="t1">
                <tr>
                  <td>LW</td>
                  <td>ST</td>
                  <td>RW</td>
                  <td>LCB</td>
                  <td>CB</td>
                  <td>RCB</td>
                  <td>GK</td>
                </tr>
                <tr>
                  <td><span class="lw1"></span></td>
                  <td><span class="st1"></span></td>
                  <td><span class="rw1"></span></td>
                  <td><span class="lcb1"></span></td>
                  <td><span class="cb1"></span></td>
                  <td><span class="rcb1"></span></td>
                  <td><span class="gk1"></span></td>
                </tr>
              </table>
            </div>
            <div class="ent">
            <?php echo form_open_multipart('pages/another1'); ?>
             <input type='hidden' id='lw2' name='lw3'>
             <input type='hidden' id='st2' name='st3'>
             <input type='hidden' id='rw2' name='rw3'>
             <input type='hidden' id='lcb2' name='lcb3'>
             <input type='hidden' id='cb2' name='cb3'>
             <input type='hidden' id='rcb2' name='rcb3'>
             <input type='hidden' id='gk2' name='gk3'>
             <label>Name:</label>
             <input type="text" name='plr'>
             <br>
            <input type="submit">
            </form>
          </div>
            </div>
          </div>
              <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction() {
                  document.getElementById("myDropdown").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>

                <script>
                /* When the user clicks on the button, 
                toggle between hiding and showing the dropdown content */
                function myFunction1() {
                  document.getElementById("myDropdown1").classList.toggle("show");
                }
                
                // Close the dropdown if the user clicks outside of it
                window.onclick = function(event) {
                  if (!event.target.matches('.dropbtn')) {
                    var dropdowns = document.getElementsByClassName("dropdown-content");
                    var i;
                    for (i = 0; i < dropdowns.length; i++) {
                      var openDropdown = dropdowns[i];
                      if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                      }
                    }
                  }
                }
                </script>
                <script>
                  /* When the user clicks on the button, 
                  toggle between hiding and showing the dropdown content */
                  function myFunction2() {
                    document.getElementById("myDropdown2").classList.toggle("show");
                  }
                  
                  // Close the dropdown if the user clicks outside of it
                  window.onclick = function(event) {
                    if (!event.target.matches('.dropbtn')) {
                      var dropdowns = document.getElementsByClassName("dropdown-content");
                      var i;
                      for (i = 0; i < dropdowns.length; i++) {
                        var openDropdown = dropdowns[i];
                        if (openDropdown.classList.contains('show')) {
                          openDropdown.classList.remove('show');
                        }
                      }
                    }
                  }
                  </script>
                  <script>
                    /* When the user clicks on the button, 
                    toggle between hiding and showing the dropdown content */
                    function myFunction3() {
                      document.getElementById("myDropdown3").classList.toggle("show");
                    }
                    
                    // Close the dropdown if the user clicks outside of it
                    window.onclick = function(event) {
                      if (!event.target.matches('.dropbtn')) {
                        var dropdowns = document.getElementsByClassName("dropdown-content");
                        var i;
                        for (i = 0; i < dropdowns.length; i++) {
                          var openDropdown = dropdowns[i];
                          if (openDropdown.classList.contains('show')) {
                            openDropdown.classList.remove('show');
                          }
                        }
                      }
                    }
                    </script>
                    <script>
                      /* When the user clicks on the button, 
                      toggle between hiding and showing the dropdown content */
                      function myFunction4() {
                        document.getElementById("myDropdown4").classList.toggle("show");
                      }
                      
                      // Close the dropdown if the user clicks outside of it
                      window.onclick = function(event) {
                        if (!event.target.matches('.dropbtn')) {
                          var dropdowns = document.getElementsByClassName("dropdown-content");
                          var i;
                          for (i = 0; i < dropdowns.length; i++) {
                            var openDropdown = dropdowns[i];
                            if (openDropdown.classList.contains('show')) {
                              openDropdown.classList.remove('show');
                            }
                          }
                        }
                      }
                      </script>
                      <script>
                        /* When the user clicks on the button, 
                        toggle between hiding and showing the dropdown content */
                        function myFunction5() {
                          document.getElementById("myDropdown5").classList.toggle("show");
                        }
                        
                        // Close the dropdown if the user clicks outside of it
                        window.onclick = function(event) {
                          if (!event.target.matches('.dropbtn')) {
                            var dropdowns = document.getElementsByClassName("dropdown-content");
                            var i;
                            for (i = 0; i < dropdowns.length; i++) {
                              var openDropdown = dropdowns[i];
                              if (openDropdown.classList.contains('show')) {
                                openDropdown.classList.remove('show');
                              }
                            }
                          }
                        }
                        </script>
                        <script>
                          /* When the user clicks on the button, 
                          toggle between hiding and showing the dropdown content */
                          function myFunction6() {
                            document.getElementById("myDropdown6").classList.toggle("show");
                          }
                          
                          // Close the dropdown if the user clicks outside of it
                          window.onclick = function(event) {
                            if (!event.target.matches('.dropbtn')) {
                              var dropdowns = document.getElementsByClassName("dropdown-content");
                              var i;
                              for (i = 0; i < dropdowns.length; i++) {
                                var openDropdown = dropdowns[i];
                                if (openDropdown.classList.contains('show')) {
                                  openDropdown.classList.remove('show');
                                }
                              }
                            }
                          }
                          </script>

                <script>
      
                function son1(){
                  var a = document.getElementById('.lw2');
                  var b = 'son';
                  if(a){
                    a.innerHTML = b;
                  }
                }
                function mane1(){
             
                  var c = document.getElementById('.lw2');
                  var d = 'mane';
                  if(c){
                    c.value = d;
                  }
                }
                function neymar1(){
        
                  var e = document.getElementById('.lw2');
                  var f = 'neymar';
                  if(e){
                    e.value = f;
                  }
                }
              </script>
              <script>
      
                function kane1(){
                  var a1 = document.getElementById('.st2');
                  var b1 = 'kane';
                  if(a1){
                    a1.innerHTML = b1;
                  }
                }
                function ronaldo1(){
             
                  var c1 = document.getElementById('.st2');
                  var d1 = 'ronaldo';
                  if(c1){
                    c1.value = d1;
                  }
                }
                function suarez1(){
        
                  var e1 = document.getElementById('.st2');
                  var f1 = 'suarez';
                  if(e1){
                    e1.value = f1;
                  }
                }
              </script>
              <script>
      
                function salah1(){
                  var a2 = document.getElementById('.rw2');
                  var b2 = 'salah';
                  if(a2){
                    a2.innerHTML = b2;
                  }
                }
                function messi1(){
             
                  var c2 = document.getElementById('.rw2');
                  var d2 = 'messi';
                  if(c2){
                    c2.value = d2;
                  }
                }
                function bernardo1(){
        
                  var e2 = document.getElementById('.rw2');
                  var f2 = 'bernardo';
                  if(e2){
                    e2.value = f2;
                  }
                }
              </script>
              <script>
      
                function vertonghen1(){
                  var a3 = document.getElementById('.lcb2');
                  var b3 = 'vertonghen';
                  if(a3){
                    a3.innerHTML = b3;
                  }
                }
                function laporte1(){
             
                  var c3 = document.getElementById('.lcb2');
                  var d3 = 'laporte';
                  if(c3){
                    c3.value = d3;
                  }
                }
                function robertson1(){
        
                  var e3 = document.getElementById('.lcb2');
                  var f3 = 'robertson';
                  if(e3){
                    e3.value = f3;
                  }
                }
              </script>
              <script>
      
                function pique1(){
                  var a4 = document.getElementById('.cb2');
                  var b4 = 'pique';
                  if(a4){
                    a4.innerHTML = b4;
                  }
                }
                function koulibaly1(){
             
                  var c4 = document.getElementById('.cb2');
                  var d4 = 'koulibaly';
                  if(c4){
                    c4.value = d4;
                  }
                }
                function virgil1(){
        
                  var e4 = document.getElementById('.cb2');
                  var f4 = 'virgil';
                  if(e4){
                    e4.value = f4;
                  }
                }
              </script>
              <script>
      
                function toby1(){
                  var a5 = document.getElementById('.rcb2');
                  var b5 = 'toby';
                  if(a5){
                    a5.innerHTML = b5;
                  }
                }
                function ramos1(){
             
                  var c5 = document.getElementById('.rcb2');
                  var d5 = 'ramos';
                  if(c5){
                    c5.value = d5;
                  }
                }
                function walker1(){
        
                  var e5 = document.getElementById('.rcb2');
                  var f5 = 'walker';
                  if(e5){
                    e5.value = f5;
                  }
                }
              </script>
              <script>
      
                function ederson1(){
                  var a6 = document.getElementById('.gk2');
                  var b6 = 'ederson';
                  if(a6){
                    a6.innerHTML = b6;
                  }
                }
                function allison1(){
             
                  var c6 = document.getElementById('.gk2');
                  var d6 = 'allison';
                  if(c6){
                    c6.value = d6;
                  }
                }
                function degea1(){
        
                  var e6 = document.getElementById('.gk2');
                  var f6 = 'degea';
                  if(e6){
                    e6.value = f6;
                  }
                }
              </script>

                <script>
                var img = document.getElementById('lw');
                
                function son(){
                  img.src="<?php echo base_url(); ?>images/son.jpg";
                  document.querySelector('.lw1').textContent = 'son';
                  
                }
                function mane(){
                  img.src="<?php echo base_url(); ?>images/mane.jpg";
                  document.querySelector('.lw1').textContent = 'mane';
                  
                }
                function neymar(){
                  img.src="<?php echo base_url(); ?>images/neymar.jpg";
                  document.querySelector('.lw1').textContent = 'neymar';
                  
                }
              </script>
              <script>
                var img2 = document.getElementById('st');
                
                function kane(){
                  img2.src="<?php echo base_url(); ?>images/kane.jpg";
                  document.querySelector('.st1').textContent = 'kane';
                  
                }
                function ronaldo(){
                  img2.src="<?php echo base_url(); ?>images/ronaldo.jpg";
                  document.querySelector('.st1').textContent = 'ronaldo';
                 
                }
                function suarez(){
                  img2.src="<?php echo base_url(); ?>images/suarez.jpg";
                  document.querySelector('.st1').textContent = 'suarez';
                  
                }
              </script>
              <script>
                var img3 = document.getElementById('rw');
                
                function salah(){
                  img3.src="<?php echo base_url(); ?>images/salah.jpg";
                  document.querySelector('.rw1').textContent = 'salah';
                
                }
                function messi(){
                  img3.src="<?php echo base_url(); ?>images/messi.jpg";
                  document.querySelector('.rw1').textContent = 'messi';
                 
                }
                function bernardo(){
                  img3.src="<?php echo base_url(); ?>images/bernardo.jpg";
                  document.querySelector('.rw1').textContent = 'bernardo';
                
                }
              </script>
              <script>
                var img4 = document.getElementById('lcb');
                
                function vertonghen(){
                  img4.src="<?php echo base_url(); ?>images/vertonghen.jpg";
                  document.querySelector('.lcb1').textContent = 'vertonghen';
             
                }
                function laporte(){
                  img4.src="<?php echo base_url(); ?>images/laporte.jpg";
                  document.querySelector('.lcb1').textContent = 'laporte';
                 
                }
                function robertson(){
                  img4.src="<?php echo base_url(); ?>robertson/robertson.jpg";
                  document.querySelector('.lcb1').textContent = 'robertson';
               
                }
              </script>
              <script>
                var img5 = document.getElementById('cb');
                
                function pique(){
                  img5.src="<?php echo base_url(); ?>images/pique.jpg";
                  document.querySelector('.cb1').textContent = 'pique';
              
                }
                function koulibaly(){
                  img5.src="<?php echo base_url(); ?>images/koulibaly.jpg";
                  document.querySelector('.cb1').textContent = 'koulibaly';
                 
                }
                function virgil(){
                  img5.src="<?php echo base_url(); ?>images/virgil.jpg";
                  document.querySelector('.cb1').textContent = 'virgil';
             
                }
              </script>
              <script>
                var img6 = document.getElementById('rcb');
                
                function toby(){
                  img6.src="<?php echo base_url(); ?>images/toby.jpg";
                  document.querySelector('.rcb1').textContent = 'toby';
               
                }
                function ramos(){
                  img6.src="<?php echo base_url(); ?>images/ramos.jpg";
                  document.querySelector('.rcb1').textContent = 'ramos';
               
                }
                function walker(){
                  img6.src="<?php echo base_url(); ?>images/walker.jpg";
                  document.querySelector('.rcb1').textContent = 'walker';
          
                }
              </script>
              <script>
                var img7 = document.getElementById('gk');
                
                function ederson(){
                  img7.src="<?php echo base_url(); ?>images/ederson.jpg";
                  document.querySelector('.gk1').textContent = 'ederson';
              
                }
                function allison(){
                  img7.src="<?php echo base_url(); ?>images/allison.jpg";
                  document.querySelector('.gk1').textContent = 'allison';
               
                }
                function degea(){
                  img7.src="<?php echo base_url(); ?>images/degea.jpg";
                  document.querySelector('.gk1').textContent = 'degea';
             
                }
              </script>

              