<?php include("_header/header.php") ?> 
		
				<section>
					<div class="sub-header sub-header-1 sub-header-contact fake-position">
						<div class="sub-header-content">
							<h2 class="text-cap white-text">Nous contacter</h2>
							<ol class="breadcrumb breadcrumb-arc text-cap">
								<li>
									<a href="index">Home</a>
								</li>
							</ol>
						</div>
					</div>
				</section>
				<!-- End Section Sub Header -->
				<!-- Section form contact -->
			    <section class="padding">
			    	<div class="container">
			    		<div class="row">
			    			<div class="contact-warp">
			    				<div class="col-md-6 ">
			    					<div class="left-contact">
			    						<h3 class="text-cap"> Envoyer nous un mail</h3>
			          					<form class="form-inline form-contact-arc" name="contact" method="post" action="send_form_email.php">
			            					<div class="row">
			        							  <div class="form-group col-sm-12 ">
			        							    <input type="text" class="form-control" name="yourName" id="yourName" placeholder="Your Name">
			        							  </div>
			        							  <div class="form-group col-sm-12">
			        							    <input type="email" class="form-control" name="yourEmail" id="yourEmail" placeholder="Your Email" >
			        							  </div>
			        							  <div class="form-group col-sm-12">
			        							    <input type="text" class="form-control" name="yourPhone" id="phoneNumber" placeholder="Phone Number" >
			        							  </div>
			      						    </div>
			      						    <div class="input-content">
			        						  	<div class="form-group form-textarea">
			        					  			<textarea id="textarea" class="form-control" name="comments" rows="6" placeholder="Your Messages" ></textarea>
			        						  	</div>
			        						  </div>
			                      			<button  class="ot-btn btn-main-color btn-long text-cap btn-submit" type="submit" >Envoyer</button>
			      					 	</form> <!-- End Form -->
			    					</div> <!-- End col -->
			    				</div>
			    				<div class="col-md-6 ">
			    					<div class="right-contact">
				    				<h3 class="text-cap">Contact Info</h3>
				    				<p>
				    					Afri-Const est spécialisée dans le mise en réseau entre particuliers et entreprises spécialisées en Bâtiment
				    				</p>
				    				<ul class="address">
				    					<li><p><i class="fa fa-home" aria-hidden="true"></i>&nbsp;&nbsp; Yopougon, Ananeraie carrefour Oasis</p></li>
				    					<li><p><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;&nbsp; (+225) 08432050</p></li>
				    					<li><p><i class="fa fa-fax" aria-hidden="true"></i> &nbsp;(+222) 08432050</p></li>
				    					<li><p><i class="fa fa-envelope-o" aria-hidden="true"></i>&nbsp;&nbsp; contact@africonst.com</p></li>
				    					<li><p><i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;&nbsp; Lundi-vendredi 08:00 - 17:00</p></li>
				    				</ul>
				    				</div>
			    				</div> <!-- End col -->
			    			</div>
			    		</div>
			    	</div>
			    </section>
			    <!-- End Section -->
			   	<!-- Section Google Map -->
			   	<div class="no-padding ">
			   		<div id="map-canvas" class=""></div>
			   	</div>
			   	<!-- End Section -->


				<?php include('_footer/footer.php') ?>