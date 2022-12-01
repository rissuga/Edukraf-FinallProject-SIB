<?php

namespace App\Http\Controllers\backend;
use App\Models\webinar;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebinarController extends Controller
{
    public function index()
    {
        $webinar = webinar::paginate(3);
        return view('admin.webinar.view', compact('webinar'));
    }


    public function webinarAdd()
    {
        return view('admin.webinar.add');
    }

    public function webinarStore(Request $request)
    {
          if ($request->hasFile('foto')) {
            $path= $request->file('foto')->store('webinarfoto');
        } else {
            $path= ' ';
        }

        $judul =$request->judul;
        $date= $request->date;
        $pemateri= $request->pemateri;
        $status= $request->status;
        $desc= $request->desc;

        $data = new webinar();
        $data->Judul_Webinar = $judul;
        $data->Tanggal = $date;
        $data->Pemateri_Webinar = $pemateri;
        $data->status = $status;
        $data->Cover = $path;
        $data->Desc_Webinar = $desc;
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');    
    }

    public function webinarEdit($id)
    {
        //dd('hbh');
        // $editData = webinar::find($id);
        // return view('admin.crud_webinar.webinar_edit', compact('editData'));
        $webinar = webinar::find($id);
        $data = [
            'id' => $id,
            'judul' => $webinar->Judul_Webinar,
            'date' => $webinar->Tanggal,
            'pemateri' => $webinar->Pemateri_Webinar,
            'status' => $webinar->status,
            'desc' => $webinar->Desc_Webinar,
            'foto' => $webinar->Cover,
        ];
        return View('admin.webinar.edit', $data);
    }

    //Update data
    public function webinarUpdate(Request $request) {

        $id= $request->id;
        $judul =$request->judul;
        $date= $request->date;
        $pemateri= $request->pemateri;
        $status= $request->status;
        $desc= $request->desc;

        $data = webinar::find($id);
        if ($request->hasFile('foto')) {
            $path= $request->file('foto')->store('webinarfoto');
            $data->Cover = $path;
        } 

        // dd($data->Judul_Webinar);
       
        $data->Judul_Webinar = $judul;
        $data->Tanggal = $date;
        $data->Pemateri_Webinar = $pemateri;
        $data->status = $status;
        
        $data->Desc_Webinar = $desc;
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');

    }

}
