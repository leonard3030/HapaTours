<?php include 'header.php'; ?>
<div class="banner-in">
		<div class="container">
		<div class="banner-top">
			<h6><a href="index.php">HOME</a> / <span>BOOKING</span></h6>
		</div>
	</div>
</div>
<!--start-booking-->
	<div class="booking">
		<div class="container">
			<div class="booking-main">
				<div class="booking-top">
					<div class="col-md-4 booking-top-left">
						<h4>Book Lodging Now</h4>
						<div class="booking-form">
							<div class="b_room">
								<div class="booking_room">
									<div class="reservation">
										<ul>

													 <form action="insertmail.php" method="POST">
											<li  class="span1_of_1 left">
												 <div class="book-text">
												 	<h5>Names:</h5>
												 </div>
												 <div class="book_date">
													<input  type="text" placeholder="names" name="names" required>
												 </div>
												 <div class="clearfix"></div>		
											 </li>
											<li  class="span1_of_1 left">
												 <div class="book-text">
												 	<h5>Phone/Email :</h5>
												 </div>
												 <div class="book_date">
													<input  type="text" placeholder="+250788888888/example@mail.com" name="phone" required>
												 </div>
												 <div class="clearfix"></div>		
											 </li>
											  <li class="span1_of_1">
												 <div class="book-text">
												 	<h5>Site</h5>
												 </div>
												 <!--start section_room-->
												 <div class="book_date">
													  <select class="frm-field required" name="site">
															<option>---select site---</option>
															<option>VOLCANOES</option>         
															<option>AKAGERA</option>
															<option>NYUNGWE</option>
															<option>MUSIUM & CITY TOUR</option>
													  </select>
												 </div>
												 <div class="clearfix"></div>	
											 </li>		
											 <li  class="span1_of_1 left">
											 	<div class="book-text">
												 	<h5>Check in:</h5>
												 </div>
												 <div class="book_date">
													 <input class="date" name="cin"  type="date" required>
												 </div>
												 <div class="clearfix"></div>					
											 </li>
											 <li  class="span1_of_1 left">
												 <div class="book-text">
												 	<h5>Check out:</h5>
												 </div>
												 <div class="book_date">
													<input class="date" type="date" name="cout" required>
												 </div>
												 <div class="clearfix"></div>		
											 </li>
											  <li class="span1_of_1">
												 <div class="book-text">
												 	<h5>Adult(13+)</h5>
												 </div>
												 <!--start section_room-->
												 <div class="book_date">
													  <select class="frm-field required" name="adult">
															<option>0</option>         
															<option>1</option>         
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
													  </select>
												 </div>
												 <div class="clearfix"></div>	
											 </li>
											 <li class="span1_of_1">
												 <div class="book-text">
												 	<h5>Youth(7-15)</h5>
												 </div>
												 <!--start section_room-->
												 <div class="book_date">
													  <select class="frm-field required" name="youth">
															<option>0</option>         
															<option>1</option>         
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
													  </select>
												 </div>
												 <div class="clearfix"></div>	
											 </li>
											 <li class="span1_of_1">
												 <div class="book-text">
												 	<h5>Child(0-6)</h5>
												 </div>
												 <!--start section_room-->
												 <div class="book_date">
													  <select class="frm-field required" name="child">
															<option>0</option>
															<option>1</option>         
															<option>2</option>
															<option>3</option>
															<option>4</option>
															<option>5</option>
													  </select>
												 </div>
												 <div class="clearfix"></div>	
											 </li>
											 <li  class="span1_of_1 left">
												 <div class="book_date">
														<input type="submit" name="submitbook" value="Submit" class="btn hvr-shutter-out-vertical rates">
												 </div>
												 <div class="clearfix"></div>						
											 </li>
											 <div class="clearfix"></div>
													 </form>
										</ul>
									 </div>
								</div>
								<div class="clearfix"></div>
							</div>
					<!---->
					<div class="properties">
						<h6>Properties</h6>
						<ul class="popular">
						<li><a href="single.html"><i> </i>Contrary to popular</a></li>
						<li><a href="single.html"><i> </i>There are many </a></li>
						<li><a href="single.html"><i> </i>Lorem Ipsum is simply</a></li>
						<li><a href="single.html"><i> </i>Sed ut perspiciatis </a></li>
						<li><a href="single.html"><i> </i>Nemo enim ipsam </a></li>
						
					</ul>
					</div>
					 <a class="hvr-shutter-out-vertical rates" href="#">Check Rates</a>
					
				</div>
					</div>
					<div class="col-md-8 booking-top-right">
						<h4>Accommodation & Lodging</h4>
						<div class="book-bottom">
							<div class="col-md-5 book-bottom-left">
								<a href="single.html"><img class="img-responsive" src="images/b1.jpg" alt=""></a>
							</div>
							<div class="col-md-7 book-bottom-right">
								<h6><a href="single.html">Cras id tempor felis. Ut porta et nisi sed pharetra Quisque ac arcu dictum.</a></h6>
								<p>Fusce porta, massa sed ullamcorper lacinia, eros justo aliquam ligula, id luctus lectus justo et ipsum. Proin fringilla erat lacus.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="book-bottom-one">
							<div class="col-md-5 book-bottom-left">
								<a href="single.html"><img class="img-responsive" src="images/b2.jpg" alt=""></a>
							</div>
							<div class="col-md-7 book-bottom-right">
								<h6><a href="single.html">Cras id tempor felis. Ut porta et nisi sed pharetra Quisque ac arcu dictum.</a></h6>
								<p>Fusce porta, massa sed ullamcorper lacinia, eros justo aliquam ligula, id luctus lectus justo et ipsum. Proin fringilla erat lacus.</p>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="b-bottom">
							<div class="col-md-6 b-bottom-left">
								<h4>Why Us?</h4>
								<h5><a href="single.html">Vestibulum non lobortis quam ut tincidunt neque eu sit amet maximus</a></h5>
								<p>Integer leo nisl, luctus vel tellus ac, ultrices tempor nibh. Duis pellentesque tellus volutpat volutpat dapibus. Praesent feugiat, lorem eu aliquam finibus.</p>
								<ul class="popular">
						<li><a href="#"><i> </i>Contrary to popular</a></li>
						<li><a href="#"><i> </i>There are many </a></li>
						<li><a href="#"><i> </i>Lorem Ipsum is simply</a></li>
						
						
					</ul>
							</div>
							<div class="col-md-6 b-bottom-right">
								<h4>Discounted Lessons</h4>
								<a href="single.html"><img class="img-responsive" src="images/b3.jpg" alt=""></a>
								<h5><a href="single.html">Aenean porttitor libero orci, vitae volutpat lorem porta a. Curabitur vel lacus lobortis.</a></h5>
								<p>Nam aliquet nunc ut felis scelerisque, sit amet elementum quam dapibus. Curabitur ornare mauris purus, in porttitor sapien fringilla sit amet.</p>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!--end-booking-->
	<!--strat-date-piker-->
					<link rel="stylesheet" href="css/jquery-ui.css" />
					<script src="js/jquery-ui.js"></script>
							  <script>
									  $(function() {
										$( "#datepicker,#datepicker1" ).datepicker();
									  });
							  </script>
					<!--//End-date-piker-->
					

<?php include 'footer.php'; ?>