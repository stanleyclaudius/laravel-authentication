@extends('template/main')

@section('title', 'Laravel Auth | Sign In')

@section('content')
<div class="row">
    <div class="col-md-6">
        <h2>Sign In</h2>
        <form action="" method="post">
            @csrf
            <div class="form-group">
                <label for="email">Email address</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Your email address">
                @if($errors->has('email'))
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                @endif
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                @if($errors->has('password'))
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                @endif
            </div>
            <button class="btn btn-primary" type="submit">Sign In</button>
        </form>
    </div>
</div>
@endsection