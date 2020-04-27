<div class="form-group">
    {{-- {{ Form::label('name', 'Fecha') }} --}}
    {{ Form::date('date', now(), ['class' => 'form-control', 'id' => 'date']) }}
</div>

<div class="form-group">
    
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder'=>'Título']) }}
</div>

<div class="form-group">
    {{-- {{ Form::label('name', 'Subtitulo') }} --}}
    {{ Form::text('subtitle', null, ['class' => 'form-control', 'id' => 'subtitle', 'placeholder'=>'Subtítulo']) }}
</div>

<div class="form-group">
    {{-- {{ Form::label('name', 'Copete') }} --}}
    {{ Form::text('copete', null, ['class' => 'form-control', 'id' => 'copete', 'placeholder'=>'Copete']) }}
</div>

<div class="form-group">
    {{ Form::label('img', 'Imagen') }}
    {{ Form::file('img') }} 
</div>

<div class="form-group">
    {{-- {{ Form::label('contenido', 'Contenido') }} --}}
    {{ Form::textarea('contenido', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
    <a href=" {{route('noticias.index')}} " class="btn btn-sm btn-danger float-right">Cancelar</a>
</div>



@section('scripts')
    <script src=" {{asset('vendor/ckeditor/ckeditor.js')}} "></script>
    <script>
        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.replace('contenido');
    </script>
@endsection