<?php

namespace App\Http\Controllers\backend;
use App\Models\webinar;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebinarController extends Controller
{
    // Admin
    public function index()
    {
        $webinar = webinar::paginate(5);
        return view('admin.webinar.view', compact('webinar'));
    }

    
    public function add()
    {

        return view('admin.webinar.add');
    }

    public function store(Request $request)
    {
          if ($request->hasFile('foto')) {
            $path= $request->file('foto')->store('webinarfoto');
        } else {
            $path= ' ';
        }

        $judul =$request->judul;
        $date= $request->date;
        $pemateri= $request->pemateri;
        $record= $request->record;
        $desc= $request->desc;
        $linkWebinar = $request->linkWebinar;
        $timeStart = $request->timeStart;
        $timeEnd = $request->timeEnd;

        $data = new webinar();
        $data->title = $judul;
        $data->date = $date;
        $data->speaker = $pemateri;
        $data->link_record = $record;
        $data->link_webinar = $linkWebinar;
        $data->cover = $path;
        $data->desc = $desc;
        $data->time_start = $timeStart;
        $data->time_end = $timeEnd;
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');    
    }


    public function edit($id)
    {
        //dd('hbh');
        // $editData = webinar::find($id);
        // return view('admin.crud_webinar.webinar_edit', compact('editData'));
        $webinar = webinar::find($id);
        $data = [
            'id' => $id,
            'judul' => $webinar->title,
            'date' => $webinar->date,
            'pemateri' => $webinar->speaker,
            'record' => $webinar->link_record,
            'desc' => $webinar->desc,
            'foto' => $webinar->cover,
            'linkWebinar' => $webinar->link_webinar,
            'timeStart' => $webinar->time_start,
            'timeEnd' => $webinar->time_end,
        ];
        return View('admin.webinar.edit', $data);
    }

    //Update data
    public function update(Request $request) {
        $id= $request->id;
        $judul =$request->judul;
        $date= $request->date;
        $pemateri= $request->pemateri;
        $record= $request->record;
        $desc= $request->desc;
        $linkWebinar = $request->linkWebinar;
        $timeStart = $request->timeStart;
        $timeEnd = $request->timeEnd;

        $data = webinar::find($id);
        if ($request->hasFile('foto')) {
            $path= $request->file('foto')->store('webinarfoto');
            $data->cover=$path;
        } 

        $data->title = $judul;
        $data->date = $date;
        $data->speaker = $pemateri;
        $data->link_record = $record;
        $data->link_webinar =  $linkWebinar;
        $data->desc = $desc;
        $data->time_start = $timeStart;
        $data->time_end = $timeEnd;
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');

    }

    public function delete($id){
        $webinar = webinar::find($id);
        $webinar->delete();
        return redirect()->route('webinar.view')->with('info', 'Delete User Succsess');

    }

    public function cancel(){
        return redirect()->route('webinar.view');

    }

    public function detailAdmin($id){
        $webinar = webinar::find($id);
        // dd($webinar);
        return View('admin.webinar.detail', compact('webinar'));
    }


    //============ Frontend ========\\

    public function show()
    {
        $webinar = webinar::paginate(2);
        return view('frontend.webinar', compact('webinar'));
    }

    public function webinarshow()
    {
        $webinar = webinar::where('id','<',6)->get();
        return view('frontend.index', compact('webinar'));
    }

    public function show_soon()
    {   
        $now = Carbon::now()->timestamp;
        $webinar = webinar::whereDate('date','>','2022-12-13')->paginate(9);
        return view('frontend.webinar', compact('webinar'));
    }
    
    public function show_done()
    {   
        $now = Carbon::now()->timestamp;
        $webinar = webinar::whereDate('date','<','2022-12-13')->paginate(9);
        return view('frontend.webinar', compact('webinar'));
    }
    
    public function detail($id)
    {
        $webinar = webinar::find($id);
        $select = webinar::paginate(3);
        return view('frontend.webinardetail', compact('webinar', 'select'));
    }

    public function fiturBeranda()
    {
        $webinar = webinar::where('id','<',6)->get();
        // dd($webinar);
        return view('frontend.index', compact('webinar'));
      
    }
   
}
