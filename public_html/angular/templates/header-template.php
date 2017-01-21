<header ng-controller="headerController">
	<bootstrap-breakpoint></bootstrap-breakpoint>
	<div class="navbar">
		<div class="navbar navbar-header" id="nav-main">
			<div class="navbar-inner">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav-bts"> <!-- ng-click="!navCollapsed" -->
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
				<a href="home" class="navbar-brand">
					<div  class="col-xs-4">
					<img id="topnav-logo" src="media/kg-icon-placeholder.png"/>
				</div>
				</a>
						</div>
				<div class="collapse navbar-collapse" id="nav-bts">
				<ul class="nav">
					<!--<li class="col-xs-4 col-md-2 topnav"><a href="contact">Contact</a></li>-->
					<li class="col-xs-4 col-md-2 topnav"><a href="about">About</a></li>
					<li class="col-xs-4 col-md-2 topnav"><a href="portfolio">Portfolio</a></li>
				</ul>
			</div>
			</div>


						<hr class="topnavline">
	</div> <!-- /row -->
</header>
