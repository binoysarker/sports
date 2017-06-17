@extends('layouts.master')
@section('title')
	{{-- expr --}}
	Home Page
@endsection
@section('content')
	{{-- expr --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
						<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						<li data-target="#carousel-example-generic" data-slide-to="3"></li>
					</ol>
					<div class="carousel-inner" role="listbox">
						<div class="carousel-item active">
							<img src="{{ asset('image/img1.jpg') }}" class="img-fluid" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="{{ asset('image/img2.jpg') }}" class="img-fluid" alt="First slide">
						</div>
						<div class="carousel-item">
							<img src="{{ asset('image/img3.jpg') }}" class="img-fluid" alt="First slide">
						</div>
					</div>
					<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
						<span class="icon-prev" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
						<span class="icon-next" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	{{-- latest posts --}}
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
						<div class="card">
							<div class="card-block">
								<h4 class="card-title">Latest Post</h4>
								<!-- start feedwind code --> <script type="text/javascript" src="https://feed.mikle.com/js/fw-loader.js" data-fw-param="33400/"></script> <!-- end feedwind code -->
							</div>
						</div>
			</div>
		</div>
	</div>
@endsection