<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Online banking</title>
	<link rel = "stylesheet" href= {{asset('design/css/cssSignup.css')}} >
	<link rel = "stylesheet" href={{asset('design/font-awesome-4.7.0/css/font-awesome.min.css')}}>

</head>
<body>
	<div class="container">
		<img src={{asset('design/man.png')}}>
		<form method="post" enctype="multipart/form-data" action={{route('postSignUp.bank')}}>
			@csrf


     @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
	   </ul>
			</div>
	 @endif

			<div class="form-input">
				<input type="text" name="uname" placeholder="Enter User Name">
			</div>
			<div class="form-input">
				<input type="text" name="email" placeholder="Enter your email">
			</div>
			
			<div class="form-input">
				<input type="text" name="phone" placeholder="Enter contact number">
			</div>
			
			<div class="form-input">
				<input type="password" name="password" placeholder="Enter password">
			</div>
			<div class="form-input">
				<input type="password" name="cpassword" placeholder="Re-Enter password">
			</div>
			<div>
				<p>Choose Gender
					<input type="radio" name="gender" value="male" checked> Male
					<input type="radio" name="gender" value="female"> Female
					<input type="radio" name="gender" value="other"> Other
				</p>
			</div>
			<div>
				  <input type="file" class="form-control" placeholder="Image" id="fileToUpload" name="image" required data-validation-required-message="Please enter your phone number.">
			</div>
			<p id="crd"></p>
			<input type="submit"   class="btn-signup"><br/>
			<a href={{route('/')}}>Already have an account? Login</a>
		</form>
	</div>
</body>
</html>


