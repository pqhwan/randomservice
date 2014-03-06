<!DOCTYPE html>
<html>
	<head>
		<title>Swiggly</title>
		
		<!-- Bootstrap CSS here -->
		<link href="<?=base_url(); ?>application/assets/css/bootstrap.css" rel="stylesheet" />
		<link href="<?=base_url(); ?>application/assets/css/bootstrap-theme.css" rel="stylesheet" />
		
		<!-- Custom CSS here -->
		
		
		<!-- JQuery and Bootstrap JS here -->
		<script src="<?=base_url(); ?>application/assets/js/jquery.js"> </script>
		<script src="<?=base_url(); ?>application/assets/js/bootstrap.js"> </script>
		
		<!-- Custom js -->
		
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
  			<div class="container-fluid">
   			 <!-- Brand and toggle get grouped for better mobile display -->
    			<div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
			        <span class="sr-only">Toggle navigation</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
      			<a class="navbar-brand" href="<?=site_url(); ?>">Swiggly</a>
    		</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    	
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
      
      <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Login</a></li>
        
        <li><a href="<?=site_url('signup/signup'); ?>">Signup</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>