<?
include("includes/conexion.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Asesoría & Consultorías</title>
        
        <link href="css/master.css" rel="stylesheet">
       
		<!-- SWITCHER -->
		<link rel="stylesheet" id="switcher-css" type="text/css" href="assets/switcher/css/switcher.css" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color1.css" title="color1" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color2.css" title="color2" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color3.css" title="color3" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color4.css" title="color4" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color5.css" title="color5" media="all" />
		<link rel="alternate stylesheet" type="text/css" href="assets/switcher/css/color6.css" title="color6" media="all" />
        
        <!--[if lt IE 9]>
          <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
	<body data-scrolling-animations="true">
		<div class="sp-body">
			<!-- Start menú -->
			<?include("includes/menu.php");?>
			<!-- End menú -->
			<div class="bg-image page-title">
				<div class="container-fluid">
					<a href="#"><h1>Empresa</h1></a>				
				</div>
			</div>

			<div class="container-fluid inner-offset">
				<div class="hgroup text-center wow zoomIn" data-wow-delay="0.3s">
					<h2>NUESTRA EMPRESA</h2>
					<h1>ASESORíA & CONSULTORíAS</h1>
				</div>            
				 

				<div class="tab-content inner-offset wow fadeIn" data-wow-delay="0.3s">
					<div class="tab-pane active" id="tab1">
						<?
						$query   	=  "SELECT * FROM Img_empresa";
						$result  	=  mysql_query($query,$id);

						while($row  =  mysql_fetch_array($result)){
						$Foto 		=  $row["Foto"];
						$Titulo 	=  $row["Titulo"];
						$Descripcion=  $row["Descripcion"];
						?>
						<div class="row">
							<div class="col-sm-5">
								<img class="full-width" src="../preview/Empresa/<?=$Foto?>" alt="Img">
							</div>
							<div class="col-sm-7">
								<p align="justify"><strong style="font-size:16px;"><?=$Titulo?>
								</strong></p>
								<p align="justify"><?=$Descripcion?></p>
							</div>
						</div>
						<?}?>	
					</div>
					
				
				</div>

			
			</div>

			<div class="bg-image parallax" style="background-image:url(media/bg/4.jpg);">
				<div class="container-fluid text-center wow fadeInUp" data-wow-delay="0.3s">
					<h1>SOLICITA CONSULTA CON NOSOTROS Y <br> OBTEN LOS MEJORES BENEFICIOS</h1>
					<a class="btn btn-success" href="contacto.php">SOLICITAR CONSULTA</a>
				</div>
			</div>

		     

			

			<div class="container-fluid partners block-content">
	            <div class="hgroup title-space wow fadeInLeft" data-wow-delay="0.3s">
	                <h1>Alianzas</h1>
	                <h2>Alianzas con Nosotros</h2>
	            </div>
	            <div id="partners" class="owl-carousel enable-owl-carousel" data-pagination="false" data-navigation="true" data-min450="2" data-min600="2" data-min768="4">
	                <?
	                $query2	  	  =   "SELECT * FROM Alianzas ORDER BY Pos";
	                $result2  	  =   mysql_query($query2,$id);
	                while ($row2  =   mysql_fetch_array($result2)) {
	                $FotoAL 	  =   $row2["Foto"];	
	                ?>
	                <div class="wow rotateIn" data-wow-delay="0.3s"><a href="#"><img src="../Alianzas/<?=$FotoAL?>" alt="Img"></a></div>
	           		<?}?>
	            </div>
	        </div>

			<footer>
        		<div class="color-part2"></div>
        		<div class="color-part"></div>
        		<div class="container-fluid">
            		
             		<div class="copy text-right"><a id="to-top" href="#this-is-top"><i class="fa fa-chevron-up"></i></a> &copy; 2015 Asesoría & Consultoría. All rights reserved.</div>
	             </div>
	        </footer>
		</div>
                
        <!--Main-->   
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/modernizr.custom.js"></script>
        
        <script src="assets/rendro-easy-pie-chart/dist/jquery.easypiechart.min.js"></script>
        <script src="js/waypoints.min.js"></script>
        <script src="js/jquery.easypiechart.min.js"></script>
		<!--Switcher-->
		<script src="assets/switcher/js/switcher.js"></script>
        <!--Owl Carousel-->
        <script src="assets/owl-carousel/owl.carousel.min.js"></script>
        <!-- SCRIPTS -->
	    <script type="text/javascript" src="assets/isotope/jquery.isotope.min.js"></script>
        <!--Theme-->
        <script src="js/jquery.smooth-scroll.js"></script>
        <script src="js/wow.min.js"></script>
		<script src="js/jquery.placeholder.min.js"></script>
		<script src="js/smoothscroll.min.js"></script>
        <script src="js/theme.js"></script>
	</body>
</html>