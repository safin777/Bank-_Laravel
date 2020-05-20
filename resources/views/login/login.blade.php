<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
	</title>
	<link rel = "stylesheet" href={{asset('design/css/cssLogin.css')}}>
	<link rel = "stylesheet" href={{asset('design/font-awesome-4.7.0/css/font-awesome.min.css')}}>

</head>
<body>
	<div class="container">
		<img src={{asset('design/man.png')}}>
		<form method="post" enctype=multipart/form-data" action={{route('login.login')}}>
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
				<input type="text" id="un" name="uname" placeholder="Enter Username">
			</div>
			<div class="form-input">
				<input type="password" id="pass" name="password" placeholder="Enter Password">
			</div>
			</br>
			<input type="submit"  class="btn-login" >
			<br/>
			<p id="crd"></p>
			<br/>
			<a href="#">Forget Password || </a> <a href={{route('signUp.bank')}}>Create new account</a>
		</form>
	</div>
</body>
</html>
