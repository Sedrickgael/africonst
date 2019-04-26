<?php session_start();

    include("config/connexion.php");
  $service=$bdd->query('SELECT *FROM service');
  $categories=$service->fetchAll();

  
?>

<?php include("_header/header.php") ?> 
			<section>
				<div class="sub-header sub-header-1 sub-header-our-services fake-position">
					<div class="sub-header-content">
						<h2 class="text-cap white-text">Nos services</h2>
						<ol class="breadcrumb breadcrumb-arc text-cap">
							<li>
								<a href="index">Home</a>
							</li>
						</ol>
					</div>
				</div>
			</section>
			<!-- End Section Sub Header -->
			
			<section class="padding padding-bot-30">
				<div class="container">
					<div class="row">
						<?php 
                foreach ($categories as $categories) {
                  if ($categories['id']%2==0) {
                  $class='block-img-left';
                } else {
                  $class='block-img-right';
                }
                  echo '<div class="col-md-6">'.                  
                '<div class="block-img-full service-item">'.
                  '<a class="img-block"><img src="assets/images/Services/'.$categories['image'].'" class="img-responsive" alt="'.$categories['nom'].'"></a>'.
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
			</section>
			<!-- End Portfolio Detail 1 -->
		
<?php include("_footer/footer.php") ?> 