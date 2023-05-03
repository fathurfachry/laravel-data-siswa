<?php

namespace App\Http\Controllers;

use App\Models\siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;



class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //pengecekan apa pengguna/user saat ini udah login apa belum

        //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }

        $siswa = siswa::get();

        $data = [
            'siswa' => $siswa
        ];
    

        return view('siswa.index', $data);

        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
         //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }
        
        return view('siswa.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }

        siswa::create([
            'nama' => $request->input('nama'),
            'info' => $request->input('info'),
            'info_lanjutan' => $request->input('info_lanjutan')
        ]);
        
        return redirect('siswa');
        
    }

   

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

         //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }

        $data_siswa = siswa::where('id', $id)->first();

        $data = [
            'siswa' => $data_siswa
        ];

        return view('siswa.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

         //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }
        //mengupdate data bada database siswa melalui pengambil $id dari model.
        siswa::where('id', $id)->update([

            // apa yang diupdate
            'nama' => $request->input('nama'),
            'info' => $request->input('info'),
            'info_lanjutan' => $request->input('info_lanjutan')

        ]);

        return redirect('siswa');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {

         //klo pengguna blm login bakal redirect ke login lagi
        if(!Auth::check()) {
            return redirect('login');
        }

        siswa::selectById($id)->delete();    
        
       return redirect('siswa');

    }
}
