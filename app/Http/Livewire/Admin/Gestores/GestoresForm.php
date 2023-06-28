<?php

namespace App\Http\Livewire\Admin\Gestores;

use Livewire\Component;
use App\Models\User;

class GestoresForm extends Component
{

    public User $gestor;

    protected $rules = [
            'gestor.name' => 'required|string|max:100|min:10|bail',
            'gestor.CPF' => 'required|string|max:15|min:11|bail',
            'gestor.telephone' => 'required|string|max:20|min:10|bail',
            'gestor.email' => 'required|string|max:100|min:15|bail',
            'gestor.password' => 'required|string|min:6|bail',
        ];

    protected $validationAttributes = [
        'name' => 'nome',
        'CPF' => 'CPF',
        'telephone' => 'telefone',
        'email' => 'e-mail',
        'password' => 'senha',

    ];

    public function mount(User $gestor)
    {

        $this->gestor = $gestor;
    }

    public function updated($nomePropriedade)
    {
       $this->validateOnly($nomePropriedade);
    }

    public function salvar()
    {

        $this->validate();

        $this->gestor->save();

        session()->flash('toast', 'Gestor salvo com sucesso!');

        return redirect('/gestores');
    }

    public function render()
    {
        return view('livewire.admin.gestores.gestores-form')->layout('components.admin.layouts.principal');
    }
}
