<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\adminAccount;
use Illuminate\Http\Request;

class AdminAccountController extends Controller
{
    //
    public function home()
    {

        return 'selmat ';
    }
    //
    public function adminView()
    {
        $MyUser = adminAccount::paginate(3);
        return view('admin.kelola_admin.admin_view', compact('MyUser'));
    }

    public function adminAdd()
    {
        // $MyUser = ViewUser::all();
        return view('admin.kelola_admin.admin_add');
    }

    public function adminStore(Request $request)
    {

        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);
        // dd($request);
        $data = new User();
        $data->name = $request->textName;
        $data->email = $request->email;
        $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admin.view')->with('info', 'Add User Succsess');
    }

    public function adminEdit($id)
    {
        // dd('hbh');
        $editData = User::find($id);
        return view('admin.kelola_admin.admin_edit', compact('editData'));
    }

    public function adminUpdate(Request $request, $id)
    {

        $validateData = $request->validate([
            'email' => 'required|unique:users',
            'textName' => 'required',
        ]);
        // dd($request);
        $data = User::find($id);
   
        $data->name = $request->textName;
        $data->email = $request->email;
        // $data->password = bcrypt($request->password);
        $data->save();
        return redirect()->route('admin.view')->with('info', 'Update User Succsess');
    }

    public function adminDelete($id)
    {
        // dd('hbh');
        $editData = User::find($id);
        $editData->delete();
        return redirect()->route('admin.view')->with('info', 'Delete User Succsess');
    }
}