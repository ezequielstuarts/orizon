@extends('admin.admin')
@section('content')

@section('styles')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
@endsection


<div class="container">

</div>
<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mensajes desde el formulario de contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mensajes desde el formulario de ventas</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container mt-4">
                <mensaje-component></mensaje-component>
            </div>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <div class="container mt-4">
                Mensajes
            </div>
        </div>
    </div>
</div>


@section('scripts')
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://code.jquery.com/jquery-3.3.1.js"></script> --}}
    {{-- @include('admin.mensajes.includes.mensajes')
    @include('admin.mensajes.includes.mensajesVentas') --}}
@endsection
@endsection


