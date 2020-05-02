
@section('styles')
<!-- Datepicker Files --><!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker3.css')}}">
<link rel="stylesheet" href="{{asset('/vendor/datepicker/bootstrap-datepicker.standalone.css')}}">
@endsection

<div class="form-group">
    {{ Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder'=>'Título']) }}
</div>

<div class="form-group">
    {{ Form::text('subtitle', null, ['class' => 'form-control', 'id' => 'subtitle', 'placeholder'=>'Subtítulo']) }}
</div>

<div class="form-group">
    {{ Form::text('copete', null, ['class' => 'form-control', 'id' => 'copete', 'placeholder'=>'Copete']) }}
</div>

<div class="form-group row">
    <div class="col-8">
        {{ Form::label('img', 'Imagen de la noticia') }}
        {{ Form::file('img') }}
        
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

    
    
@endsection