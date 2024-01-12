<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    /**
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('supplier.index');
    }

    public function data()
    {
        $supplier = Supplier::orderBy('id_supplier')->get();

        return datatables()
            ->of($supplier)
            ->addIndexColumn()
            ->addColumn('select_all', function ($supplier) {
                return '
                    <input type="checkbox" name="id_supplier[]" value="' . $supplier->id_supplier . '">
                ';
            })
            ->addColumn('aksi', function ($supplier) {
                return '
                    <div class=" text-center">
                        <button type="button" onclick="editForm(`' . route('supplier.update', $supplier->id_supplier) . '`)" class="btn btn-xs btn-warning btn-flat"><i class="fa fa-pencil-alt"></i></button>
                        <button type="button" onclick="deleteData(`' . route('supplier.destroy', $supplier->id_supplier) . '`)" class="btn btn-xs btn-danger btn-flat"><i class="fa fa-trash-alt"></i></button>
                    </div>
                ';
            })
            ->rawColumns(['aksi',  'select_all'])
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $supplier = Supplier::latest()->first();


        $supplier = new Supplier();
        $supplier->nama = $request->nama;
        $supplier->telpon = $request->telpon;
        $supplier->alamat = $request->alamat;
        $supplier->save();

        return response()->json('Data berhasil di simpan', 200);
    }

    /**
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $supplier = Supplier::find($id);

        return response()->json($supplier);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $supplier = Supplier::find($id)->update($request->all());

        return response()->json('Data berhasil di ubah', 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $supplier = Supplier::find($id);
        $supplier->delete();

        return response(null, 204);
    }

    public function deleteSupplier(Request $request)
    {
        foreach ($request->id_supplier as $id) {
            $supplier = Supplier::find($id);
            $supplier->delete();
        }

        return response(null, 204);
    }
}
