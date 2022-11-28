<?php

namespace App\Http\Controllers;
use App\Models\webinar;
use Illuminate\Http\Request;


class WebinarController extends Controller
{
    public function index()
    {
        $webinar = webinar::paginate(2);
        return view('admin.crud_webinar.webinar_view', compact('webinar'));
    }


    public function WebinarAdd()
    {

        return view('admin.crud_webinar.webinar_add');
    }

    public function WebinarStore(Request $request)
    {
        // dd($request->all());
        $data = new webinar();
        $data->Judul_Webinar = $request->judul;
        $data->Tanggal = $request->date;
        $data->Pemateri_Webinar= $request->pemateri;
        $data->status= $request->status;
        $data->Cover= $this->Upload($request);
        $data->Desc_Webinar= $request->desc;
        // if ($request->hasFile('Cover')) {
        //     $request->file('Cover')->move(public_path('coverwebinar/'), $request->file('Cover')->getClientOriginalName());
        //     $data->Cover = $request->file('Cover')->getClientOriginalName();
        //     $data->save();
        // }
        $data->save();
        return redirect()->route('webinar.view')->with('info', 'Add User Succsess');
    }

    private function Upload ($request) {

        if (!$request->has('image')) {
            return response()->json(['message' => 'Missing file'], 422);
        }
        $imagename = uniqid() . '-' . $request->title . '.' . $request->image->extension();
        return $request->image->move(public_path('coverbinar'), $imagename);



    }

}
