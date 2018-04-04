<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<script type="text/javascript" src="{{asset('js')}}/jquery-3.2.1.min.js"></script>
	<style type="text/css">
		ul li{
			display: inline;
			padding: 5px;
		}
		a{	
			background-color: #cdc;
		}
	</style>
	@yield('style')
</head>
<body>
	
	<ul>
		<li><a href="{{route('Admin.index')}}">Home</a></li>
		<li><a href="{{route('Admin.memberDetails')}}">Member List</a></li>
		<li><a href="{{ route('Admin.showprofile') }}">Profile</a></li>
		<li><a href="{{route('Admin.logout')}}">Logout</a></li>
	</ul>
	<div class="container">
		@yield('maincontent')
	</div>
	@yield('script')
</body>
</html>