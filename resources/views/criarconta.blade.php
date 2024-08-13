@extends('layout')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Criar Conta</h2>
            <form id="signupForm">
                <div class="mb-3">
                    <label for="signupEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="signupEmail" name="signupEmail" required>
                </div>
                <div class="mb-3">
                    <label for="signupPassword" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="signupPassword" name="signupPassword" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-success">Criar Conta</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection