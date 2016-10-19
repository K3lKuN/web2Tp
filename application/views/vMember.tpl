{extends "vIndex.tpl"}
{block name="content"}
		<h4>Espace Membre</h4>
		{if isset($logged)}
			{if !$logged}
				<p>Vous n'êtes pas logué.</p>
			{else}
				<p>Bienvenue {$login}</P>

				<div id='mainBlock'>
					<div id='memberMenue'>
						<a href="{site_url('cMember/viewMember')}">Mes informations</a>
						<a href="{site_url('cMember/mesRecette')}">Mes recettes</a>
						<a href="{site_url('cMember/updateProfil')}">Modifier Profil</a>
						{if $userInfo->UTI_ADMIN==2}
							<a href="{site_url('cMember/validRecette')}">Modération des recettes</a>
							<a href="{site_url('cMember/validUser')}">Modération des utilisateur</a>
						{/if}
					</div>
					<div id="memberContent">
						{block name="subContent"}
						<!-- Solution temporaire avant javascript -->
							<p style="text-align: center"><img src="{base_url('res/images/uploads/avatar/')}/{$userInfo->UTI_AVATAR}" width="30%"></p>
							<p>Vos informations personnels : </p>
							<ul>
								<li>Login : {$userInfo->UTI_LOGIN}</li>
								<li>Adresse e-mail : <a href="mailto:{$userInfo->UTI_MAIL}">{$userInfo->UTI_MAIL}</a></li>
								<li>Nom : {$userInfo->UTI_NOM}</li>
								<li>Prénom : {$userInfo->UTI_PRENOM}</li>
							</ul>
						{/block}
					</div>
				</div>
			{/if}
		{/if}
{/block}