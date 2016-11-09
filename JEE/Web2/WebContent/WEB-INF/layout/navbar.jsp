<nav class="navbar navbar-default">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./toto">Master Link</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="./toto">Accueil</a></li>
					<li><a href="{site_url('cAccount/profil')}">Mon Profil</a></li>
				    <li><a href="{site_url('cDiplome/createDiplome')}">Créer un diplôme</a></li>
					<li><a href="{site_url('cAccount/createProfil')}">Créer son profil</a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<div class="form-group" class="input-filter-container">
					<input type="text" id="InputSearch" onkeyup="filtreTable()" class="form-control" placeholder="Recherche">
				</div>
			</form>
			<ul class="nav navbar-nav navbar-right">
					<li><a href="{site_url('cAccount/logout')}">déconnection</a></li>
					<li><a href="{site_url('cAccount/login')}">conection</a></li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav>