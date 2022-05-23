<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUser extends Controller
{
    function user()
    {
        $user = User::where('role', 0)->paginate(10);
        return view('admin-user', [
            'user' => $user,
        ]);
    }
    function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('admin.listuser')->with('success', 'Delete Success');
    }
    function edit($id)
    {
        $user = User::where('id', $id)->get();
        return view('admin-userEdit', compact('user'));
    }
    function update(Request $request){
        if($request->password!="" && strlen($request->password) < 8 && strlen($request->phone) < 10 || strlen($request->phone) > 11){
            return redirect()->route('admin.edituser',['id'=>$request->id])->with(['error' => 'Phone and Password invalid', 'Name' => $request->name, 'Email' => $request->email, 'Phone' => $request->phone]);
        }else{
            if ($request->password!="" && strlen($request->password) < 8) {
                return redirect()->route('admin.edituser',['id'=>$request->id])->with(['error' => 'Password at least 8 characters', 'Name' => $request->name, 'Email' => $request->email, 'Phone' => $request->phone]);
            } 
            if (strlen($request->phone) < 10 || strlen($request->phone) > 11){
                return redirect()->route('admin.edituser',['id'=>$request->id])->with(['error' => 'Invalid phone number', 'Name' => $request->name, 'Email' => $request->email, 'Phone' => $request->phone]);
            }
            if($request->password == ""){
            DB::Table('users')->where('id',$request->id)->update(['name'=>$request->name,'phone'=>$request->phone]);
            return redirect()->route('admin.listuser')->with('success','Edit Success');
            }else{
            $pass = Hash::make($request->password);
            DB::Table('users')->where('id',$request->id)->update(['name'=>$request->name,'password'=>$pass,'phone'=>$request->phone]);
            return redirect()->route('admin.listuser')->with('success','Edit Success');
            }
        }
    }
    function add(Request $request)
    {
        $user=User::where('email',$request->email)->count();
        if($user>0){
            return redirect()->route('user.add')->with(['error' => 'Email already exists', 'Name' => $request->name, 'Email' => $request->email, 'Phone' => $request->phone]);
        }else{
        $pass = Hash::make($request->password);
        DB::Table('users')->insert(['name'=>$request->name,'Email'=>$request->email,'password'=>$pass,'phone'=>$request->phone]);
        return redirect()->route('admin.listuser')->with('success','Add Success');
        }
    }
}
