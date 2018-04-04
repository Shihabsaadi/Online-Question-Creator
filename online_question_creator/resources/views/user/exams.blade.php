@extends('layouts.userlayout')
@section('title')
Exams
@endsection

@section('style')
	<style type="text/css">
		table{
			border-collapse: collapse;
			width: 50%;
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
	ALL exams<br><br>
	<table>
		<tr>
			<th>Quiz title</th>
			<th>Number of Question</th>
			<th>GO</th>
		</tr>
		@foreach($exams as $examid => $data)
			<tr>
			<td>{{$data[0]}}</td>
			<td>{{$data[1]}}</td>
			<td><a href="{{route('Quiz.startExam',[str_replace(' ', '_', $data[0]),$examid]) }}">Start Exam</a></td>
			</tr>
		@endforeach
	</table>
@endsection