<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
    public function index(){
        $users = User::orderBy('id', 'ASC')->paginate(5);
        return view('admin.users.index')->with('users', $users);
    }

    public function create(){
    	return view('admin.users.create');
    }

    public function store(Request $request){
    	$user = new User($request->all());
    	$user->password = bcrypt($request->password);
    	$user->save();
    	Flash::success("Se ha registrado ".$user->name." de forma exitosa");
        return redirect()->route('admin.users.index');
    }

    public function edit($id){
        $user = User::find($id);
        return view('admin.users.edit')->with('user', $user);
    }
    
    public function update(Request $request, $id){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        Flash::warning("El usuario ".$user->name." ha sido editado con exito");
        return redirect()->route('admin.users.index');
    }

    public function destroy($id){
        $user = User::find($id);
        $user->delete();

        Flash::warning('El usuario ha sido eliminado correctamente');
        return redirect()->route('admin.users.index');
    }
}
