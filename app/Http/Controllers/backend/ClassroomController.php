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

    public function show( $cat)
    {
        $class = classroom::where('category_id', $cat)->paginate(9);
        $category = category::find($cat);
        return view('frontend.classvidio' ,compact('class','category'));
    }

    public function detail($id)
    {
        $class= classroom::find($id);
        $select = classroom::paginate(3);
        // $category = category::where('id', '==', $class->category_id)->get(['title_category']);
        return view('frontend.classdetail' ,compact('class','select'));
    }
    
    // public function tampil(Request $request, $cat)
    // {
    //     $tampil = classroom::where('category_id', $cat)->get();

    //     return view('frontend.classvidio' ,compact('tampil'));
    // }

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
        $data->source = $request->source;
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
    $data->source = $request->source;
    $data->save();
    return redirect()->route('classroom.view')->with('info', 'Update User Succsess');

   }

   public function delete($id) {

    $data = classroom::find($id);
    $data->delete();
    return redirect()->route('classroom.view')->with('info', 'Update User Succsess');

   }

   public function cancel(){
    return redirect()->route('classroom.view');
}

   public function detailAdmin($id) {
    $classroom = classroom::find($id);
    //$category = category::where('id', '!=', $classroom->category_id)->get(['id', 'title_category']);
    return view('admin.classroom.detail' , compact('classroom'));
   }
}
 