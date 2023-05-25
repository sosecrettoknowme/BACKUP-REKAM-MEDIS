<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardDokterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $this->authorize('admin');
        return view('dashboard.dokter.index', [
            'dokters' => Dokter::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.dokter.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        {

            $validatedData = $request->validate([
                'name_dokter' => 'required|max:255 ',
                'spesialis' => 'required',
                'alamat' => 'required',
                'no_telp' => 'required',
                // 'image' => 'image|file|max:1024',
                // 'body' => 'required'
            ]);
    
            // if($request->file('image')) {
            //     $validatedData['image'] = $request->file('image')->store('post-images');
            // }
    
            // $validatedData['user_id'] =auth()->user()->id;
            // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);
    
            Dokter::create($validatedData);
    
            return redirect('/dashboard/dokter')->with('success', 'Data Doter Baru Berhasil Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Dokter $dokter)
    {
        return view('dashboard.dokter.show', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dokter $dokter)
    {
        return view('dashboard.dokter.edit', [
            'dokter' => $dokter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Dokter $dokter)
    {
        $rules = [
            'name_dokter' => 'required|max:255 ',
            'spesialis' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ];

        $validatedData = $request->validate($rules);


        Dokter::where('id', $dokter->id)
                ->update($validatedData);

        return redirect('/dashboard/dokter')->with('success', 'Data Dokter Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dokter $dokter)
    {
        Dokter::destroy($dokter->id);

        return redirect('/dashboard/dokter')->with('success', 'Data dokter berhasil dihapus');

    }

    public function cetakPdf()
    {
        $dokters = Dokter::all();
        $pdf = PDF::loadView('dashboard.dokter.viewpdfdokter', ['dokters' => $dokters]);
        return $pdf->download('Data-Dokter.pdf');
    }
}
