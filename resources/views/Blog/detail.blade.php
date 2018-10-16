@extends('layout/master')

@section('title', 'detail')

@section('content')
<h1>welcome sam</h1>
<li>{{ $banner->id }}</li>
<li>{{ $banner->name }}</li>
<img src="{{ asset('img/'.$banner->image) }}" alt="">
@endsection
