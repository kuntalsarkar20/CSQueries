<!DOCTYPE html>
<html lang="en">
<head>
	<title>First Page</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <!--modal-->
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <!--Animate on Scroll CDN Sources -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
	<!--End AOS CDN Sources -->
    <link rel="stylesheet" type="text/css" href="StyleSheet.css"><!-- Our Style Sheet -->
    <link rel="stylesheet" type="text/css" href="StyleSheet2.css"><!-- Our Style Sheet -->
    <!--CKEditor CDN Sources -->
    <script src="https://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@700&display=swap" rel="stylesheet">
    <!-- Icon -->
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style type="text/css">
 
.ml16 {
  color: #402d2d;
  padding: 40px 0;
  font-weight: 800;
  font-size: 2em;
  text-transform: uppercase;
  letter-spacing: 0.5em;
  overflow: hidden;
}

.ml16 .letter {
  display: inline-block;
  line-height: 1em;
}
.ml1 {
  font-weight: 900;
  font-size: 3.5em;
}

.ml1 .letter {
  display: inline-block;
  line-height: 1em;
}

.ml1 .text-wrapper {
  position: relative;
  display: inline-block;
  padding-top: 0.1em;
  padding-right: 0.05em;
  padding-bottom: 0.15em;
}

.ml1 .line {
  opacity: 0;
  position: absolute;
  left: 0;
  height: 3px;
  width: 100%;
  background-color: #fff;
  transform-origin: 0 0;
}

.ml1 .line1 { top: 0; }
.ml1 .line2 { bottom: 0; }
/*.hexagon { 
            top: 30vh; 
            left: 40%; 
            position: absolute; 
            margin: 0 auto; 
            background-color: dodgerblue; 
            border-radius: 10px; 
            width: 100px;  
            height: 63px; 
            box-sizing: border-box; 
            transition: all 1s; 
            border: 0.4vh solid transparent; 
        } 
          
        /* Creating pseudo-class */
        .hexagon:before, .hexagon:after { 
            content: ""; 
            border: inherit; 
            position: absolute; 
            top: -0.5vh; 
            left: -0.5vh; 
            background-color: dodgerblue; 
            border-radius: inherit; 
            height: 100%; 
            width: 100%; 
            z-index: -1;
        } 
          
        /* Align them in such a way 
        that they form a hexagon */
        .hexagon:before { 
            transform: rotate(60deg); 
        } 
        .hexagon:after { 
            transform: rotate(-60deg); 
        }
        /*Cookie Consent Begin*/
#cookieConsent {
    background-color: rgba(20,20,20,0.8);
    min-height: 26px;
    font-size: 14px;
    color: #ccc;
    line-height: 26px;
    padding: 8px 0 8px 30px;
    font-family: "Trebuchet MS",Helvetica,sans-serif;
    position: fixed;
    bottom: 0;
    left: 0;
    right: 0;
    display: none;
    z-index: 9999;
}
#cookieConsent a {
    color: #4B8EE7;
    text-decoration: none;
}
#closeCookieConsent {
    float: right;
    display: inline-block;
    cursor: pointer;
    height: 20px;
    width: 20px;
    margin: -15px 0 0 0;
    font-weight: bold;
}
#closeCookieConsent:hover {
    color: #FFF;
}
#cookieConsent a.cookieConsentOK {
    background-color: #F1D600;
    color: #000;
    display: inline-block;
    border-radius: 5px;
    padding: 0 20px;
    cursor: pointer;
    float: right;
    margin: 0 60px 0 10px;
}
#cookieConsent a.cookieConsentOK:hover {
    background-color: #E0C91F;
}
/*Cookie Consent End*/
    </style>
    <script type="text/javascript">
    	$(document).ready(function(){   
    setTimeout(function () {
        $("#cookieConsent").fadeIn(100);
     }, 1000);
    $("#closeCookieConsent, .cookieConsentOK").click(function() {
        $("#cookieConsent").fadeOut(200);
    }); 
}); 
    </script>
<!-- Slide Show of Contributor -->
    <script type="text/javascript">
    	// When the DOM is ready, run this function
$(document).ready(function() {
  //Set the carousel options
  $('#quote-carousel').carousel({
    pause: true,
    interval: 4000,
  });
});
    </script>
    </head>
<body>
	
	<nav class="navbar navbar-inverse navbar-fixed-top navBar">
	  <div class="container"> <!--To make the navbar full screen add -fluid here -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>                        
	      </button>
	      <a class="navbar-brand" href="#">CSQueries</a>
	    </div>
	    <div class="collapse navbar-collapse" id="myNavbar">
	      <ul class="nav navbar-nav">
	        <li><a href="#" ><span class="glyphicon glyphicon-home"></span> Home</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-list-alt"></span> Category <span class="caret"></span></a>
	          <ul class="dropdown-menu navBar">
	            <li><a href="#">DBMS</a></li>
	            <li><a href="#">DS & Algorithm</a></li>
	            <li><a href="#">C</a></li>
	            <li><a href="#">C++</a></li>
	          </ul>
	        </li>
	      </ul>
	     <!--  <form class="navbar-form navbar-left">
		      <div class="input-group">
		        <input type="text" class="form-control" placeholder="Search" name="search">
		        <div class="input-group-btn">
		          <button class="btn btn-default" type="submit">
		            <i class="glyphicon glyphicon-search"></i>
		          </button>
		        </div>
		      </div>
		    </form> -->
	      <ul class="nav navbar-nav navbar-right">
	        <li><a href="Signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        <li><a href="Login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      </ul>
	    </div>
	  </div>
	</nav>
