@extends('layouts.default')
@section('content')
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>De Interés</h1></a>
					
				</div>
			</div>

			<div class="container-fluid block-content">
				<div class="row main-grid">
					<div class="col-sm-12 posts">
						<div class="big-posts">
						<?
//						$query 		= "SELECT * FROM Publicaciones";
//						$result		= mysql_query($query,$id);
///						while($row  = mysql_fetch_array($result)){
//						$Id 		= $row["Id"];
//						$Foto		= $row["Foto"];
///						$Titulo 	= $row["Titulo"];
//						$Intro 		= $row["Intro"];
//						$Descripcion= $row["Descripcion"];
//						$Fecha 		= $row["Fecha"];
//						?>
							<div class="wow fadeInUp" data-wow-delay="0.3s">
								<img src="../publicaciones/<?//=$Foto?>" alt="Img">
								<div class="post-info">
									<span><?//=$Fecha?></span>
								</div>
								<h1><?//=$Titulo?></h1>
								<div class="post-content">
									<p align="justify"><?//=$Intro?></p>
								</div>
								<a href="detalles.php?P=<?//=$Id?>" class="btn btn-success btn-default read-more">LEER Más</a>
							</div>
						</div>
						<nav class="pagination wow fadeInUp" data-wow-delay="0.3s">
							<a href="#">1</a>
							<a href="#" class="active">2</a>
							<a href="#">3</a>
							<a href="#">4</a>
							<a href="#">5</a>
						</nav> 
					</div>
					          	
				</div>            
			</div>
@endsection