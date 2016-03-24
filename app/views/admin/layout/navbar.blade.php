<nav class="navbar navbar-default navbar-fixed-top navbar-collapsed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
				<span class="fa fa-bars"></span>
			</button>
			{{ link_to('/', 'Promethia', array('class' => 'navbar-brand')) }}
			<button type="button" class="navbar-toggle pull-left" data-toggle="offcanvas">
				<span class="fa fa-list-ul"></span>
			</button>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			@include('layout.nav')
		</div>
	</div>
</nav>