@extends('layout.app', ["current" => "produtos"])

@section('body')
<div class="card border">
    <div class="card-body">
        <form action="{{ route('produtos.update', $prod['id']) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nomeProduto">Nome da Produto</label>
                <input type="text" class="form-control" name="nomeProduto" id="nomeProduto" placeholder="Produto" value="{{ $prod['nome'] }}">
            </div>
            <div class="form-group">
                <label for="estoqueProduto">Quantidade em Estoque</label>
                <input type="text" class="form-control" name="estoqueProduto" id="estoqueProduto" placeholder="Produto" value="{{ $prod['estoque'] }}">
            </div>
            <div class="form-group">
                <label for="precoProduto">Preco</label>
                <input type="text" class="form-control" name="precoProduto" id="precoProduto" placeholder="Produto" value="{{ $prod['preco'] }}">
            </div>
            <div class="form-group">
                <label for="categoriaProduto">Categoria</label>
                <input type="text" class="form-control" name="categoriaProduto" id="categoriaProduto" placeholder="Produto" value="{{ $prod['categoria_id'] }}">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Salvar</button>
            <button type="cancel" class="btn btn-danger btn-sm">Cancel</button>
        </form>
    </div>
</div>
@endsection