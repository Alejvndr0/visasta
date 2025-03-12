@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">{{ __('Panel de Control') }}</h4>
                    <span class="badge bg-light text-dark">panel de: {{ auth()->user()->name }}</span>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="alert alert-info" role="alert">
                        ¡Bienvenid@, {{ auth()->user()->name }}! .
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div class="card text-center">
                                <div class="card-body">
                                    <h5 class="card-title">Gestión de Clientes</h5>
                                    <p class="card-text">Administra la información de tus clientes.</p>
                                    <a href="{{ route('clients.index') }}" class="btn btn-primary">Ir a Clientes</a>
                                </div>
                            </div>
                        </div>

                        @if (auth()->user()->isAdmin())
                            <div class="col-md-6 mb-3">
                                <div class="card text-center">
                                    <div class="card-body">
                                        <h5 class="card-title">Gestión de Usuarios</h5>
                                        <p class="card-text">Crea y gestiona empleados de la agencia.</p>
                                        <a href="{{ route('users.index') }}" class="btn btn-success">Ir a Usuarios</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection