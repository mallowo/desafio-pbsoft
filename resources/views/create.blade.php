@extends('templates.template')

@section('content')
  <h1 class="text-center bg-dark text-white pb-4 pt-2">@if(isset($product)) Editar @else Cadastrar @endif</h1><hr>      

  <div class="col-5 m-auto">
  
    {{-- janela de erro --}}
    @if(isset($errors) && count($errors)>0)
      <div class="text-center mt-4 mb-4 p2 alert-danger">
          @foreach($errors->all() as $erro)
            {{$erro}}<br>
          @endforeach
      </div>
    @endif

    @if(isset($product))
        <form name="formEdit" id="formEdit" method="POST" action="{{url("products/$product->id")}}">
          @method('PUT')
    @else
        <form name="formCad" id="formCad" method="POST" action="{{url('products')}}">
    @endif

    {{-- criação do formulário --}}
      @csrf
      <div class="mb-3 ">
        <label for="name" class="text-white form-label">Nome do Produto:</label>
        <input class="form-control" type="text" name="name" id="name" placeholder="Ex. Chocolate" value="{{$product -> name ?? ''}}" required>
      </div>
      <div class="mb-3">
        <label for="description" class="text-white form-label">Descrição:</label>
        <input class="form-control" type="text" name="description" id="description" placeholder="Ex. Barra de chocolate ao leite" value="{{$product -> description ?? ''}}" required>
      </div>
      <div class="mb-3">
        <label for="category" class="text-white form-label">Categoria:</label>
        <input class="form-control" type="text" name="category" id="category" placeholder="Ex. Guloseimas" value="{{$product -> category ?? ''}}" required>
      </div>
      <div class="mb-3">
        <label for="category" class="text-white form-label">Preço:</label>
        <input class="form-control" type="text" name="price" id="price" placeholder="Ex. 30" value="{{$product -> price ?? ''}}" required>
      </div>
      <div class="mb-3">
        <label for="category" class="text-white form-label">Quantidade</label>
        <input class="form-control" type="text" name="qnt" id="qnt" placeholder="Ex. 10" value="{{$product -> qnt ?? ''}}" required>
      </div>
      <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="@if(isset($product)) Editar @else Cadastrar @endif"</h1><hr>>
      </div>
    
  </form> 

@endsection