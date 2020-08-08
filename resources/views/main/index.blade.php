@extends('template/main')

@section('navlink')
<li class="nav-item">
    <a class="nav-link active" href="/logout">Sign Out</a>
</li>
@endsection

@section('content')
<div class="row">
	<div class="col-md-12">
		<h1>Hi, {{ $user->name }}</h1>
		<h5 class="mt-4 text-secondary">You are Sign In!</h5>
		<a href="/logout" class="mt-3 btn btn-dark">Sign Out</a>
	</div>
</div>
@endsection