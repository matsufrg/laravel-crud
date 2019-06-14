<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
use SoftDeletes;


class UserController extends Controller
{   
    /* Redirect para as views */
    
    public function index() {
        return redirect('/users/login');
    }

    public function view_home() {
        $user = Auth::user();

        return view('home')->with('user', $user);
    }

    public function view_list(){
        $usuario = User::all();

        return view('list')->with('user', $usuario);
    }

    // página de registro
    public function view_register(){
        return view('register');
    }

    // página de lixeira
    public function view_trash(){
        $usuario = User::withTrashed()->where('deleted_at', '!=', null)->get();
        
        return view('trash')->with('user', $usuario);
    }

    // página de login
    public function view_login(){
        return view('login');
    }

    // página de alteração de dados
    public function view_update($id){
        // verifica qual usuário está logado
        $users = Auth::user();

        // Busca no banco o registro com o id recebido
        $usuario = User::find($id);

        // Envia os dados deste registro a view produto.alterar
        return view('update')->with('user', $usuario)->with('userUpdating', $users);
    }

    /*
        ********* Fim das views *********
    */

    // registra o usuário no banco
    public function register(Request $request){

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => false,
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        return view('login');
    }

    public function update($id, Request $request) {
        $p = User::find($id);

        $p->name = $request->name;
        $p->email = $request->email;
        if ($request->admin != null) {
         $p->admin = $request->admin;
        }

        $p->save();

        $users = User::all();
        
        return redirect('/users/list')->with('user', $users);
    }

    public function delete($id) {

        $users = User::find($id);

        $users->delete();

        return redirect('/users/list');
    }

    public function login(Request $request) {
        // Autenticação
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            // pegando dados do usuário
            $user = Auth::user();
            // enviando dados do usuário para a página principal
           return redirect('/users/home')->with('user', $user);
        } else {
            $message = "Login e/ou senha errados";
            return view('login')->with('message', $message);
        }
    }

    public function logout() {

        if (Auth::user()) {
            Auth::logout();

            return redirect('/users/login');
        }
    }

    public function restoring($id) {

        User::withTrashed()
        ->where('id', $id)
        ->restore();
        
        return redirect('/users/trash');
    }
}
