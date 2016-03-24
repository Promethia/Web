<?php
	if(!isset($theme)) {
		$theme = new AdminTheme();
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="apple-mobile-web-app-capable" content="yes" />
		<meta name="apple-mobile-web-app-status-bar-style" content="black" />
    	<title>{{ $theme->pageTitle() }}</title>
    	@include('layout.icons')
	</head>
	<body>
		@include('admin.layout.navbar')
		<section class="admin-title no-content"></section>
		<div class="container-fluid wrapper">
			<div class="row row-offcanvas row-offcanvas-left">
				<div class="col-xs-6 col-sm-3 col-md-2 toolbar toolbar-offcanvas">
					@include('admin.layout.tools')
				</div>
				<div class="col-xs-12 col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 animated fadeIn">
					<h1><i class="fa fa-dashboard fa-fw"></i> Dashboard</h1>
					<div class="jumbotron">
						<h1>Welcome to the Promethia Admin Panel!</h1>
						<p>This is the resource to run the server.</p>
					</div>
					@yield('content')
				</div>
			</div>
			<div class="row">
				<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 footer admin-footer">
					@include('admin.layout.footer')
				</div>
			</div>
		</div>
		{{ Minify::stylesheet($theme->pageStylesheets(), array('defer' => true, 'rel' => 'import')) }}
		{{ HTML::style('https://fonts.googleapis.com/css?family=Lora:400italic|Cinzel:400,700|Cinzel+Decorative:400,700|Montserrat:400,700|Raleway:400,100,200,300,500,600,700,800|Dancing+Script') }}
		{{ Minify::javascript($theme->pageScripts(), array('async' => true)) }}
	</body>
</html>