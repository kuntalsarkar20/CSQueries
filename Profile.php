<?php
include "Header.php";
?>
	<section style="background-color:#f3f7f7; ">
			<div class="container" style="padding: 80px 0px 0px 0px;">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-6" style="border:px solid black;">
						<div class="col-sm-12" style="padding:0px 20px;border:px solid black;">
							 <a href="" id="link"><span class="glyphicon glyphicon-pencil" style="top:90px;left: 180px;color: white;"></span></a><center><img src="avatar-367-456319.png" alt="John" style="width:30%"></center>
							 <h1 style="font-size: 30px;font-family:Helvetica;"><B>Kuntal Sarkar</B>
							 <h2 style="font-family:OpenSans;font-size: 20px;">@kuntal_sarkar</h2></h1>
							  <a href="" id="link" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-pencil"></span> Edit Info</a>
							  <hr>
							  <h2><li>Completed gradutaion in BCA at 2019</li><br><li>Pursuing MCA</h2></li>
						</div>
					</div>
						<div class="col-lg-8 col-md-8 col-sm-12" style="border:px solid black;">
							<div class="col-md-offset- col-sm-12 box1">
								<div class="row">
									<div class="col-sm-6">
										<h1><span class="glyphicon glyphicon-star"></span>Badges</h1>
										 <h2><span class="glyphicon glyphicon-file"></span><br>
										Problem Solving<br><br>
										<span class="glyphicon glyphicon-menu-hamburger"></span><br>C++</h2>	
									</div>
									<div class="col-sm-6">
										<h1><span class="glyphicon glyphicon-star"></span>2nd</h1>
										 <h2><span class="glyphicon glyphicon-credit-card"></span><br>10days of JS
										<br><br><span class="glyphicon glyphicon-modal-window"></span>
										<br>SQL</h2>
									</div>
								</div><hr>
							</div>
						</div>
					<div class="col-lg-8 col-md-8 col-sm-12" style="border:px solid black;">
						<div class=" col-sm-12 box2" style="padding: 20px;" >
							<h1> <span class="glyphicon glyphicon-education"></span>Education</h1>
							 <h2><span class="glyphicon glyphicon-asterisk"></span><b>UEM, Kolkata(University Of Engineering &amp; Management)</b>
							<br><a href="" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-pencil" style="float: right;"></span></a> &nbsp; &nbsp;	Computer Science, MCA | July 2019 - Present</h2>
							<br><hr>
						</div>
					</div>	
					<div class="col-lg-4 col-md-4 col-sm-12">
						<p>&nbsp;</p>
					</div>	
							
						<div class="col-lg-8 col-md-8 col-sm-12" style="border:px solid black; padding:50px 10px;">
							<div class="row">
							<div class="col-sm-12 box2" style="padding:0px 30px;">
								<h1> <span class="glyphicon glyphicon-list-alt"></span>How many language do you know?</h1>
								<h2><li>C</li>
								<li>C++</li>
								<li>Java</li>
								<li>Data Structure</li></h2>
									<hr>
							</div>
						</div>
						</div>
				</div>
			</div>
							<br><br><br>
					<div class="container">
						  <!-- Modal -->
						<div class="modal fade" id="myModal" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						     	<div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          	<h1 style="text-align: center;font-family: arial;">Edit Info</h1><hr>
										    <form action="/action_page.php">
											    <div class="form-group">
											      <label for="uname">Username:</label>
											      <input type="name" class="form-control" id="uname" placeholder="Enter Username" name="uname">
											    </div>
											    <div class="form-group">
											      <label for="name">First Name:</label>
											      <input type="name" class="form-control" id="uname" placeholder="Enter first Name" name="name">
											    </div>
											    <div class="form-group">
											      <label for="name">Last Name:</label>
											      <input type="name" class="form-control" id="uname" placeholder="Enter Your Name" name="name">
											    </div>
											    <div class="form-group">
											      <label for="pwd">Password:</label>
											      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
											    </div>
											    <center><button type="submit" class="btn btn-default">Change</button></center>
											  </form>
							        </div>
						      	</div>
						    </div>
						</div>
					</div>
					<div class="container">
						  <!-- Modal -->
						<div class="modal fade" id="myModal2" role="dialog">
						    <div class="modal-dialog">
						    
						      <!-- Modal content-->
						     	<div class="modal-content">
							        <div class="modal-header">
							          <button type="button" class="close" data-dismiss="modal">&times;</button>
							          		<h1 style="text-align: center;font-family: arial">Edit Education</h1><hr>
										    <form action="/action_page.php">
											    <div class="form-group">
											      <label for="sch">School/College:</label>
											      <input type="name" class="form-control" id="name" placeholder="Enter School or College Name" name="name">
											    </div>
											    <div class="form-group">
											      <label for="name">Course:</label>
											      <input type="name" class="form-control" id="cname" placeholder="Enter Course Name" name="cname">
											    </div>
											    <div class="form-group">
											      <label for="name">Year:</label>
											      <input type="number" class="form-control" id="year" placeholder="Enter Year" name="year">
											    </div>
											    <center><button type="submit" class="btn btn-default">Change</button></center>
											  </form>
							        </div>
						      	</div>
						    </div>
						</div>
					</div>
	</section>
<?php
include "Footer.php";
?>