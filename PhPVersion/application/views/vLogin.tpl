{extends file="vIndex.tpl"}
{block name="article"}
<div class="row">
	<div class="col-md-1">
	</div>

	<div class="col-md-10 well">
		<h1 style="text-align: center">Créer un profil</h1>
		<form class="form-horizontal" method="post" action="{site_url('cAccount/login')}" enctype="multipart/form-data">
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
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default" name="action" value="login">Sign in</button>
				</div>
			</div>
		</form>
	</div>

	<div class="col-md-1">
	</div>
</div>
{/block}