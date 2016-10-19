{extends file="vIndex.tpl"}
{block name="article"}
	<div class="row">
		<div class="col-md-3">
		</div>
		<div class="col-md-6 well well-lg">
			<form class="form-horizontal">
			  <div class="form-group">
					<label for="prenom" class="col-xs-12 col-sm-6 col-md-2">Année d'obtention</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="prenom" placeholder="Prenom">
					</div>
				</div>
			  <div class="form-group">
			    <label for="diplome" class="col-xs-12 col-sm-6 col-md-2">Intitulié du diplome</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" id="diplome" placeholder="diplome">
				</div>
			  </div>
			  <div class="form-group">
			    <label for="lieu" class="col-xs-12 col-sm-6 col-md-2">Lieu d'obtention</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" id="lieu" placeholder="lieu">
				</div>
			  </div>
			  <button type="submit" class="btn btn-default">Ajouter un diplome</button>
			</form>
		</div>
		<div class="col-md-3">
		</div>
	</div>
{/block}