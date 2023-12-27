<?php

namespace App\Http\Controllers;

use App\Models\Anakelang;
use App\Http\Requests\StoreAnakelangRequest;
use App\Http\Requests\UpdateAnakelangRequest;
use Illuminate\Http\Request;

class AnakelangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Anakelang:: all();
        // dd($data);
        return view('auth.anakelang.index', compact('data'));
    }

    public function formdaftarbaru()
    {
            return view('daftarbaru');
    }

    public function storeanakbaru(Request $request)
    {
        // return $request;
        $daftarbaru = $request->validate([
            'nama_anak' => 'required',
            'nama_wali' => 'required',
            'telp_wali' => 'required',
            'email' => 'required|email',
            'sekolah' => 'required',
            'alamat' => 'required',
            'tanggal_lahir' => 'required',
            'akta_upload' => 'required|image|mimes:jpeg,jpg,png,pdf|max:2048'
        ]
        );

        $file = $request->file('akta_upload');
        $name = 'akta'.date ('Ymdhis').'.'.$request->file('akta_upload')->getClientOriginalExtension();

        $daftarbaru = new Anakelang();
        $daftarbaru->nama_anak = $request->nama_anak;
        $daftarbaru->nama_wali = $request->nama_wali;
        $daftarbaru->telp_wali = $request->telp_wali;
        $daftarbaru->email = $request->email;
        $daftarbaru->sekolah = $request->sekolah;
        $daftarbaru->alamat = $request->alamat;
        $daftarbaru->tanggal_lahir = $request->tanggal_lahir;
   

        $daftarbaru->save();

        // return redirect()->back()->with('message', "Sudah Berhasil Mendaftar, Silahkan tunggu validasi Data Oleh Admin");
        return back()->with('success','Sudah Berhasil Mendaftar, Silahkan tunggu validasi Data Oleh Admin!');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAnakelangRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnakelangRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Anakelang  $anakelang
     * @return \Illuminate\Http\Response
     */
    public function show(Anakelang $anakelang)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Anakelang  $anakelang
     * @return \Illuminate\Http\Response
     */
    public function edit(Anakelang $anakelang)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAnakelangRequest  $request
     * @param  \App\Models\Anakelang  $anakelang
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnakelangRequest $request, Anakelang $anakelang)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Anakelang  $anakelang
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anakelang $anakelang)
    {
        //
    }
}
