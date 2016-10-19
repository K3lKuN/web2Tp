<!-- voir pour la faire en php -->

{extends "vIndex.tpl"}

{block name="content"}
	<h2>{$titre}</h2></br>
	<div id="content">
		<form method="post" action="{site_url('cLog/signup')}" enctype="multipart/form-data">
			<label for="login">Login* :</label>
			<input type="text" name="login" size="25"/></br>

			<label for="email">Email* :</label>
			<input type="text" name="email" size="25"/></br>

			<label for="nom">Nom* :</label>
			<input type="text" name="nom" size="25"/></br>

			<label for="prenom">Prenom* :</label>
			<input type="text" name="prenom" size="25"/></br>

			<label for="pwd">Password* :</label>
			<input type="password" name="pwd" size="25"></br>

			<label for="passconf">Password Confirmation* :</label>
			<input type="password" name="passconf" size="25"></br>

			<input type="hidden" name="avatar" value="default.png">

			<input type="submit" name="action" value="Valider"></br>
			{anchor('cLog/login','Me connecter')}
		</form>
	</div>
{/block}