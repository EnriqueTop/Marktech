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
                Tu número de pedido es: <b>#{{ $viewData['order']->getId() }}</b>
            </div>
            <br>
            <div class="alert alert-info" role="alert">
                <b>Realiza tu pago para completar tu compra.</b>
            </div>
        </div>

        <a href="{{ route('myaccount.orders.show', $viewData['order']->getId()) }}" class="btn btn-black">Pagar</a>
    </div>
@endsection
