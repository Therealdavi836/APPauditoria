@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row ">
        <!-- Columna para la lista de estudiantes -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Estudiantes registrados') }}</div>
                <div class="card-body">
                    <div style="max-height: 400px; overflow-y: auto;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nacionalidad</th>
                                    <th>Departamento</th>
                                    <th>Ciudad</th>
                                    <th>Edad</th>
                                    <th>Genero</th>
                                    <th>Estrato</th>
                                    <th>PBM</th>
                                    <th>Admisión</th>
                                    <th>Facultad</th>
                                    <th>Programa</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->nationality }}</td>
                                        <td>{{ $student->birth_department }}</td>
                                        <td>{{ $student->birth_city }}</td>
                                        <td>{{ $student->age }}</td>
                                        <td>{{ $student->gender }}</td>
                                        <td>{{ $student->stratum }}</td>
                                        <td>{{ $student->pbm }}</td>
                                        <td>{{ $student->admission_type }}</td>
                                        <td>{{ $student->faculty }}</td>
                                        <td>{{ $student->program }}</td>
                                        <td>
                                            <!-- Botón para editar -->
                                            <a href="{{ route('students.edit', $student->id) }}" class="btn btn-warning">Editar</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Columna para las alertas -->
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">{{ __('Alertas') }}</div>

                <div class="card-body" style="max-height: 400px; overflow-y: auto;">
                    <ul class="list-group">
                        @forelse($alerts as $alert)
                            <div class="card mb-3 alert alert-warning">
                                <div class="card-body">
                                    <h5 class="card-title text-dark fw-bold">Alerta</h5>
                                    <p>Se han detectado cambios en el siguiente estudiante:</p>
                                    <p class="badge text-bg-warning">ID Estudiante: {{ $alert->student_id }}</p>
                                    <p class="badge text-bg-warning">Modificado por: {{ $alert->user->name }}</p>
                                    <p class="card-text text-dark">{!! $alert->message !!}</p>
                                </div>
                            </div>
                        @empty
                            <div class="alert alert-info" role="alert">
                                No hay alertas disponibles.
                            </div>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12 mt-3">
        <div class="apple-card">
            <div class="apple-card-header">
                <h2 class="apple-title">{{ __('Sobre AuditoUN') }}</h2>
                <p class="apple-subtitle">{{ __('Aplicacion de auditoria interna a correos electronicos de la UNAL') }}</p>
            </div>
            <div class="apple-card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="apple-description">
                            <p>AuditoUN es una plataforma especializada diseñada para gestionar y proteger la informacion de los estudiantes de la Universidad Nacional. Nuestro sistema proporciona:</p>
                            
                            <ul class="apple-feature-list">
                                <li><strong>Gestión centralizada</strong> de la información de los estudiantes de la universidad</li>
                                <li><strong>Automatización</strong> de flujo de información y alertas sobre modificaciones</li>
                                <li><strong>Monitoreo en tiempo real</strong> del cumplimiento normativo</li>
                                <li><strong>Datos cargados</strong> de los estudiantes y acceso por parte de los administradores</li>
                            </ul>
                            
                            <p class="apple-highlight">Desarrollado específicamente para la universidad nacional, AuditoUN ayuda a mantener los más altos estándares de calidad educativa y cumplimiento regulatorio.</p>
                        </div>
                    </div>
                        <div class="col-md-6 d-flex align-items-center justify-content-center" style="height: 100%;">
                            <img src="{{ asset('images/system_audit.png') }}" alt="Sistema de Auditoría" class="apple-chart img-fluid w-100 h-100"
                                style="object-fit: contain; max-width: 200%; max-height: 100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .apple-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            background: #ffffff;
            margin-bottom: 2rem;
        }

        .apple-card-header {
            background: transparent;
            border-bottom: 1px solid #f0f0f0;
            padding: 1.5rem 2rem;
        }

        .apple-title {
            font-size: 1.5rem;
            font-weight: 600;
            color: #1d1d1f;
            margin-bottom: 0.25rem;
        }

        .apple-subtitle {
            font-size: 0.9375rem;
            color: #86868b;
            margin-bottom: 0;
        }

        .apple-card-body {
            padding: 2rem;
        }

        .apple-description {
            font-size: 0.9375rem;
            line-height: 1.6;
            color: #1d1d1f;
        }

        .apple-feature-list {
            list-style-type: none;
            padding-left: 0;
            margin: 1.5rem 0;
        }

        .apple-feature-list li {
            padding: 0.5rem 0;
            position: relative;
            padding-left: 1.75rem;
        }

        .apple-feature-list li:before {
            content: "•";
            color: #0071e3;
            font-weight: bold;
            display: inline-block;
            width: 1em;
            margin-left: -1.5rem;
            position: absolute;
        }

        .apple-highlight {
            background-color: rgba(0, 113, 227, 0.05);
            padding: 1rem;
            border-radius: 8px;
            border-left: 3px solid #0071e3;
            font-size: 0.875rem;
        }

        .apple-chart {
            width: 100% !important;
            height: 300px !important;
            max-height: 100%;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            .apple-card-header {
                padding: 1.25rem;
            }
            
            .apple-card-body {
                padding: 1.25rem;
            }
            
            .apple-chart {
                margin-top: 1.5rem;
                height: 250px !important;
            }
        }
    </style>
    </div>
</div>
@endsection
