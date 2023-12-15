<?php

namespace App\Http\Controllers;
use App\Models\Rohufix;
use Illuminate\Http\Request;

class RohufixController extends Controller
{
    public function index(){

        $data = Rohufix::all();
        return view('datalbum', compact('data'));
    }

    public function tambah(){
        return view('tambah');

    }
    public function insertdata(Request $request){
        Rohufix::create($request->all());
        return redirect()->route('album');
}

public function tampilkandata($id){
    $data = Rohufix::find($id);
//    dd($data);

return view('tampildata', compact('data'));
}

public function updatedata(Request $request, $id){
    $data = Rohufix::find($id);
    $data->update($request->all());
    return redirect()->route('album');
}

public function delete($id){
    $data = Rohufix::find($id);
//    dd($data);
$data->delete();
return redirect()->route('album');
}
}