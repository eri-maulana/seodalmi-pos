<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('kategori.index');
    }

    public function data()
    {
        $kategori = Kategori::orderBy('id_kategori')->get();

        return datatables()
            ->of($kategori)
            ->addIndexColumn()
            ->addColumn('select_all', function ($kategori) {
                return '
                    <input type="checkbox" name="id_kategori[]" value="' . $kategori->id_kategori . '">
                ';
            })
            ->addColumn('aksi', function ($kategori) {
                return '
                    <div class=" text-center">
                        <button type="button" onclick="editForm(`' . route('kategori.update', $kategori->id_kategori) . '`)" class="btn btn-xs btn-warning btn-flat"><i class="fa fa-pencil-alt"></i></button>
                        <button type="button" onclick="deleteData(`' . route('kategori.destroy', $kategori->id_kategori) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash-alt"></i></button>
                    </div>
                ';
            })
            ->rawColumns(['aksi', 'select_all'])
            ->make(true);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->save();

        return response()->json('Data berhasil di simpan', 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $kategori = Kategori::find($id);

        return response()->json($kategori);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->update();

        return response()->json('Data berhasil di ubah', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();

        return response(null, 204);
    }

    public function deleteKategori(Request $request)
    {
        foreach ($request->id_kategori as $id) {
            $kategori = Kategori::find($id);
            $kategori->delete();
        }

        return response(null, 204);
    }
}