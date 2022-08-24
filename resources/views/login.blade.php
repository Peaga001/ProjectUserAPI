@extends('main')
@section('title','Área do Administrador')
@section('content')


    <div class="api-info">
        <a href="/info">
            <button class="btn btn-success" type="button" id="btnVoltar">EndPoints Disponíveis Para Integração</button>
        </a>
    </div>

    <form class="form-class" action="/edit" method="POST">

        @csrf

        @isset($error)
            <div class="alert alert-danger text-center">
                Dados inválidos!
            </div>
        @endisset

        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf: </label>
            <input
                type="text"
                class="form-control"
                id="cpf"
                name="cpf"
                required
            >
        </div>

        <div class="mb-3">
            <label for="plate" class="form-label">Placa: </label>
            <input
                type="text"
                class="form-control"
                id="plate"
                name="plate"
                required
            >
        </div>

        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" value="Autenticar-se">
        </div>
    </form>
@endsection

