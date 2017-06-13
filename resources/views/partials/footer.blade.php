<nav>

@if (Auth::check())
	<nav class="navbar navbar-default text-center">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand glyphicon glyphicon-cutlery" href="/"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<li class="active"><a href="/">HOME</a></li>
				{{-- <li><a href="/dashboard/">DASHBOARD</a></li> --}}
				<li><a href="/recipes/browse/">BROWSE</a></li>
				<li><a href="/recipes/search/">SEARCH</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="/signout/">SIGN OUT</a></li>
				</ul>
				
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
			
@else
	<nav class="navbar navbar-default text-center">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand glyphicon glyphicon-cutlery" href="#"></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
				<li class="active"><a href="/">HOME</a></li>
				<li><a href="/recipes/browse/">BROWSE</a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li><a href="/signin/">SIGN IN</a></li>
				<li><a href="/signup/">SIGN UP</a></li>
				</ul>
				
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>
</nav>
