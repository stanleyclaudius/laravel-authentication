@extends('template/main')

@section('title', 'Laravel Auth | Reset Password')

@section('navlink')
<li class="nav-item text-white">
    Reset Password
</li>
@endsection

@section('content')
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-6">
        <h2 class="text-center">Reset Password</h2>
        <h6 class="text-center mt-3 text-secondary">{{ $email }}</h6>
    </div>
</div>

<div class="row justify-content-center">
	<div class="col-md-5">
		<div class="card mt-5">
	        <div class="card-body">
	            <form action="/reset/{{ $email }}/{{ $token->token }}" method="post">
	                @csrf
	                <div class="form-group">
	                    @if($errors->has('password'))
	                        <label for="password" class="text-danger">{{ $errors->first('password') }}</label>
	                    @else
	                        <label for="password">New password</label>
	                    @endif
	                    <input type="password" class="form-control" id="password" name="password" placeholder="Your new password">
	                </div>
	                <div class="form-group">
	                    @if($errors->has('password_confirmation'))
	                        <label for="password_confirmation" class="text-danger">{{ $errors->first('password_confirmation') }}</label>
	                    @else
	                        <label for="password_confirmation">Password confirmation</label>
	                    @endif
	                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-type your password">
	                </div>
	                <button class="btn btn-dark" type="submit">Reset</button>
	            </form>  
	        </div>
	    </div>
    </div>
</div>
@endsection