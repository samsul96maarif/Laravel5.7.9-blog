@extends('layout/master')

@section('title', 'home')

@section('content')
<h1>welcome sam</h1>

<?php foreach ($banners as $banner): ?>
  <p><a href="/laravel/blog/public/{{ $banner->id }}">{{ $banner->name }}</a></p>
  <form class="" action="/laravel/blog/public/{{ $banner->id }}/edit" method="get">
    <input type="submit" name="submit" value="edit">
  </form>
  <form class="" action="/laravel/blog/public/{{ $banner->id }}/delete" method="post">
    {{ method_field('DELETE') }}
    <input type="submit" name="submit" value="delete">
    {{ csrf_field() }}
    <!-- <input type="hidden" name="_methode" value="DELETE"> -->
  </form>
  <br>
<?php endforeach; ?>
<form class="" action="/laravel/blog/public/create" method="get">
  <input type="submit" name="submit" value="tambah data">
</form>
@endsection
