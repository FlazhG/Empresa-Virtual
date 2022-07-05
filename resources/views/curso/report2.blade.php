@extends('layouts.menu')
@section('header')
  <meta name="csrf-token" content="{{csrf_token()}}">
  <!-- DataTables -->
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/datatables.css') }}"/>
  <link rel="stylesheet" type="text/css" href="{{ asset('DataTables/DataTables-1.11.4/css/dataTables.bootstrap4.css') }}"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha256-aAr2Zpq8MZ+YA/D6JtRD3xtrwpEz2IqOS+pWD/7XKIw=" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha256-OFRAJNoaD8L3Br5lglV7VyLRf0itmoBzWUoM+Sji4/8=" crossorigin="anonymous"></script>
@endsection
@section('contenido')
<div class="content-wrapper reporte">
  <h1 align="center">Tomar Cursos</h1>
  <div class="" style="margin-left:.5cm; margin-right:.5cm;">
    <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <th>#</th>
          <th>Curso</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Autor</th>
          <th>No. Clases</th>
      </thead>
      <tbody>
          @foreach ($cursos as $curso)
              <tr>
                <td>{{ $curso->id_curso }}</td>
                <td>{{ $curso->nombre_curso }}</td>
                <td>{{ $curso->descripcion }}</td>
                <td style="text-align:center;">{{ $curso->precio }}</td>
                <td style="text-align:center;">{{ $curso->name }}</td>
                <td style="text-align:center;">{{ $curso->clases }}</td>
              </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
@endsection
@stop
