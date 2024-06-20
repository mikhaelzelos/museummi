<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\piringanhitam;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class piringanhitamController extends Controller
{
    public function index()
    {
        try {
            $piringanhitams = piringanhitam::all();
            return view('piringanhitam.index', compact('piringanhitams'));
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function create()
    {
        //
        return view('piringanhitam.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'cover' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);
        
 
        try {
            piringanhitam::create($request->all());
            
            return redirect('/piringanhitam')->with('success', 'Piringan Hitam berhasil ditambahkan.');
        } catch (Exception $e) {
            echo "c";
            return redirect()->back()->with('error', 'Failed to add Piringan Hitam: ' . $e->getMessage());
        }
    }

    public function edit($id)
    {
        try {
            $piringanhitam = piringanhitam::findOrFail($id);
            return view('piringanhitam.edit', compact('piringanhitam'));
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringan Hitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to retrieve data: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nomor_regist' => 'required',
            'penyumbang' => 'required',
            'tgl_masuk' => 'required',
            'cover' => 'required',
            'lagu' => 'required',
            'deskripsi' => 'required',
            'rak' => 'required',
        ]);

        try {
            $piringanhitam = piringanhitam::findOrFail($id);
            $piringanhitam->update($request->all());
            return redirect('/piringanhitam')->with('success', 'Piringan Hitam berhasil diperbarui.');
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringan Hitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to update Piringan Hitam: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $piringanhitam = piringanhitam::findOrFail($id);
            $piringanhitam->delete();
            return redirect('/piringanhtam')->with('success', 'Piringan Hitam berhasil dihapus.');
        } catch (ModelNotFoundException $e) {
            return redirect('/piringanhitam')->with('error', 'Piringan Hitam not found.');
        } catch (Exception $e) {
            return redirect()->back()->with('error', 'Failed to delete Piringan Hitam: ' . $e->getMessage());
        }
    }
}
