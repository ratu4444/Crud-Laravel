<?php

namespace App\Http\Controllers;
use App\Models\Info;

use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function show_create() 
    {
        return view('create');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'pass' => 'required'
        ]);
        $name = $request->name;
        $email = $request->email;
        $password = $request->pass;
        
        $insert = Info::insert([
            'name' => $name,
            'email'=> $email,
            'password' => bcrypt($password)
        ]);

        if($insert){
            return redirect()->route('read');
        
        }

    }

    public function read()
    {
        $info = Info::get();
        return view('read', compact('info'));
        
    }

    public function show_update(Info $info)
    {
        return view('update', compact('info'));
    }

    public function update(Info $info, Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        
        $password = $request->pass;
        if($password == NULL){
            $password = $info->password;
        }else 
        {
            $password = bcrypt($password);
        }
        $update = $info->update([
            'name' => $name,
            'email'=> $email,
            'password' => $password
        
        ]);

        if($update){
            return redirect()->route('read');
        
        }
    }

    public function delete(Info $info)
    {
        $delete = $info->delete();
        if($delete)
        {
            return redirect()->route('read');
        }
    }
}
