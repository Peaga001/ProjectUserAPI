@extends('main')
@section('title','Área do Administrador')
@section('content')
    <form class="form-class" action="/updateuser" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{$user->id}}">

        @isset($success)
            <div class="alert alert-success text-center">
                Endereço atualizado com sucesso!
            </div>
        @endisset


        <div class="mb-3">
            <label for="name" class="form-label">Nome: </label>
            <input
                type="text"
                class="form-control"
                id="name"
                name="name"
                value="{{$user->name}}"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="cpf" class="form-label">Cpf: </label>
            <input
                type="text"
                class="form-control"
                id="cpf"
                name="cpf"
                value="{{$user->cpf}}"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="plate" class="form-label">Placa: </label>
            <input
                type="text"
                class="form-control"
                id="plate"
                name="plate"
                value="{{$user->plate}}"
                disabled
            >
        </div>
        <div class="mb-3">
            <label for="address" class="form-label">Endereço: </label>
            <input
                type="text"
                class="form-control"
                id="address"
                name="address"
                value="{{$user->address}}"
            >
        </div>
        <div class="mb-3">
            <label for="tel" class="form-label">Telefone: </label>
            <input
                type="text"
                class="form-control"
                id="tel"
                name="tel"
                value="{{$user->tel}}"
                disabled
            >
        </div>

        <div class="d-grid gap-2">
            <input class="btn btn-primary" type="submit" id="btnAutenticar" value="Atualizar Cadastro">
        </div>

        <a href="/">
            <div class="d-grid gap-3 m-top">
                <button class="btn btn-dark" type="button" id="btnVoltar">Voltar</button>
            </div>
        </a>

    </form>
@endsection
