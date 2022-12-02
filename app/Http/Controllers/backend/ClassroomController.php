<?php

namespace App\Http\Controllers\backend;
use App\Models\classroom;
use App\Models\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classroom = classroom::paginate(5);
        return view('admin.classroom.view', compact('classroom'));
    }

    public function add(){
        $category = category::select('id','title_category')->get();
        return view('admin.classroom.add', ['category' => $category]);

    }

    public function store(Request $request) 
    {
        $data = new classroom();
        $data->title_classroom = $request->title_classroom;
        $data->link_classroom = $request->link_classroom;
        $data->category_id = $request->category_id;  
        $data->desc_classroom = $request->desc;
        $data->save();
        return redirect()->route('classroom.view')->with('info', 'Update User Succsess');
    }

   public function edit(Request $request, $id){
    $classroom = classroom::find($id);
    $category = category::where('id', '!=', $classroom->category_id)->get(['id', 'title_category']);
    return view('admin.classroom.edit' ,['classroom' => $classroom, 'category' =>$category]);
    // dd($classroom);
    // return view('admin.classroom.edit');
   }

   public function update(Request $request, $id) {
    
    $data = classroom::find($id);
    $data->title_classroom = $request->title_classroom;
    $data->link_classroom = $request->link_classroom;
    $data->category_id = $request->category_id;  
    $data->desc_classroom = $request->desc;
    $data->save();
    return redirect()->route('classroom.view')->with('info', 'Update User Succsess');

   }

   public function delete($id) {

    $data = classroom::find($id);
    $data->delete();
    return redirect()->route('classroom.view')->with('info', 'Update User Succsess');

   }
}
 