@extends('backend.layout.base')

@section('content')

<div class="row">
   <div class="col-xs-12">
      <h2>Lista de Planes Academicos de {{ $eap->getName() }}</h2>
   </div>
</div>

@if( session()->has('message') )
<div class="row">
   <div class="alert alert-success">
      {{ session('message') }}
   </div>
</div>
@endif

<div class="row">

   <table class="table">
      <thead>
         <th>Nombre</th>
         <th>Año de publicación</th>
         <th>Activo</th>
         <th>Acciones</th>
      </thead>
      <tbody>
         @foreach($academic_plans as $academic_plan)
         <tr>
            <td>{{ $academic_plan->getName() }}</td>
            <td>{{ $academic_plan->getYearOfPublication() }}</td>
            <td>{{ $academic_plan->isActive() ? 'Si' : 'No' }}</td>
            <td>

            </td>
         </tr>
         @endforeach
      </tbody>
   </table>

</div>

<div class="row">
   <div class="form-group">

   </div>
</div>

@endsection