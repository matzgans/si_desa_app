<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SaranaPerikanan;
use App\Models\Village;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SaranaPerikananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $search = $request->input('search');
        if ($search) {
            $sarana_perikanans = SaranaPerikanan::join('villages', 'sarana_perikanans.village_id', '=', 'villages.id')
                ->where('villages.village_name', 'like', '%' . $search . '%') // Filter berdasarkan nama desa
                ->select('sarana_perikanans.*', 'villages.village_name as village_name')
                ->paginate(4);
        } else {
            $sarana_perikanans = SaranaPerikanan::join('villages', 'sarana_perikanans.village_id', '=', 'villages.id')
                ->where('villages.village_name', 'like', '%' . $search . '%') // Filter berdasarkan nama desa
                ->select('sarana_perikanans.*', 'villages.village_name as village_name')
                ->paginate(4);
        }
        return view('pages.admin.sarana_perikanan.index', compact('sarana_perikanans'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $villages = Village::all();
        return view('pages.admin.sarana_perikanan.create', compact('villages'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input
        $validator = Validator::make($request->all(), [
            'village_id' => 'required|unique:sarana_perikanans',
            'tambatan' => 'required|numeric|digits_between:1,7',
            'pasar_ikan' => 'required|numeric|digits_between:1,7',
            'pajeko' => 'required|numeric|digits_between:1,7',
            'kapal_ikan' => 'required|numeric|digits_between:1,7',
            'perahu_bodi' => 'required|numeric|digits_between:1,7',
            'mesin_tempel' => 'required|numeric|digits_between:1,7',
            'katintin' => 'required|numeric|digits_between:1,7',

        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        SaranaPerikanan::create($request->all());
        return redirect()->back()->with('success', 'Data Sarana Perikanan berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $sarana_perikanans = SaranaPerikanan::findOrFail($id);
        $villages = Village::all();
        return view('pages.admin.sarana_perikanan.edit', compact('sarana_perikanans', 'villages'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $sarana_perikanans = SaranaPerikanan::findOrFail($id);

        // Validasi input
        $validator = Validator::make($request->all(), [
            'village_id' => 'required|unique:sarana_perikanans,village_id,' .  $sarana_perikanans->id,
            'tambatan' => 'required|numeric|digits_between:1,7',
            'pasar_ikan' => 'required|numeric|digits_between:1,7',
            'pajeko' => 'required|numeric|digits_between:1,7',
            'kapal_ikan' => 'required|numeric|digits_between:1,7',
            'perahu_bodi' => 'required|numeric|digits_between:1,7',
            'mesin_tempel' => 'required|numeric|digits_between:1,7',
            'katintin' => 'required|numeric|digits_between:1,7',
        ]);
        if ($validator->fails()) {

            return redirect()->back()->withErrors($validator)->withInput();
        }

        $sarana_perikanans->update($request->all());
        return redirect()->back()->with('success', 'Data Sarana Perikanan berhasil ditambahkan!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sarana_perikanans = SaranaPerikanan::findOrFail($id);
        $sarana_perikanans->delete();
        return redirect()->back()->with('success', 'Data Sarana Perikanan berhasil dihapus!');
    }
}
