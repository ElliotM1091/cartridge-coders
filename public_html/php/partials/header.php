<!-- header -->
<header class="p-y-4">
	<div class="container">

		<!-- brand and toggle stuff-->
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<a class="navbar-brand" href="#">ROMuLess</a>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" size="55" class="form-control" placeholder="">
						</div>
						<button type="submit" class="btn btn-default">Search</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="paypal/profile.php"><i class="fa fa-user fa-2x"
																						  aria-hidden="true"></i></a></li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="btn-group btn-group-justified " role="group" aria-label="...">
					<div class="btn-group " role="group">
						<button type="button" class="btn categorybar" ng-click="categoryAll()">All</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar" ng-click="categoryAtari()">ATARI</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">NES</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Super NES</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">N64</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Sega</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Gameboy</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">GBA</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">GBA DS</button>
					</div>
					<div class="btn-group" role="group">
						<button type="button" class="btn categorybar">Other</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</header>