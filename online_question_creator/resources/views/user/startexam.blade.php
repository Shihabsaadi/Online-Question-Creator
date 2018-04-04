@extends('layouts.userlayout')
@section('title')
@if(session()->has('examtitle'))
	{{session('examtitle')}}
@endif
@endsection

@section('maincontent')
	<form method="post">
		{{ csrf_field() }}
	@php
		session(['allquestions'=> $questions])
	@endphp
	@foreach ($questions as $question) 
		{{ $question->getQuestion() }}
			<br>
			@foreach($question->getOptionList() as $opt)
				<input type="radio" name="{{ $question->getQuestionID() }}"  value="{{ $opt }}"> {{ $opt }}
				<br>
			@endforeach
		<br>
		<hr>
	@endforeach
	<input type="submit" name="submit" value="Finish Quiz">
	</form>
	
@endsection