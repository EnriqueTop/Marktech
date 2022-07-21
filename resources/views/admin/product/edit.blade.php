@extends('layouts.admin')
@section('title', $viewData['title'])
@section('content')
    <div class="card mb-4">
        <div class="card-header">
            Modificar Producto
        </div>
        <div class="card-body">
            @if ($errors->any())
                <ul class="alert alert-danger list-unstyled">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form method="POST" action="{{ route('admin.product.update', ['id' => $viewData['product']->getId()]) }}"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Nombre:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="name" value="{{ $viewData['product']->getName() }}" type="text"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Precio:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input name="price" value="{{ $viewData['product']->getPrice() }}" type="number"
                                    class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="mb-3 row">
                            <label class="col-lg-2 col-md-6 col-sm-12 col-form-label">Imagen:</label>
                            <div class="col-lg-10 col-md-6 col-sm-12">
                                <input class="form-control" type="file" name="image">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        &nbsp;
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Cant. de Descuento:</label>
                    <input name="discounted_price" value="{{ $viewData['product']->getDiscountedprice() }}" type="number" class="form-control">
                </div>
                <div class="mb-3">
                    <label class="form-label">Descripción:</label>
                    <textarea class="form-control" name="description" rows="3">{{ $viewData['product']->getDescription() }}</textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label">Marca:</label>
                    <input class="form-control" type="text" name="trademark" value="{{ $viewData['product']->getTrademark() }}" style="text-transform:lowercase">
                </div>
                <h5>Categoria</h5>
                <select class="form-select mb-4" name="category" value="{{ $viewData['product']->getCategory() }}" aria-label="Default select example" required>
                    <option value="hardware" selected>Hardware</option>
                    <option value="accesorios">Accesorios</option>
                    <option value="computadoras">Computadoras</option>
                    <option value="electronica">Electronica</option>
                </select>
                <h5>SubCategoria</h5>
                <select class="form-select mb-4" name="subcategory" value="{{ $viewData['product']->getSubcategory() }}" aria-label="Default select example" required>
                    <option value="procesadores" selected>Hardware - Procesadores</option>
                    <option value="gabinetes">Hardware - Gabinetes</option>
                    <option value="gpu">Hardware - Targetas de video</option>
                    <option value="ram">Hardware - Memorias RAM</option>
                    <option value="disipadores">Hardware - Disipadores</option>
                    <option value="ssd">Hardware - SSD</option>
                    <option value="hdd">Hardware - Discos Duros</option>
                    <option value="usb">Hardware - USB/SD</option>
                    <option value="motherboard">Hardware - Targetas Madre</option>
                    <option value="audifonos">Accesorios - Audifonos</option>
                    <option value="alfombrillas">Accesorios - Alfombrillas</option>
                    <option value="mouse">Accesorios - Mouse</option>
                    <option value="teclados">Accesorios - Teclados</option>
                    <option value="laptop">Computadoras - Laptop</option>
                    <option value="escritorio">Computadoras - Escritorio</option>
                    <option value="consolas">Electronica - Consolas</option>
                    <option value="tv">Electronica - Televisores</option>
                    <option value="monitores">Electronica - Monitores</option>
                    <option value="bocinas">Electronica - Bocinas</option>
                    <option value="camaras">Electronica - Cámaras</option>
                    <option value="telefonos">Electronica - Telefonos</option>
                </select>
                <h5>¿Destacado?</h5>
                <select class="form-select mb-4" name="featured" value="{{ $viewData['product']->getFeatured() }}" aria-label="Default select example" required>
                    <option value="0" selected>No</option>
                    <option value="1">Si</option>
                </select>
                <button type="submit" class="btn btn-black">Confirmar</button>
            </form>
        </div>
    </div>
@endsection
