<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

@include('styles.index')
   <title>h3x4 | Home</title>
</head>
<body>
	@include('templates.partials.navigation')
    <div class="container">
        @include('templates.partials.alerts')
        @yield ('content')
    </div>
<section id="home" class="main-home parallax-section">
     <div class="overlay"></div>
 	    <div id="particles-js">    
     	    </div>
</section>
    
    
    <div class="container">
	<h2>Shorten URL</h2>
	<form action="" method="post">
		<input type="url" name="url" placeholder="Enter a URL" />
		<input type="submit" class="btn btn-primary" value="Shorten" />
		<input type="hidden" name="_token" value="{{ Session::token() }}" />

	</form>
	
</div>


<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>

    </body>
	@include('templates.partials.footer')
	@include('scripts.index')


</html>