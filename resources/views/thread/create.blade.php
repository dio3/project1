@extends('layouts.front')

@section('heading', 'Create Thread')

@section('content')
	  
	@include('layouts.partial.error')
 
	@include('layouts.partial.success')
		<br>
	<div class="rows">
		<div class="well">
			<form class="form-vertical" action="{{ route('thread.store') }}" method="POST" role="form" id="Create-thread-form">
				{{csrf_field()}}
				<div class="form-group  form-float">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" name="subject" id="" placeholder="Input....." value="{{old('subject')}}">
				</div>
					<div class="form-group  form-float">
					<label for="type">type</label>
					<input type="text" class="form-control" name="type" id="" placeholder="Input....." value="{{old('type')}}">
				</div>
				<div class="form-grou  form-float">
					<label for="thread">Thread</label>
					<textarea type="text" class="form-control" name="thread" id="" placeholder="Input....." value="{{old('thread')}}"></textarea>
				</div>	
				<br>		
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>
	</div>

@endsection  