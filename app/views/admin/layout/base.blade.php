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
    	<title>{{ $theme->pageTitle() }}</title>
	</head>
	<body>
		@include('layout.navbar')
		{{ Minify::stylesheet($theme->pageStylesheets(), array('defer' => true, 'rel' => 'import')) }}
		{{ HTML::style('https://fonts.googleapis.com/css?family=Lora:400italic|Cinzel:400,700|Cinzel+Decorative:400,700|Montserrat:400,700|Raleway:400,100,200,300,500,600,700,800|Dancing+Script') }}
	</body>
</html>