<?php

namespace App\Http\Controllers;

use App\Models\Ruang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class DashboardRuangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->authorize('admin');
        return view('dashboard.ruang.index', [
            'ruangs' => Ruang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.ruang.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_ruang' => 'required|max:255 ',
            'ket_ruang' => 'required',
            // 'image' => 'image|file|max:1024',
            // 'body' => 'required'
        ]);

        // if($request->file('image')) {
        //     $validatedData['image'] = $request->file('image')->store('post-images');
        // }

        // $validatedData['user_id'] =auth()->user()->id;
        // $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 200);

        ruang::create($validatedData);

        return redirect('/dashboard/ruang')->with('success', 'Data ruang Baru Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Ruang $ruang)
    {
        return view('dashboard.ruang.show', [
            'ruang' => $ruang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Ruang $ruang)
    {
        return view('dashboard.ruang.edit', [
            'ruang' => $ruang
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ruang $ruang)
    {
        $rules = [
            'name_ruang' => 'required|max:255 ',
            'ket_ruang' => 'required',
        ];

        $validatedData = $request->validate($rules);


        Ruang::where('id', $ruang->id)
                ->update($validatedData);

        return redirect('/dashboard/ruang')->with('success', 'Data ruang Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ruang $ruang)
    {
        ruang::destroy($ruang->id);

        return redirect('/dashboard/ruang')->with('success', 'Data ruang berhasil dihapus');

    }

    public function cetakPdf()
    {
        $ruangs = Ruang::all();
        $pdf = PDF::loadView('dashboard.ruang.viewpdfruang', ['ruangs' => $ruangs]);
        return $pdf->download('Laporan-Ruang.pdf');
    }
}
