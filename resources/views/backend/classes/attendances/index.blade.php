@extends('backend.layout.base')

@section('content')

<div class="row">
  <div class="col-xs-12">
    <h2>Asistencia de las Sesiones de {{ $clase->course_name }} / {{ $clase->type }}</h2>
  </div>
</div>

<div class="row">
  <table class="table">
    <thead>
      <th>#</th>
      <th>Fecha</th>
      <th>Estado de la sesion</th>
      <th>Asistencia</th>
      <th>Hora de registro</th>
      <th>Acciones</th>
    </thead>
    <tbody>
    @foreach ($attendances as $attendance)
      <tr>
        <td>{{ ($loop) }}</td>
        <td>{{ $attendance->session_date }}</td>
        <td>{{ $attendance->session_status }}</td>
        <td>{{ $attendance->verified ? 'Asistio' : 'No Asistio'}}</td>
        <td>{{ $attendance->created_at }}</td>
        <td></td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

@endsection
