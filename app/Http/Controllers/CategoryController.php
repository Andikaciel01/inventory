<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Menampilkan semua data kategori
    public function index()
    {
        return response()->json(Category::all());
    }

    // Menambahkan kategori baru
    public function store(Request $request)
    {
        $category = Category::create($request->all());

        return response()->json($category, 201);
    }

    // Menampilkan satu kategori berdasarkan ID
    public function show($id)
    {
        $category = Category::findOrFail($id);

        return response()->json($category);
    }

    // Mengubah data kategori
    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);

        $category->update($request->all());

        return response()->json($category);
    }

    // Menghapus kategori
    public function destroy($id)
    {
        Category::destroy($id);

        return response()->json(null, 204);
    }
}