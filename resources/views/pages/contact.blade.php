@extends('layouts.default')
@section('content')

<div class="bg-image page-title">
	<div class="container-fluid">
		<a href="#"><h1>Contact</h1></a>
	
	</div>
</div>
<iframe class="we-onmap wow fadeInUp" src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1285.3962675246369!2d-75.6015589364535!3d6.246591198994533!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e1!3m2!1ses!2sco!4v1456792665000" width="800" height="600" frameborder="0" style="border:0" frameborder="0" style="border:0" allowfullscreen></iframe>
			

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-4">
						<h4>CONTACT INFORMATION</h4>
						
						<div class="adress-details wow fadeInLeft" data-wow-delay="0.3s">
							<div>
								<span><i class="fa fa-location-arrow"></i></span>
								<div><strong>ASESORIA & CONSULTORES</strong><br>Address: Calle 38A # 80 - 72 Laureles - Medellin
								</div>
							</div>
							<div>
								<span><i class="fa fa-phone"></i></span>
								<div>Office: (4) 444 6740
									</div>
							</div>
                            
                            <div>
								<span><i class="fa fa-mobile"></i></span>
								<div>Phone: +57) 310 444 1258
									</div>
							</div>
							<div>
								<span><i class="fa fa-envelope"></i></span>
								<div>Email: info@asesoriayconsultorias.com</div>
							</div>
							<div>
								<span><i class="fa fa-clock-o"></i></span>
								<div>Hours: Mon - Fri 8.00 - 18.00</div>
							</div>
						</div>
					
					
					</div>
					<div class="col-sm-8 wow fadeInRight" data-wow-delay="0.3s">
						<h4>REQUEST INFORMATION</h4>
						<p>Request information and receive information about our services</p>
						<div id="success"></div>
						<form novalidate id="contactForm" class="reply-form form-inline">
							<input type="hidden" value="Ha recibido un nuevo mensaje de su formulario de contacto web." id="Asunto">
							<div class="row form-elem">	
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-name" id="user-name" placeholder="Number" required>
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-envelope"></i>
										<input type="text" name="user-email" id="user-email" placeholder="E-mail" required>
									</div>
								</div>
								<div class="col-sm-6 form-elem">
									<div class="default-inp form-elem">
										<i class="fa fa-user"></i>
										<input type="text" name="user-lastname" id="user-lastname" placeholder="Surname">
									</div>
									<div class="default-inp form-elem">
										<i class="fa fa-phone"></i>
										<input type="text" name="user-phone" id="user-phone" placeholder="Tel No.">
									</div>
								</div>
							</div>
							<div class="default-inp form-elem">
								<input type="text" name="user-subject" id="user-subject" placeholder="Affair">
							</div>
							<div class="form-elem default-inp">
								<textarea id="user-message" placeholder="Mensaje"></textarea>
							</div>
							<div class="form-elem">
								<button type="submit" class="btn btn-success btn-default">SEND MESSAGE</button>
							</div>
						</form>
					</div>
				</div>
			</div>	
			
@stop
