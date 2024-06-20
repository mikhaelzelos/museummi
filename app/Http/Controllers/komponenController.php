<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\komponen;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class komponenController extends Controller
{
    public function index()
    {
        $komponens = komponen::all();
        return view('komponen.index', compact('komponens'));
    }

    public function create()
    {
        //
        return view('komponen.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_komponen' => 'required',
            'dekripsi' => 'required',
            'kuantitas' => 'required',
            'rak' => 'required',
        ]);
        
        try {
            komponen::create($request->all());
            
            return redirect('/komponen')->with('success', 'Instrumen Modern berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "crot";
            return redirect()->back()->with('error', 'Failed to add Instrumen Modern: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $komponen = komponen::findOrFail($id);
            return view('komponen.edit', compact('komponen'));
        } catch (ModelNotFoundException $e) {
            return redirect('/komponen')->with('error', 'Komponen not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_komponen' => 'required',
            'dekripsi' => 'required',
            'kuantitas' => 'required',
            'rak' => 'required',
        ]);

        try {
            $komponen = komponen::findOrFail($id);
            $komponen->update($request->all());

            return redirect('/komponen')->with('success', 'Komponen berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/komponen')->with('error', 'Komponen not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Komponen: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $komponen = komponen::findOrFail($id);
            $komponen->delete();
            return redirect('/komponen')->with('success', 'komponen berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/komponen')->with('error', 'komponen not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete komponen: ' . $e->getMessage());
        }
    }
}
