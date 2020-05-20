@extends('admin.index')
@section('viewAdminProfile')

<div class="container">
	
	<form method="get" enctype="multipart/form-data" action="{{route('view.adminInfo')}}" >
		 @foreach($user as $row)
	 
	  <img id="image" src="{{URL::to($row->image)}}">
	
		<h2> {{$row->uname}} </h2>
		
			<div>
				
				<input type="text" name="uname" id="uname"value={{$row->uname}}>
				<br>
				<input type="text" name="email" id="email" value={{$row->email}}>
				<br>
				<input type="text" name="phone" id="pos"value={{$row->phone}}>
				<br>
				<input type="text" name="gender" id="pos"value={{$row->gender}}>
				<br>
				<input type="text" name="balance" id="pos"value={{$row->balance}}>

                @endforeach

</form>
		
	</div>
</div>






@endsection