@extends('layouts.layout')
@section('title', 'Email')
@section('content')
    <h1>Envio de email de Violet Nascimento</h1>
    <p>Meu nome: <strong> {{$nome}}</strong>. 
    <br>
    Meu email: <i> {{$email}}</i>
    </p>
    <p>Assunto de urgência: <i> {{$assunto}}</i></p>
    <p><strong>Minha mensagem: </strong> {{$mensagem}}</p>

@endsection