@extends('layout/master')

@section('title', 'create')

@section('content')
<h1>welcome sam</h1>

{{-- untuk mengeluarkan error dari validate --}}
{{-- <!-- @if(count($errors) > 0)
  @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
  @endforeach
@endif --> --}}

{{-- pada <form> kita wajib menyisipkan code enctype="multipart/form-data"
untuk upload file / gambar fungsi nya agar file yang kita upload itu dikenali,
ini wajib ya jangan sampe lupa --}}
<form class="" action="/laravel/blog/public/" method="post" value="post" enctype="multipart/form-data">

  {{-- kolom untuk upload tabel "image" --}}
  <input type="file" name="image" value="{{ old('image') }}"><br>

  {{-- kolom untuk isi tabel "name" --}}
  {{-- old('nama variable') = untuk menyimpan nilai lama, jadi bila tidak valid hanya tabel yang tidak valid
  yang nilainya akan terhapus --}}
  <input type="text" name="name" value="{{ old('name') }}"><br>
  {{-- untuk mengeluarkan error pada value "name" --}}
  @if($errors->has('name'))
    <p>{{ $errors->first('name') }}</p>
  @endif

  {{-- kolom untuk isi tabel "description" --}}
  <textarea name="description" rows="8" cols="80">{{ old('description') }}</textarea>
  {{-- untuk mengeluarkan error pada value "description" --}}
  @if($errors->has('description'))
    <p>{{ $errors->first('description')}}</p>
  @endif

  <input type="submit" name="submit" value="save">
  {{ csrf_field() }}
</form>
@endsection
