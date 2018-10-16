<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Banner;
use App\Models\Footer;

class BlogController extends Controller
{
// index
    public function index(){
      $banners = banner::all();
      return view('Blog/index', ['banners' => $banners]);
    }

// lihat detail
    public function show($id){
      $banner = banner::findOrFail($id);
      return view('Blog/detail', ['banner' => $banner]);
    }

// update
// 1. get data melalui id-nya
    public function edit($id){
      $banner = banner::find($id);
      return view('Blog/edit', ['banner' => $banner]);
    }
// 2. store data update
    public function update(Request $request, $id){
      $banner = banner::find($id);

      // dimana jika request->file('image') bernilai kosong, atau tidak diubah maka
      // tidak terjadi apa-apa
      // jika tidak maka update image
      if ($request->file('image') == "") {
        // code...
      } else {
        // menyimpan nilai image
        $file = $request->file('image');
        // mengambil nama file
        $fileName = $file->getClientOriginalName();
        // menyimpan file image kedalam folder "img"
        $request->file('image')->move("img/",$fileName);
        // menyimpan ke dalam database nama file dari image
        $banner->image = $fileName;
      }
      $banner->name = $request->name;
      $banner->description = $request->description;
      $banner->save();
      return redirect('/');
    }

// create
// 1. mengarahkan ke form
    public function create(){
      return view('Blog/create');
    }
// 2. store data create
    public function store(Request $request){
      // contoh penggunaan validate dimana :
      // 1. value name required
      // 2. value description required dan minimal 5 huruf
      $this->validate($request, [
        'image' => 'required',
        'name' => 'required',
        'description' => 'required|min:5'
      ]);

      // menyimpan nilai image
      $file = $request->file('image');
      // mengambil nama file
      $fileName = $file->getClientOriginalName();
      // menyimpan file image kedalam folder "img"
      $request->file('image')->move("img/",$fileName);

      $banner = new banner;
      $banner->image = $fileName;
      $banner->name = $request->name;
      $banner->description = $request->description;
      $banner->save();
      return redirect('/');
    }

// delete
    public function delete($id){
      $banner = banner::find($id);
      $banner->delete();
      return redirect('/');
    }

    public function setting(){
      $footers = footer::all();
      return view('Blog/settings', ['footers' => $footers]);
    }
}
