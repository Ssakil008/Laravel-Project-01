@extends('layouts.app')
@section('title','Registration')
@section('content')

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from codervent.com/bulona/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 10:09:20 GMT -->

<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title>Bulona - Bootstrap Admin Dashboard Template</title>
	<!--favicon-->
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<!-- Bootstrap core CSS-->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<!-- animate CSS-->
	<link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
	<!-- Icons CSS-->
	<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
	<!-- Custom Style-->
	<link href="assets/css/app-style.css" rel="stylesheet" />

</head>

<body>

	<!-- start loader -->
	<div id="pageloader-overlay" class="visible incoming">
		<div class="loader-wrapper-outer">
			<div class="loader-wrapper-inner">
				<div class="loader"></div>
			</div>
		</div>
	</div>
	<!-- end loader -->

	<!-- Start wrapper-->
	<div id="wrapper">

		<div class="card card-authentication1 mx-auto my-4">
			<div class="card-body">
				<div class="card-content p-2">
					<div class="text-center">
						<img src="assets/images/logo-icon.png" alt="logo icon">
					</div>
					<div class="card-title text-uppercase text-center py-3">Sign Up</div>
					<div class="mt-5">
						@if($errors->any())
						<div class="col-12">
							@foreach($errors->all() as $error)
							<div class="alert alert-danger">
								{{$error}}
							</div>
							@endforeach
						</div>
						@endif

						@if(session()->has('error'))
						<div class="alert alert-danger">
							{{session('error')}}
						</div>
						@endif

						@if(session()->has('success'))
						<div class="alert alert-success">
							{{session('success')}}
						</div>
						@endif
					</div>
					<form action="{{route('registerUser')}}" method="POST">
						@csrf
						<div class="form-group">
							<label for="email" class="sr-only">Email</label>
							<div class="position-relative has-icon-right">
								<input type="email" name="email" id="email" class="form-control input-shadow" placeholder="Enter Your Email ID">
								<div class="form-control-position">
									<i class="icon-user"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="exampleInputEmailId" class="sr-only">Mobile</label>
							<div class="position-relative has-icon-right">
								<input type="number" name="mobile" id="mobile" class="form-control input-shadow" placeholder="Enter Your Mobile Number">
								<div class="form-control-position">
									<i class="icon-envelope-open"></i>
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">Password</label>
							<div class="position-relative has-icon-right">
								<input type="password" name="password" id="password" class="form-control input-shadow" placeholder="Choose Password">
								<div class="form-control-position">
									<i class="icon-lock"></i>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="icheck-material-primary">
								<input type="checkbox" id="user-checkbox" checked="" />
								<label for="user-checkbox">I Agree With Terms & Conditions</label>
							</div>
						</div>

						<button type="submit" id="signup-btn" class="btn btn-primary btn-block waves-effect waves-light">Sign Up</button>
						<div class="text-center mt-3">Sign Up With</div>

						<div class="form-row mt-4">
							<div class="form-group mb-0 col-6">
								<button type="button" class="btn bg-facebook text-white btn-block"><i class="fa fa-facebook-square"></i> Facebook</button>
							</div>
							<div class="form-group mb-0 col-6 text-right">
								<button type="button" class="btn bg-twitter text-white btn-block"><i class="fa fa-twitter-square"></i> Twitter</button>
							</div>
						</div>

					</form>
				</div>
			</div>
			<div class="card-footer text-center py-3">
				<p class="text-dark mb-0">Already have an account? <a href="authentication-signin.html"> Sign In here</a></p>
			</div>
		</div>

		<!--Start Back To Top Button-->
		<a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
		<!--End Back To Top Button-->



	</div><!--wrapper-->

	<!-- Bootstrap core JavaScript-->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>

	<!-- sidebar-menu js -->
	<script src="assets/js/sidebar-menu.js"></script>

	<!-- Custom scripts -->
	<script src="assets/js/app-script.js"></script>

	<script>
		document.getElementById("signup-btn").addEventListener("click", function() {
			// Perform form validation here if needed

			// Submit the form
			document.querySelector("form").submit();
		});
	</script>

</body>

<!-- Mirrored from codervent.com/bulona/demo/authentication-signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Feb 2020 10:09:20 GMT -->

</html>


@endsection