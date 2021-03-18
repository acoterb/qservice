@extends('admin.layouts.menu')

@section('breadcrumb')
  <li class="breadcrumb-item active" aria-current="page">choques</li>
@endsection
@section('content')
    <div class="col-md-12 text-center">
      <div class="card" style="box-shadow: 0 5px 5px 0 rgba(0,0,0,0.5);">
        <div class="card-header">
            <h2> GESTION DE CHOQUES</h2>
        </div>
              <form method="POST" action="{{ route('choquesBusqueda') }}" aria-label="{{ __('Clientes') }}" enctype="multipart/form-data">
       <div class="card-body">
  <div class="row">

    @csrf
     
      <div class="col-md-4">

          <input type="text" class="form-control" name="poliza" id="poliza" placeholder="Numero de poliza"> 


      </div>
           <div class="col-md-4">

         <button type="submit" class="btn btn-success" >Buscar</button>


      </div>

    </div>

    </div>
    </form>

@endsection


@push('js')

  <script defer src="{{asset('public/js/jquery/jquery.dataTables.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.bootstrap4.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.fixedHeader.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/dataTables.responsive.min.js')}}" ></script>
  <script defer src="{{asset('public/js/jquery/responsive.bootstrap.min.js')}}" ></script>

@endpush
