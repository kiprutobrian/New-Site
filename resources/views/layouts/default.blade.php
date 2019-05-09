
<!DOCTYPE html>
<html>
	@include('includes.head')
	<body data-scrolling-animations="true">
		<div class="sp-body">

			<!-- Start menú -->
			@include('includes.menu')
			<!-- End menú -->

		@yield('content')			
					
		@include('includes.footer')
        </div>
	</body>

</html>