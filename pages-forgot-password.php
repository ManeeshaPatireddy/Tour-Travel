<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Forgot Password Form</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <link href="favicon.ico" rel="shortcut icon">
        <link rel="stylesheet" href="assets/css/bootstrap.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/animate.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/nexus2.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/responsive.css" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/custom.css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=PT+Sans" type="text/css" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:400,300" rel="stylesheet" type="text/css">
    </head>
    <body>
            <div id="pre-header" class="container" style="height: 40px">
            </div>
            <div id="post_header" class="container" style="height: 40px">
            </div>
            <div id="content-top-border" class="container">
            </div>
            <div id="content">
                <div class="container background-white">
                    <div class="container">
                        <div class="row margin-vert-30">
                            <div class="col-md-6 col-md-offset-3 col-sm-offset-3">
                                <form class="login-page" method="post">
                                    <div class="login-header margin-bottom-30">
                                        <h2>Forgot Password</h2>
										<p>Enter Your Email Id to Recover Your Password.</p>
                                    </div>
                                    <div class="input-group margin-bottom-20">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input placeholder="Email" class="form-control" type="text" name="t1">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <button class="btn btn-primary pull-right" type="submit" name="btn1">Recover Password</button>
                                        </div>
                                    </div>
									<hr>
                                </form>
								<?php
									if(isset($_POST["btn1"]))
									{
										$email=$_POST["t1"];
			 
										include("connect.php");
										$q="SELECT * FROM tour_register WHERE reg_email='".$email."'";
				
										$result=mysqli_query($con,$q);
										$num=mysqli_num_rows($result);
										if($num==1)
										{
											$_SESSION["reg_email"]=$email;
											echo"<script>alert('Successful')</script>";
											echo"<script>window.location.href='forgot-password1.php'</script>";
										}
										else
											echo"<script>alert('Wrong email')</script>";
											echo"<script>window.location.href='pages-forgot-password.php'</script>";
									}
								?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- === END CONTENT === -->
            <!-- JS -->
            <script type="text/javascript" src="assets/js/jquery.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/bootstrap.min.js" type="text/javascript"></script>
            <script type="text/javascript" src="assets/js/scripts.js"></script>
            <!-- Isotope - Portfolio Sorting -->
            <script type="text/javascript" src="assets/js/jquery.isotope.js" type="text/javascript"></script>
            <!-- Mobile Menu - Slicknav -->
            <script type="text/javascript" src="assets/js/jquery.slicknav.js" type="text/javascript"></script>
            <!-- Animate on Scroll-->
            <script type="text/javascript" src="assets/js/jquery.visible.js" charset="utf-8"></script>
            <!-- Sticky Div -->
            <script type="text/javascript" src="assets/js/jquery.sticky.js" charset="utf-8"></script>
            <!-- Slimbox2-->
            <script type="text/javascript" src="assets/js/slimbox2.js" charset="utf-8"></script>
            <!-- Modernizr -->
            <script src="assets/js/modernizr.custom.js" type="text/javascript"></script>
            <!-- End JS -->
    </body>
</html>
<!-- === END FOOTER === -->
