<p style="text-align: center"><img src="{base_url('res/images/uploads/avatar/')}/{$userInfo->UTI_AVATAR}" width="30%"></p>
<p>Vos informations personnels : </p>
<ul>
	<li>Login : {$userInfo->UTI_LOGIN}</li>
	<li>Adresse e-mail : <a href="mailto:{$userInfo->UTI_MAIL}">{$userInfo->UTI_MAIL}</a></li>
	<li>Nom : {$userInfo->UTI_NOM}</li>
	<li>Prénom : {$userInfo->UTI_PRENOM}</li>
</ul>