@extends('site.layout')
@section('title', 'Cadastro')
@section('content')

    <div class="container bg-light mt-5 p-4 border">
        <h1>Tela de Cadastro</h1>

        <h2>Controle de Acesso</h2>

        <select class="form-select" aria-label="Default select example">
            <option selected>Selecione um colaborador...</option>
            <option value="1">Grupo 1</option>
            <option value="2">Grupo 2</option>
            <option value="3">Grupo 3</option>
        </select>


        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Criar/Alterar/Deletar vagas
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Financeiro
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Alterar Cadastro Empresa
            </label>
        </div>

        <div class="form-check">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
            Apenas Visualizar
            </label>
        </div>
    </div>

@endsection

