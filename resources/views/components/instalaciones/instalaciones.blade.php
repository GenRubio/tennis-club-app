
<hr class="featurette-divider" id="instalaciones">
<br>
@foreach ($instalaciones as $index => $instalacion)
@if ($index % 2 == 0)
<div class="row featurette">
    <div class="col-md-6">
        @if ($index == 0)
        <div class="h-100">
            <div class="h-50">
                <div class="d-flex justify-content-center">
                    <h2 class="featurette-heading color-red bold">{{ $instalacion->titulo }}</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="lead" style="color: whitesmoke">
                        <div style="height: 243px; overflow:hidden">
                            {!! $instalacion->descripcion !!}
                        </div>
                        <div class="d-flex justify-content-center" style="font-weight: bold;">
                            ......
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-center h-50">
                <a href="{{ route('instalacion', $instalacion->slug) }}" type="button" class="btn btn-danger mb-4">
                    <strong>
                        <i class="far fa-eye"></i> {{ translate('ver_instalacion') }}
                    </strong>
                </a>
            </div>
        </div>
        @else
        <div class="mt-4 h-100">
            <div class="h-50">
                <div class="d-flex justify-content-center">
                    <h2 class="featurette-heading color-red bold">{{ $instalacion->titulo }}</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="lead" style="color: whitesmoke">
                        <div class="lead" style="color: whitesmoke">
                            <div style="height: 243px; overflow:hidden">
                                {!! $instalacion->descripcion !!}
                            </div>
                            <div class="d-flex justify-content-center" style="font-weight: bold;">
                                ......
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-center h-50">
                <a href="{{ route('instalacion', $instalacion->slug) }}" type="button" class="btn btn-danger mb-5">
                    <strong>
                        <i class="far fa-eye"></i> {{ translate('ver_instalacion') }}
                    </strong>
                </a>
            </div>
        </div>
        @endif
    </div>
    <div class="col-md-6">
        <div class="container-img-instalacion">
            <img class="featurette-image img-fluid mx-auto img-instalacion headline" src="{{ $instalacion->image }}"
                alt="Generic placeholder image">
        </div>
    </div>
</div>
@else
<div class="row featurette">
    <div class="col-md-6 order-md-2">
        <div class="mt-4 h-100">
            <div class="h-50">
                <div class="d-flex justify-content-center">
                    <h2 class="featurette-heading color-red bold">{{ $instalacion->titulo }}</h2>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="lead" style="color: whitesmoke">
                        <div class="lead" style="color: whitesmoke">
                            <div style="height: 243px; overflow:hidden">
                                {!! $instalacion->descripcion !!}
                            </div>
                            <div class="d-flex justify-content-center" style="font-weight: bold;">
                                ......
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-end justify-content-center h-50">
                <a href="{{ route('instalacion', $instalacion->slug) }}" type="button" class="btn btn-danger mb-5">
                    <strong>
                        <i class="far fa-eye"></i> {{ translate('ver_instalacion') }}
                    </strong>
                </a>
            </div>
        </div>

    </div>
    <div class="col-md-6 order-md-1">
        <div class="container-img-instalacion">
            <img class="featurette-image img-fluid mx-auto img-instalacion headline" src="{{ $instalacion->image }}"
                alt="Generic placeholder image">
        </div>
    </div>
</div>
@endif
@endforeach