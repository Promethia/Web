<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
				<span class="fa fa-bars"></span>
			</button>
			{{ link_to('/', 'Promethia', array('class' => 'navbar-brand')) }}
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			@include('layout.nav')
		</div>
	</div>
</nav>