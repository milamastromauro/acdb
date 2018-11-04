<!-- Stored in resources/views/child.blade.php -->

@extends('layouts.base')

@section('title', 'A Cabeça do Buda - Login')

@section('content')

      <div class="loginArea col-12 col-sm-12 col-md-12 col-lg-4 offset-lg-4 col-xl-4 offset-xl-4 mt-5 align-middle">
        <form action="/acdb/public/login" method="POST">
            {!! csrf_field()!!}
            <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Digite seu e-mail">
        </div>
        <div class="form-group">
            <label for="senha">Senha</label>
            <input type="password" class="form-control" name="senha" id="senha" placeholder="Senha">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="lembrar">
            <label class="form-check-label" for="logado">Lembrar senha</label>
        </div>
        <button type="submit" class="btn btn-primary">Entrar</button>
        </form>
        @isset($respostalogin)
            <br>
            <div class="alert alert-primary" role="alert">
            {{$respostalogin}}
            </div>
        @endisset
    </div>
  
@endsection