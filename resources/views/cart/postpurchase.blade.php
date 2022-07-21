@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    <div class="card">
        <div class="card-header">
            Compra Completa
        </div>

        <div class="card-body">
            <div class="alert alert-success" role="alert">
                Tu número de orden es: <b>#{{ $viewData['order']->getId() }}</b>
            </div>
        </div>
    </div>
@endsection
