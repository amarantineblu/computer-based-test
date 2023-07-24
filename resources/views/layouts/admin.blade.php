<!DOCTYPE html>
<html lang="en">

<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>CBT Test</title>

		<link rel="stylesheet" href="{{ URL::asset('assets/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('assets/fa/css/all.min.css')}}">
		<link rel="stylesheet" href="{{ URL::asset('assets/style.css')}}">

</head>

<body>
		<nav class="bg-dark p-2" style="display: flex; justify-content:center; align-items:center">
				<div class="nav-logo">
						<a href="javascript:void(0)"> <h1 class="text-white m-2"> CBT </h1> </a>
				</div>
				
                <i class="fa fa-bars text-white fa-2x" aria-hidden="true"></i>
		</nav>
		<div class="m-5">
            @yield('content')
        </div>
		@include('includes.modals')
        @include('includes.scripts')
		<script src=""></script>
		<script src="{{ URL::asset('assets/js/jquery-3.2.1.min.js') }}"></script>
		<script src="{{ URL::asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('assets/js/popper.min.js') }}"></script>
</body>

</html>
