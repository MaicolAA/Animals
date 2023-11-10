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
        $tipoanimal=TipoAnimal::all();

        return view('animals.crud', ['animals'=> $animals, 'tipoanimal' => $tipoanimal]);

    }

    public function edit($idanimal) {
        $animal = Animal::find($idanimal);
        $tipoanimal = TipoAnimal::all();
        return view('animals.edit', ['animal' => $animal, 'tipoanimal' => $tipoanimal]);
    }

    public function update(Request $request, $idanimal) {
        $animal = Animal::find($idanimal);

        $animal->nombreanimal = $request->input('nombreanimal');
        $animal->descanimal = $request->input('descanimal');
        $animal->fechanacimiento = $request->input('fechanacimiento');
        $animal->idtipoanimal = $request->input('idtipoanimal');

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
        // dd($request->all());


        Animal::create([
            'idanimal' => $this->generateUniqueProductId(),
            'nombreanimal' => $request->nombreanimal,
            'descanimal' => $request->descanimal,
            'fechanacimiento' => $request->fechanacimiento,
            'idtipoanimal' => $request->idtipoanimal,
        ]);

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
