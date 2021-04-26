@extends('templates.template')

@section('content')
  <h1 class="text-center bg-dark text-white pb-4 pt-2">@if(isset($product)) Editar @else Cadastrar @endif</h1><hr>      

  <div class="col-5 m-auto">
  
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

      @csrf
      <div class="mb-3 ">
        <input class="form-control" type="text" name="name" id="name" placeholder="Nome do Produto:" value="{{$product -> name ?? ''}}" required>
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="description" id="description" placeholder="Descrição:" value="{{$product -> description ?? ''}}">
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="category" id="category" placeholder="Categoria:" value="{{$product -> category ?? ''}}" required>
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="price" id="price" placeholder="Preço:" value="{{$product -> price ?? ''}}" required>
      </div>
      <div class="mb-3">
        <input class="form-control" type="text" name="qnt" id="qnt" placeholder="Quantidade:" value="{{$product -> qnt ?? ''}}" required>
      </div>
      <div class="mb-3">
        <input class="btn btn-primary" type="submit" value="@if(isset($product)) Editar @else Cadastrar @endif"</h1><hr>>
      </div>
    
  </form> 

@endsection