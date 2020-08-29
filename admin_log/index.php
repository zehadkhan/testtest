<?php 
session_start();

	require_once 'db_connect.php';
// session_start();


?>
<?php 
	include 'includes/header.php'; 
?>

<body >
	<div class="container middile_point">
		<div class="row justify-content-center">
			<div class="col-md-4 ">
				<div class="panel panel-information text-center">

					<div class="panel-body">
						<h2>Please Login</h2>
						<form class="form-horizontal" action="login.php" method="post" id="loginForm">
							<fieldset>

							  <div class="form-group">
									<!-- <label for="email" class="col-sm-2 control-label">Email</label> -->
									<div class="col-sm-12">
										<input type="email" name="email" placeholder="Name" autocomplete="off" class="form-control">
										<span id="mail_val" class="text-danger"></span>
										
									</div>
								</div>
								<div class="form-group">
									<!-- <label for="password" class="col-sm-2 control-label">Password</label> -->
									<div class="col-sm-12">
										<input  type="password" name="password" placeholder="Password" autocomplete="off" class="form-control">
									</div>
								</div>								
								<div class="form-group">
									<div class="col-sm-offset-0 col-sm-12">
										<button type="submit" name="submit" class="btn btn-primary btn-default">Login</button>
										<p> 
											<?php
												if (isset($msgs)){
													echo $msgs;
												}
											?>
										</p>
									</div>
								</div>

							</fieldset>
						</form>
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

	
</body>
	
</html>







	