<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class KaryawanController extends Controller
{
    function index(){
        $karyawan = Karyawan::get();
        return view('index', compact('karyawan'));
    }
    function dash(){
        return view('dashboard');
    }
    function tambah(){
        return view('tambah');
    }

    function add(Request $request){
        $validate = $request->validate([
            'nama' =>'required|string|max:255',
            'no_hp'=>'required|string',
            'alamat'=>'required|string|max:255',
        ]);

        Karyawan::create($validate);

        session()->flash('success', 'Data berhasil ditambahkan!');

        return redirect()->route('index');
    }
    
    function edit($id){
        $karyawan = Karyawan::find($id);
        return view('edit', compact('karyawan'));
    }

    function update(Request $request, $id){
        $karyawan = Karyawan::find($id);
        $karyawan->nama = $request->nama;
        $karyawan->no_hp = $request->no_hp;
        $karyawan->alamat = $request->alamat;
        $karyawan->update();
        
        session()->flash('success', 'Data berhasil diedit!');
        return redirect()->route('index');
    }
    
    function delete($id){
        $karyawan = Karyawan::find($id);
        $karyawan->delete();
        session()->flash('success', 'Data berhasil dihapus!');
        return redirect()->route('index');
    }
}
