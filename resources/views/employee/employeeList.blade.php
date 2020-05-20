@extends('admin.index')
@section('employeeList')
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<style>
			table
			{
				font-family: arial, sans-serif;
				border-collapse: collapse;
				width:70%;


			}

			table,td, th
			{
				border: 3px solid #dddddd;
				text-align:center;
				padding: 3px;
			}

			tr:nth-child(even)
			{
				background-color: #dddddd;
			}
		</style>

		


<div>
			
        
    
			<h3 align="center">Employee List</h3>
			<form  method="post">

			<div align="center" style="overflow-x:auto;">
				<div class="form-group">
       <input type="text" class="form-controller" id="search" name="search"></input>
        </div>

				<table align="center">
				<tr>

					<th><b>Userid</b></th>
        	        <th><b>Username</b></th>
				    <th><b>Email</b></th>
					<th><b>Contact</b></th>
					<th><b>Type</b></th>
          	        <th><b>Status</b></th>
          	        <th><b>Gender</b></th>
          	        <th><b>Balance</b></th>
          	        <th><b>Image</b></th>
        	        <th><b>Action</b></th>
					</tr>
           @foreach($user as $row)

					<tr>
          <td>
            {{$row->uid}}
          </td>
          <td>
             {{$row->uname}}
          </td>
          <td>
             {{$row->email}}
          </td>
          <td>
            {{$row->phone}}
          </td>
          <td>
             {{$row->type}}
          </td>
          <td>
             {{$row->status}}
          </td>
          <td>
            {{$row->gender}}
          </td>
          <td>
            {{$row->balance}}
          </td>
          <td>
             <img src="{{URL::to($row->image)}}" style="height: 70px; width: 70px;">
          </td>
          <td>
						
           <a href="{{URL::to('/edit/employee/'.$row->uid)}}" class="btn btn-info">Update</a>
			<a href="{{URL::to('/view/employee/'.$row->uid)}}" class="btn btn-success">View</a>
			<a href="{{URL::to('delete/employee/'.$row->uid)}}" class="btn btn-danger">Delete</a>
					 
					  
          </td>

					</tr>
					@endforeach

					<script type="text/javascript">
$('#search').on('keyup',function(){
$value=$(this).val();
$.ajax({
type : 'get',
url : '{{URL::to('searchEmployee')}}',
data:{'searchEmployee':$value},
success:function(data){
$('tbody').html(data);
}
});
})
</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>
				</table>

</div>
			



@endsection