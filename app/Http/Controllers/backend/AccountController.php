<?php

namespace App\Http\Controllers\backend;
use App\Models\User;
use App\Models\account;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    //
    public function index()
    {
        $MyUser = account::paginate(3);
        return view('admin.account.view', compact('MyUser'));
    }

    public function accountAdd()
    {
        // $MyUser = ViewUser::all();
        return view('admin.account.add');
    }

    public function accountStore(Request $request)
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
        return redirect()->route('account.view')->with('info', 'Add User Succsess');
    }

    public function accountEdit($id)
    {
        // dd($id);
        // $editData = User::find($id);
        // return view('admin.account.edit', compact('editData'));

        $user = User::find($id);
        $data = [
            'id' => $id,
            'textName' => $user->name,
            'email'=> $user->email
        ];
        return View('admin.account.edit', $data);
    }

    public function accountUpdate(Request $request)
    {   

        // $validateData = $request->validate([
        //     'email' => 'required|unique:users',
        //     'textName' => 'required',
        // ]);
        // // dd($request);
        // $data = User::find($id);
        // $data->name = $request->textName;
        // $data->email = $request->email;
        // // $data->password = bcrypt($request->password);
        // $data->save();
        // return redirect()->route('account.view')->with('info', 'Add User Succsess');

        $id= $request->id;
        $textName =$request->textName;
        $email= $request->email;
        
        $data = User::find($id);
        $data->name = $textName;
        $data->email = $email;
        $data->save();
        return redirect()->route('account.view')->with('info', 'Add User Succsess');

    }

    public function accountDelete($id) {
        $data = User::find($id);
        $data->delete();
        return redirect()->route('account.view')->with('info', 'Add User Succsess');

    }

}

//$data->password = bcrypt($request->password);
