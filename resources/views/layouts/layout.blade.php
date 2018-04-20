<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Blog</title>

		<!-- <link href="{{ asset('/css/app.css') }}" rel="stylesheet"> -->

		<!-- Fonts -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		
		<!-- Materialize -->
		<link type="text/css" href="assets/materialize/css/materialize.min.css"  />
		<link type="text/css  href="assets/materialize/fonts/roboto/Roboto-Bold.woff" media="screen,projection" />
		<mimeMap fileExtension=".woff" mimeType="application/font-woff" />
		<link type="text/css"  href="assets/materialize/js/materialize.min.js" />

		

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!-- [if lt IE 9]> -->
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<!-- <![endif] -->
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li>
							<a href="{{ url('/') }}">Home</a>
						</li>
					</ul>

					<ul class="nav navbar-nav pull-right">
						@if (Auth::guest())
						<li>
							<a href="{{ url('login') }}">Login</a>
						</li>
						<li>
							<a href="{{ url('register') }}">Register</a>
						</li>
						@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								@if (Auth::user()->can_post())
								<li>
									<a href="{{ url('/new-post') }}">Add new post</a>
								</li>
								<li>
									<a href="{{ url('/user/'.Auth::id().'/posts') }}">My Posts</a>
								</li>
								@endif
								<li>
									<a href="{{ url('/user/'.Auth::id()) }}">My Profile</a>
								</li>
								<li>
									<a href="{{ url('logout') }}">Logout</a>
								</li>
							</ul>
						</li>
						@endif
					</ul>
				</div>
			</div>
		</nav>
		 <!-- <ul id="nav-mobile" class="side-nav fixed"></ul> -->
		<div class="container">
			@if (Session::has('message'))
			<div class="flash alert-info">
				<p class="panel-body">
					{{ Session::get('message') }}
				</p>
			</div>
			@endif
			@if ($errors->any())
			<div class='flash alert-danger'>
				<ul class="panel-body">
					@foreach ( $errors->all() as $error )
					<li>
						{{ $error }}
					</li>
					@endforeach
				</ul>
			</div>
			@endif
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2>@yield('title')</h2>
							@yield('title-meta')
						</div>
						<div class="panel-body">
							@yield('content')
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<p>Copyright &copy; 2018 | <a href="http://www.findalltogether.com">Find All Together</a></p>
				</div>
			</div>
			 <!-- <div class="card-footer bg-transparent border-success">Footer</div> -->
		</div>

		<!-- Scripts -->
	<!-- 	@stack('scripts')
		<script src="{{ asset('/js/jquery.min-2.1.3.js') }}"></script>
		<script src="{{ asset('/js/bootstrap.min-3.3.1.js') }}"></script> -->
	</body>
</html>
