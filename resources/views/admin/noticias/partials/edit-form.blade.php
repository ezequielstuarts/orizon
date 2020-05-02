<div class="form-group">
    <div class="input-group date">
        <input type="text" class="form-control datepicker" name="date" value="{{date('d-m-Y', strtotime($noticia->date))}} ">
        <div class="input-group-append">
            <span class="input-group-text"><i class="fas fa-calendar-alt"></i></span>
        </div>
    </div>
</div>

@include('admin.noticias.partials.form')