<?php
// Archivo: resources/views/inicio.blade.php
// Este archivo integra la funcionalidad definida en el proyecto con la estructura base.

@extends('layouts.app')

@section('title', 'Inicio - Corporativo Moderno')

@section('content')
    <div class="text-center">
        <h1 class="text-4xl font-bold mb-4">Bienvenido a Mi Startup IA</h1>
        <p class="text-lg text-gray-700 mb-6">Descubre nuestros productos innovadores y cómo la Inteligencia Artificial está transformando el futuro.</p>
        <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Explorar productos</a>
    </div>
@endsection
