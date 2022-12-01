<?php

namespace App\Http\Controllers\backend;
use \App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = category::paginate(2);
        return view('admin.category.view', compact('category'));
    }

    public function categoryAdd()
    {
        // $MyUser = ViewUser::all();
        return view('admin.category.add');
    }

    public function categoryStore(Request $request)
    {

        // $validateData = $request->validate([
        //     'title_category' => 'required',
        //     'desc_category' => 'required'
        // ]);
        
         // dd($request);
        $data = new category();
        $data->title_category = $request->title;
        $data->desc_category = $request->desc;
        $data->save();
        $request->session()->flash('msg',  "Data dengan  berhasil disimpan");
        return redirect()->route('category.view')->with('info', 'Add User Succsess');
    }

    public function categoryEdit($id)
    {
        //dd('hbh');
        // $editData = category::find($id);
        // return view('admin.category.edit', compact('editData'));
        $category = category::find($id);
        $data = [
            'id' => $id,
            'title' => $title_category->title,
            'desc' => $desc_category->desc,
        ];
        return View('admin.category.edit', $data);
    }

    

}
