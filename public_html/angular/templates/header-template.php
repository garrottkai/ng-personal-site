<!-- template for header -->
<header ng-controller="headerController">
	<bootstrap-breakpoint></bootstrap-breakpoint>
	<div class="row topnav-row">
		<div class="navbar" id="nav-main">
			<div class="navbar-inner">

				<a href="home">
					<img class="col-md-4" id="topnav-logo" ng-class="{'logoCenter' : $scope.where = '/' && document.getElementById('scroll-box').scrollTop <= 50 , 'logoLeft' : $scope.where != '/' || document.getElementById('scroll-box').scrollTop > 50 }" src="media/kg-icon-placeholder.png" />
<!--					<div class="col-xs-12 col-md-4 topnav-l">Kai Garrott</div>-->
				</a>
				<ul class="nav">
					<li class="col-xs-4 col-md-2 topnav"><a href="contact">Contact</a></li>
					<li class="col-xs-4 col-md-2 topnav"><a href="about">About</a></li>
					<li class="col-xs-4 col-md-2 topnav"><a href="portfolio">Portfolio</a></li>
				</ul>
			</div>
<!--<script>var daBox = document.getElementById('scroll-box').scrollTop; console.log(daBox);</script>-->
		</div>
	</div> <!-- /row -->
	<hr class="topnavline">
</header>