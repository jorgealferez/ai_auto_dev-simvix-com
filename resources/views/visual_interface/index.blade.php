

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Diseño de la Interfaz Visual Corporativa</h1>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('visual_interface.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="color_palette">Paleta de Colores</label>
            <input type="text" class="form-control" name="color_palette" id="color_palette" placeholder="Ej: #FFFFFF, #000000, ...">
        </div>

        <div class="form-group mt-3">
            <label for="typography">Tipografía</label>
            <input type="text" class="form-control" name="typography" id="typography" placeholder="Ej: Roboto, Open Sans, ...">
        </div>

        <div class="form-group mt-3">
            <label for="mockup">Mockup / Prototipo Interactivo</label>
            <input type="file" class="form-control" name="mockup" id="mockup">
        </div>

        <button type="submit" class="btn btn-primary mt-4">Guardar Diseño</button>
    </form>
</div>
@endsection
