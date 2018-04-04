<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
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
		<li><a href="{{route('User.index')}}">Home</a></li>
		<li><a href="{{route('User.showProfile')}}">Profile</a></li>
		<li><a href="{{route('Quiz.createQuestion')}}">Create Question</a></li>
		<li><a href="{{route('Quiz.showAllExams')}}">All Exams</a></li>
		<li><a href="{{route('User.logout')}}">Logout</a></li>
	</ul>
	<div>
		@yield('maincontent')
	</div>

	@yield('script')
</body>
</html>