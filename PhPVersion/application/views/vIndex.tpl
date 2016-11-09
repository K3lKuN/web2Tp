{include file='./Layout/layout_entete.inc.tpl'}
<body>
	<section>
		<header>
			<div class="col-md-12">
				{include file='./Layout/navbar.tpl'}
			</div>
		</header>
		<article>
			{block name="article"}
				<script type="text/javascript" src="{base_url('res/js/filtre.js')}"></script>
				<div class="col-md-1">
				</div>
				<div class="col-md-10 table-responsive">
					<table class="table table-striped" id="myTable">
						<thead>
							<tr>
								<th>Prenom</th>
								<th>NOM</th>
								<th>Filiaire</th>
								<th>Date de naissance</th>
							</tr>
						</thead>
						<tbody>
							{foreach $profil as $pf}
								<tr>
									<td>{$pf->Prenom}</td>
									<td>{$pf->Nom}</td>
									<td>{$pf->Filiaire}</td>
									<td>{$pf->Naissance}</td>
								</tr>
							{/foreach}
						</tbody>
					</table>
				</div>
				<div class="col-md-1">
				</div>
			{/block}
		</article>
	</section>
</body>