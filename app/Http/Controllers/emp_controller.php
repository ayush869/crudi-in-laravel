<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Migration;
use  Illuminate\Support\Facades\Validator;

class emp_controller extends Controller
{
    public function index(){
        $i = Migration::all();

        return view('emp_list',compact('i'));
        
    }
    public function create(){
        return view('emp_create');
    }

     public function store(Request $request){
        $validator=Validator::make($request->all(),[
            'name'=>'required',
            'username'=>'required',
            'password'=>'required',
            'phone'=>'required',
            'email'=>'required'
            
        ]);

        if($validator->passes()){
                $migration = new Migration();
                $migration->name = $request->input('name');
                $migration->username = $request->input('username');
                $migration->password = $request->input('password');
                $migration->phone = $request->input('phone');
                $migration->email = $request->input('email');
                $migration->save();

               

                return redirect()->route('employe.index');

        }
        else{
            return redirect()->route('employe.create');
        }
        

     }
     public function delete($id){
        Migration::destroy($id);
        return redirect()->route('employe.index');    
     }
     
     
     public function edit($id){
       $record = Migration::find($id);
        return view('emp_edit',compact('record'));

     }
     
    
     public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ]);

        if ($validator->passes()) {
            $migration = Migration::find($id);
            $migration->name = $request->input('name');
            $migration->username = $request->input('username');
            $migration->password = $request->input('password');
            $migration->phone = $request->input('phone');
            $migration->email = $request->input('email');
            $migration->save();

            return redirect()->route('employe.index');
}
    }
}