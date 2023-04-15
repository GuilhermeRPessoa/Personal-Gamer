<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
   {

   $teste = 123;

     return view('admin.pages.products.index', compact('teste'));
   }


   public function create()
   {
     return view('admin.pages.products.create');
   }

   public function store(request $request)
   {

    $request->validate([
      'name' => 'required|min:3|max:255',
      'description' => 'nullable|min:3|max:10000',
      'photo' => 'required|image|'
    ]);

    dd('OK');
   // dd($request->only( ['name'] ) ); //puxa valores especificos
   // dd($request->all()); //puxa todos os valores existentes
   // dd($request->name); //puxa UM valor especifico
   // dd($request->has('name')); //verifica se existe ou não um valor
   // dd($request->input('name', 'Não existe')); //Verifica se o input se existe. Se não, retorna o valor default que podemos ou não definir uma mensagem
   // dd($request->except(['_token'])); //o nome já é bem intuitivo, mostra todos os valores exceto esse.

      if ($request->file('photo')->isValid()) {
        //dd($request->file('photo')->store('products')); para fazer o upload de arquivos
        
        $nameFile = $request->name . '.' . $request->photo->extension();
        dd($request->file('photo')->storeAs('products', $nameFile)); //para definir um nome costumizado para o arquivo
      }
   }

   public function edit($id)
   {
    return view('admin.pages.products.edit', compact('id'));
   }

   public function update(request $request, $id)
   {
    dd("Editando o produto {$id}");
   }
}
