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
  <h1 align="center">Mis Cursos</h1>
  <a href="javascript:void(0)" class="a" style="margin-left:.5cm; text-decoration:none;">
    <button value="Alta" title="Alta producto" class="btn btn-success" id="registrar" data-bs-toggle="modal" data-bs-target="#modalRep"><i class="fa fa-cloud-upload" aria-hidden="true"></i></button>
  </a>
  <br><br>
  <div class="" style="margin-left:.5cm; margin-right:.5cm;">
    <table id="reportTable" class="table table-striped table-bordered" style="width:100%">
      <thead>
          <th>#</th>
          <th>Curso</th>
          <th>Descripción</th>
          <th>Precio</th>
          <th>Autor</th>
          <th>No. Clases</th>
          <th>Acciones</th>
      </thead>
      <tbody>
          @foreach ($cursos as $curso)
            @if($curso->id == Auth::user()->id)
              <tr>
                <td>{{ $curso->id_curso }}</td>
                <td>{{ $curso->nombre_curso }}</td>
                <td>{{ $curso->descripcion }}</td>
                <td style="text-align:center;">{{ $curso->precio }}</td>
                <td style="text-align:center;">{{ $curso->name }}</td>
                <td style="text-align:center;">{{ $curso->clases }}</td>
                <td>
                  <form method="POST" action="{{route('cursos.destroy', $curso->id_curso)}}" style="text-decoration:none; height:0px;" class="confirmar">
                    @method('DELETE')
                    {{csrf_field()}}
                    <button class="btn btn-danger" style="margin-left:1.5cm;"><i class="fa fa-trash" aria-hidden="true"></i></button>
                  </form>
                  <a data-bs-toggle="modal" data-bs-target="#modalEdit{{$curso->id_curso}}" style="position: relative;">
                    <button class="btn btn-warning"><i class="fa fa-edit" aria-hidden="true"></i></button>
                  </a>
                  <!-- Editar -->
                  <form class="form" action="{{route('cursos.update', $curso->id_curso)}}" method="POST" id="EditInventario" enctype="multipart/form-data">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="modal fade" tabindex="-1" id="modalEdit{{$curso->id_curso}}">
                      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Editar curso</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <div class="form-group">
                                  <label>Nombre del curso:</label>
                                  <input type="text" class="form-control" name="nombre_curso" value="{{$curso->nombre_curso}}">
                                  <small id="emailHelp" class="form-text text-muted">Escribe el nombre del curso aquí.</small>
                                  <label>Descripción:</label>
                                  <input type="text" class="form-control" name="descripcion" value="{{$curso->descripcion}}">
                                  <small id="emailHelp" class="form-text text-muted">Escribe la descripción del contenido aquí.</small>
                                  <label>Precio:</label>
                                  <input type="text" class="form-control" name="precio" value="{{$curso->precio}}">
                                  <small id="emailHelp" class="form-text text-muted">Escribe el precion del curso aquí.</small>
                                  <label>Numero de clases:</label>
                                  <input type="text" class="form-control" name="clases" value="{{$curso->clases}}">
                                  <small id="emailHelp" class="form-text text-muted">Escribe la cantidad de clases aquí.</small>
                                </div>
                              </div>
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                                  <button type="submit"  class="btn btn-success" data-bs-dismiss="modal">Modificar</button>
                              </div>
                          </div>
                      </div>
                    </div>
                  </form>
                </td>
              </tr>
            @endif
        @endforeach
      </tbody>
    </table>
  </div>
  <!-- Registrar -->
  <form class="form" action="{{route('cursos.store')}}" method="POST" id="RegInventario">
    @csrf
    <div class="modal fade" tabindex="-1" id="modalRep">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Registrar curso</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="form-group">
                  <label>Nombre del curso:</label>
                  <input type="text" class="form-control" name="nombre_curso" value="{{old('nombre_curso')}}">
                  <small id="emailHelp" class="form-text text-muted">Escribe el nombre del curso aquí.</small>
                  <label>Descripción:</label>
                  <input type="text" class="form-control" name="descripcion" value="{{old('descripcion')}}">
                  <small id="emailHelp" class="form-text text-muted">Escribe la descripción del contenido aquí.</small>
                  <label>Precio:</label>
                  <input type="text" class="form-control" name="precio" value="{{old('precio')}}">
                  <small id="emailHelp" class="form-text text-muted">Escribe el precion del curso aquí.</small>
                  <label>Numero de clases:</label>
                  <input type="text" class="form-control" name="clases" value="{{old('clases')}}">
                  <small id="emailHelp" class="form-text text-muted">Escribe la cantidad de clases aquí.</small>
                  <input type="text" class="form-control" name="id" value="{{Auth::user()->id}}" hidden>
                </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Cerrar</button>
                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrar</button>
              </div>
          </div>
      </div>
    </div>
  </form>
</div>
@section('js')
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="{{asset('DataTables/datatables.js')}}"></script>
<script src="{{asset('DataTables/report.js')}}"></script>
@endsection
@stop
