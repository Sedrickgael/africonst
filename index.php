<?php session_start();

    include("config/connexion.php");
  $service=$bdd->query('SELECT *FROM service');
  $categories=$service->fetchAll();

  
?>
<?php include("_header/header.php") ?>  
    <section>
          <div class="rev_slider_wrapper">
                  <!-- START REVOLUTION SLIDER 5.0 auto mode -->
                  <div id="slider-h6" class="rev_slider slider-home-6" data-version="5.0">
                     <ul>
                        <!-- SLIDE  -->
                        <li data-transition="incube-horizontal"  >
                           <!-- MAIN IMAGE -->
                           <img src="assets/images/Slider/apartment-architectural-design-architecture-323780.jpg"  alt="" data-bgposition="center center" data-bgfit="cover">              
                           <!-- LAYER NR. 1 -->
                            <div class="tp-caption heading-6 "             
                              data-x="center" 
                              data-y="center" data-voffset="-100"             
                              data-transform_in="y:[-150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="700" 
                              ><strong style="color:#fff;">Bâtisseur d'avenir</strong>
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-7 "               
                              data-x="center" 
                              data-y="center"   data-voffset="-45"            
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="900"                        
                              >Créativité
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-8 white-text text-center"               
                              data-x="center" 
                              data-y="center"   data-voffset="40"              
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="1100"                             
                              style="color:#fff;">Des experts pour la réalisation de vos projets
                           </div>
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-2"              
                              data-x="center" 
                              data-y="center"  data-voffset="140" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"        
                              data-start="1400"   
                              > 
                           </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="cube-horizontal"  >
                           <!-- MAIN IMAGE -->
                           <img src="assets/images/Slider/architect-architecture-black-and-white-1537008.jpg"  alt="" data-bgposition="center center" data-bgfit="cover">              
                           <!-- LAYER NR. 1 -->
                           <div class="tp-caption heading-6 "             
                              data-x="center" 
                              data-y="center" data-voffset="-100"             
                              data-transform_in="y:[-150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="700" 
                              ><strong style="color:rgb(0, 228, 107);">Architecture moderne</strong>
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-7 "               
                              data-x="center" 
                              data-y="center"   data-voffset="-45"            
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="900"                        
                              >Gagnez du temps
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-8 white-text text-center"               
                              data-x="center" 
                              data-y="center"   data-voffset="40"              
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="1100"                             
                              style="color:rgb(0, 228, 107);">Des plans modernes <br>par des experts
                           </div>
                           <!-- LAYER NR. 3 -->
                           <div class="tp-caption btn-2"              
                              data-x="center" 
                              data-y="center"  data-voffset="140" 
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"        
                              data-start="1400"   
                              > 
                           </div>
                        </li>
                        <!-- SLIDE  -->
                        <li data-transition="cube"  >
                           <!-- MAIN IMAGE -->
                           <img src="assets/images/Slider/apartment-bedroom-ceiling-1082355.jpg"  alt="" data-bgposition="center center" data-bgfit="cover">              
                           <!-- LAYER NR. 1 -->
                           <div class="tp-caption heading-1 white-text text-cap "             
                              data-x="center" 
                              data-y="center" data-voffset="-90"            
                              data-transform_in="y:[200%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;" 
                              data-start="700" 
                              ><strong>Vie sainne</strong>
                           </div>
                           <!-- LAYER NR. 2 -->
                           <div class="tp-caption heading-5 white-text text-cap"              
                              data-x="center" 
                              data-y="center"                
                              data-transform_in="y:[150%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:600;e:Power3.easeInOut;"
                              data-start="900"                            
                              > <mark>Bien chez soit</mark>
                           </div>
                           <!-- LAYER NR. 3 -->
                           
                        </li>
                     </ul>
                  </div>
                  <!-- END REVOLUTION SLIDER -->
               </div>
               <!-- END REVOLUTION SLIDER WRAPPER -->   
        </section>
        <!-- End Section Slider -->
    
        <section class="padding">
          <div class="container">
          <div class="row">
            <div class="title-block">
              <h2 class="title text-cap" >Ce que nous faisons</h2>
              <div class="divider divider-1">
                <svg class="svg-triangle-icon-container">
                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                </svg>
              </div>
            </div>
            <!-- End Title -->
            <div class="row">
              <?php 
                foreach ($categories as $categories) {
                  if ($categories['id']%2==0) {
                  $class='block-img-left';
                } else {
                  $class='block-img-right';
                }
                  echo '<div class="col-md-6">'.                  
                '<div class="'.$class.'">'.
                  '<div class="img-block"><img src="assets/images/Services/'.$categories['image'].'" class="img-responsive" alt="Image"></div>'.
                  '<div class="text-box">'.
                    '<h4 class="text-cap"><mark>'.$categories['nom'].'</mark></h4>'.
                    '<p>'
                      .$categories['description'].'
                    </p>'.
                  '</div>
                </div>
              </div>';
                }
                ?>
              
             
              
            </div>
          </div>
          </div>
        </section>
        <!-- End Section What we do -->
        
        <section class="padding bg-parallax projects">
          <div class="container">
          <div class="row">
            <div class="title-block">
              <h2 class="title text-cap" style="color: #fff;">Projets récents</h2>
              <div class="divider divider-1">
                <svg class="svg-triangle-icon-container">
                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                </svg>
              </div>
            </div>
            <!-- End Title -->
            <div class="lastest-blog-container">
              <div class="col-md-4">
                <article class="lastest-blog-item">
                  <figure class="latest-blog-post-img effect-zoe">
                    <a href="blogDetail.html">
                      <img src="http://placehold.it/1140x640/ccc.jpg" class="img-responsive" alt="Image">
                    </a>
                    <div class="latest-blog-post-date text-cap">
                      <span class="day">21</span>
                                      <span class="month">Avril</span>
                                  </div>
                              </figure>
                              <div class="latest-blog-post-description">
                                  <a href="blogDetail.html"><h3 style="color: #fff;"">Constructio du 5e pont d'Abidjan</h3></a>
                                  <p>La société Elite Plus a livrer ce 21 avril 2013 le 5e pont d'Abidjan reliant Plateau à Yopougnon.</p>
                                  
                                  
                              </div>
                </article>
              </div>
              
            </div>
          </div>
          </div>
        </section>
        <!-- End Section Lastest Blog -->

        

        <section class="padding bg-parallax section-ligth-testimonials">
          <div class="container">
          <div class="row">
            <div class="title-block">
              <h2 class="title text-cap">Témoignages</h2>
              <div class="divider divider-2">
                <svg class="svg-triangle-icon-container">
                  <polygon class="svg-triangle-icon" points="6 11,12 0,0 0"></polygon>
                </svg>
              </div>
            </div>
            <!-- End Title -->
            <div class="testimonial-warp testimonial-2-col">
                      <div class="customNavigation">
                        <a class="btn prev-testimonials-2-columns"><i class="fa fa-angle-left"></i></a>
                        <a class="btn next-testimonials-2-columns"><i class="fa fa-angle-right"></i></a>
                      </div>  
                      <div id="owl-testimonials-2-columns" class="owl-carousel owl-theme clearfix">
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Grâce à Afri-Const j'ai engagé les meilleurs techniciens pour la construction de ma maison. Aujourd'hui je vie paisiblement avec ma famille. Merci à Afri-Const, les bâtisseurs d'avenir, les vrais!</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/262x262/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">Linda Campbell</h4>
                          <span class="job-testimonials">CEO Finanace Theme Group</span>
                      </div><!-- end item -->
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/256x256/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">John Walker</h4>
                          <span class="job-testimonials">Photographer</span>
                      </div><!-- end item -->
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/225x225/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">Cheryl Cruz</h4>
                          <span class="job-testimonials">Marketing Manager</span>
                      </div><!-- end item -->
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/240x240/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">James Smith</h4>
                          <span class="job-testimonials">Senior Finance Manager</span>
                      </div><!-- end item -->
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/50x50/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">Maria Garcia</h4>
                          <span class="job-testimonials">Finance Director Theme Group</span>
                      </div><!-- end item -->
                      <div class="item item-testimonials text-left">
                          <p class="quote-icon">“</p>
                          <p><i>Morbi auctor vel mauris facilisis lacinia. Aenean suscipit lorem leo, et hendrerit odio fermentum et. Donec ac dolor eros. Mauris arcu nunc, iaculis sit amet lacus iaculis, faucibus faucibus nunc. Vestibulum sit amet lacinia massa</i></p>
                          <div class="avatar-testimonials">
                            <img src="http://placehold.it/225x225/ccc.jpg" class="img-responsive" alt="Image">
                          </div>
                          <h4 class="name-testimonials text-cap">Robert Johnson</h4>
                          <span class="job-testimonials">Finance Assistant - PR Agency</span>
                      </div><!-- end item -->
                      </div>
                  </div><br>
                  <div class="text-center">
                  <br>
                  <a href="register" class=" ot-btn btn-dark-color btn-long text-cap wow fadeInUp2" data-wow-delay=".25s">Donner votre avis</a>
                </div>
          </div>  
          </div>
        </section>
        <!-- End Section Owl Testimonials -->
        <section>
        <div class="overlay-arc overlay-3">
                  <div class="layer-1 text-center ">
                    <div class="box-content-overlay-3 ">
                      <h2 class=" wow fadeInDown" data-wow-delay=".15s">Vous avec une entreprise de construction,<br> d'amenagement d'intérieur, d'espace vert?</h2>
                      <a href="register" class="ot-btn btn-dark-color btn-long text-cap wow fadeInUp2" data-wow-delay=".25s">Travaillez avec nous</a>
                    </div>
                  </div>
              </div>
      </section>
      <!-- End Section Overlay -->

<?php include('_footer/footer.php') ?>