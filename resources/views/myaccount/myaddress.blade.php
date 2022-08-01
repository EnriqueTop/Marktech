@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-body">
            <table class="table table-borderless table-striped text-center">
                <thead>
                    <tr>
                        <th scope="col"><strong>Nombre</strong></th>
                        <th scope="col"><strong>Editar</strong></th>
                        <th scope="col"><strong>Borrar</strong></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dir as $dir)
                        <tr>
                            <td><strong>Nombre:</strong> {{ $dir->nombre }}, <strong>Calle:</strong> {{ $dir->calle }} Nº
                                {{ $dir->exterior }},
                                <strong>Colonia:</strong> {{ $dir->colonia }}, <strong>Estado:</strong> {{ $dir->estado }}
                            </td>
                            <td>
                                <a class="btn btn-black" href="{{ route('dir.edit', $dir->id) }}">
                                    <span class="iconify" data-icon="clarity:note-edit-solid"></span>
                                </a>
                            </td>
                            <td>
                                <form action="{{ route('dir.destroy', $dir->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger">
                                        <span class="iconify" data-icon="fluent:delete-24-filled"></span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <a class="btn btn-black" href="/direcciones">Agregar Dirección</a>
    </div>
@endsection
