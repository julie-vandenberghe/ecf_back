<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Matelas;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class MatelasController extends Controller
{
    public function index()
    {
        return view('home', [
            'matelas' => Matelas::all(),
            'title' => 'Tous les matelas',
        ]);
    }

    public function show($id)
    {

        $matelas = Matelas::findOrFail($id); //Afficher 1 matelas

        abort_if(! $matelas, 404);

        return view('matelas/show', [
            'matelas' => $matelas
        ]);

    }

    public function create()
    {
        return view('matelas/create', [
            //'brand' => ['BULTEX', 'DORSOLINE', 'DREAMWAY', 'EPEDA', 'MEMORYLINE'],
            'brand' => Brand::all(),
            //'size' => ['90x190', '140x190', '160x200', '180x200', '200x200'],
            'size' => Size::all(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            //'brand' => 'required|in:BULTEX,DORSOLINE,DREAMWAY,EPEDA,MEMORYLINE',
            //'size' => 'required|in:90x190,140x190,160x200,180x200,200x200',
            'image' => 'url',
            'price' => 'required|numeric|between:1,9999',
            'discount_price' => 'nullable|numeric|between:1,9999',
            'brand.*' => 'required|exists:brands,id',
            'sizes' => 'required|array',
            'sizes.*' => 'required|exists:sizes,id',
        ]);

        $matelas = new Matelas();
        $matelas->name = $request->name;
        //$matelas->brand = $request->brand;
        $matelas->brand_id = $request->brand_id;
        //$matelas->size = $request->size;
        //$matelas->size_id = $request->size_id;
        $matelas->image = $request->image;
        $matelas->price = $request->price;
        $matelas->discount_price = $request->input('discount_price', null);
        $matelas->save();
        $matelas->sizes()->sync($request->sizes);
    

        return redirect('/matelas')->with('message', 'Le matelas a été ajouté.');
    }

    public function edit($id)
    {
        $matelas = Matelas::findOrFail($id);

        return view('matelas/edit', [
            'matelas' => $matelas,
            //'brand' => ['BULTEX', 'DORSOLINE', 'DREAMWAY', 'EPEDA', 'MEMORYLINE'],
            'brand' => Brand::all(),
            //'size' => ['90x190', '140x190', '160x200', '180x200', '200x200'],
            'size' => Size::all(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $matelas = Matelas::findOrFail($id);

        $request->validate([
            'name' => 'required',
            //'brand' => 'required|in:BULTEX,DORSOLINE,DREAMWAY,EPEDA,MEMORYLINE',
            //'brand' => 'required|array',
            //'brand_id' => 'required|exists:brands,id',
            //'size' => 'required|in:90x190,140x190,160x200,180x200,200x200',
            //'size_id' => 'required|exists:sizes,id',
            'brand.*' => 'required|exists:brands,id',
            'size.*' => 'required|exists:sizes,id',
            'image' => 'required|url',
            'price' => 'required|numeric|between:1,9999',
            'discount_price' => 'nullable|numeric|between:1,9999',
        ]);

       
        $matelas->name = $request->name;
        //$matelas->brand = $request->brand;
        $matelas->brand_id = $request->brand_id;
        //$matelas->size = $request->size;
        //$matelas->size_id = $request->size_id;
        $matelas->image = $request->image;
        $matelas->price = $request->price;
        $matelas->discount_price = $request->input('discount_price', null);
        $matelas->save();
        $matelas->sizes()->sync($request->sizes);

        return redirect('/matelas')->with('message', 'Le matelas a été modifié.');
    }

    public function destroy($id)
    {
        Matelas::destroy($id);

        return redirect('/matelas')->with('message', 'Le matelas a été supprimé.');
    }

}
