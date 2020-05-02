@extends('admin.admin')
@section('content')


<div class="container">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Mensajes Sin Responder</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mensajes Respondidos</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <div class="container mt-2">
                <table class="table table-striped table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Recibido</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Localidad</th>
                        {{-- <th scope="col">Telefono</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Empresa</th>
                        <th scope="col">Mensaje</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($mensajesNoResp as $noresp)
                            <tr>
                                <th>{{$noresp->created_at}}</th>
                                <td> {{$noresp->nombre}} </td>
                                <td> {{$noresp->localidad}} - {{$noresp->pais}} - {{$noresp->provincia}} </td>
                                {{-- <td> {{$noresp->telefono}} </td>
                                <td> {{$noresp->email}} </td>
                                <td> {{$noresp->empresa}} </td>
                                <td> {{$noresp->mensaje}} </td> --}}
                            </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
            <ul>
                
            </ul>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
            <ul>
                @foreach ($mensajesResp as $resp)
                    <li> {{$resp->nombre}} </li>
                @endforeach
            </ul>
        </div>
      </div>
</div>


@endsection