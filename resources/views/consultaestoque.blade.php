@extends('layout')

@section('conteudo')

<div class="container">
    <h1 class="text-center">Consulta de Estoque</h1>
    <form id="formEstoque">
        <!-- Produto Quantidade e Valor -->
        <div id="produtosContainer" class="mb-3">
            <div class="mb-2">
                <label for="produtoSelect" class="form-label fw-bold">Selecione o Produto:</label>
                <select id="produtoSelect" name="produtoSelect" class="form-select">
                    <option value="">Carregando produtos...</option>
                </select>
                <div class="invalid-feedback">
                    Por favor, selecione um produto.
                </div>
            </div>

            <div class="mb-3">
                <label for="produtoNome" class="form-label fw-bold">Produto:</label>
                <input type="text" class="form-control" id="produtoNome" name="produtoNome" required>
            </div>
            
            <div class="d-flex justify-content-center align-items-center">
                <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
            </div>

        </div>
    </form>
</div>

@endsection