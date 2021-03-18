@extends('admin.layouts.menu')

@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">Clientes</li>
@endsection
@section('content')
    <div class="col-md-12 text-center">
      <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
        <div class="card-header">
            <h2> GESTION DE CLIENTES</h2>
        </div>
        <div class="card-body">
            @if(Auth::user()->rol != 4)
          <h3>
            <a href="{{route('cliente.create')}}" style="color:#037DB4;"><i class="far fa-plus-square"></i>&nbsp;&nbsp;Cliente</a>
          </h3>
          @endif
          <table id="personalInfo" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                  <tr>
                      <th>Nombre</th>
                      <th>Apellidos</th>
                      <th>#Poliza</th>
                      <th>Estado</th>
                      <th>Fecha</th>
                      <th>Vendedor</th>
                      <th>Placa</th>
                      <th>Editar</th>
                      <th>Imprimir Pagare HP</th>
                      <th>Imprimir Poliza HP y BROTHER</th>
                      <th>Imprimir Poliza EPSON-230</th>
                  </tr>
              </thead>
              
          </table>
        </div>
      </div>
    </div>


@endsection


@push('js')

  <script defer src="{{asset('public/js/jquery/jquery.dataTables.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.bootstrap4.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.fixedHeader.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.responsive.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/responsive.bootstrap.min.js')}}" ></script>

    <script type="text/javascript">

        $(document).ready(function() {
          $('#personalInfo').DataTable({
            "processing": true,
            "serverSide": true,
            responsive:true,
            ajax:{
                "url": "/paginado/cliente",
                "dataType": "json",
                "type": "get",
                "data": { _token: $('meta[name="csrf-token"]').attr('content')}
              },
              columns: [
                {
                  "data": "nombre"
                },
                {
                  "data": "apellidos"
                },
                {
                  "data": "#Poliza"
                },
                {
                  "data": "estado"
                },
                {
                  "data": "fecha"
                },
                {
                  "data": "vendedor"
                },
                {
                  "data": "placa"
                },
                {
                  "data": "editar"
                },
                // {
                //   "data": "eliminar"
                // },
                {
                  "data": "imprimir_Pagare_HP"
                },
                 {
                  "data": "poliza"
                },
                {
                  "data": "poliza-epson230"
                }
              ],
            "language": {
              "decimal": "",
              "emptyTable": "No hay información",
              "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
              "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
              "infoFiltered": "(Filtrado de _MAX_ total entradas)",
              "infoPostFix": "",
              "thousands": ",",
              "lengthMenu": "Mostrar _MENU_ Entradas",
              "loadingRecords": "Cargando...",
              "processing": "Procesando...",
              "search": "Buscar:",
              "zeroRecords": "Sin resultados encontrados",
              "paginate": {
                  "first": "Primero",
                  "last": "Ultimo",
                  "next": "Siguiente",
                  "previous": "Anterior"
              }
          },
        });
      } );

    </script>
@endpush
