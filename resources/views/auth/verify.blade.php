@extends('template/main')

@section('title', 'Laravel Auth | Verify')

@section('navlink')
<li class="nav-item text-white">
    Verify Account
</li>
@endsection

@section('content')
<div class="row h-100 justify-content-center">
	<div class="col-md-7">
		<div class="alert alert-primary text-center" role="alert">
			A verification code has been sent to <b>{{ $user->email }}</b>
		</div>
	</div>
</div>
<div class="row justify-content-center mt-3">
	<div class="col-md-7">
		<div class="row">
			<div class="col-md">
				<input type="text">
			</div>
			<div class="col-md">
				<input type="text">
			</div>
			<div class="col-md">
				<input type="text">
			</div>
			<div class="col-md">
				<input type="text">
			</div>
			<div class="col-md">
				<input type="text">
			</div>
		</div>
	</div>
</div>
@endsection