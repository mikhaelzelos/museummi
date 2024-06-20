<?php

namespace App\Http\Controllers;

use App\Models\memorabilia;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class memorabiliaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $memorabilias = memorabilia::all();
            return view('memorabilia.index', compact('memorabilias'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('memorabilia.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'Biografi' => 'required',
            'foto' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
       
        try {
            // dd($request->all());
            memorabilia::create($request->all());
            return redirect('/memorabilia')->with('success', 'memorabilia berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add memorabilia: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $memorabilia = memorabilia::findOrFail($id);
            return view('memorabilia.edit', compact('memorabilia'));
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'Biografi' => 'required',
            'foto' => 'required',
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        try {
            $memorabilia = memorabilia::findOrFail($id);
            $memorabilia->update($request->all());
            return redirect('/memorabilia')->with('success', 'memorabilia berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update memorabilia: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $memorabilia = memorabilia::findOrFail($id);
            $memorabilia->delete();
            return redirect('/memorabilia')->with('success', 'memorabilia berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/memorabilia')->with('error', 'memorabilia not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete memorabilia: ' . $e->getMessage());
        }
    }
}



