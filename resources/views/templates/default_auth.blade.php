<!DOCTYPE html>
<html lang="en">
<head>
@include('styles.index')
   <title>Async | Signin</title>
</head>
<body>

  <img src="https://silcroot.com/Async/public/images/1200x1600.png" alt="Nature" style="width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1;object-fit: cover;background-size: 100%;width:100%;">
  <div class="text-block">



   	<div class="row">
    	    	

  <div class="column1 col-sm-6">
    	
    	<form class="form-vertical" role="form" method="post" action="{{ route('auth.signin') }}">
    		<div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
    			<label for="username" class="control-label">Your Username</label>
    			<input styly="width:30px" type="text" name="username" class="form-control" id="username" value="">
    			@if ($errors->has('username'))
    				<span class="help-block">{{ $errors->first('username') }}</span>
    			@endif
  		</div>
    	    	<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
    			<label for="password" class="control-label">Enter your password</label>
    			<input styly="width:30px" type="password" name="password" class="form-control" id="password" value="">
    			@if ($errors->has('password'))
    				<span class="help-block">{{ $errors->first('password') }}</span>
    			@endif
  		</div>
  		
  		
  		<div class="checkbox">   		
			<label>
    			<input type="checkbox" name="remember"> Remeber me
    			</label>
  		</div>
  		<div class="form-group">
    			<center><button type="submit" class="btn btn-default">Sign in</button></center>
  		</div>
  		<input type="hidden" name="_token" value="{{ Session::token() }}" />
    	</form>
    </div>





  </div>


    
    
    
    
    


<!-- Back top -->
<a href="#back-top" class="go-top"><i style="font-size: 22px; top: -26px;" class="glyphicon glyphicon-circle-arrow-up"></i></a>

    </body>



</html>