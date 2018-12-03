@extends('layouts.front')

@section('banner')
<div class="jumbotron">
    <div class="container">
        <h1>Join webdevmatics community</h1>
        <P>help and get help</P>
        <p>
            <a href="#" class="btn btn-primary btn-lg">learn more  </a>
        </p>
    </div>
</div>
@endsection
@section('heading', "Threads")  
@section('content')

	@include('thread.partial.thread-list')

@endsection
