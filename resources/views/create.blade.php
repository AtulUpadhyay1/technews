



<html >

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="app-url" content="{{ getBaseURL() }}">
	<meta name="file-base-url" content="{{ getFileBaseURL() }}">

	<!-- Required meta tags -->

	


	<!-- aiz core css -->
	<link rel="stylesheet" href="{{ static_asset('assets/css/vendors.css') }}">
	<link rel="stylesheet" href="{{ static_asset('assets/css/aiz-core.css') }}">


	<script>
    	var AIZ = AIZ || {};
	</script>

</head>
<body class="">

	<div class="col-md-5">
		<div class="card">
			
			<div class="card-body">
				<form action="{{ route('brands.store') }}" method="POST">
					@csrf
					
					<div class="form-group mb-3">
						<label for="name">Logo <small>120x80</small></label>
						<div class="input-group" data-toggle="aizuploader" data-type="image">
							<div class="input-group-prepend">
									<div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
							</div>
							<div class="form-control file-amount">Choose File</div>
							<input type="hidden" name="logo" class="selected-files">
						</div>
						<div class="file-preview box sm">
						</div>
					</div>
					
				</form>
			</div>
		</div>
	</div>



  


	<script src="{{ static_asset('assets/js/vendors.js') }}" ></script>
	<script src="{{ static_asset('assets/js/aiz-core.js') }}" ></script>

  

 

</body>
</html>





	