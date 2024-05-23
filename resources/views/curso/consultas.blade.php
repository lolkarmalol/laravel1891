<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultas</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <section class="section">
            <h1>Profesores</h1>
            @foreach ($teachers as $teacher)
                <div class="card">
                    <h2>Profesor ID: {{ $teacher->id }}</h2>
                    <p><strong>DNI:</strong> {{ $teacher->dni }}</p>
                    <p><strong>Nombre:</strong> {{ $teacher->name }}</p>
                    <p><strong>Dirección:</strong> {{ $teacher->address }}</p>
                    <p><strong>Teléfono:</strong> {{ $teacher->phone_number }}</p>
                    <p><strong>Módulo:</strong>
                        @if($teacher->module)
                            {{ $teacher->module->name }} (Código: {{ $teacher->module->codigo }})
                        @else
                            No asignado
                        @endif
                    </p>
                </div>
            @endforeach
        </section>

        <section class="section">
            <h1>Estudiantes</h1>
            @foreach ($students as $student)
                <div class="card">
                    <h2>Estudiante ID: {{ $student->id }}</h2>
                    <p><strong>Expediente:</strong> {{ $student->expediente }}</p>
                    <p><strong>Nombre:</strong> {{ $student->name }}</p>
                    <p><strong>Apellido:</strong> {{ $student->last_name }}</p>
                    <p><strong>Módulos:</strong></p>
                    <ul>
                        @foreach ($student->module as $module)
                            <li>{{ $module->name }} (Código: {{ $module->codigo }})</li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </section>

        <section class="section">
            <h1>Módulos</h1>
            @foreach ($modules as $module)
                <div class="card">
                    <h2>Módulo ID: {{ $module->id }}</h2>
                    <p><strong>Código:</strong> {{ $module->codigo }}</p>
                    <p><strong>Nombre:</strong> {{ $module->name }}</p>
                    <p><strong>Profesor:</strong>
                        @if($module->teacher)
                            {{ $module->teacher->name }} (ID: {{ $module->teacher->id }})
                        @else
                            No asignado
                        @endif
                    </p>
                    <p><strong>Estudiante:</strong>
                        @if($module->student)
                            {{ $module->student->name }} (ID: {{ $module->student->id }})
                        @else
                            No asignado
                        @endif
                    </p>
                </div>
            @endforeach
        </section>
    </div>
</body>
</html>
