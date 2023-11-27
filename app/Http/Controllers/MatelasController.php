<?php

namespace App\Http\Controllers;

use App\Models\Matelas;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MatelasController extends Controller
{
    public function index()
    {
        return view('home', [
            'matelas' => Matelas::all(),
        ]);
    }

    public function show($id)
    {
        // SELECT * FROM matelas WHERE id = :id AND slug = :slug
        $matelas = Matelas::where('id', $id)->first();

        abort_if(! $matelas, 404);

        return view('matelas/show', ['matelas' => $matelas]);
    }

    public function create()
    {
        return view('matelas/create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'brand' => 'required',
            'size' => 'required',
            'image' => 'required|url',
            'price' => 'required',
            'discount_price' => 'nullable',
            /*'genres.*' => 'required|in:'.implode(',', ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG']),*/
            /*'platforms' => 'required|array',*/
            /*'platforms.*' => 'required|exists:platforms,id', */
        ]);

        $matelas = new Matelas();
        $matelas->name = $request->name;
        $matelas->brand = $request->brand;
        $matelas->size = $request->size;
        $matelas->image = $request->image;
        $matelas->price = $request->price;
        $matelas->discount_price = $request->discount_price;
        $matelas->save();
    

        return redirect('/matelas')->with('message', 'Le matelas a été ajouté.');
    }

    public function edit($id)
    {
        $matelas = Matelas::findOrFail($id);

        return view('matelas/edit', [
            'matelas' => $matelas
        ]);
    }

    public function update(Request $request, $id)
    {
        $matelas = Matelas::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:matelas,name,'.$matelas->id,
            'image' => 'required|url',
            /* 'active' => 'boolean',
            'company' => 'required',
            'genres' => 'required|array',
            'genres.*' => 'required|in:'.implode(',', ['Aventure', 'Beat \'em up', 'FPS', 'MMO', 'RPG']),
            'released_at' => 'required|date',
            'platforms' => 'required|array',
            'platforms.*' => 'required|exists:platforms,id', */
        ]);

        $matelas = new Matelas();
        $matelas->name = $request->name;
        $matelas->image = $request->image;
        $matelas->save();

        return redirect('/matelas')->with('message', 'Le matelas a été modifié.');
    }

    public function destroy($id)
    {
        Matelas::destroy($id);

        return redirect('/matelas')->with('message', 'Le matelas a été supprimé.');
    }

   /*  public function enable($id)
    {
        $matelas = Matelas::findOrFail($id);
        //@todo $matelas->active = !$matelas->active;
        $matelas->save();

        //@todo $newState = $matelas->active ? 'activé' : 'désactivé';

        return redirect('/matelas')->with('message', 'Le matelas a été '.$newState.'.');
    } */
}
