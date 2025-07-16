<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Program;

class ProgramForm extends Component
{

    public $name;
    public $acronym;
    public $program;

    public function mount($program=null)
    {
        if ($program) {
            $this->program = Program::find($program);
            $this->name = $this->program->name;
            $this->acronym = $this->program->acronym;
        }

    }

    public function rules()
    {
        return [
            'name' => ['required'],
            'acronym' => ['required','string:max,50'],
        ];
    }

    public function updatedName()
    {
        if (!$this->program) {
            $nome = explode(" ",$this->name);
            $nome = array_map(
                function($s) { 
                    return mb_strtoupper(substr($s,0,1));
                },$nome
            );
            $this->acronym = implode('',$nome);
        }
    }


    public function messages()
    {
        return [
            'name' => "O nome do program é obrigatório",
            'acronym' => 'A sigla do program é obrigatória'
        ];

    }




    public function save()
    {
        $this->validate();

        $registro = [
            'name' => $this->name, 
            'acronym' => $this->acronym
        ];

        //se estou criando
        if (!$this->program) {
            $pg =  Program::create($registro);
            $pg->save();
        } else {
            $program  = $this->program;
            $program->update($registro);
            $program->save();
        }
        //aqui falta mandar usuario para o show
        return view('dashboard');
    }

    public function render()
    {
        return view('livewire.program-form');
    }
}
