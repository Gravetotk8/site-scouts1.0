@extends('layout')

@section('conteudo')

<h1 class="text-center">Ordem de Serviço</h1>

<form id="formVenda" class="row g-3 needs-validation" novalidate>

    <!-- Data -->
    <div class="col-md-6 mb-3">
        <label for="data" class="form-label fw-bold">Data:</label>
        <input type="date" class="form-control" id="data" name="data">
        <div class="invalid-feedback">
            Por favor, forneça uma data.
        </div>
    </div>

    <!-- Nome -->
    <div class="col-md-6 mb-3">
        <label for="nome" class="form-label fw-bold">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome">
        <div class="invalid-feedback">
            Por favor, forneça um nome.
        </div>
    </div>

    <!-- Telefone -->
    <div class="col-md-6 mb-3">
        <label for="telefone" class="form-label fw-bold">Telefone:</label>
        <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(54) 99369-0634">
        <div class="invalid-feedback">
            Por favor, forneça um telefone válido. Exemplo: (54) 99369-0634 ou 54993690634
        </div>
    </div>

    <!-- Email -->
    <div class="col-md-6 mb-3">
        <label for="email" class="form-label fw-bold">Email:</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
        <div class="invalid-feedback">
            Por favor, forneça um email válido.
        </div>
    </div>

    <!-- CPF -->
    <div class="col-md-6 mb-3">
        <label for="cpf" class="form-label fw-bold">CPF:</label>
        <input type="text" class="form-control" id="cpf" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}">
        <div class="invalid-feedback">
            Por favor, forneça um CPF válido.
        </div>
    </div>

    <!-- Endereço -->
    <div class="col-md-6 mb-3">
        <label for="endereco" class="form-label fw-bold">Endereço:</label>
        <input type="text" class="form-control" id="endereco" name="endereco">
        <div class="invalid-feedback">
            Por favor, forneça um endereço.
        </div>
    </div>

    <!-- Garantia -->
    <div class="mb-3">
        <label class="form-label fw-bold">Garantia:</label>
        <div class="d-flex">
            <div class="form-check form-check-inline me-3">
                <input class="form-check-input" type="radio" name="garantia" id="garantiaSim" value="sim">
                <label class="form-check-label" for="garantiaSim">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="garantia" id="garantiaNao" value="nao">
                <label class="form-check-label" for="garantiaNao">Não</label>
                <div class="invalid-feedback feedback-left">
                    Por favor, selecione uma opção.
                </div>
            </div>
        </div>
    </div>

    <!-- Atendimento -->
    <div class="mb-3">
        <label class="form-label fw-bold">Atendimento:</label>
        <div class="d-flex">
            <div class="form-check form-check-inline me-3">
                <input class="form-check-input" type="radio" name="atendimento" id="atendimentoRemoto"
                    value="remoto">
                <label class="form-check-label" for="atendimentoRemoto">Remoto</label>
            </div>
            <div class="form-check form-check-inline me-3">
                <input class="form-check-input" type="radio" name="atendimento" id="atendimentoVisita"
                    value="visita">
                <label class="form-check-label" for="atendimentoVisita">Visita</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="atendimento" id="atendimentoLoja" value="loja">
                <label class="form-check-label" for="atendimentoLoja">Loja</label>
                <div class="invalid-feedback feedback-left">
                    Por favor, selecione uma opção de atendimento.
                </div>
            </div>
        </div>
    </div>

    <!-- Terceirizado -->
    <div class="mb-3">
        <label for="terceirizado" class="form-label fw-bold">Terceirizado:</label>
        <select id="terceirizado" name="terceirizado" class="form-select">
            <option value="">Selecione uma opção</option>
            <option value="Infocall">Infocall</option>
            <option value="GTB Tintas">GTB Tintas</option>
            <option value="Finatto">Finatto</option>
            <option value="PowerLine">PowerLine</option>
            <option value="ServSat">ServSat</option>
            <option value="Outros">Outros</option>
        </select>
        <div class="invalid-feedback">
            Por favor, selecione uma opção de terceirizado.
        </div>
    </div>

    <!-- Observação -->
    <div class="mb-3">
        <label for="observacao" class="form-label fw-bold">Observação:</label>
        <textarea id="observacao" name="observacao" class="form-control"></textarea>
    </div>

    <!-- Técnico -->
    <div class="mb-3">
        <label class="form-label fw-bold">Técnico:</label>
        <div class="d-flex">
            <div class="form-check form-check-inline me-3">
                <input class="form-check-input" type="radio" name="tecnico" id="tecnicoBenhur" value="benhur">
                <label class="form-check-label" for="tecnicoBenhur">Benhur</label>
            </div>
            <div class="form-check form-check-inline me-3">
                <input class="form-check-input" type="radio" name="tecnico" id="tecnicoBruno" value="bruno">
                <label class="form-check-label" for="tecnicoBruno">Bruno</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="tecnico" id="tecnicoRogerio" value="rogerio">
                <label class="form-check-label" for="tecnicoRogerio">Rogério</label>
                <div class="invalid-feedback feedback-left">
                    Por favor, selecione uma opção de técnico.
                </div>
            </div>
        </div>
    </div>

    <!-- Serviço e Valor -->
    <div id="servicosContainer" class="mb-3">
        <div class="mb-1">
            <label for="servico" class="form-label fw-bold">Serviço:</label>
            <input type="text" id="servico" name="servico" class="form-control">
            <div class="invalid-feedback">
                Por favor, forneça um serviço.
            </div>
        </div>
        <div class="mb-3">
            <label for="valorServico" class="form-label fw-bold">Valor do Serviço:</label>
            <input type="number" id="valorServico" name="valorServico" class="form-control">
            <div class="invalid-feedback">
                Por favor, forneça um valor para o serviço.
            </div>
        </div>
    </div>

    <!-- Produto Quantidade e Valor -->
    <div id="produtosContainer" class="mb-3">
        <div class="mb-2">
            <label for="produto" class="form-label fw-bold">Produto:</label>
            <select id="produto" name="produto" class="form-select">
                <option value="">Carregando produtos...</option>
            </select>
            <div class="invalid-feedback">
                Por favor, selecione um produto.
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 mb-2">
                <label for="quantidade" class="form-label fw-bold">Quantidade:</label>
                <input type="number" class="form-control" id="quantidade" name="quantidade">
                <div class="invalid-feedback">
                    Por favor, informe a quantidade.
                </div>
            </div>
            <div class="col-md-6 mb-2">
                <label for="valorProduto" class="form-label fw-bold">Valor do Produto:</label>
                <input type="number" class="form-control" id="valorProduto" name="valorProduto">
                <div class="invalid-feedback">
                    Por favor, forneça um valor para o produto.
                </div>
            </div>
        </div>
    </div>


    <div class="add-product-button mb-3 d-flex justify-content-center align-items-center">
        <button type="button" id="botaoproduto" class="btn btn-secondary">Adicionar Produto</button>
    </div>

    <div class="d-flex justify-content-center align-items-center mb-3">
        <button type="submit" class="btn btn-primary">Enviar Formulário</button>
    </div>

</form>

<script>
    (() => {
        'use strict'

        // Busca todos os formulários aos quais queremos aplicar estilos de validação personalizados do Bootstrap
        const forms = document.querySelectorAll('.needs-validation')

        // Faça um loop sobre eles e evite o envio
        Array.from(forms).forEach(form => {
            form.addEventListener('submit', event => {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                }

                form.classList.add('was-validated')
            }, false)
        })

        //Redefinir formulário ao recarregar a página
        window.addEventListener('load', () => {
            forms.forEach(form => form.reset());
        });
    })()

    document.getElementById('telefone').addEventListener('input', function(e) {
        const input = e.target.value;
        const regex = /^\(?\d{2}\)?\s?\d{4,5}-?\d{4}$/;
        const numbersOnly = input.replace(/\D/g, '');
        const isValid = regex.test(input) || numbersOnly.length === 11;

        if (!isValid) {
            e.target.setCustomValidity('Por favor, forneça um telefone válido. Exemplo: (54) 99369-0634 ou 54993690634');
        } else {
            e.target.setCustomValidity('');
        }
    });
</script>

@endsection