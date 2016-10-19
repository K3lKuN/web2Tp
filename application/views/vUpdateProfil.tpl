{extends "vMember.tpl"}

{block name="subContent"}

<div id="subJsMenu">
	<a onclick="displayAvatar(this)" href="#">Modifier l'avatar</a>
	<a onclick="displayInfo(this)" href="#">Modifier mes info</a>
	<a onclick="displayPass(this)" href="#">Modifier mon mot de passe</a>
</div>
<div id="avatarUpProfile" style="display:none">
	<p>Avatar actuel :</p>
	<img src="{base_url('res/images/uploads/avatar/')}/{$userInfo->UTI_AVATAR}"</p>
	<form method="post" action="{site_url('cMember/upAvatar')}" enctype="multipart/form-data">
		<input type="file" name="userfile"/></br>
		<input type="hidden" name="login" value="{$login}">

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>
<div id="formInfoUp" style="display:none">
	<form method="post" action="{site_url('cMember/upProfil')}" enctype="multipart/form-data">
		<label for="login">Login* :</label>
		<input type="text" name="login" size="25" value="{$userInfo->UTI_LOGIN}"/></br>

		<label for="email">Email* :</label>
		<input type="text" name="email" size="25" value="{$userInfo->UTI_MAIL}"/></br>

		<label for="nom">Nom* :</label>
		<input type="text" name="nom" size="25" value="{$userInfo->UTI_NOM}"/></br>

		<label for="prenom">Prenom* :</label>
		<input type="text" name="prenom" size="25" value="{$userInfo->UTI_PRENOM}"/></br>

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>
<div id="formUpPass" style="display:none">
	<form method="post" action="{site_url('cMember/upPass')}" enctype="multipart/form-data">
		<label for="oldPwd">Ancien mot de passe* :</label>
		<input type="password" name="oldPwd" size="25"></br>

		<label for="pwd">Nouveau mot de passe* :</label>
		<input type="password" name="pwd" size="25"></br>

		<label for="passconf">Retaper le mot de passe* :</label>
		<input type="password" name="passconf" size="25"></br>

		<input type="submit" name="action" value="Valider"></br>
	</form>
</div>

{/block}