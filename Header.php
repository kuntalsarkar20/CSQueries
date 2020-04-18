<!DOCTYPE html>
<html>
<head>
	<title>First Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="StyleSheet.css"><!-- Our Style Sheet -->
</head>
<body>
	<div class="loader"></div>
	<nav class="navbar navbar-inverse navbar-fixed-top navBar">
	  <div class="container"> <!--To make the navbar full screen add -fluid here -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#" id="linkcolor">CSQueries</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li><a href="#" id="linkcolor">Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="linkcolor">Category <span class="caret"></span></a>
	          <ul class="dropdown-menu" style="width:250px;">
	            <li><a href="#" id="linkcolor">DBMS</a></li>
	            <li><a href="#" id="linkcolor">DS & Algorithm</a></li>
	            <li><a href="#" id="linkcolor">C</a></li>
	            <li><a href="#" id="linkcolor">C++</a></li>
	          </ul>
	        </li>
	      </ul>
	      <form class="navbar-form navbar-left">
		      <div class="input-group">
		        <input type="text" class="form-control" placeholder="Search" name="search">
		        <div class="input-group-btn">
		          <button class="btn btn-default" type="submit">
		            <i class="glyphicon glyphicon-search"></i>
		          </button>
		        </div>
		      </div>
		    </form>
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="#" id="linkcolor"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="#" id="linkcolor"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>