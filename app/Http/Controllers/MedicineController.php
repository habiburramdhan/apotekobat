<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * R: read, menampilkan banyak data/halaman awal fitur
     */
    public function index()
    {
        return view('pages.data_obat');
    }

    /**
     * C: create, menampilkan form untuk menambahkan data
     */
    public function create()
    {
        //
    }

    /**
     * C: create, menambahkan data ke db/eksekusi formulir
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * R: read, menampilkan data spesifik (data cuman 1)
     */
    public function show(string $id)
    {
        //
    }

    /**
     * U: update, menampilkan form untuk mengedit data
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * U: update, mengupdate data ke db/eksekusi formulir edit
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * D: delete, menghapus data dari db
     */
    public function destroy(string $id)
    {
        //
    }
}
