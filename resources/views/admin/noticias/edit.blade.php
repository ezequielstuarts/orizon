@extends('admin.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Editar noticia.
                </div>
                <div class="card-body">
                    {!! Form::model($noticia, ['route' => ['noticias.update', $noticia->id], 'method' => 'PUT', 'files' => 'true']) !!}
                        @include('admin.noticias.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection