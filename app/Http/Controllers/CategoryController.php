<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

  public function index() {
    $category = Category::paginate(5);

    // Get the current page number from the paginator instance
    $currentPage = $category->currentPage();

    // Calculate the starting index for pagination numbers based on the current page
    $startIndex = ($currentPage - 1) * 5 + 1;

    return view('pages.admin.category.index', compact('category', 'startIndex'));
}


          public function create() {
            return view('pages.admin.category.create');
          }

          public function store(Request $request) 
          {
            $this->validate($request, [
                'category_name' => 'required|string|max:255',
            ]);


            $category = new Category();
                $category->category_name = $request->input('category_name');
                $category->save();
            return redirect()->route('category.index')->with('success', 'Categorys Berhasil');
          }

          public function show(Request $request) {
          return view();
          }
          

          public function edit($id) {
            $category = Category::find($id);
            return view('pages.admin.category.edit', compact('category'));
          }

          public function update(Request $request, $id) {
            $this->validate($request, [
              'category_name' => 'required|string|max:255',
          ]);
           $category = Category::find($id);
           $category->category_name = $request->input('category_name');
           $category->save();
           return redirect()->route('category.index')->with('success', 'Category Berhasil');
          }

          public function destroy($id) 
          {
            $category = Category::find($id);
                $category->delete();
                return redirect()->route('category.index');
          }
}
