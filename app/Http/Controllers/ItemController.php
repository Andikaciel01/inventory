<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    // Menampilkan semua data item
    public function index()
    {
        return response()->json(
            Item::with('category')->get()
        );
    }

    // Menambahkan item baru
    public function store(Request $request)
    {
        $item = Item::create($request->all());

        return response()->json($item, 201);
    }

    // Menampilkan satu item berdasarkan ID
    public function show($id)
    {
        $item = Item::with('category')->findOrFail($id);

        return response()->json($item);
    }

    // Mengubah data item
    public function update(Request $request, $id)
    {
        $item = Item::findOrFail($id);

        $item->update($request->all());

        return response()->json($item);
    }

    // Menghapus data item
    public function destroy($id)
    {
        Item::destroy($id);

        return response()->json(null, 204);
    }
}