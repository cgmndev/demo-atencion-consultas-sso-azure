<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\RedirectResponse;
use Illuminate\Routing\Redirector;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;

class UserForm extends Component
{
    public User $user;
    public $comunas = [];
    public $regionSeleccionada = null, $comunaSeleccionada = null;
    public $rolSeleccionado = null;
    public string $textButton;
    public bool $updating = false;
    public string $password;
    public string $password_confirmation;

    public function mount()
    {
        if ($this->updating) {
            $this->regionSeleccionada = $this->user->comuna->region_id;
            $this->comunaSeleccionada = $this->user->comuna_id;
            $this->comunas = \App\Models\Comuna::where("region_id", $this->regionSeleccionada)->get();
            $this->rolSeleccionado = $this->user->rol_id;

        }
    }

    public function rules(): array
    {
        if ($this->updating) {
            $validation = [
                'user.name' => ['required', 'string', 'min:2', 'max:100'],
                'user.email' => ['required', 'email', 'min:2', 'max:100', Rule::unique('users', 'email')->ignore($this->user->id)],
                "regionSeleccionada" => "required",
                "comunaSeleccionada" => "required",
                "rolSeleccionado" => "required",
            ];

            return $validation;
        }

        return [
            'user.name' => ['required', 'string', 'min:2', 'max:100'],
            'user.email' => ['required', 'email', 'min:2', 'max:100', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            "regionSeleccionada" => "required",
            "comunaSeleccionada" => "required",
            "rolSeleccionado" => "required",
        ];
    }


    public function upsert(): RedirectResponse|Redirector
    {
        $this->validate();

        $this->user->name = Str::title($this->user->name);
        $this->user->email = Str::lower($this->user->email);
        $this->user->comuna_id = $this->comunaSeleccionada;
        $this->user->rol_id = $this->rolSeleccionado;

        // Solo modificamos la contraseña al agregar un nuevo usuario.
        if (!$this->updating) {
            $this->user->password = Hash::make($this->password);
        }

        $this->user->save();

        return redirect()->to(route("admin.usuarios.listar"));
    }

    public function render(): Renderable
    {
        return view('livewire.user-form', [
            "regiones" => \App\Models\Region::all(),
            "roles" => \App\Models\Rol::all(),
        ]);
    }

    public function updatedRegionSeleccionada($value)
    {
        $this->comunas = \App\Models\Comuna::where("region_id", $value)->get();
    }
}
