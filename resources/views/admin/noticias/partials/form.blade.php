
@section('styles')
<!-- Datepicker Files --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker.standalone.css')}}">
@endsection

@if(isset($noticia->date))
<div class="form-group">
    <div class="input-group date">
        <input type="text" class="form-control datepicker" name="date" value="{{date('d-m-Y', strtotime($noticia->date))}} ">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
</div>
@else
<div class="form-group">
    <div class="input-group date">
        <input type="text" class="form-control datepicker" name="date">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
</div>
@endif

<div class="form-group">
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder'=>'Título']) }}
</div>

<div class="form-group">
    {{ Form::text('subtitle', null, ['class' => 'form-control', 'id' => 'subtitle', 'placeholder'=>'Subtítulo']) }}
</div>

<div class="form-group">
    {{ Form::text('copete', null, ['class' => 'form-control', 'id' => 'copete', 'placeholder'=>'Copete']) }}
</div>

<div class="form-group">
    {{ Form::label('img', 'Imagen') }}
    {{ Form::file('img') }} 
    @isset($ruta)
        <span><a id="textVer" class="float-right" href="#">Ver imágen actual</a></span>
        <span><a id="textOcultar" class="float-right ocultar" href="#">Ocultar Imagen</a></span>
    @endisset
</div>

@isset($ruta)
<div class="verImagen ocultar">
    <img style="width:100%" class="img-responsive" src="{{$ruta}}/{{$noticia->img}}">
</div> 
@endisset

<div class="form-group">
    {{ Form::textarea('contenido', null, ['class' => 'form-control']) }}
</div>

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-success']) }}
    <a href=" {{ route('noticias.index') }} " class="btn btn-sm btn-danger float-right">Cancelar</a>
</div>




@section('scripts')
    {{-- CKEDITOR --}}
    <script src=" {{asset('vendor/ckeditor/ckeditor.js')}} "></script>
    <script>
        CKEDITOR.config.height = 400;
        CKEDITOR.config.width = 'auto';
        CKEDITOR.replace('contenido');
    </script>
    
    <!-- Datepicker Files -->
    <script src="{{asset('/vendor/datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Languaje -->
    <script src="{{asset('/vendor/datepicker/bootstrap-datepicker.es.min.js')}}"></script>
    <script>
        $('.input-group.date').datepicker({
            format: "yyyy-mm-dd",
            todayBtn: "linked",
            clearBtn: true,
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    </script>

    <script>
        var textVer = document.getElementById('textVer');
        var verImagen = document.querySelector('.verImagen');
        textVer.addEventListener('click', function(){
            verImagen.classList.toggle("ocultar");
            textVer.classList.toggle("ocultar");
            textOcultar.classList.toggle("ocultar");
        });
        textOcultar.addEventListener('click', function(){
            verImagen.classList.toggle("ocultar");
            textVer.classList.toggle("ocultar");
            textOcultar.classList.toggle("ocultar");
        });
    </script>
    
@endsection