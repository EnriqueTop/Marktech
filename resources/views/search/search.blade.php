@extends('layouts.app')

@section('content')

    {{-- <form method="GET">
        <input type="text" class="form-control mx-auto" name="barra" placeholder="Buscar productos..."
            style="width: 300px; height: 50px">
        <h5>Fabricante</h5>
        <input type="checkbox" name="trademark" value="asus"><span>Asus</span><br>
        <input type="checkbox" name="trademark" value="lg"><span>LG</span><br>
        <input type="checkbox" name="trademark" value="nvidia"><span>Nvidia</span><br>
        <input type="checkbox" name="trademark" value="intel"><span>Intel</span><br>
        <input type="checkbox" name="trademark" value="toshiba"><span>Toshiba</span><br>
        <input type="checkbox" name="trademark" value="adata"><span>Adata</span><br>
        <input type="checkbox" name="trademark" value="apple"><span>Apple</span><br>
    </form> --}}

    @if (isset($details))
        @foreach ($details as $product)
            <div class="container ">
                <div class="card mb-3 mx-auto" style="max-width: 840px;">
                    <div class="row no-gutters">

                        <div class="col-md-4">

                            <a href="{{ route('product.show', ['id' => $product->id]) }}">
                                <img src="{{ asset('/img/products/' . $product->image) }}" width="200px" height="200px"
                                    alt="imagen">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><b>{{ $product->name }}</b></h5>
                                @if ($product->price == 0)
                                    <span><strong class="text-danger">Gratis</strong></span>
                                @elseif ($product->discounted_price > 0)
                                    <strong
                                        class="text-danger text-decoration-line-through">${{ $product->price }}</strong>
                                    <strong
                                        class="text-danger">${{ $product->price - $product->discounted_price }}</strong>
                                @else
                                    <strong class="text-danger">${{ $product->price }}</strong>
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        @endforeach
    @endif

@endsection
