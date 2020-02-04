<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>:: BLOG ::</title>

    <!-- Bootstrap -->
	<link href='https://fonts.googleapis.com/css?family=Raleway:400,500,600,700,800' rel='stylesheet' type='text/css'>
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="asset/css/font-awesome.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/offcanvas.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="wrapper">
		<header>
			<!--========================== Header-Top ================================-->
			<div class="header-top">
				<div class="container">
					<div class="col-md-9 col-sm-7 xs-view">
						<a href="index.php"><img class="logo" src="asset/images/logo.png" alt="Logo"/></a>
					</div>
					<div class="col-md-3 col-sm-5 xs-view-right">
						<div class="search-section center-block">
							<form>
								<input type="text" class="form-control" id="exampleInputName2" placeholder="Search">
								<button type="submit" class="btn btn-default btn-xs"><i class="fa fa-search"></i></button>
							</form>
						</div>
						<!-- Author -->
						<div class="author-form">
							<li class="dropdown">
								<form>
									<a href="#" class="dropdown-toggle author-icon" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
										<i class="fa fa-user author-icon"></i>
									</a>
									<ul class="dropdown-menu">
										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active">
												<a class="sign" href="#signin" aria-controls="signin" role="tab" data-toggle="tab">sign in</a>
											</li>
											<li role="presentation">
												<a class="sign" href="#signup" aria-controls="signup" role="tab" data-toggle="tab">sign up</a>
											</li>
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<div role="tabpanel" class="tab-pane active" id="signin">
												<ul class="user-dropdown">
													<div class="login-area">
														<div class="form-group">
															<label for="exampleInputText1">Username</label>
															<input type="email" class="form-control" id="exampleInputEmail1">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">Password</label>
															<input type="password" class="form-control" id="exampleInputPassword1">
														</div>
													</div>
													<div class="checkbox">
														<input id="option" type="checkbox" name="field" value="option">
														<label for="option"><span><span></span></span>Keep me singed in</label>
														<a href="#" class="pull-right">Forgot?</a>
													</div>
													<div class="form-submit">
															<button type="submit" class="btn btn-success btn-block">Sign in</button>
													</div>
												</ul><!-- /User-Dropdown-->
											</div><!-- /#Sing in -->
											<div role="tabpanel" class="tab-pane" id="signup">
												<ul class="user-dropdown">
													<div class="login-area">
														<div class="form-group">
															<label for="exampleInputText1">Username</label>
															<input type="email" class="form-control" id="exampleInputEmail1">
														</div>
														<div class="form-group">
															<label for="exampleInputEmail1">Email Address</label>
															<input type="email" class="form-control" id="exampleInputEmail1">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">Password</label>
															<input type="password" class="form-control" id="exampleInputPassword1">
														</div>
														<div class="form-group">
															<label for="exampleInputPassword1">Comfirm Password</label>
															<input type="password" class="form-control" id="exampleInputPassword1">
														</div>
													</div>
													<div class="checkbox">
														<input id="option1" type="checkbox" name="field" value="option1">
														<label for="option1"><span><span></span></span>I accept Terms and Condition ?</label>
													</div>
													<div class="form-submit">
														<button type="submit" class="btn btn-success btn-block">Sign up</button>
													</div>
												</ul><!-- /User-Dropdown-->
											</div><!-- /#Sing up -->
										</div><!-- /Tab-Content -->
									</ul><!-- /Dropdown-menu -->
								</form>
							</li><!-- /Dropdown -->
						</div><!-- /Author -->
					</div>
				</div>
			</div><!-- header-top -->
			
			<!--========================== Header-Nav ================================-->
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<div class="container">
						<p class="pull-left visible-xs">
							<button type="button" class="navbar-toggle" data-toggle="offcanvas">
								<i class="fa fa-long-arrow-right"></i>
								<i class="fa fa-long-arrow-left"></i>
							</button>
						</p>
						<div class="social-nav center-block visible-xs">
							<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus google-plus"></i></a></li>
						</div>
						<!--toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-left">
								<li><a href="index.php">home</a></li>
								<li><a href="about.php">about</a></li>
								<li><a href="contact.php">contact</a></li>
								<li><a href="details.php">Post Details</a></li>
							</ul>
							<ul class="nav navbar-nav navbar-right hidden-xs">
								<li><a href="#"><i class="fa fa-twitter twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus google-plus"></i></a></li>
							</ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-->
				</nav>
			</div><!-- Header-Nav -->
		</header>