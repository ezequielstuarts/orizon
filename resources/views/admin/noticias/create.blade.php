@extends('admin.admin')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    Crear post.
                </div>
                <div class="card-body">
                    {!! Form::open(['route' => 'noticias.store', 'files' => 'true']) !!}
                        @include('admin.noticias.partials.form')
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection