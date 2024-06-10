<?php

namespace App\Http\Controllers;

use App\Models\penulis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Barryvdh\DomPDF\Facade\Pdf;

class penulisController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $penulis = penulis::all();
        return view("penulis.penulis", compact("penulis"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("penulis.penulis-entry");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            "nama"=> "requied",
            "email"=> "requied",
            "tlp"=> "requied",
            "bio"=> "requied",
        ]);

        $penulis = new penulis;
        $penulis->nama_penulis = $request->nama;
        $penulis->email = $request->email;
        $penulis->no_tlp = $request->tlp;
        $penulis->bio_penulis = $request->bio;
        $penulis->save();

        return redirect('/penulis')->with("success","Data Berhasil di Tambahkan");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id_penulis)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id_penulis)
    {
        $penulis = penulis::find($id_penulis);
        return view("penulis.penulis-edit", compact("penulis"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id_penulis)
    {
        $validator = Validator::make($request->all(), [
            "nama"=> "requied",
            "email"=> "requied",
            "tlp"=> "requied",
            "bio"=> "requied",
        ]);

        $penulis = penulis::find($id_penulis);
        $penulis->nama_penulis = $request->nama;
        $penulis->email = $request->email;
        $penulis->no_tlp = $request->tlp;
        $penulis->bio_penulis = $request->bio;
        $penulis->save();

        return redirect('/penulis')->with("success","Data Berhasil di Update");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function hapus(string $id_penulis)
    {
        $penulis = penulis::find($id_penulis);
        return view("penulis.penulis-hapus", compact("penulis"));
    }
    public function destroy(string $id_penulis)
    {
        $penulis = penulis::find($id_penulis);
        $penulis->delete();
        return redirect("/penulis")->with("success","Data Berhasil di Hapus");
    }

    public function cetak()
    {
        $penulis = penulis::all();
        $pdf = Pdf::loadview("penulis.penulis-cetak", compact("penulis"));
        return $pdf->download('laporan-data-penulis.pdf');
    }

}
