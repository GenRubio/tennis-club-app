@extends('layouts.app')

@section('content')
    <style>
        .separador-blanco {
            background-color: white;
        }

    </style>
    <br> <br> <br> <br>
    <div class="container">
        <h3 style="color: white">CONTACTO</h3>
        <hr class="featurette-divider">
        <br>
        <div class="row">
            <div class="col-md-4">
                <h3 style="color: white">FES-TE SOCI</h3>
                <div style="color: white">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam omnis dolor, voluptatum quod, amet
                    itaque enim ducimus a est unde dolorem, incidunt harum reprehenderit repellat fuga? Natus harum vitae
                    sit.
                    <br>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fuga, culpa! Saepe labore recusandae
                    distinctio aperiam sed eligendi eius laboriosam asperiores mollitia doloribus voluptatibus, provident
                    aliquam accusamus quisquam repellendus enim vitae?
                </div>
                <hr class="separador-blanco">
                <div class="card" style="color: white !important">
                    <div class="card-body" style="background-color: #36393f !important">
                        <h5 class="card-title">Piscina de Lloret</h5>
                        <p class="card-text">Av. del Rieral, 22 17310 <br>
                            Lloret de Mar Girona<br>
                            T: (+34) 972 364 384 - 679 519 979<br>
                            M: piscina@lloret.cat</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-2 col-lg-2 col-md-1"></div>
            <div class="col-md-6">
                <div>
                    <livewire:home.contacto/>
                </div>
            </div>
        </div>
        <br><br><br><br>
    </div>
    @include('components.carusel-footer')
    @include('components.footer')
@endsection
