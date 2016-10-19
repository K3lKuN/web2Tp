<div class="logOn">
	<form role="form" method="post" action="{site_url('cLog/login')}" enctype="multipart/form-data">
		<div class="form-group">
			<p>Login* :
			<input type="text" name="login" size="25" style="width:80%"/>   
		</div>

		<div class="form-group">
			Password* :
			<input type="password" name="pwd" size="25" style="width:80%">
		</div>

		<input class="btn btn-default" type="submit" name="action" value="Valider"></br>
		{anchor('cLog/viewSignup','<span style="color:blue">Pas encore inscrit?</span>')}
	</form>
</diV>
