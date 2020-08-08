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
<div class="row justify-content-center mt-4">
	<div class="col-md-7">
		<form action="/verify/{{ $user->email }}" method="post">
			@csrf
			<div class="row">
				<input name="input1" type="text" class="col-md mr-3 inputs input-1 w-100 h-100 text-center text-uppercase" style="padding-top: 30px; padding-bottom: 30px; padding-left: 0; padding-right: 0; font-size: 30px; box-sizing: border-box;" maxlength="1" autofocus>
				<input name="input2" type="text" class="col-md mr-3 inputs input-2 w-100 h-100 text-center text-uppercase" style="padding-top: 30px; padding-bottom: 30px; padding-left: 0; padding-right: 0; font-size: 30px; box-sizing: border-box;" maxlength="1">
				<input name="input3" type="text" class="col-md mr-3 inputs input-3 w-100 h-100 text-center text-uppercase" style="padding-top: 30px; padding-bottom: 30px; padding-left: 0; padding-right: 0; font-size: 30px; box-sizing: border-box;" maxlength="1">
				<input name="input4" type="text" class="col-md mr-3 inputs input-4 w-100 h-100 text-center text-uppercase" style="padding-top: 30px; padding-bottom: 30px; padding-left: 0; padding-right: 0; font-size: 30px; box-sizing: border-box;" maxlength="1">
				<input name="input5" type="text" class="col-md inputs input-5 w-100 h-100 text-center text-uppercase" style="padding-top: 30px; padding-bottom: 30px; padding-left: 0; padding-right: 0; font-size: 30px; box-sizing: border-box;" maxlength="1">
			</div>
	</div>
</div>
<div class="row justify-content-center mt-5">
			<button type="submit" class="verify-btn btn btn-dark" data-email="{{ $user->email }}">VERIFY</button>
		</form>
</div>
@endsection

@section('script')
<script>
	$(document).ready(function() {
		$('.inputs').keyup(function() {
			if (this.value.length == this.maxLength) {
				var $next = $(this).next('.inputs');
				if ($next.length) {
				  	$(this).next('.inputs').focus();
				} else {
					$(this).blur();
				}
			}
		});

		$('.verify-btn').click(function() {
			const email = $(this).data('email');

			const input1 = $('.input-1').val();
			const input2 = $('.input-2').val();
			const input3 = $('.input-3').val();
			const input4 = $('.input-4').val();
			const input5 = $('.input-5').val();

			if (input1 == "") {
				swal.fire({
					title: 'Failed',
					text: 'Field may not be empty!',
					icon: 'error'
				});
			} else if (input2 == "") {
				swal.fire({
					title: 'Failed',
					text: 'Field may not be empty!',
					icon: 'error'
				});
			} else if (input3 == "") {
				swal.fire({
					title: 'Failed',
					text: 'Field may not be empty!',
					icon: 'error'
				});
			} else if (input4 == "") {
				swal.fire({
					title: 'Failed',
					text: 'Field may not be empty!',
					icon: 'error'
				});
			} else if (input5 == "") {
				swal.fire({
					title: 'Failed',
					text: 'Field may not be empty!',
					icon: 'error'
				});
			}
		});
	});
</script>
@endsection