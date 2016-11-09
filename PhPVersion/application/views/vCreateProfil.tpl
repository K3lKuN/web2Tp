{extends file="vIndex.tpl"}
{block name="article"}
<div class="row">
<div class="col-md-1">
</div>
<div class="col-md-10 well">
	<h1 style="text-align: center">Créer un profil</h1>
	<form class="form-horizontal" method="post" action="{site_url('cAccount/signUp')}" enctype="multipart/form-data">
		<div class="form-group">
			{form_error('prenom')}
			<label for="prenom" class="col-xs-12 col-sm-6 col-md-2 ">Prenom</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
			</div>
		</div>
		<div class="form-group">
			{form_error('nom')}
			<label for="nom" class="col-xs-12 col-sm-6 col-md-2 ">Nom</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
			</div>
		</div>
		<div class="form-group">
			{form_error('filiaire')}
			<label for="filaire" class="col-xs-12 col-sm-6 col-md-2 ">Filiaire</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="filaire" name="filiaire" placeholder="Filiaire">
			</div>
		</div>
		<div class="form-group">
			{form_error('ville')}
			<label for="Ville" class="col-xs-12 col-sm-6 col-md-2 ">Ville</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Ville" name="ville" placeholder="Ville">
			</div>
		</div>
		<div class="form-group">
			{form_error('telephone')}
			<label for="Telephone" class="col-xs-12 col-sm-6 col-md-2 ">Telephone</label>
			<div class="col-sm-10">
				<input type="text" class="form-control" id="Telephone" name="telephone" placeholder="Telephone">
			</div>
		</div>
		<div class="form-group">
			{form_error('dob')}
			<label for="dob" class="col-xs-12 col-sm-6 col-md-2 ">Date of Birth</label>
			<div class="col-sm-10">
				<input type="date" class="form-control" id="dob" name="dob" placeholder="">
			</div>
		</div>
		<div class="form-group">
			{form_error('email')}
			<label for="Email" class="col-xs-12 col-sm-6 col-md-2 ">Email</label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="Email" name="email" placeholder="Email">
			</div>
		</div>
		<div class="form-group">
			{form_error('pass')}
			<label for="Password" class="col-xs-12 col-sm-6 col-md-2 ">Password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="Password" name="pass" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			{form_error('cPass')}
			<label for="Passwordc" class="col-xs-12 col-sm-6 col-md-2 ">Confirmation password</label>
			<div class="col-sm-10">
				<input type="password" class="form-control" id="Passwordc" name="cPass" placeholder="Password">
			</div>
		</div>
		<div class="form-group">
			{form_error('img')}
			<label for="imgProfil" class="col-xs-12 col-sm-6 col-md-2 ">Image de profil</label>
			<input type="file" id="imgProfil" name="imgProfil" class="col-xs-12 col-sm-6 col-md-2 ">
			<p class="help-block">Veuillez choisir une image de profil</p>
		</div>
		<div class="form-group">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-default" name="action" value="Valider">Sign in</button>
			</div>
		</div>
	</form>
</div>
<div class="col-md-1">
</div>
</div>
{/block}