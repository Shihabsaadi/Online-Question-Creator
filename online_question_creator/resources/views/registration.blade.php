<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<style type="text/css">
		.error{
			color: red;
		}
	</style>
	<script type="text/javascript" src="{{asset('js')}}/jquery-3.2.1.min.js"></script>
</head>
<body>
	<h3>Registration</h3>
	<form method="post">
		{{csrf_field()}}
		<table>
			<tr>
				<td>First Name</td>
				<td>
					<input type="text" name="firstname" value="{{session('firstname')}}"> 
					@if($errors->has('firstname'))
						<span class="error">{{'First Name is required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>Last Name</td>
				<td>
					<input type="text" name="lastname" value="{{session('lastname')}}">
					@if($errors->has('lastname'))
						<span class="error">{{'Last Name is required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>User Name</td>
				<td>
					<input type="text" name="username" value="{{session('username')}}">
					@if($errors->has('username'))
						<span class="error">{{'User Name is Invalid'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>Gender</td>
				<td>
					<input type="radio" name="gender"  value="Male"> Male
					<input type="radio" name="gender" value="Female"> Female
					@if($errors->has('gender'))
						<span class="error">{{'Gender is Required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>Date Of Birth</td> 
				<td>
					<input type="text" name="dob" value="{{session('dob')}}">
					@if($errors->has('dob'))
						<span class="error">{{'Date Of Birth is required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td>
					<input type="text" name="email" value="{{session('email')}}">
					@if($errors->has('email'))
						<span class="error">{{'Valid email  is required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"> </td>
			</tr>
			<tr>
				<td>Re-Password</td>
				<td>
					<input type="password" name="repassword">
					@if($errors->has('password'))
						<span class="error">{{'Valid Password is required'}}</span>
					@endif
				</td>
			</tr>
			<tr>
				<td><input type="submit" name="register" value="Register"></td>
				<td><a href="{{route('Login.loginView')}}">Login</a></td>
			</tr>
		</table>
	</form>
	{{-- @if ($errors->any())
		@foreach ($errors->all() as $message)
			{{$message}}
			<br/>
		@endforeach
	@endif --}}
	<script type="text/javascript">
		$('#gender').ready(function(){
			if ('{{session('gender')}}' == 'Male') {

			}else if ('{{session('gender')}}' == 'Female') {
				
			}
		});
	</script>
</body>
</html>