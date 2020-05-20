 @extends('admin.index')
 @section('addEmployee')

 <div class="container">
			

			<h2>Add Employee</h2>
			<form  method="post" enctype="multipart/form-data" action={{route('post.add.employee')}} >

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
				<div>
				    <input type="text" name="uname" id="phone" placeholder="Enter username" required>
				   	<br>
          	<input type="text" name="email" id="email" placeholder="Enter Email"required>
            <br>
				   	
            <input type="text" name="phone" id="uname" placeholder="Enter contact No"required>
            <br>
            
            <input type="text" name="password" id="pass" placeholder="Enter a password"required>
            <br>
            <input type="text" name="cpassword" id="pass" placeholder="Re-Enter password"required>
            <br>

            <input type="text" name="balance" id="pass" placeholder="Enter some initial balance"required>
            <br>
            <label for="action">Choose status:</label>

              <select name="status" id="action">
                    <option value="active">Active</option>
                    <option value="deactive">Deactive</option>
             </select>

				</br>
				<div>
					<p>
            Choose Gender
						<input type="radio" name="gender" value="male" checked> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other
				</p>

		                   Choose:<input type="file" name="image" id="fileToUpload">
				</div>


				<input type="submit"  value="Submit" class="btn-edit" >

				<br/>
			</form>
		</div>
	</div>
@endsection

