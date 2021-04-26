@extends('templates.template')

@section('content')
  <h1 class="text-center bg-dark text-white pb-4 pt-2">Visualizar</h1><hr>      

  <div class="col-11 m-auto text-white">
    Nome: {{$product->name}}<br>
    Descrição: {{$product->description}}<br>
    Categoria: {{$product->category}}<br>
    Preço: {{$product->price}}<br>
    Quantidade: R${{$product->qnt}}<br>
  </div>


@endsection