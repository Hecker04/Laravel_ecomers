<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Distributor;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert; // Jika Anda menggunakan SweetAlert

class distributorController extends Controller
{

    /**
     * Menampilkan semua distributor.
     */
    public function index()
    {
        $distributors = Distributor::all();
        confirmDelete('Hapus Date', 'Apakah anda yakin ingin menghapus data ini?');
        return view('pages.admin.distributor.index', compact('distributors'));
    }

    /**
     * Menampilkan form untuk menambah distributor baru.
     */
    public function create()
    {
        return view('pages.admin.distributor.create');
    }

    /**
     * Menampilkan detail distributor berdasarkan ID.
     */
    public function detail($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('pages.admin.distributor.detail', compact('distributor'));
    }

    /**
     * Menampilkan form untuk mengedit distributor berdasarkan ID.
     */
    public function edit($id)
    {
        $distributor = Distributor::findOrFail($id);
        return view('pages.admin.distributor.edit', compact('distributor'));
    }

    /**
     * Menghapus distributor berdasarkan ID.
     */
    public function delete($id)
    {
        $distributor = Distributor::findOrFail($id);
        $distributor->delete();

        Alert::success('Berhasil', 'Distributor berhasil dihapus');
        return redirect()->route('admin.distributor');
    }

    /**
     * Memperbarui data distributor berdasarkan ID.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'kota' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kontak' => 'required|string|max:50',
            'email' => 'required|email|unique:distributors,email,' . $id,
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $distributor = Distributor::findOrFail($id);
        $distributor->update([
            'name' => $request->name,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kontak' => $request->kontak,
            'email' => $request->email,
        ]);

        Alert::success('Berhasil!', 'Distributor berhasil diperbarui!');
        return redirect()->route('admin.distributor');
    }

    /**
     * Menyimpan distributor baru ke database.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'kota' => 'required|string|max:100',
            'provinsi' => 'required|string|max:100',
            'kontak' => 'required|string|max:50',
            'email' => 'required|email|unique:distributors',
        ]);

        if ($validator->fails()) {
            Alert::error('Gagal!', 'Pastikan semua terisi dengan benar!');
            return redirect()->back()->withErrors($validator)->withInput();
        }

        Distributor::create([
            'name' => $request->name,
            'kota' => $request->kota,
            'provinsi' => $request->provinsi,
            'kontak' => $request->kontak,
            'email' => $request->email,
        ]);

        Alert::success('Berhasil!', 'Distributor berhasil ditambahkan!');
        return redirect()->route('admin.distributor');
    }
}