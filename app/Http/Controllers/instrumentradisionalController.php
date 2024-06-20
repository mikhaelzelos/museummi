<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\instrumentradisional;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class InstrumentradisionalController extends Controller
{
    public function index()
    {
        $instrumentradisionals = instrumentradisional::all();
        return view('instrumentradisional.index', compact('instrumentradisionals'));
    }

    public function create()
    {
        //
        return view('instrumentradisional.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'nama_instrumen' => 'required',
            'daerah' => 'required',
            'penyumbang' => 'required',
            'quantity' => 'required',
        ]);
        
        try {
            instrumentradisional::create($request->all());
            
            return redirect('/instrumentradisional')->with('success', 'Instrumen Tradisional berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "crot";
            return redirect()->back()->with('error', 'Failed to add Instrumen Tradisional: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $instrumentradisional = instrumentradisional::findOrFail($id);
            return view('instrumentradisional.edit', compact('instrumentradisional'));
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumentradisional')->with('error', 'Instrumen Tradisional not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'nama_instrumen' => 'required',
            'daerah' => 'required',
            'penyumbang' => 'required',
            'quantity' => 'required',
        ]);

        try {
            $instrumentradisional = instrumentradisional::findOrFail($id);
            $instrumentradisional->update($request->all());
            return redirect('/instrumentradisional')->with('success', 'Instrumen Tradisinal berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumentradisional')->with('error', 'Instrumen Tradisional not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Instrumen Tradisional: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $instrumentradisional = instrumentradisional::findOrFail($id);
            $instrumentradisional->delete();
            return redirect('/instrumentradisional')->with('success', 'instrumentradisional berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/instrumentradisional')->with('error', 'instrumentradisional not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete instrumentradisional: ' . $e->getMessage());
        }
    }
}
