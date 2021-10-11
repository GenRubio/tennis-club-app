
<hr class="featurette-divider">
<br>

<div class="d-none d-sm-block">
    <div class="row">
        @foreach ($actividades as $actividad)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
                @include('components.actividades.actividad-card', ['actividad' => $actividad])
            </div>
        @endforeach
    </div>
</div>

<div class="d-block d-md-none d-lg-none d-xl-none">
    @include('components.actividades.actividades-carusel', ['actividades' => $actividades])
</div>
