<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class ProfileController extends Controller
{
    public function edit($id){
        $profile = User::find($id);
        return view('auth/profile' ,compact('profile'));
    }

    public function update(Request $request, $id){
        $this->validate($request, [
            'password'              =>  'required',
            'password_confirmation' =>  'required'
        ]);

        $pass = password_hash($request->password , PASSWORD_DEFAULT);
        $profile = User::find($id);
        $profile->name = $profile->name;
        $profile->email = $profile->email;
        $profile->password = $pass;
        $profile->save();
        return redirect()->route('datapegawai')->with([
            'success' => 'Data Telah diubah'
            ]);
    }
}