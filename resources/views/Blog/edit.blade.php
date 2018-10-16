@extends('layout/master')

@section('title', 'edit')

@section('content')
<h1>welcome sam</h1>
{{-- pada <form> kita wajib menyisipkan code enctype="multipart/form-data"
untuk upload file / gambar fungsi nya agar file yang kita upload itu dikenali,
ini wajib ya jangan sampe lupa --}}
<form class="" action="/laravel/blog/public/{{ $banner->id }}" method="post" enctype="multipart/form-data">
  {{-- untuk mendeklarasikan bahwa ini menggunakn metode put di web.php nya Route::put --}}
  {{ method_field('PUT') }}

  {{-- untuk menampilkan imagenya --}}
  <img src="{{ asset('img/'.$banner->image) }}" alt="">
  {{-- untuk mengambil nilai image --}}
  <input type="file" name="image" value=""><br>
  <input type="text" name="name" value="{{ $banner->name }}"><br>
  <textarea name="description" rows="8" cols="80">{{ $banner->description }}</textarea>
  <input type="submit" name="submit" value="save">
  {{ csrf_field() }}
</form>
@endsection
