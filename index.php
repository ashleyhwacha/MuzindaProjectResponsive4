
<?php 

$pageTitle= "Home Page" ; 

include("inc/header.php") ;
?>
 <body>
			<!-- container -->
			<div class="container">

				<!-- banner Slider starts Here -->
					<script src="js/responsiveslides.min.js"></script>
					 <script>
						// You can also use "$(window).load(function() {"
						$(function () {
						  // Slideshow 4
						  $("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
							  $('.events').append("<li>before event fired.</li>");
							},
							after: function () {
							  $('.events').append("<li>after event fired.</li>");
							}
						  });
					
						});
					  </script>
					<!--//End-slider-script -->
					
					<!--Including Form-->
					<div>
					<?php include("form.php") ;?>  	
					</div>
					<!--//Including Form-->

					<div  id="top" class="callbacks_container">
						<ul class="rslides" id="slider3">
							
							<li>
								<div class="head-info">
									<h1>Flying is our passion<span>Always at your service </span></h1>
									
								</div>
							</li>
							<li>
								<div class="head-info">
									<h1>We Love being your traveling partner<span>Embrace the new flying space</span></h1>
									
								</div>
							</li>
						</ul>
					</div>
                  
        </div>
			<!-- container -->
		</div>
		<!-- //header -->
		
		<!-- banner-grids -->
		<div class="banner-grids">
			<!-- container -->
			<div class="container">
				<div class="banner-grid-info">
					<h3>DISCOUNT DESTINATIONS</h3>
					<p>The best airline always giving you the best deals.</p>
				</div>
				<div class="top-grids">
					<div class="top-grid">
						<img src="images/masvingo.jpg" alt="" />
						<div class="top-grid-info">
							<h3>Exotic Masvingo</h3>
							<p>Experience Zimbabwe from an exotic front.Masvingo Is Zimbabwes oldest town which harbours the Great Zimbabwe ruins  .</p>
						</div>
					</div>
					<div class="top-grid">
						<img src="images/jacaranda.jpg" alt="" />
						<div class="top-grid-info">
							<h3>Sunshine City Harare</h3>
							<p>Zimbabwe's capital and biggest city.Uniquely adorned by the dazzling jacaranda trees .</p>
						</div>
					</div>
					<div class="top-grid">
						<img src="images/pamushana.jpg" alt="" />
						<div class="top-grid-info">
							<h3>World Class Singita Pamushana Lodge</h3>
							<p>Set high in the hills amongst dramatic boulders, the organic-shaped buildings of Singita Pamushana Lodge are reminiscent of the ruins of Great Zimbabwe.</p>
						</div>
					</div>
					<div class="top-grid">
						<img src="images/bulawayo.jpg" alt="" />
						<div class="top-grid-info">
							<h3>City of Kings Bulawayo</h3>
							<p>The Second Largest City in Zimbabwe.Majestically set in the grand Matebeleland province ,oozing class in hospitality .</p>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //banner-grids -->
		<!-- before -->
		<div class="before">
			<!-- container -->
			<div class="container">
				<h2>Before you leave</h2>
				<div class="before-grids">
					
					<div class="before-grid">
						<h3>visa & documents</h3>
						<p>If you are traveling for the first time, there are a few important things you need to know when heading to the airport.Please make sure you have the requisite documents to avoid any inconvinience so that we can provide you with the best service and pleasure on your flight.
						</p>
					</div>
					
					<div class="before-grid">
						<h3>Baggage Policy</h3>
						<p>Please make sure you are in possesion of the correct luggage and quantities.If you need more assistance pertaining to this issue refer to the <a href="about.php">about page</a> for further elaboration and assistance.Your compliance is greatly appreciated inorder for us to make your flight exremely comfortable.
						</p>
					</div>
					
					
					<div class="clearfix"> </div>
					
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //before -->
		<!-- footer -->
		
		<?php include("inc/footer.php") ; ?>