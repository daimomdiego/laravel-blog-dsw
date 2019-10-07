<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function index(){
    	$users = User::all();
    	return view('users')->with('users', $users);
    }

    public function create(Request $request){
    	$user = new User;

    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = $request->password;

    	$user->save();

    	return view('login')->with('message', 'Agora faça seu login');
    }

    public function delete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->back();
    }

    public function update(Request $request, $id){
        $user = User::find($id);

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();

        return redirect()->back();
    }

    public function renderCreateView(){
        return view('create_user');
    }

    public function login(Request $request){

    	$user = User::find($request->email);

    	if ($user != null){
    		if ($user->password == $request->password){
    			return redirect()->action(
                    'PostsController@index', ['user' => $user->id]
                );
    		}
    		else{
    			return view('login')->with('message', 'Senha incorreta');
    		}
    	}
    	else{
    		return view('login')->with('message', 'Usuário não encontrado');
    	}
    }

    public function renderLoginView(){
        return view('login')->with('message', '');
    }
}
