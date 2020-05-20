@extends('admin.index')
@section('updateEmployee')

<div class="container">
		<img id="image" src="{{URL::to($user->image)}}">	

			<h2>Update Employee Profile</h2>
			<form  method="post" enctype="multipart/form-data" action=" {{URL::to('post/edit/employee/'.$user->uid)}}" >

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
				    <input type="text" name="uname" id="phone" value={{$user->uname}}>
				   	<br>
          	<input type="text" name="email" id="email" readonly value={{$user->email}}>
            <br>
				   	
            <input type="text" name="phone" id="uname" value={{$user->phone}}>
            <br>
            
            <input type="text" name="password" id="pass" value={{$user->password}}>
            <br>
            

            <input type="text" name="balance" id="pass" value={{$user->balance}}>
            <br>
            <label for="action">Choose status:</label>

              <select name="status" id="action">
                    <option value="active">Active</option>
                    <option value="deactive">Deactive</option>
             </select>

             <label for="action">Choose Type:</label>

              <select name="type" id="action">
                    <option value="employee">Employee</option>
                    <option value="agent">Agent</option>
                    <option value="customer">Customer</option>
                    <option value="admin">Admin</option>
             </select>

				</br>
				<div>
					<p>
            Choose Gender
						<input type="radio" name="gender" value="male"> Male
						<input type="radio" name="gender" value="female"> Female
						<input type="radio" name="gender" value="other"> Other
				</p>

		                   
				</div>


				<input type="submit"  value="Update" class="btn-edit" >

				<br/>
			</form>
		</div>
	</div>
@endsection