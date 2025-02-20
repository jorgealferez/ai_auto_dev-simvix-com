<?php

// Archivo: resources/views/home.blade.php

@extends('layouts.app')

@section('content')
    // Sección Hero
    <section class="hero mb-5">
        <div class="container">
            <h1 class="display-4">Bienvenido a TechStartup</h1>
            <p class="lead">Innovación en productos con Inteligencia Artificial</p>
            <a href="#" class="btn btn-primary btn-lg">Conoce más</a>
        </div>
    </section>

    // Sección de Características
    <section class="py-5">
        <div class="row">
            <div class="col-md-4 text-center">
                <h3>Innovación</h3>
                <p>Explora soluciones tecnológicas revolucionarias que transforman la industria.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Inteligencia Artificial</h3>
                <p>Implementa IA de última generación para optimizar y automatizar procesos.</p>
            </div>
            <div class="col-md-4 text-center">
                <h3>Crecimiento</h3>
                <p>Acompaña el crecimiento de tu negocio con herramientas avanzadas y escalables.</p>
            </div>
        </div>
    </section>
@endsection
