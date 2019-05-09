@extends('layouts.default')
@section('content')
    		<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Nombre</h1></a>
					
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row">
					<div class="col-sm-3">
						<div class="sidebar-container">
							<div class="wow slideInUp" data-wow-delay="0.3s">
								<ul class="styled">
									<li ><a href="/servicios">Todos los Servicios</a></li>
									<?
									//$query2  	=  "SELECT * FROM Img_productos ORDER BY Pos";
//									$result2 	=  mysql_query($query2,$id);
//									while($row2 =  mysql_fetch_array($result2)){
//									$Id2 		=  $row2["Id"];
//									$Nombre2 	=  $row2["Nombre"];
//
//									if($S==$Id2){
//									$Activo='class="active"';	
//									}else{
//									$Activo="";	
//									}
									?>
									<li <?//=$Activo?>><a href="servicios1=<?//=$Id2?>"><?//=$Nombre2?></a></li>
									
								</ul>
							</div>
							
						</div>
					</div>
					
					<div class="col-sm-9 main-content">
							<h1 class="text-center italic wow zoomIn" data-wow-delay="0.3s">Nombre</h1>
							<img src="/image/3-column-info/2.jpg" class="full-width wow zoomIn" data-wow-delay="0.3s" alt="Img">
							<div class="row">                    	
								<div class="col-xs-12 wow zoomIn" data-wow-delay="0.3s">
									<p  align="justify">Descripcion</p>
									<hr/>
									<h4>Solicitar Información sobre servicio</h4>
								
									<div id="success"></div>
									
									<form novalidate id="contactForm" class="reply-form form-inline">
										<input type="hidden" value="Ha recibido un nuevo mensaje de su formulario del servicio de <?//=$Nombre?>." id="Asunto">
											<div class="row form-elem">	
												<div class="col-sm-6 form-elem">
													<div class="default-inp form-elem">
														<i class="fa fa-user"></i>
														<input type="text" name="user-name" id="user-name" placeholder="Nombre" required>
													</div>
													<div class="default-inp form-elem">
														<i class="fa fa-envelope"></i>
														<input type="text" name="user-email" id="user-email" placeholder="Correo Electrónico" required>
													</div>
												</div>
												<div class="col-sm-6 form-elem">
													<div class="default-inp form-elem">
														<i class="fa fa-user"></i>
														<input type="text" name="user-lastname" id="user-lastname" placeholder="Apellidos">
													</div>
													<div class="default-inp form-elem">
														<i class="fa fa-phone"></i>
														<input type="text" name="user-phone" id="user-phone" placeholder="Tel No.">
													</div>
												</div>
											</div>
											<div class="default-inp form-elem">
												<input type="text" name="user-subject" id="user-subject" placeholder="Asunto">
											</div>
											<div class="form-elem default-inp">
												<textarea id="user-message" placeholder="Mensaje"></textarea>
											</div>
											<div class="form-elem">
												<button type="submit" class="btn btn-success btn-default">Enviar Mensaje</button>
											</div>
									</form>
                				</div>
							</div>
						</div>
					
				</div>            
			</div>
@stop