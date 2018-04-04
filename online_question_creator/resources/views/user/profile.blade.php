@extends('layouts.userlayout')
@section('title')
Profile
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
	
	<table>
		<tr>
			<td colspan="2"> 
				<img src="{{asset('profile_pic')}}/male.jpg" width="150" height="150">
				<button>Change Picture</button> 
			</td>
		</tr>
		<tr> 
			<td>Name </td> 
			<td>
				{{ $member->first_name }}, {{ $member->last_name }}
				<button>Change Name</button>
			</td>
		</tr>
		<tr>
			<td>User Name </td>
			<td>{{ $member->user_name }}</td>
		</tr>
		<tr>
			<td>Email </td> 
			<td>{{ $member->email }}</td> 
		</tr>
		<tr>
			<td colspan="2"><button id="change_password">Change Password</button></td>
		</tr>
	</table>	
@endsection

@section('script')
@endsection 