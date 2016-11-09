<%@include  file="./layout/header.jsp"%>
	<body>
		<section>
			<header>
				<div class="col-md-12">
					<%@include file="./layout/navbar.jsp" %>
				</div>
			</header>
			<article>
				<div class="col-md-8 centered">
					<h1>Kevin Garabedian</h1>
					<ul class="inl">
						<li class="inl">
							<img src="res/image/K3lKuN.png" alt="Photo de profil" class="img-responsive profile">
						</li>						
						<li class="inl">						
							<form class="form-horizontal">													
								<div class="form-group">								
									<label for="filiaire" class="col-sm-4 control-label">Filiaire</label>
									<div class="col-sm-8">	
										<div class="input-group">									
											<input type="text" class="form-control" placeholder="Génie Logiciel">										
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">Modifier</button>
											</span>
										</div>										
									</div>
								</div>																
								<div class="form-group">							
									<label for="ville" class="col-sm-4 control-label">Ville</label>								
									<div class="col-sm-8">	
										<div class="input-group">									
											<input type="text" class="form-control" placeholder="Marseille">										
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">Modifier</button>
											</span>
										</div>										
									</div>
								</div>																
								<div class="form-group">						
									<label for="telephone" class="col-sm-4 control-label">Téléphone</label>
									<div class="col-sm-8">	
										<div class="input-group">									
											<input type="text" class="form-control" placeholder="06123456789">										
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">Modifier</button>
											</span>
										</div>										
									</div>									
								</div>																
								<div class="form-group">									
									<label for="mail" class="col-sm-4 control-label">Mail</label>																			
									<div class="col-sm-8">
										<div class="input-group">									
										<input type="text" class="form-control" placeholder="garabedian.kevin@gmail.com">										
											<span class="input-group-btn">
												<button class="btn btn-default" type="button">Modifier</button>
											</span>
									</div>
									</div>	
								</div>
								<!--<div class="form-group">
									<div class="col-sm-offset-4 col-sm-8">
									  <button type="submit" class="btn btn-default">Modifier</button>
									</div>
								</div>-->
							</form>						
						</li>										
					</div>
				</div>
			</article>
		</section>
	</body>
</html>