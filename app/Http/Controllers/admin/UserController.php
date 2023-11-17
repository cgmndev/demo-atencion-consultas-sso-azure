<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Http\Requests\StoreTicketRequest;
use App\Http\Requests\UpdateTicketRequest;
use App\Models\User;
use Illuminate\Contracts\Support\Renderable;

class UserController extends Controller
{

    public function listar()
    {
        return view('admin.users.listar');
    }

    public function crear():Renderable
    {
        return view('admin.users.crear', [
            "updating" => false,
            "user" => new User(),
            "title" => "Crear nuevo Usuario",
            "formName" => "Formulario de creación de Usuario",
            "textButton" => "Crear Usuario"
        ]);
    }

    public function editar(int $id):Renderable
    {
        $user = User::findOrFail($id);
        return view('admin.users.crear', [
            "updating" => true,
            "user" => $user,
            "title" => "Editar Usuario",
            "formName" => "Formulario de Usuario",
            "textButton" => "Actualizar Usuario"
        ]);
    }
}