@extends('layout')

@section('conteudo')

<div class="container mt-5">
    <h1 class="mb-4 text-center">Gerenciamento de Produtos</h1>
    <table class="table table-bordered">

        <thead class="thead-light">
            <tr>
                <th class="text-center">ID</th>
                <th class="text-center">Produtos</th>
                <th class="text-center">Marca</th>
                <th class="text-center">Custo</th>
                <th class="text-center">Quantidade Comprada</th>
                <th class="text-center">Porcentagem</th>
                <th class="text-center">Quantidade Vendida</th>
                <th class="text-center">Valor Venda</th>
                <th class="text-center">Estoque Mínimo</th>
                <th class="text-center">Estoque Atual</th>
                <th class="text-center">Soma Custos</th>
                <th class="text-center">Total</th>
            </tr>
        </thead>

        <tbody>
            <tr>
                <td>001</td>
                <td>Produto A</td>
                <td>Marca X</td>
                <td>10.00</td>
                <td>100</td>
                <td>20</td>
                <td>50</td>
                <td>12.00</td>
                <td>20</td>
                <td>50</td>
                <td>1000.00</td>
                <td>600.00</td>
            </tr>
            <tr>
                <td>002</td>
                <td>Produto B</td>
                <td>Marca Y</td>
                <td>15.00</td>
                <td>200</td>
                <td>25</td>
                <td>150</td>
                <td>18.75</td>
                <td>30</td>
                <td>50</td>
                <td>3000.00</td>
                <td>2812.50</td>
            </tr>
            <!-- Adicione mais linhas conforme necessário -->
        </tbody>
    </table>
</div>

@endsection