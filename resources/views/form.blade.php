@extends('layouts.layout')

@section('content')

@section('title', 'Formulario')

<h1>Envia tu opinión:</h1>
<form action={{route('contact')}} method="POST">
     {{ csrf_field() }}

    <div class="form-group">
        <label for="name">Correo:</label>
        <input name="name" type="text" class="form-control">
    </div>

    <div class="form-group">
        <label for="name">Mensaje:</label>
        <input name="msg" type="text" class="form-control">
    </div>

    <div class="form-group">
        <button type="submit" id='btn-contact' class="btn">Enviar</button>
    </div>
</form>

@endsection
