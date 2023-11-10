<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Support\Facades\DB;
use App\Models\TipoAnimal;
use Illuminate\Http\Request;

class crudController extends Controller
{
    public function crud()
    {

        $animals = Animal::all();

        return view('animals.crud', ['animals'=> $animals]);

    }

    public function edit($idanimal) {
        $animal = Animal::find($idanimal);
        $tipoanimal = TipoAnimal::all();
        return view('animals.edit', ['animal' => $animal, 'tipoanimal' => $tipoanimal]);
    }

    public function update(Request $request, $idanimal) {
        $animal = Animal::find($idanimal);

        $animal->nombreAnimal = $request->input('nombreanimal');
        $animal->descAnimal = $request->input('descanimal');
        $animal->fechaNacimiento = $request->input('fechanacimiento');
        $animal->idTipoAnimal = $request->input('idtipoanimal');
        $animal->save();

        return redirect()->route('crud')->with('success', 'Animal actualizado exitosamente');
    }




    public function delete($id) {
        $animal = Animal::find($id);

        if ($animal) {
            $animal->delete();
            return redirect()->route('crud')->with('success', '¡Animal eliminado exitosamente!');
        } else {
            return redirect()->route('crud')->with('error', '¡Animal no encontrado para eliminar!');
        }
    }


    public function new()
    {
        $tipoanimal = TipoAnimal::all();
        return view('animals.new', ['tipoanimal' => $tipoanimal]);
    }

    public function store(Request $request)
    {
        $data['idanimal'] = $this->generateUniqueProductId();

        $data['nombreAnimal'] = $request->input('nombreanimal');
        $data['descAnimal'] = $request->input('descanimal');
        $data['fechanacimiento'] = $request->input('fechanacimiento');
        $data['idTipoAnimal'] = $request->input('idtipoanimal');
        Animal::create($data);

        return redirect()->route('crud');
    }

    public function generateUniqueProductId()
    {
        do {
            $randomId = rand(1, 99);
        } while (Animal::where('idanimal', $randomId)->exists());

        return $randomId;
    }

}
