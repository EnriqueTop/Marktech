@extends('layouts.app')
@section('content')

@section('title', 'Marktech - Carrito')
<div class="card">
    <div class="card-body">
        <table class="table table-borderless table-striped text-center">
            <thead>
                <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Código de Producto</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Descuento</th>
                    <th scope="col">Cantidad</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($viewData['products'] as $product)
                    <tr>
                        <td>{{ $product->getName() }}</td>
                        <td>{{ $product->getId() }}</td>
                        {{-- @if ([ $product->getPrice() ] == 0)
                            <td>Gratis</td> --}}
                        {{-- @if ([ $product->getDiscountedprice() ] = 0)
                        <td>{{ $product->getPrice() }}</td>

                        @else
                        <td>{{ $product->getDiscountedprice() }}</td>
                        @endif --}}
                        <td>{{ $product->getPrice()}}</td>
                        @if ([ $product->getDiscountedprice() ] > 0)
                        <td class="text-decoration-line-through">-{{ $product->getDiscountedprice() }}</td>
                        @else
                        <td></td>
                        @endif
                        <td>{{ session('products')[$product->getId()] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="row">
            <div class="text-end">
                <a><b>Total:</b> ${{ $viewData['total'] }}</a>
                {{-- <a><b>Cantidad:</b> {{ $viewData['count'] }}</a> --}}
                <br><br />
                @if (count($viewData['products']) > 0 && !Auth::guest())
                    <a href="{{ route('cart.address') }}">
                        <button class="btn btn-black mb-2">
                            Realizar pedido
                        </button>
                    </a>
                    <a href="{{ route('cart.delete') }}">
                        <button class="btn btn-danger mb-2">
                            Eliminar articulos
                        </button>
                    </a>
                @elseif (count($viewData['products']) > 0)
                    <a href="/IniciarSesion">
                        <button class="btn btn-black mb-2">
                            Iniciar Sesión
                        </button>
                    </a>
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
