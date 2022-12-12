<!DOCTYPE html>
<html lang="en-us">

<head>
	<meta charset="utf-8">
	<title>ShorterLinks</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- theme meta -->
  <meta name="theme-name" content="shorterlinks" />

	<!-- ** CSS Plugins Needed for the Project ** -->

	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{  asset('dist/plugins/bootstrap/bootstrap.min.css') }}">
	<!-- themefy-icon -->
	<link rel="stylesheet" href="{{  asset('dist/plugins/themify-icons/themify-icons.css')}}">
	<!--Favicon-->
	<link class="headicon" rel="icon" href="{{  asset('dist/images/shorticon.png')}}" type="image/x-icon">
	<!-- fonts -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<!-- Main Stylesheet -->
	<link href="{{  asset('dist/assets/style.css')}}" rel="stylesheet" media="screen" />
</head>

<body>
	<!-- header -->
    <header class="banner overlay bg-cover" data-background="{{  asset('dist/images/banner.jpg') }}">
		<nav class="navbar navbar-expand-md navbar-dark">
			<div class="container">
				<a class="navbar-brand px-2" href="#"><img src="{{ asset('dist/images/logoshort.png') }}"></a>
				<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navigation"
					aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse text-center" id="navigation">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item">
							<a class="nav-link text-dark" href="index.html">Home</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="faq.html">Faq</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="contact.html">contact</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-dark" href="single.html">Inner Page</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- banner -->
        <div class="container section">
			<div class="row">
				<div class="col-lg-8 text-center mx-auto">
					<h1 class="text-white mb-3">Short linkes </h1>
					<p class="text-white mb-4">The best site that offers you a link shortening service</p>
			<form action="{{ route('links.store') }}" method="post" enctype= "form-data" >
            @csrf
            <div >
                <input name="link" class="myform" />
				<input type="submit" class="mybtn" name="subscribe" value="short" /><br><br>
              {{-- <input name="code" class="form-control" placeholder={{ old('link') }} >{{ old('link') }}
              <button type="submit" class="btn btn-primary">{{ 'short' }}</button> --}}
            </div>
            <table class="section px-3 bg-white shadow text-center">
              <tr>
                {{-- <th>id</th> --}}
                <th>code</th>
                <th>like</th>
              </tr>

               @foreach ($link as $link )
               <tr>
                {{-- <td>{{ $link->id }}</td> --}}
                <td><a href="{{ route('getlink' , $link->code) }}">{{ route('getlink' , $link->code) }}</a></td>
                <td>{{ $link->link}}</td>
              </tr>
               @endforeach
             </table>
              </form>
          <!-- <div class="position-relative">
						<input id="search" class="form-control" placeholder="Have a question? Just ask here or enter terms"><i
							class="ti-search search-icon"></i>
					</div> -->
				</div>
			</div>
		</div>
		<!-- /banner -->
	</header>
	<!-- /header -->

	<!-- topics -->
	<section class="section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 text-center">
					<h2 class="section-title">An introduction to <span style="color: #343297";>ShorterLinks</span> features</h2>
				</div>
				<!-- topic-item -->
				<div class="col-lg-4 col-sm-6 mb-4">
					<a  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-panel icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Integrate </h3>
						<p class="mb-0">Integrate seamlessly with the tools you love</p>
                        <br>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4" id="">
					<a  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-lock icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">Security</h3>
						<p class="mb-0">Rest assured knowing your links are secure</p>
                        <br>
					</a>
				</div>
				<div class="col-lg-4 col-sm-6 mb-4">
					<a  class="px-4 py-5 bg-white shadow text-center d-block match-height">
						<i class="ti-link icon text-primary d-block mb-4"></i>
						<h3 class="mb-3 mt-0">More Clicks</h3>
						<p class="mb-0">get more clicks with custom links</p>
                        <br>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- /topics -->

	<!-- call to action -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="section px-3 bg-white shadow text-center">
						<h2 class="mb-4">Didn&rsquo;t find an answer to your question?</h2>
						<p class="mb-4">Musce libero nunc, dignissim quis turpis quis, semper vehicula dolor. Suspendisse tincidunt
							consequat quam.</p>
						<a href="mailto:abdrbeik62@gmail.com" class="btn btn-primary">contact us</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- /call to action -->

	<!-- footer -->
	<footer class="section pb-4">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 text-md-left text-center">
					<p class="mb-md-0 mb-4">Copyright © 2020
							</p>
				</div>
				<div class="col-md-4 text-md-right text-center">
					<ul class="list-inline">
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-facebook"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-twitter-alt"></i></a></li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i class="ti-github"></i></a>
						</li>
						<li class="list-inline-item"><a class="text-color d-inline-block p-2" href="#"><i
									class="ti-linkedin"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- /footer -->

	<!-- ** JS Plugins Needed for the Project ** -->
	<!-- jquiry -->
	<script src="plugins/jquery/jquery-1.12.4.js"></script>
	<!-- Bootstrap JS -->
	<script src="plugins/bootstrap/bootstrap.min.js"></script>
	<!-- match-height JS -->
	<script src="plugins/match-height/jquery.matchHeight-min.js"></script>
	<!-- Main Script -->
	<script src="assets/script.js"></script>
</body>

</html>
