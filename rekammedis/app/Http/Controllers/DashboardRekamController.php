<?php

namespace App\Http\Controllers;

use App\Models\Rekam;
use App\Models\Obat;
use App\Models\Ruang;
use App\Models\Dokter;
use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardRekamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.rekam.index', [
            'rekams' => Rekam::all()
         
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.rekam.create', [
            'pasiens' => Pasien::all(),
            'dokters' => Dokter::all(),
            'ruangs' => Ruang::all(),
            'obats' => Obat::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kd_rm' => 'required',
            'tgl_periksa' => 'required',
            'pasien_id' => 'required',
            'keluhan' => 'required',
            'dokter_id' => 'required',
            'diagnosa' => 'required',
            'obat_id' => 'required',
            'ruang_id' => 'required',
        ]);

        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id'] =auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Rekam::create($validatedData);

        return redirect('/dashboard/rekam')->with('success', 'Data Rekam Medis Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rekam $rekam)
    {
        return view('dashboard.rekam.show', [
            'rekam' => $rekam
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rekam $rekam)
    {
        return view('dashboard.rekam.edit', [
            'rekam' => $rekam,
            'pasiens' => Pasien::all(),
            'dokters' => Dokter::all(),
            'ruangs' => Ruang::all(),
            'obats' => Obat::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rekam $rekam)
    {
        $rules = [
            'kd_rm' => 'required',
            'tgl_periksa' => 'required',
            'pasien_id' => 'required',
            'keluhan' => 'required',
            'dokter_id' => 'required',
            'diagnosa' => 'required',
            'obat_id' => 'required',
            'ruang_id' => 'required',
        ];

        $validatedData = $request->validate($rules);
        // $validatedData['user_id'] =auth()->user()->id;

        Rekam::where('id', $rekam->id)
                ->update($validatedData);

        return redirect('/dashboard/rekam')->with('success', 'Data Pasien Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rekam $rekam)
    {
        Rekam::destroy($rekam->id);

        return redirect('/dashboard/rekam')->with('success', 'Data rekam berhasil dihapus');
    }

    public function cetakPdf()
    {
        $rekams = Rekam::all();
        $pdf = PDF::loadView('dashboard.rekam.viewpdfrekam', ['rekams' => $rekams]);
        return $pdf->download('Laporan-Rekam-Medis.pdf');
    }


    public function search(Request $request, Pasien $pasien)
    {
        if($request->has('search')){
            $rekams = Rekam::where('kd_rm', 'LIKE', '%'.$request->search.'%')->get();
        }
        else{
            $rekams = Rekam::all();
        }

        return view('dashboard.rekam.index', ['rekams' => $rekams]);
    }
}
