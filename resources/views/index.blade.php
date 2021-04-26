@extends('templates.template')

@section('content')
  <h1 class="text-center bg-dark text-white pb-4 pt-2">C.R.U.D.</h1><hr>

  {{-- criação do botão Cadastrar  --}}
  <div class="text-center mt-3 mb-4">
      <a href="{{url("products/create")}}">
        <button button type="button" class="btn btn-success btn-lg">Cadastrar</button>
      </a>
  </div>

  {{-- criação da tabela --}}
  <div class="col-10 m-auto">
    @csrf
    <table class="table table-dark table-striped table-bordered border-light table-hover text-center">
        <thead class="thead-dark">
          {{-- criação das colunas --}}
          <tr">
            {{-- criação das células --}}
              <th scope="col">ID</th>
              <th scope="col">Nome</th>
              <th scope="col">Descrição</th>
              <th scope="col">Categoria</th>
              <th scope="col">Preço</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Action</th>
          </tr>
          </thead>
          <tbody>
          
          {{-- puxar dados do banco --}}
          @foreach($product as $products)
              <tr>
                <th scope="row">{{$products->id}}</th>
                <td>{{$products->name}}</td>
                <td>{{$products->description}}</td>
                <td>{{$products->category}}</td>
                <td>{{$products->price}}</td>
                <td>{{$products->qnt}}</td>
                <td>
                  
                  {{-- criação dos botões: visualizar, editar e deletar --}}
                  <a href="{{url("products/$products->id")}}">
                      <button class="btn btn-light btn-sm">Visualizar</button>
                  </a>
                  
                  <a href="{{url("products/$products->id/edit")}}">
                      <button class="btn btn-info btn-sm">Editar</button>
                  </a>

                  <a href="{{url("products/$products->id")}}" class="js-del">
                      <button class="btn btn-danger btn-sm">Deletar</button>
                  </a>
                </td>
              </tr>
          @endforeach()       
          </tbody>
    </table>
  </div>


@endsection