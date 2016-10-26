
	<h1>Search A Flight</h1>
	<div class="main-agileinfo">
		<div class="sap_tabs">			
			<div id="horizontalTab">
				<ul class="resp-tabs-list">
					<li class="resp-tab-item"><span>Round Trip</span></li>
					<li class="resp-tab-item"><span>One way</span></li>
								
				</ul>	
				<div class="clearfix"> </div>	
				<div class="resp-tabs-container">

				<!--Start of Round trip Form-->

					<div class="tab-1 resp-tab-content roundtrip">
						<form action="round_trip_search.php" method="post">
							<div class="from">
								<h3>From</h3>
								<select name="from">
                                  <option value="harare">Harare</option>
                                  <option value="masvingo">Masvingo</option>
                                  <option value="Pamushana">Pamushana</option>
                                  <option value="Bulawayo">Bulawayo</option>
                                </select>
							</div>
							<div class="to">
								<h3>To</h3>
								<select name="to">
                                  <option value="masvingo">Masvingo</option>
                                  <option value="harare">Harare</option>
                                  <option value="bulawayo">Bulawayo</option>
                                  <option value="pamushana">Pamushana</option>
                                </select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input  id="datepicker" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									
								</div>
								<div class="return">
									<h3>Return</h3>
									<input  id="datepicker1" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									

								</div>
								<div class="clear"></div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Business</option>   
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
						</form>	

                        <!--End of Round trip Form-->

					</div>
				
				<!--One way Form Start -->		
					<div class="tab-1 resp-tab-content oneway">
						<form action="connection.php" method="post">
							<div class="from">
								<h3>From</h3>
								 <select name="from">
                                  <option value="harare">Harare</option>
                                  <option value="masvingo">Masvingo</option>
                                  <option value="Pamushana">Pamushana</option>
                                  <option value="Bulawayo">Bulawayo</option>
                                </select> 
							</div>
							<div class="to">
								<h3>To</h3>
								<select name="to">
                                  <option value="masvingo">Masvingo</option>
                                  <option value="harare">Harare</option>
                                  <option value="bulawayo">Bulawayo</option>
                                  <option value="pamushana">Pamushana</option>
                                </select>
							</div>
							<div class="clear"></div>
							<div class="date">
								<div class="depart">
									<h3>Depart</h3>
									<input class="date" id="datepicker2" name="Text" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
									
								</div>
							</div>
							<div class="class">
								<h3>Class</h3>
								<select id="w3_country1" onchange="change_country(this.value)" class="frm-field required">
									<option value="null">Economy</option>  
									<option value="null">Business</option>   
									 						
								</select>

							</div>
							<div class="clear"></div>
							<div class="numofppl">
								<div class="adults">
									<h3>Adult:(12+ yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="child">
									<h3>Child:(2-11 yrs)</h3>
									<div class="quantity"> 
										<div class="quantity-select">                           
											<div class="entry value-minus">&nbsp;</div>
											<div class="entry value"><span>1</span></div>
											<div class="entry value-plus active">&nbsp;</div>
										</div>
									</div>
								</div>
								<div class="clear"></div>
							</div>
							<div class="clear"></div>
							<input type="submit" value="Search Flights">
						</form>	
						<!--End of One Way Form-->

					</div>

					<!--Start of Multi-City Form-->
					
		
				</div>						
			</div>
		</div>
	</div>