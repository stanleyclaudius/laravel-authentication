@extends('template/main')

@section('title', 'Laravel Auth | Sign Up')

@section('navlink')
<li class="nav-item">
    <a class="nav-link active" href="/">Sign In</a>
</li>
@endsection

@section('content')
<div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-5">
        <h2 class="text-center">Sign Up</h2>
        <div class="card mt-4">
            <div class="card-body">
                <form action="/register" method="post">
                    @csrf
                    <div class="form-group">
                        @if($errors->has('name'))
                            <label for="name" class="text-danger">{{ $errors->first('name') }}</label>
                        @else
                            <label for="name">Full name</label>
                        @endif                        
                        <input type="text" class="form-control" id="name" name="name" placeholder="Your name" value="{{ old('name') }}">
                    </div>
                    <div class="form-group">
                        @if($errors->has('email'))
                            <label for="email" class="text-danger">{{ $errors->first('email') }}</label>
                        @else
                            <label for="email">Email address</label>
                        @endif
                        <input type="text" class="form-control" id="email" name="email" placeholder="Your email address" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        @if($errors->has('password'))
                            <label for="password" class="text-danger">{{ $errors->first('password') }}</label>
                        @else
                            <label for="password">Password</label>
                        @endif
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                    </div>
                    <div class="form-group">
                        @if($errors->has('password_confirmation'))
                            <label for="password_confirmation" class="text-danger">{{ $errors->first('password_confirmation') }}</label>
                        @else
                            <label for="password_confirmation">Password confirmation</label>
                        @endif
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Re-type your password">
                    </div>
                    <button class="btn btn-dark" type="submit">Sign Up</button>
                </form>  
            </div>
        </div>
    </div>
</div>
@endsection