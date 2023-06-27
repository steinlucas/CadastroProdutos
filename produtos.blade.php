@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <h5 class="card-title">Cadastro de Produtos</h5>
        @if(count($prods) > 0)
        <table class="table table-ordered table-hover">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome da Produto</th>
                    <th>Estoque</th>
                    <th>Preco</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($prods as $prod)
                <tr>
                    <td>{{$prod->id}}</td>
                    <td>{{$prod->nome}}</td>
                    <td>{{$prod->estoque}}</td>
                    <td>{{$prod->preco}}</td>
                    <td>{{$prod->categoria_id}}</td>
                    <td>
                        <a href="{{ route('produtos.edit', $prod['id']) }}" class="btn btn-sm btn-primary">Editar</a> |
                        <form action="{{ route('produtos.destroy', $prod['id']) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-sm btn-danger" value="Apagar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
    </div>
    <div class="card-footer">
        <a href="/produtos/create" class="btn btn-sm btn-primary" role="button">Novo Produto</a>
    </div>
</div>
@endsection
