@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    {{-- <div class="card mb-4">
        <div class="card-header">
            Agregar Pedido
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li> - {{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <form method="POST" action="{{ route('admin.item.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Cantidad:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="quantity" value="{{ old('quantity') }}" type="number" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Precio:</label>
                    <input name="user_id" value="{{ old('price') }}" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Codigo de Pedido:</label>
                    <input name="order_id" value="{{ old('order_id') }}" type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Codigo de Producto:</label>
                    <input name="product_id" value="{{ old('product_id') }}" type="text" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Confirmar</button>
        </div>
        </form>
    </div> --}}

    <div class="card">
        <div class="card-header">
            Administrar Productos Vendidos
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Cantidad</th>
                        <th scope="col">Precio</th>
                        <th scope="col">Pedido</th>
                        <th scope="col">Codigo de Producto</th>
                        {{-- <th scope="col">Modificar</th> --}}
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($viewData['products'] as $product)
                        <tr>
                            <td>{{ $product->getId() }}</td>
                            <td>{{ $product->getQuantity() }}</td>
                            <td>{{ $product->getPrice() }}</td>
                            <td>{{ $product->getOrderId() }}</td>
                            <td>{{ $product->getProductId() }}</td>
                            {{-- <td>
                                <a class="btn btn-primary"
                                    href="{{ route('admin.item.edit', ['id' => $product->getId()]) }}">
                                    <i class="bi-pencil"></i>
                                </a>
                            </td> --}}
                            <td>
                                <form action="{{ route('admin.item.delete', $product->getId()) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <i class="bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
