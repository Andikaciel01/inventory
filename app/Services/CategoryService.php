<?php

namespace App\Services;

use App\Models\Category;

class CategoryService
{
    public function all()
    {
        return Category::all();
    }

    public function create(array $data)
    {
        return Category::create($data);
    }

    public function find(int $id)
    {
        return Category::findOrFail($id);
    }

    public function update(int $id, array $data)
    {
        $category = Category::findOrFail($id);

        $category->update($data);

        return $category;
    }

    public function delete(int $id)
    {
        $category = Category::findOrFail($id);

        return $category->delete();
    }
}