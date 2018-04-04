@extends('layouts.adminlayout')
@section('title')
Edit Member info
@endsection

@section('style')
	<style type="text/css">
		table{
			border-collapse: collapse;
		}
		th{
			color: red;
		}
		table, td, th {
    		border: 1px solid black;
    		text-align: left;
		}

	</style>
@endsection

@section('maincontent')
	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>user ID</td>
				<td>{{$user->user_id}}</td>
			</tr>
			<tr>
				<td>First Name</td>
				<td><input type="text" name="fname" value="{{$user->first_name}}"></td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td><input type="text" name="lname" value="{{$user->last_name}}"></td>
			</tr>
			<tr>
				<td>User Name</td>
				<td>{{$user->user_name}}</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>{{$user->email}}</td>
			</tr>
			<tr>
				<td>User type</td>
				<td>
					<select name="usertype" id="usertype">
				  		<option value="1">Admin</option>
				  		<option value="2">Member</option>
					</select></td>
			</tr>
		</table>
		<br>
		<input type="submit" name="submit" value="update">
		<a href="{{route('Admin.deleteMember',[$user->user_id])}}">Delete</a>
	</form>
	{{$user->user_type}}
@endsection

@section('script')
<script type="text/javascript" src="{{asset('js')}}/jquery-3.2.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		if ( '{{$user->user_type}}' == 'ADMIN'){
			console.log('admin');
			$('#usertype').val('1').change();
		}else if('{{$user->user_type}}' == 'MEMBER'){
			console.log('member');
			$('#usertype').val('2').change();
		}
		
		
	});
</script>
@endsection