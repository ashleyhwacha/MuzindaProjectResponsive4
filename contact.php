
<?php
 
 $pageTitle= "Contact Page" ;

 include("inc/header.php") ;

  ?>

		<!-- mail -->
		<div class="mail">
			<!-- container -->
			<div class="container">
				<div class="mail-info">
					<h3 style="color:black">PLEASE COMPLETE THE FORM BELOW</h3>
				</div>
				
				<div class="mail-info-grids">
					<div class="col-md-6 mail-info-grid">
						
						<h3 style="color:black">NewBird Contact Information</h3>
						<p style="color:white">Please do not hesitate to get in touch with us incase you have comments and queries. We promise 
							to attend to your queries and help you in a world class and proficient manner.
							We guarantee you that you are our priority.
							Talk to us whichever medium is convenient to you. 
							We thank you for choosing Newbird Air for an unforgetable experience.
						</p>
						
                         
						
						<p style="color:white">
						Head Office Address
						<span>New Bird Air International</span>
						<span>29 Protea Avenue,</span>
							Rhodene, Masvingo.</p>
						
						
						<p style="color:white">Telephone: +263 593 784
						<span>FAX: +1 234 567 9871</span>
						E-mail: <a href="mailto:info@example.com">mail@example.com</a>
						</p>
					</div>
					<div class="col-md-6 contact-form">
						<form method="post" action="insert_contact_values.php">
					<input type="text" name="tit" placeholder="Title:" required="">
                    <input type="text" name="fist" placeholder="First Name:" required="">
                    <input type="text" name="sur" placeholder="Surname:" required="">
				    <input type="text" name="ema" placeholder="Email:" required="">
                    <input type="text" name="telnum" placeholder="Telephone Number:" required="">
                    <input type="text" name="celnum" placeholder="Cellphone Number:" required="">
					<input type="text" name="sub" placeholder="Subject:" required="">
					<textarea  name="msg" placeholder="Message:" required=""></textarea>
					<input type="submit" name="talk" value="SUBMIT">
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!-- //container -->
		</div>
		<!-- //mail -->
		<!-- footer -->
		
		<?php include("inc/footer.php") ; ?>