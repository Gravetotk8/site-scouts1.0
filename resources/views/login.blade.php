@extends('layout')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Login</h2>
            <form id="loginForm">
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="loginEmail" name="loginEmail" required>
                </div>
                <div class="mb-3">
                    <label for="loginPassword" class="form-label">Senha:</label>
                    <input type="password" class="form-control" id="loginPassword" name="loginPassword" required>
                </div>
                <div class="d-grid mb-3">
                    <button type="submit" class="btn btn-primary">Entrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection