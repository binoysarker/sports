<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>@yield('title')</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/tether.min.css') }}">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    
  </head>
  <body>
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-lg-12">
				<nav class="navbar navbar-light navbar-toggleable bg-primary ">
					<a class="navbar-brand" href="#">Sports website</a>
					<ul class="nav navbar-nav">
						<li class="nav-item">
							<a class="nav-link" href="{{ url('pages/index') }}"><strong>Home</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('pages/about') }}"><strong>About</strong></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="{{ url('pages/contact') }}"><strong>Contact</strong></a>
						</li>
					</ul>

					<!-- Right Side Of Navbar -->
					<ul class="nav navbar-nav navbar-toggler-right">
					    <!-- Authentication Links -->
					    @if (Auth::guest())
					        <li><a href="{{ route('login') }}">Login</a></li>
					        <li><a href="{{ route('register') }}">Register</a></li>
					    @else
					        <li class="dropdown">
					            <a href="#" class="dropdown-toggle btn btn-success" data-toggle="dropdown" role="button" aria-expanded="false">
					                {{ Auth::user()->name }} <span class="caret"></span>
					            </a>

					            <ul class="dropdown-menu" role="menu">
					                <li>
					                    <a href="{{ route('logout') }}"
					                        onclick="event.preventDefault();
					                                 document.getElementById('logout-form').submit();">
					                        Logout
					                    </a>

					                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					                        {{ csrf_field() }}
					                    </form>
					                </li>
					            </ul>
					        </li>
					    @endif
					</ul>
					<form class="form-inline navbar-form pull-right">
						<input class="form-control" type="text" placeholder="Search">
						<button class="btn btn-success-outline" type="submit">Search</button>
					</form>
				</nav>
    		</div>
    	</div>
    </div>

    {{-- main content section --}}
    <div class="container">
    	<div class="row">
    		<div class="col-lg-12">
    			@yield('content')
    		</div>
    	</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
    <script src="{{ asset('js/tether.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>