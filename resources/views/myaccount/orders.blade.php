@extends('layouts.app')
@section('title', $viewData['title'])
@section('subtitle', $viewData['subtitle'])
@section('content')
    @forelse ($viewData["orders"] as $order)
        <div class="card mb-4">
            <div class="card-header">
                <strong class="text-success">{{ $order->getCreatedAt() }}</strong>

            </div>
            <div class="card-body">
                <b>Número de Orden:</b> {{ $order->getId() }}<br>
                <b>Total:</b> ${{ $order->getTotal() }}<br />
                @if ($order->getState() == 'No Pagado')
                    <b>Estado:</b> <span class="text-warning">{{ $order->getState() }}</span><br />
                @elseif ($order->getState() == 'Pagado')
                    <b>Estado:</b> <span class="text-success">{{ $order->getState() }}</span><br />
                @elseif ($order->getState() == 'Cancelado')
                    <b>Estado:</b> <span class="text-danger">{{ $order->getState() }}</span><br />
                @endif
                @if ($order->getEstado() == 'Preparando Pedido' && $order->getState() == 'Pagado')
                    <b>Estado de envio:</b> <span class="text-warning">{{ $order->getEstado() }}</span><br />
                @elseif ($order->getEstado() == 'Enviado')
                    <b>Estado de envio:</b> <span class="text-success">{{ $order->getEstado() }}</span><br />
                @elseif ($order->getEstado() == 'Entregado')
                    <b>Estado de envio:</b> <span class="text-success">{{ $order->getEstado() }}</span><br />
                @endif

                <table class="table table-borderless table-striped text-center mt-3">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Id único</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order->getItems() as $item)
                            <tr>
                                <td>
                                    <a class="link-success"
                                        href="{{ route('product.show', ['id' => $item->getProduct()->getId()]) }}">
                                        {{ $item->getProduct()->getName() }}
                                    </a>
                                </td>
                                <td>{{ $item->getId() }}</td>
                                <td>${{ $item->getPrice() }}</td>
                                <td>{{ $item->getQuantity() }}</td>

                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @empty
        <div class="alert alert-danger" role="alert">
            No has realizado ningun pedido.
        </div>
    @endforelse
@endsection
