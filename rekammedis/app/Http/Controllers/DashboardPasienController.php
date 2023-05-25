<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardPasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.pasien.index', [
            'pasiens' => Pasien::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_pasien' => 'required|max:255 ',
            'alamat_pasien' => 'required',
            'no_telp_pasien' => 'required',
            'jenis_kelamin_pasien' => 'required',
            // 'image' => 'image|file|max:1024',
            // 'body' => 'required'
        ]);

        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id'] =auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Pasien::create($validatedData);

        return redirect('/dashboard/pasien')->with('success', 'Data Pasien Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        return view('dashboard.pasien.show', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pasien $pasien)
    {
        return view('dashboard.pasien.edit', [
            'pasien' => $pasien
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pasien $pasien)
    {
        $rules = [
            'name_pasien' => 'required|max:255 ',
            'alamat_pasien' => 'required',
            'no_telp_pasien' => 'required',
            'jenis_kelamin_pasien' => 'required'
        ];

        $validatedData = $request->validate($rules);


        Pasien::where('id', $pasien->id)
                ->update($validatedData);

        return redirect('/dashboard/pasien')->with('success', 'Data Pasien Berhasil Diubah');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pasien $pasien)
    {
        Pasien::destroy($pasien->id);

        return redirect('/dashboard/pasien')->with('success', 'Data pasien berhasil dihapus');

    }

    public function cetakPdf()
    {
        $pasiens = Pasien::all();
        $pdf = PDF::loadView('dashboard.pasien.viewpdfpasien', ['pasiens' => $pasiens]);
        return $pdf->download('Data-Pasien.pdf');
    }
}
