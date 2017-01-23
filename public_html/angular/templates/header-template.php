<header ng-controller="headerController">
	<bootstrap-breakpoint></bootstrap-breakpoint>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="navbar-header" id="nav-main">
			<button type="button" class="navbar-toggle collapsed" id="burger" data-toggle="collapse" data-target="#nav-bts" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
				<a href="home" class="navbar-brand">
					<!--<div  class="col-xs-4">-->
					<img id="topnav-logo" src="media/kg-icon-placeholder.png"/>
				<!--</div>-->
				</a>
				<div class="bar-box">
					<div id="barbar"></div>
				</div>
				<div class="topnav-heading">Kai Garrott</div>
			</div>
				<div class="collapse navbar-collapse" id="nav-bts">
				<ul class="nav navbar-nav navbar-right">
					<!--<li class="col-xs-4 col-md-2 topnav"><a href="contact">Contact</a></li>-->
					<li><a href="about">About</a></li>
					<li><a href="portfolio">Portfolio</a></li>
				</ul>
			</div>
			<hr class="topnavline">
	</nav> <!-- /row -->
</header>
