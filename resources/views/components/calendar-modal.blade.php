<div>
    <div style="font-size: 20px;
    font-weight: bold;
    color: black;">
        {{ $fecha->actividad->titulo }}
    </div>
    <br>
    <br>
    <div class="d-flex justify-content-center">
        <a href="{{ route('actividades', $fecha->actividad->slug) }}" style="font-weight: bold;" class="btn btn-danger">
            <i class="fas fa-location-arrow"></i> {{ translate('ir_actividad') }}
        </a>
    </div>
    <br>
    <br>
</div>
