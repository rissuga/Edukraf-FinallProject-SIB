<?php

namespace App\Http\Controllers\backend;
use App\Models\webinar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class webinarController extends Controller
{
    //
    public function index()
    {
        $webinar = webinar::paginate(3);
        return view('admin.crud_webinar.webinar_view', compact('webinar'));
    }


    public function WebinarAdd()
    {

        return view('admin.crud_webinar.webinar_add');
    }

    public function WebinarStore(Request $request)
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

        $data = new webinar();
        $data->title = $judul;
        $data->date = $date;
        $data->speaker = $pemateri;
        $data->link_record = $record;
        $data->cover = $path;
        $data->desc = $desc;
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');    
    }


    public function WebinarEdit($id)
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
        ];
        return View('admin.crud_webinar.webinar_edit', $data);
    }

    //Update data
    public function WebinarUpdate(Request $request) {

        $id= $request->id;
        $judul =$request->judul;
        $date= $request->date;
        $pemateri= $request->pemateri;
        $record= $request->record;
        $desc= $request->desc;

        $data = webinar::find($id);
        if ($request->hasFile('foto')) {
            $path= $request->file('foto')->store('webinarfoto');
            $data->cover=$path;
        } 

        $data->title = $judul;
        $data->date = $date;
        $data->speaker = $pemateri;
        $data->link_record = $record;
        $data->cover = $path;
        $data->desc = $desc;

        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');

    }

    public function delete($id){
        $webinar = webinar::find($id);
        $webinar->delete();
        return redirect()->route('webinar.view')->with('info', 'Delete User Succsess');

    }
}




















// if ($request->hasFile('foto')) {
        //     $path= $request->file('foto')->store('webinarfoto');
        // } else {
        //     $path= ' ';
        // }
        
        // // dd($request->all());
        // $data = new webinar();
        // $data->Judul_Webinar = $request->judul;
        // $data->Tanggal = $request->date;
        // $data->Pemateri_Webinar= $request->pemateri;
        // $data->status= $request->status;
        // $data->Cover= $request->foto->path;
        // $data->Desc_Webinar= $request->desc;
        // // if ($request->hasFile('Cover')) {
        // //     $request->file('Cover')->move(public_path('coverwebinar/'), $request->file('Cover')->getClientOriginalName());
        // //     $data->Cover = $request->file('Cover')->getClientOriginalName();
        // //     $data->save();
        // // }
        // $data->save();
        // return redirect()->route('webinar.view')->with('info', 'Add User Succsess');