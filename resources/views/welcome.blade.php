@extends('layouts.app')
@section('Titulo', 'Panel de Administración')
@section('contenido')
    <div class="banner">
        <h1>Bienvenido Administrador 👋</h1>
        <p>
            Desde este panel podrás administrar cursos, aprendices,
            instructores, centros de formación y equipos.
        </p>
    </div>
    <div class="cards">
        <div class="card">
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3>Aprendices</h3>
            <p>150</p>
        </div>
        <div class="card">
            <div class="icon">
                <i class="fas fa-chalkboard-user"></i>
            </div>
            <h3>Instructores</h3>
            <p>25</p>
        </div>
        <div class="card">
            <div class="icon">
                <i class="fas fa-book"></i>
            </div>
            <h3>Cursos</h3>
            <p>35</p>
        </div>
        <div class="card">
            <div class="icon">
                <i class="fas fa-desktop"></i>
            </div>
            <h3>Equipos</h3>
            <p>80</p>
        </div>
    </div>
@endsection 