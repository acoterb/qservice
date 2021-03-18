@extends('admin.layouts.menu')

@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">Vendedores</li>
@endsection
@section('content')
    <div class="col-md-12 text-center">
      <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
        <div class="card-header">
            <h2> GESTION DE VENDEDORES</h2>
        </div>
        <div class="card-body">
          <h3>
            <a href="{{route('vendedores.create')}}" style="color:#037DB4;"><i class="far fa-plus-square"></i>&nbsp;&nbsp;Vendedor</a>
          </h3>
          <table id="personalInfo" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
              <thead>
                  <tr>
                      <th>Numero de empleado</th>
                      <th>Editar</th>
                      <th>Eliminar</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach($vendedores as $vendedor)
                  <tr>

                      <td>{{$vendedor->numero}}</td>
                      <td>
                        <a href="{{route('vendedores.edit',$vendedor->id)}}">
                          <button class="btn btn-primary">
                            <i class="fas fa-edit"></i>
                          </button>
                        </a>
                      </td>
                      <td>
                        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal" value="{{route('vendedores.destroy',$vendedor->id)}}"
                          onclick="$('#destroyconfirm').attr('action',this.value);">
                          <i class="fas fa-trash-alt"></i>
                        </button>
                      </td>
                  </tr>
                     @endforeach

              </tbody>
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
