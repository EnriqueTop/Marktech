@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <tbody>
                            <div class="p-3 border-top border-bottom bg-light"><strong>Direcciones</strong></div>
                            <br>
                            @forelse ($posts as $post)
                                <div class="container">
                                    <div class="col">
                                        <div class="p-5 border-top border-bottom bg-light fs-6"><strong>
                                            Nombre:</strong> {{ $post->nombre }}, <strong>Calle:</strong> {{ $post->calle }} <strong>Nº</strong> {{ $post->exterior }},
                                                <strong>Colonia:</strong> {{ $post->colonia }}, <strong>Estado:</strong> {{ $post->estado }}
                                            <a class="btn btn-link float-end" href="{{ route('posts.edit', $post->id) }}"
                                                role="button">Editar</a>

                                            <form onsubmit="return confirm('¿Seguro que quieres borrar esta dirección?');"
                                                action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <br>
                                                <button type="submit" class="btn btn-danger float-end y-top">Borrar</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            @empty
                                <div class="alert alert-danger">
                                    No tienes direcciones registradas.
                                </div>
                            @endforelse
                        </tbody>
                        {{ $posts->links() }}
                    </div>
                    <a class="btn btn-black" href="/direcciones">Agregar Dirección</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
@endsection
