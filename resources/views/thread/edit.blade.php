@extends('layouts.front')

@section('heading', 'Create Thread')

@section('content')
	  
	@include('layouts.partial.error')
 
	@include('layouts.partial.success')
		<br>
	<div class="rows">
		<div class="well">
			<form class="form-vertical" action="{{ route('thread.update', $thread->id) }}" method="POST" role="form" id="Create-thread-form">
				{{csrf_field()}}
				{{method_field('PUT')}}
				<div class="form-group  form-float">
					<label for="subject">Subject</label>
					<input type="text" class="form-control" name="subject" id="subject" placeholder="Input....." value="{{$thread->subject}}">
				</div>
					<div class="form-group  form-float">
					<label for="type">type</label>
					<input type="text" class="form-control" name="type" id="type" placeholder="Input....." value="{{$thread->type}}">
				</div>
				<div class="form-grou  form-float">
					<label for="thread">Thread</label>
					<textarea type="text" class="form-control" name="thread" id="thread" >{{$thread->thread}}</textarea>
				</div>	
				<br>		
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>			
		</div>
	</div>

@endsection   