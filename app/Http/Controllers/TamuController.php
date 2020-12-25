<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;
use Excel;
use App\Imports\TamuImport;
use App\Exports\TamuExport;

class TamuController extends Controller
{
    public function index(){
        $data = Tamu::all();
        return view('kehadiran', compact('data'));
    }

    public function createGuest(){
        return view ('tambah');
    }

    public function storeGuest(Request $request){
        $this->validate($request,[
            'nama' => 'required',
            'alamat' => 'required',
            'status' => 'required',
        ]);

        $guest = new Tamu;
        $guest->nama = $request->nama;
        $guest->alamat = $request->alamat;
        $guest->status = $request->status;
        $guest->save();
        return redirect()->route('tamu.index')->with('success','Tamu Berhasil Ditambah');
    }

    public function update(Request $request, $id){
        $data = Tamu::where('id', $id)->first();
        $data->status = $request->status;
        $data->save();

        if($data->status == 3){
            return redirect()->route('tamu.index', $id)->with('success','Tamu telah hadir!');
        }else if($data->status == 99){
            return redirect()->route('tamu.index', $id)->with('success','Berhasil mengubah status tamu tidak hadir');
        }
    }
    public function importForm()
    {
        return view('import-form');
    }

    public function import(Request $request)
    {
        Excel::import(new TamuImport, $request->file);
        return "Data are imported successfullly!";
    }

    public function export()
    {
        return Excel::download(new TamuExport,'datatamu.xlsx');
    }


}
