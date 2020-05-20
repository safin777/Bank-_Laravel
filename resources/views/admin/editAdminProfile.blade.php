@extends('admin.index')
@section('editAdminProfile')
<div class="container">
	
			<img id="image" src="{{URL::to($user->image)}}">
			
			<form method="post" enctype="multipart/form-data" action={{route('post.edit.admin')}}>
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
             <h2> {{$user->uname}} </h2>
        
		
			<div>
				User ID:<input type="text" readonly  id="uname" value={{$user->uid}}>
				<br>
				
				Username:<input type="text" name="uname" id="uname"value={{$user->uname}}>
				<br>
				Email:  <input type="text" name="email"  id="email" value={{$user->email}}>
				<br>
				Contact: <input type="text" name="phone" id="pos"value={{$user->phone}}>
				<br>
				Balance:<input type="text" name="balance" id="pos"value={{$user->balance}}>.BDT
                <br>
                  <br>
                  	
                  	 
				
                  
		       
				</br>
				

				<div class="form-input">
					<input type="submit" value="Update" class="btn-edit" >
				</div>

				<br/>
			</form>
		</div>
	
@endsection