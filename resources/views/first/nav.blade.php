<!DOCTYPE html>
<html>
<head>
	<title>burger</title>
	<!-- <link rel="stylesheet" type="text/css" href="css/body.css"> -->
	<!-- Materialize -->
	<link type="text/css" rel="stylesheet" href="assets/materialize/css/materialize.min.css"  />
	<link type="text/css" rel="stylesheet" href="assets/materialize/fonts/roboto/Roboto-Bold.woff"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="assets/materialize/js/materialize.min.js" />
</head>
<body>
<nav class="default" role="navigation">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo center">Brand</a>
     <!--  <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a> -->
     <a href="#" data-activates="mobile-demo" class="button-collapse show-on-large"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#">Login</a></li>
        <li><a class="waves-effect red waves-light btn">Sign up</a></li>
      </ul>
      <ul class="side-nav" id="mobile-demo">
        <li><a href="#">Login</a></li>
        <li><a href="#">Sign up</a></li>
      </ul>
    </div>
    </nav>
</body>
<script type="text/javascript">
	$('.button-collapse').sideNav({
      menuWidth: 300, // Default is 240
      edge: 'left', // Choose the horizontal origin
      closeOnClick: true // Closes side-nav on <a> clicks, useful for Angular/Meteor
    }
</script>
</html>

 


