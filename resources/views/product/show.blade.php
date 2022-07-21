@extends('layouts.app')
@section('content')
    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/img/products/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['product']->getName() }} <br><br>
                        Precio: <strong>@if ($viewData['product']->getPrice() == 0)
                                <span>Gratis</span>
                            @elseif ($viewData['product']->getDiscountedprice() > 0)
                                <strong class="text-decoration-line-through">${{ $viewData['product']->getPrice() }}</strong>
                                <strong>${{ $viewData['product']->getPrice() - $viewData['product']->getDiscountedprice() }}</strong>
                            @else
                                <strong>${{ $viewData['product']->getPrice() }}</strong>
                            @endif
                        </strong>
                        {{-- <br><br><strong>${{ $viewData['product']->getDiscountedprice() }} --}}
                    </h5>
                    <br>
                    <p class="card-text">{{ $viewData['product']->getDescription() }}</p>
                    <p class="card-text">Categoria: <strong>{{ $viewData['product']->getCategory() }}</strong></p>

                    <p class="card-text">
                    <form method="POST" action="{{ route('cart.add', ['id' => $viewData['product']->getId()]) }}">
                        <div class="row">
                            @csrf
                            <div class="col-auto">
                                <div class="input-group col-auto">
                                    <div class="input-group-text">Cantidad:</div>
                                    <input type="number" min="1" max="10" class="form-control quantity-input"
                                        name="quantity" value="1">
                                </div>
                            </div>
                            <div class="col-auto">
                                <button class="btn btn-black text-white" type="submit">Añadir al carrito</button>

                            </div>
                        </div>


                        </p>

                </div>
            </div>
            <br>
            <table class="table table-bordered fs-6">
                <thead>
                  <tr>
                    <th scope="col" colspan="2" class="text-center">Detalles</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td><strong>Marca:</strong></td>
                    <td>{{ $viewData['product']->getTrademark() }}</td>
                  </tr>
                  <tr>
                    <td><strong>Tipo:</strong></td>
                    <td>{{ $viewData['product']->getSubcategory() }}</td>
                  </tr>
                </tbody>
              </table>
        </div>
    </div>
@endsection
