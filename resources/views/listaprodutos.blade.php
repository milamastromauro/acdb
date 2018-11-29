@extends('layouts.baseadm')

@section('title', 'A Cabeça do Buda - Cadastro')

@section('content')
      
<section class="">
    <div class="container-fluid">
        <div class="row">
            <table class="table table-striped">
                    <thead class="thead-light">
                    <tr>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome do produto</th>
                        <th scope="col">Valor</th>
                        <th scope="col">Foto</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Apagar</th>
                    </tr>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse ($produtos as $produto)
                        <tr>
                        <td>{{ $produto['produto_id'] }}</td>
                        <td>{{ $produto['produto_nome'] }}</td>
                        <td>{{ $produto['produto_valor'] }}</td>
                        <td>@isset($produto['foto']) 
                        <img src="{{$produto['foto']}}" alt="" width="50px"> 
                        @endisset
                        </td>
                        <td><a class='btn pull-right btn-info' href='cadastraprodutos/{{ $produto['produto_id'] }}' role='button'><i class='fas fa-pencil-alt'></i></a></td>
                        <td><a class='btn pull-right btn-danger' href='apagaproduto/{{ $produto['produto_id'] }}' role='button'><i class='fas fa-times'></i></a></td>          
                        </tr>
                    @empty
                        sem
                        @endforelse
                    </tbody>
                    </table>
        </div>
    </div>
</section>
@endsection