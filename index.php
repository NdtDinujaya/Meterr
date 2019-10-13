<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon.ico">
	<title>EWater Meter</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />
	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />

</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/water.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="#">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/logo.png">
	            </div>
	            <div class="brand">
	                E-Water Meter
	            </div>
	        </div>
	    </a>

		
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="green" id="wizardProfile">
		                    
		                    <form action="logincheck.php" method="POST"  >
		               		<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        	   Login
		                        	</h3>
									
		                    	</div>
		                    	<div class="row">
		                    		
		                    	<div class="col-sm-4 col-sm-offset-1" style="padding-top: 35px;">
		                                    	<div class="picture-container">
		                                        	<div class="picture">
                                        				<img src="assets/img/default-avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
		                                        	</div>
		                                    	</div>
		                                	</div>

		                                	<div class="col-sm-6" style="padding-top: 0px;">

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">face</i>
													</span>
													<div class="form-group label-floating">
			                                          <label class="control-label">enter email address <small>(required)</small></label>
			                                          <input name="email" type="text" class="form-control">
			                                        </div>
												</div>

												<div class="input-group">
													<span class="input-group-addon">
														<i class="material-icons">record_voice_over</i>
													</span>
													<div class="form-group label-floating">
													  <label class="control-label">enter password <small>(required)</small></label>
													  <input name="pass" type="password" class="form-control">

													 </div>
												</div>
												</div>
		                    	</div>
		                    	<div class="row">
		                    		<div class="col-sm-4 col-sm-offset-6" style=" ;">
		                    			<input type='submit'  class='btn btn-primary btn-fill btn-success' name='loggedin' value='Log In'  />

		                    			
		                    			<a href="register.html"><input type='button'  class='btn btn-primary btn-fill btn-success' value='Register'  /></a>
		                    			
		                    		</div>
		                    
		                    		  
		                    	</div>
		                    
											
													
								
								
												


		                    	
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div><!-- end row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	              </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
    <script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

    <!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>

