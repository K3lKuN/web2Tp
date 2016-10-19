{extends "vMember.tpl"}
{block name="subContent"}

<table id='tTable'>
	<thead>
		<tr id='nTable'>
			<th>Date</th>
			<th>Titre</th>
			<th>Statut</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		{foreach $recette as $rct}
		 <tr id='nTable' class="{$rct->RCT_ID}">
			<td >{$rct->RCT_DATE}</td>
			<td>{$rct->RCT_TITRE}</td>
			<td>{$rct->RCT_STATUT}</td>
			<td><a href="{site_url('cMember/modRct/')}/{$userId->UTI_ID}">Modifier</a> <a href="{site_url('cMember/delRct/')}/{$userId->UTI_ID}">Supprimer</a></td>
		</tr>
		{/foreach}
	 </tbody>
</table>
<a onclick="displayAdd(this)" href="#">Ajouter une recette</a>
<div id="add" style="display: none">
	<form method="post" action="{site_url('cRecette/addRct')}" enctype="multipart/form-data">
			<label for="titre">Titre* :</label>
			<input type="text" name="titre" size="25"/></br>

			<label for="description">Description* :</label>
			<textarea cols="80" class="ckeditor" id="editeur" name="description" rows="10"></textarea>

			<label for="tpsPrep">Temps de préparation :</label>
			<input type="time" name="tpsPrep"/></br>

			<label for="tpsCui">Temps de cuisson :</label>
			<input type="time" name="tpsCui"/></br>

			<label for="tpsRep">Temps de repos :</label>
			<input type="time" name="tpsRep"/></br>

			<label for="dif">Difficulté :</label>
			<select name="dif">
				<option value="facile">Facile</option>
				<option value="moyen">Moyen</option>
				<option value="difficile">Difficile</option>
			</select></br>

			<label for="cout">Coût :</label>
			<select name="cout">
				<option value="faible">Faible</option>
				<option value="moyen">Moyen</option>
				<option value="eleve">Elevé</option>
			</select></br>

			<input type="file" name="userfile"/>

			<input type="submit" name="action" value="Valider"></br>
		</form>
</div>
{/block}