@extends('template/main')

@section('title', 'Laravel Auth | Forget Password')

@section('navlink')
<li class="nav-item">
    <a class="nav-link active" href="/">Sign In</a>
</li>
@endsection

@section('content')
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
        <h2 class="text-center">Forget Password</h2>
        <h6 class="text-center mt-3 text-secondary">Fill your registered email, so we can send reset link to your email.</h6>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-md-5">
		<div class="card mt-5">
	        <div class="card-body">
	            <form action="/forget" method="post">
	                @csrf
	                <div class="form-group">
	                    @if($errors->has('email'))
	                        <label for="email" class="text-danger">{{ $errors->first('email') }}</label>
	                    @else
	                        <label for="email">Email address</label>
	                    @endif
	                    <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" value="{{ old('email') }}">
	                </div>
	                <button class="btn btn-dark" type="submit">Send</button>
	            </form>  
	        </div>
	    </div>
    </div>
</div>
@endsection