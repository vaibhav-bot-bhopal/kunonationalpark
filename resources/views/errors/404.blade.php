<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuno National Park | Page Not Found</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('public/assets/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('public/assets/css/bootstrap.min.css')}}">
    <style>
		.btn-outline-danger {
			color: #E94949 !important;
			border-color: #E94949 !important;
		}

		.btn-outline-danger:hover {
			color: #fff !important;
			background-color: #E94949 !important;
			border-color: #E94949 !important;
		}
	</style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12 offset-lg-2">
                <img src="{{asset('public/assets/images/errors/404.jpg')}}" class="img-fluid mt-5 mb-5" alt="Page Not Found">
            </div>
        </div>

        <div class="row">
			<div class="col-lg-12 text-center">
                <a href="{{url('/')}}" class="btn btn-outline-danger" style="font-weight: 600;">Go To Home</a>
			</div>
		</div>
    </div>
    <script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
