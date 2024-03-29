<style>
    .card-div {
        position: relative;
        width: 100%;
        max-width: none;
        height: 280px;
        ;
        overflow: hidden;
    }

    .card-img-top {
        height: 100%;
        left: 50%;
        position: absolute;
        top: 50%;
        transform: translate(-50%, -50%);
        transition: 0.3s;
        max-width: none;
        width: auto;
    }

    .card-body-style {
        height: 114px;
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        background-color: black;
    }

    .text-actividad {
        color: #e3342f;
        font-size: 18px;
        font-weight: bold;
        transition: all 1s ease;
    }

    .text-actividad:hover {
        text-decoration: none;
        color: whitesmoke;

    }

    .card-effect {
        border: 0;
        border-radius: 5.5px;
        box-shadow: 0 10px 30px 0 rgba(255, 0, 0, 0.43);
        overflow: hidden;
    }

    .ver-mas-button {
        color: #e3342f;
        font-size: 18px;
        -webkit-transition: all .3s linear;
        -o-transition: all .3s linear;
        transition: all .3s linear
    }

    .ver-mas-button:hover {
        color: white !important;
        font-weight: bold !important;
    }


    .card-title-color {
        background-color: #000000d9;
    }

</style>
<hr class="featurette-divider">
<br>
<div class="row">
    @foreach ($actividades as $actividad)
        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
            <a href="{{ route('actividades', $actividad->slug) }}" class="text-actividad">
                <div class="card ronded card-effect border-0">
                    <div class="card-div">
                        <img class="card-img-top" src="{{ url($actividad->imagen ? $actividad->imagen : '') }}"
                            alt="Card image cap">
                    </div>
                    <div class="card-body border-top card-body-style">
                        {{ $actividad->titulo }}
                    </div>
                    <div class="card-footer border-0 card-title-color">
                        @php
                            setlocale(LC_TIME, 'French');
                        @endphp
                        <small class="text-muted">{{ translate('publicado') }}:
                            {{ $actividad->created_at->translatedFormat('jS F Y') }}</small>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>
