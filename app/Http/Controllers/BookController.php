<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Models\ModelProduct as ModelsModelProduct;

class BookController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=ModelsModelProduct::all()->sortBy('name');
        return view('index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
        $cad=ModelsModelProduct::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,
            'price'=>$request->price,
            'qnt'=>$request->qnt,
        ]);
        if($cad){
            return redirect('products');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product=ModelsModelProduct::find($id);
        return view('show',compact('product'));    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=ModelsModelProduct::find($id);
        return view('create',compact('product'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProductRequest $request, $id)
    {
        ModelsModelProduct::where(['id'=>$id])->update([
            'name'=>$request->name,
            'description'=>$request->description,
            'category'=>$request->category,
            'price'=>$request->price,
            'qnt'=>$request->qnt,
        ]);
        return redirect('products');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=ModelsModelProduct::destroy($id);
        return($del)?"sim":"não";
    }
}
