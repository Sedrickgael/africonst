<footer class="footer-v4 bg-dark">
               <div class="container">
                  <div class="footer-col-1">
                     <h4 class="text-cap">
                        Contact
                     </h4>
                     <ul class="">
                        <li><i class="fa fa-home" aria-hidden="true"></i> Yopougon, Carrefour Oasis</li>
                        <li><i class="fa fa-phone" aria-hidden="true"></i> (+225) 08 43 20 50</li>
                        <li><i class="fa fa-fax" aria-hidden="true"></i> (+225) 53 65 65 94</li>
                        <li><i class="fa fa-envelope-o" aria-hidden="true"></i> kanangmaansedrickgael@gmail.com</li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> Lundi au Vendredi </li>
                        <li><i class="fa fa-clock-o" aria-hidden="true"></i> 8H - 17H </li>
                     </ul>
                  </div>
                  <div class="footer-col-2">
                     <h4 class="text-cap">
                        Company
                     </h4>
                     <ul class="list-link-footer">
                        <li><a class="text-cap" href="#">Home</a></li>
                        <li><a class="text-cap" href="projects">Projets</a></li>
                        <li><a class="text-cap" href="services">Services</a></li>
                        <li><a class="text-cap" href="about">About Us</a></li>
                        <li><a class="text-cap" href="contact">Contact</a></li>
                  
                     </ul>
                  </div>
                  <div class="footer-col-3">
                     <h4 class="text-cap">Newletter</h4>
                  <div class="form-subcribe">

                     <p class="">Soyez le premier à recevoir notre actualité<br> abonnez-vous.</p>
                     <form  method="post">                        
                              <input class="newsletter-email input-text" placeholder="email@example.com" type="email">
                              <button class="ot-btn btn-main-color text-cap" type="submit">Subscribe</button>
                          </form>
                  </div>
                  </div>
               </div>
            </footer>
            <!-- End Footer -->           

            <section class="copyright">
               <p>Copyright © 2016 Designed by <a href="#">AuThemes</a>. All rights reserved.</p>
            </section>
         </div>
      </div>
      <!-- End page -->
      
      <a id="to-the-top"><i class="fa fa-angle-up"></i></a> 
      <!-- Back To Top -->


      <!-- SCRIPT -->
       <script src="assets/js/vendor/jquery.min.js"></script>
       <script src="assets/js/vendor/bootstrap.min.js"></script>
       <script src="assets/js/plugins/jquery.mCustomScrollbar.concat.min.js"></script>
       <script src="assets/js/plugins/wow.min.js"></script>
       <script type="text/javascript" src="assets/js/plugins/skrollr.min.js"></script>
         
      <!-- REVOLUTION JS FILES -->
      <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.tools.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/jquery.themepunch.revolution.min.js"></script>

      <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
         (Load Extensions only on Local File Systems !  
         The following part can be removed on Server for On Demand Loading) -->  
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="assets/revolution/js/extensions/revolution.extension.video.min.js"></script>   
      <!-- Intializing Slider-->
      <script type="text/javascript" src="assets/js/plugins/slider.js"></script>

       <!-- Mobile Menu
       ================================================== --> 
        <script src="assets/js/plugins/jquery.mobile-menu.js"></script>  

      <!-- Initializing the isotope
       ================================================== --> 
       <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
       <script src="assets/js/plugins/custom-isotope.js"></script>
       <!-- Initializing Owl Carousel
       ================================================== -->
       <script src="assets/js/plugins/owl.carousel.js"></script>
       <script src="assets/js/plugins/custom-owl.js"></script>
      

      <script type="text/javascript">
        $(function(){
          $("#nomInscription").keyup(function(){
            if($(this).val().length < 2){
              $(this).prev().css("border", "1px solid red");
              $(this).prev().children("span").css("color", "red")
              $(this).css("border", "1px solid red");
              $('#validNom').hide('slow');
              $('#erreurNom').show('slow');
              
            }
            else{
              $(this).prev().css("border", "1px solid #2CAF58");
              $(this).css("border", "1px solid #2CAF58");
               $(this).prev().children("span").css("color", "#2CAF58")
               $('#erreurNom').hide('slow');
               $('#validNom').show('slow')
            }
          })
          
          $("#prenomInscription").keyup(function(){
            if($(this).val().length <2){
              $(this).prev().css('border', '1px solid red');
              $(this).prev().children('span').css('color', 'red');
              $(this).css('border', '1px solid red');
              $('#validPrenom').hide('slow');
              $('#erreurPrenom').show('slow');

            }
            else{
              $(this).prev().css('border', '1px solid #2CAF58');
              $(this).prev().children('span').css('color', '#2CAF58');
              $(this).css('border', '1px solid #2CAF58')
              $('#erreurPrenom').hide('slow');
              $('#validPrenom').show('slow')
            }

          })

         

         
            

          $('#mpInscription').blur(function(){
            password();
            if(password_length >3){
              
            }
          })

          $('#mpcInscription').keyup(function(){
            password_confirm()
          })

          function password(){
            var password_length = $('#mpInscription').val().length;
            if(password_length < 6){
              $('#mpForm').show('slow');
              $('mpFormV').hide('slow');
              $(this).css('border','1px solid red');
              return false;

            }else{
              $('#mpForm').hide('slow');
              $('mpFormV').show('slow');
              return true;
            }
          }

          function password_confirm(){
            var password = $('#mpInscription').val();
            var password_conf = $('#mpcInscription').val();

            if(password != password_conf){

              $('#mpc').show('slow')
              $('#mpcC').hide('slow');
              return false;
            }else{
              $('#mpc').hide('slow');
              $('#mpcC').show('slow');
              return true;
            }
          }



          // Login

          $("#email").keyup(function()
          {
            // email = $(this).val();
            pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})$/;
            email = $(this).val();

            if(email.length == "")
            {
              $(".vide").show("slow");
            }
            else if(!pattern.test(email)){
             $('#format').show('slow');
             $(".vide").hide("slow");
             $(".alert").hide("slow");
             
            }
            else{
              $('#format').hide('slow');
             $(".vide").hide("slow");
             $(".alert").hide("slow");
            }
        })


           $("#password").keyup(function()
          {
            // email = $(this).val();
            password = $(this).val();

            if(password.length == "")
            {
              $(".videpwd").show("slow");
            }
            else
            {
                  $(".videpwd").hide("slow");
                  
                }
              })

        });

        
        // function validateTelephone(){

        //   phone = phone.replace(/[^0-9]/g, '');
        //   $("#telInscription").val(phone);

        //   if(phone.length == '' || !phone.match(/^0[0-9]{9}$/))
        //   {
        //     $('#telInscription').prev().css({'border':'1px solid red'})
        //     $('#telInscription').prev().children('span').css({'color':'red'});
        //     $('#telInscription').css({'background':'#FFEDEF', 'border':'1px solid red'});
        //     return false;
        //   }else{
        //     $('#telInscription').css({'background':'#FFEDEF', 'border':'1px solid green'});
        //     $('#telInscription').prev().css({'border':'1px solid green'})
        //     $('#telInscription').prev().children('span').css({'color':'green'});
        //     return true;
        //   }
        // }
    </script>

      <!-- Global Js
       ================================================== --> 
       <script src="assets/js/plugins/custom.js"></script>

   </body>
</html>