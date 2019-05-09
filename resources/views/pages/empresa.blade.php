@extends('layouts.default')
@section('content')
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Company</h1></a>				
				</div>
			</div>
			<div class="container-fluid">
					<a href="#"><h1>Company</h1></a>				
				</div>

			<div class="container-fluid inner-offset">
				<div class="hgroup text-center wow zoomIn" data-wow-delay="0.3s">
					<h2>OUR COMPANY</h2>
					<h1>ADVISORY & CONSULTING</h1>
				</div>            
				 

				<div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s">
					<div class="tab-pane active" id="tab1">
						<?
//						$query   	=  "SELECT * FROM Img_empresa";
//						$result  	=  mysql_query($query,$id);
//
//						while($row  =  mysql_fetch_array($result)){
//						$Foto 		=  $row["Foto"];
//						$Titulo 	=  $row["Titulo"];
//						$Descripcion=  $row["Descripcion"];
						?>
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="image/3-column-info/1.jpg" alt="Img">
							</div>
							<div class="col-sm-7">
								<p align="justify"><strong style="font-size:16px;">
										Company oriented to provide integral 
										Services for the management of the administrative area, accounting and tax 
										of the organizations.
								</strong></p>
								<p align="justify">
									<p>The Formacioacute n Acadeacute; Mica and the experience acquired, 
											allow to give confidence to the select group of clients belonging 
											in their mayoriacutea, to the SME sector. The best alternative of Asesoriacutea in your office, 
											at the required time and with the confidentiality that the company today demands.
										</p>
										<p>&nbsp;
										</p>
										<p>&nbsp;
										</p>

								</p>
							</div>
						</div><div class="row">
								<div class="col-sm-5">
									<img class="full-width" src="image/3-column-info/2.jpg" alt="Img">
								</div>
								<div class="col-sm-7">
									<p align="justify"><strong style="font-size:16px;">
										MISION
									</strong></p>
									<p align="justify">
										<p><strong>Advising and Consulting </strong>Our company 
											specialized in rendering N of Integral services and 
											Professionals of auditor A, internal control, accounting, Gestion 
											Fiscal, programs of customer training N, with experience in implementation N of IFRS standards.</p>
										
	
									</p>
								</div>
							</div>
							<div class="row">
									<div class="col-sm-5">
										<img class="full-width" src="image/3-column-info/3.jpg" alt="Img">
									</div>
									<div class="col-sm-7">
										<p align="justify"><strong style="font-size:16px;">
											VISION
										</strong></p>
										<p align="justify">
											Descripcion: 
											<p>In 2016 a company recognized nationwide, to offer
													Value added to our customers, through professional services of excellent  
													quality and reliability.</p>
													
										</p>
									</div>
								</div>
								<div class="row">
										<div class="col-sm-5">
											<img class="full-width" src="image/3-column-info/4.jpg" alt="Img">
										</div>
										<div class="col-sm-7">
											<p align="justify"><strong style="font-size:16px;">
											VISION
											</strong></p>
											<p align="justify">
											
												<ul>
													<li>confidence </li>
													<li>confidentiality</li>
													<li>Experience</li>
													<li>Good service</li>
													<li>commitment </li>
													<li>respect </li>
													<li>reliability </li>
												</ul>
											</p>
										</div>
									</div>
					</div>
					
				
				</div>

			
			</div>

			<div class="bg-image parallax" style="background-image:url(image/bg/4.jpg);">
				<div class="container-fluid text-center wow fadeInUp" data-wow-delay="0.3s">
					<h1>Request query With US and <br> GET THE BEST BENEFITS
					</h1>
					<a class="btn btn-success" href="/contact">ASK FOR A QUERY
					</a>
				</div>
			</div>

		     

			

			<div class="container-fluid partners block-content">
	            <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.3s">
	                <h1>Aliance</h1>
	                <h2>Alliances with us</h2>
	            </div>
	            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">

	                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="/" alt="Img"></a></div>
	                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="/" alt="Img"></a></div>
	            </div>
	        </div>

@endsection