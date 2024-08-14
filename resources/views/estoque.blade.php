@extends('layout')

@section('conteudo')

<div class="container">
    <h1 class="text-center">Cadastro de Produtos</h1>
    <form id="formEstoque">

        <!-- Produto Quantidade e Valor -->
        <div id="produtosContainer" class="mb-3">

            <div class="mb-3">
                <label for="produtoNome" class="form-label fw-bold">Produto:</label>
                <input type="text" class="form-control" id="produtoNome" name="produtoNome">
            </div>
            
            <div class="mb-3">
                <label for="marcaNome" class="form-label fw-bold">Marca:</label>
                <input type="text" class="form-control" id="marcaNome" name="marcaNome">
            </div>

            <div class="col-md-5 mb-3">
                <label for="data" class="form-label fw-bold">Data:</label>
                <input type="date" class="form-control" id="data" name="data">
                <div class="invalid-feedback">
                    Por favor, forneça uma data.
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="quantidade" class="form-label fw-bold">Quantidade:</label>
                    <input type="number" class="form-control" id="quantidade" name="quantidade" min="0">
                    <div class="invalid-feedback">
                        Por favor, informe a quantidade.
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <label for="valorProduto" class="form-label fw-bold">Valor do Produto:</label>
                    <input type="text" class="form-control" id="valorProduto" name="valorProduto"
                        pattern="[0-9]+([,\.][0-9]+)?">
                    <div class="invalid-feedback">
                        Por favor, forneça um valor para o produto.
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
        </div>

    </form>
</div>
@endsection