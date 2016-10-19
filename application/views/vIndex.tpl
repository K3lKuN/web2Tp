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
								<th>Age</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>Julian</td>
								<td>HURST</td>
								<td>Génie Logiciel</td>
								<td>22 ans</td>
							</tr>
							<tr>
								<td>Kevin</td>
								<td>GARABEDIAN</td>
								<td>Génie Logiciel</td>
								<td>25 ans</td>
							</tr>
						</thead>
					</table>
				</div>
				<div class="col-md-1">
				</div>
			{/block}
		</article>
	</section>
</body>