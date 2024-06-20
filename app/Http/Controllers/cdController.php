<?php

namespace App\Http\Controllers;

use App\Models\cd;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class cdController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $cds = cd::all();
            return view('cd.index', compact('cds'));
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
        return view('cd.create');
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
            'judul' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
       
        try {
            // dd($request->all());
            cd::create($request->all());
            return redirect('/cd')->with('success', 'cd berhasil ditambahkan.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to add cd: ' . $e->getMessage());
        }
    }

    
    public function edit($id)
    {
        try {
            $cd = cd::findOrFail($id);
            return view('cd.edit', compact('cd'));
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
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
            'judul' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $cd = cd::findOrFail($id);
            $cd->update($request->all());
            return redirect('/cd')->with('success', 'cd berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update cd: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $cd = cd::findOrFail($id);
            $cd->delete();
            return redirect('/cd')->with('success', 'cd berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/cd')->with('error', 'cd not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete cd: ' . $e->getMessage());
        }
    }
}


