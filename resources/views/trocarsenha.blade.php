@extends('layout')

@section('conteudo')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h2 class="text-center mb-4">Trocar Senha</h2>
            <form id="changePasswordForm">
                <div class="mb-3">
                    <label for="changeEmail" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="changeEmail" name="changeEmail" required>
                </div>
                <div class="mb-3">
                    <label for="oldPassword" class="form-label">Senha Antiga:</label>
                    <input type="password" class="form-control" id="oldPassword" name="oldPassword" required>
                </div>
                <div class="mb-3">
                    <label for="newPassword" class="form-label">Nova Senha:</label>
                    <input type="password" class="form-control" id="newPassword" name="newPassword" required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Trocar Senha</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection