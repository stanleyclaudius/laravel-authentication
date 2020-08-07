@extends('template/main')

@section('title', 'Laravel Auth | Sign In')

@section('navlink')
<li class="nav-item">
    <a class="nav-link active" href="/register">Sign Up</a>
</li>
@endsection

@section('content')
<div class="flashdata" data-flash="{{ Session::get('auth') }}"></div>

<div class="row h-100 justify-content-center align-items-center">
    <div class="col-md-5">
        <h2 class="text-center">Sign In</h2>
        <div class="card mt-4">
            <div class="card-body">
                <form action="/" method="post">
                    @csrf
                    <div class="form-group">
                        @if($errors->has('email'))
                            <label for="email" class="text-danger">{{ $errors->first('email') }}</label>
                        @else
                            <label for="email">Email address</label>
                        @endif
                        <input type="text" class="form-control" id="email" name="email" placeholder="Your email address">
                    </div>
                    <div class="form-group">
                        @if($errors->has('password'))
                            <label for="password" class="text-danger">{{ $errors->first('password') }}</label>
                        @else
                            <label for="password">Password</label>
                        @endif
                        <input type="password" class="form-control" id="password" name="password" placeholder="Your password">
                        <small><a href="">Forget password?</a></small>
                    </div>
                    <button class="btn btn-dark" type="submit">Sign In</button>
                </form>  
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    let flashdata = $('.flashdata').data('flash');
    if (flashdata === 'no credential') {
        swal.fire({
            title: 'Sign In Failed',
            text: 'Your credentials can\'t be found!',
            icon: 'error'
        });
    } else if (flashdata === 'user created') {
        swal.fire({
            title: 'One More Step',
            text: 'A verification code has been sent to your email!',
            icon: 'success'
        });
    }
</script>
@endsection