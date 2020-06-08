@section('styles')
<!-- Datepicker Files --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker.standalone.css')}}">
@endsection

<div class="form-group">
    <label for="date"><b>Fecha</b></label>
    <div class="input-group date">
        <input type="text" class="form-control datepicker" id="date" name="date" value=" {{date('d-m-Y', strtotime($noticia->date))}} ">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
    <p class="text-danger pl-1 pt-1">{{ $errors->first('date') }}</p>
</div>

<div class="form-group">
    <label for="title"><b>Titulo</b></label>
    <input type="text" class="form-control" id="title" name="title" value="{{$noticia->title}}">
    <p class="text-danger pl-1 pt-1">{{ $errors->first('title') }}</p>
</div>

<div class="form-group">
    <label for="subtitle"><b>Subtitulo</b></label>
    <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{$noticia->subtitle}}">
    <p class="text-danger pl-1 pt-1">{{ $errors->first('subtitle') }}</p>
</div>

<div class="form-group">
    <label for="copete"><b>Copete</b></label>
    <input type="text" class="form-control" id="copete" name="copete" value="{{$noticia->copete}}">
    <p class="text-danger pl-1 pt-1">{{ $errors->first('copete') }}</p>
</div>

<div class="form-group row">

    <div class="col-8">
        <label for="validatedCustom"><b>Imágen</b></label>
            <div class="custom-file">
                <input type="file" name="img" class="custom-file-input" id="validatedCustom">
                <label id="nombre_img" class="custom-file-label" for="validatedCustom"> {{$noticia->img}}"</label>
                <p class="text-danger pl-1 pt-1">{{ $errors->first('img') }}</p>
            </div>
        </div>
    <div class="col-4">
        @isset($ruta)
            <span id="btn-mostrar" class="float-right">Ver imágen actual</span>
            <span id="btn-ocultar" class="float-right">Ocultar Imagen</span>
        @endisset
    </div>
</div>

@isset($ruta)
<div class="verImagen ocultar">
    <img id="imag-noticia" style="width:100%" class="img-responsive" src="{{$ruta}}/{{$noticia->img}}">
</div>
@endisset

<div class="form-group">
    <label for="contenido"><b>Contenido</b></label>
    <textarea id="contenido" class="form-control" name="contenido">{{$noticia->contenido}}</textarea>
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
            format: "dd-mm-yyyy",
            todayBtn: "linked",
            clearBtn: true,
            language: "es",
            autoclose: true,
            todayHighlight: true
        });
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        $(function() {
            $(".verImagen").hide();
            $("#btn-ocultar").hide();
            $("#btn-mostrar").on("click", function() {
                $(".verImagen").slideToggle();
                $("#btn-mostrar").hide();
                $("#btn-ocultar").show();
            });
            $("#btn-ocultar").on("click", function() {
                $(".verImagen").slideToggle();
                $("#btn-mostrar").show();
                $("#btn-ocultar").hide();
            });
         });
    </script>
    <script src="{{asset('js/boton_archivo.js')}}"></script>
@endsection