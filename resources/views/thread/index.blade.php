@extends('layouts.front')

@section('heading')


@section('content')
<a class="btn btn-primary float-right" href="{{ route('thread.create')}}">CREATE THREAD</a><br><br>

@include('thread.partial.thread-list')

@endsection
