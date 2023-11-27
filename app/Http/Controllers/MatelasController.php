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
        return view('matelas/create', [
            'brand' => ['BULTEX', 'DORSOLINE', 'DREAMWAY', 'EPEDA', 'MEMORYLINE'],
            'size' => ['90x190', '140x190', '160x200', '180x200', '200x200'],
        ]);
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'brand' => 'required|in:BULTEX,DORSOLINE,DREAMWAY,EPEDA,MEMORYLINE',
            'size' => 'required|in:90x190,140x190,160x200,180x200,200x200',
            'image' => 'required|url',
            'price' => 'required',
            'discount_price' => 'nullable',
            /*'platforms' => 'required|array',*/
            /*'platforms.*' => 'required|exists:platforms,id', */
        ]);

        $matelas = new Matelas();
        $matelas->name = $request->name;
        $matelas->brand = $request->brand;
        $matelas->size = $request->size;
        $matelas->image = $request->image;
        $matelas->price = $request->price;
        $matelas->discount_price = $request->input('discount_price', null);;
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
            'brand' => 'required|in:BULTEX,DORSOLINE,DREAMWAY,EPEDA,MEMORYLINE',
            'size' => 'required|in:90x190,140x190,160x200,180x200,200x200',
            'image' => 'required|url',
            'price' => 'required|min:1',
            'discount_price' => 'nullable',
        ]);

       
        $matelas = new Matelas();
        $matelas->name = $request->name;
        $matelas->brand = $request->brand;
        $matelas->size = $request->size;
        $matelas->image = $request->image;
        $matelas->price = $request->price;
        $matelas->discount_price = $request->input('discount_price' ?? null);
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
