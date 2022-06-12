@extends('layouts.layout')

@section('content')

@section('title', 'Post')


<!--Carrusel-->
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{!! asset('img/red.jpg') !!}" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="{!! asset('img/blue.jpg') !!}" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="{!! asset('img/green.jpeg') !!}" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>

        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
        </button>
      </div>

      <!--Cards-->
      <div class="container-fluid my-4 p-3" style="position: relative">
        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
          <div class="col hp">
            <div class="card h-100 shadow-sm">
              <a href="#">
                <img src="{!! asset('img/green.jpeg') !!}" class="card-img-top"/>
              </a>

              <div class="card-body">
                <div class="clearfix mb-3">
                  <span class="float-start">$</span>
                </div>
                <h5 class="card-title">
                  <a href="#">Product1</a>
                </h5>

                <div class="d-grid gap-2 my-4">

                  <a href="#" class="btn btn-info">Comprar</a>

                </div>
                <div class="clearfix mb-1">
                    <i class="far fa-heart" style="cursor: pointer"></i>

                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col hp">
            <div class="card h-100 shadow-sm">
              <a href="#">
                <img src="{!! asset('img/green.jpeg') !!}" class="card-img-top" alt="product.title" />
              </a>

              <div class="card-body">
                <div class="clearfix mb-3">
                  <span class="float-start">$</span>
                </div>
                <h5 class="card-title">
                    <a href="#">Product2</a>
                </h5>

                <div class="d-grid gap-2 my-4">

                  <a href="#" class="btn btn-info">Comprar</a>

                </div>
                <div class="clearfix mb-1">
                    <i class="far fa-heart" style="cursor: pointer"></i>

                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col hp">
            <div class="card h-100 shadow-sm">
              <a href="#">
                <img src="{!! asset('img/green.jpeg') !!}" class="card-img-top" alt="product.title" />
              </a>

              <div class="card-body">
                <div class="clearfix mb-3">
                  <span class="float-start">$</span>
                </div>
                <h5 class="card-title">
                    <a href="#">Product3</a>
                </h5>

                <div class="d-grid gap-2 my-4">

                  <a href="#" class="btn btn-info">Comprar</a>

                </div>
                <div class="clearfix mb-1">
                    <i class="far fa-heart" style="cursor: pointer"></i>

                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="col hp">
            <div class="card h-100 shadow-sm">
              <a href="#">
                <img src="{!! asset('img/green.jpeg') !!}" class="card-img-top" alt="product.title" />
              </a>
              <div class="card-body">
                <div class="clearfix mb-3">
                  <span class="float-start">$</span>
                </div>
                <h5 class="card-title">
                    <a href="#">Product4</a>
                </h5>

                <div class="d-grid gap-2 my-4">

                  <a href="#" class="btn btn-info">Comprar</a>

                </div>
                <div class="clearfix mb-1">
      <i class="far fa-heart" style="cursor: pointer"></i>

                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

@endsection

