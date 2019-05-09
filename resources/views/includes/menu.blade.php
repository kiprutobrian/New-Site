		  <header id="this-is-top">
	            <div class="container-fluid">
	                <div class="topmenu row">
	                    <nav class="col-sm-offset-3 col-md-offset-4 col-lg-offset-4 col-sm-6 col-md-5 col-lg-5">
	                      
	                    </nav>
	                    <nav class="text-right col-sm-3 col-md-3 col-lg-3">
	                    	
	                        <a target="_blank" href=""><i class="fa fa-facebook"></i></a>
	                     
	                        <a target="_blank" href=""><i class="fa fa-google-plus"></i></a>
	                      
	                        <a target="_blank" href=""><i class="fa fa-twitter"></i></a>
	                      
	                        <a target="_blank" href=""><i class="fa fa-youtube"></i></a>
	                    	
	                    </nav>
	                </div>
	                <div class="row header">
	                    <div class="col-sm-3 col-md-3 col-lg-3">
	                        <a href=""><img src="image/img/logo.png" width="244" height="71"></a>
	                    </div>
	                    <div class="col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-sm-8 col-md-8 col-lg-8">
	                        <div class="text-right header-padding">
	                            <div class="h-block"><span>TELEPHONE</span></div>
	                            <div class="h-block"><span>EMAIL </span></div>
	                            <div class="h-block"><span>HOURS OF ATTENTION
									</span></div>
	                            <a class="btn btn-success" href="/contact">REQUEST QUERY</a>
	                        </div>
	                    </div>
	                </div>
	                <div id="main-menu-bg"></div>  
	                <a id="menu-open" href="#"><i class="fa fa-bars"></i></a> 
	                <nav class="main-menu navbar-main-slide">
						<ul class="nav navbar-nav navbar-main">
							<li><a href="/">HOME</a></li>
							<li><a href="/empresa">COMPANY</a></li>
							<li><a  href="/servicios">OUR SERVICES</a></li>
							<li><a  href="/deinteres">INTEREST</a></li>
							<li><a  href="/aliance">ALIANCES</a></li>
							<li><a  href="/contact">CONTACT</a></li>
						 <!-- Authentication Links -->
						 @guest
						 <li class="nav-item">
							 <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
						 </li>
						 @if (Route::has('register'))
							 <li class="nav-item">
								 <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							 </li>
						 @endif
					 @else
						 <li class="nav-item dropdown">
							 <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								 {{ Auth::user()->name }} <span class="caret"></span>
							 </a>

							 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
								 <a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
												  document.getElementById('logout-form').submit();">
									 {{ __('Logout') }}
								 </a>

								 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									 @csrf
								 </form>
							 </div>
						 </li>
					 @endguest
						</ul>
	                </nav>
	                <a id="menu-close" href="#"><i class="fa fa-times"></i></a>
				</div>

			</header>
			