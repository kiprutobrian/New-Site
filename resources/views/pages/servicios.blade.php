@extends('layouts.default')
@section('content')
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>NUESTROS SERVICIOS</h1></a>
					
				</div>
			</div>

			<div class="container-fluid inner-offset">    
				<div class="row services">
					<?
//					$query 		=  "SELECT * FROM Img_productos";
//					$result 	=  mysql_query($query,$id);
//					while($row 	=  mysql_fetch_array($result)){
//					$Id 		=  $row["Id"];
//					$Nombre 	=  $row["Nombre"];
//					$Foto 		=  $row["Foto"];
//					$Intro 		=  $row["Intro"];
//					$Descripcion=  $row["Descripcion"];
//					?>

					<div class="service-item col-xs-12 col-sm-6 wow zoomIn" data-wow-delay="0.3s">
						@foreach($images as $image)
						<img class="full-width" src="{{$image->Foto}}" alt="Img">
						<h4>{{$image->Nombre}}</h4>
						<p>{{$image->Intro}}</p>
						@endforeach
						<a class="btn btn-success btn-sm" href="/servicios1">MORE INFORMATION</a>
					</div>
				</div>               
			</div>
		
			@endsection 