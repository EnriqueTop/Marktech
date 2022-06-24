@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Cantidad</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getName() }}</td>
                            <td>${{ $product->getPrice() }}</td>
                            <td>{{ session('products')[$product->getId()] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="row">
                <div class="text-end">
                    <a class="btn btn-outline-secondary mb-2"><b>Total:</b> ${{ $viewData['total'] }}</a>
                    @if (count($viewData['products']) > 0)
                        <!--<a href="{{ route('cart.purchase') }}" class="btn bg-primary text-white mb-2">Confirmar Compra</a>-->
                        <a class="btn bg-black text-white mb-2">Confirmar Compra</a>
                        <a href="{{ route('cart.delete') }}">
                            <button class="btn btn-danger mb-2">
                                Eliminar articulos
                            </button>
                        </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
