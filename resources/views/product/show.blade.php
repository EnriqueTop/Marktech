@extends('layouts.app')
@section('content')


    <div class="card mb-3">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="{{ asset('/storage/' . $viewData['product']->getImage()) }}" class="img-fluid rounded-start">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $viewData['product']->getName() }} (${{ $viewData['product']->getPrice() }})
                    </h5>
                    <p class="card-text">{{ $viewData['product']->getDescription() }}</p>

                    {{-- Cart --}}
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
                                <button class="btn bg-black text-white" type="submit">Añadir al carrito</button>
                            </div>
                        </div>
                    </form>
                    </p>
                    {{-- Cart --}}
                </div>
            </div>
        </div>
    </div>

@endsection
