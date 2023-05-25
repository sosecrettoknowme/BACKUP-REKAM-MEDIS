<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.obat.index', [
            'obats' => Obat::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.obat.create');   
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_obat' => 'required|max:255 ',
            'ket_obat' => 'required',
            // 'image' => 'image|file|max:1024',
            // 'body' => 'required'
        ]);

        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id'] =auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        Obat::create($validatedData);

        return redirect('/dashboard/obat')->with('success', 'Data obat Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        $this->authorize('admin');
        return view('dashboard.obat.show', [
            'obat' => $obat
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return view('dashboard.obat.edit', [
            'obat' => $obat
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $rules = [
            'name_obat' => 'required|max:255 ',
            'ket_obat' => 'required',
        ];

        $validatedData = $request->validate($rules);


        Obat::where('id', $obat->id)
                ->update($validatedData);

        return redirect('/dashboard/obat')->with('success', 'Data obat Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        Obat::destroy($obat->id);

        return redirect('/dashboard/obat')->with('success', 'Data obat berhasil dihapus');
    
    }

    public function cetakPdf()
    {
        $obats = Obat::all();
        $pdf = PDF::loadView('dashboard.obat.viewpdfobat', ['obats' => $obats]);
        return $pdf->download('Data-Obat.pdf');
    }
}
