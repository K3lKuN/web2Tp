<%@taglib prefix="c" uri="http://java.sun.com/jsp/jstl/core" %>	
	<body>
		<header>
			<div class="col-md-12">
				<%@include file="navbar.jsp" %>
			</div>
		</header>
		<article>
			<h1>Kevin Garabedian</h1>
			<div class="row">
				<div class="col-md-3 col-lg-3">
				</div>
				<div class="col-md-2 col-lg-2 col-sm-4">
                           <img src=<c:url value="/resources/img/K3lKuN.png"/> alt="Photo de profil" class="img-responsive profile">
                   </div>
                   <div class="col-md-5 col-sm-6">
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
					</div>
				<div class="col-md-2 col-lg-3">
				</div>
			</div>			
		</article>
	</body>
</html>
