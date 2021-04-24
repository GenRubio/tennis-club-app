<div>
    <style>
        .numero-articulos {
            color: whitesmoke;
            font-size: 20px;
        }

        .carousel-item {
            position: relative !important;
            width: 100% !important;
            height: 170px !important;
            overflow: hidden !important;
        }

        .imagen-carusel {
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;
        }

        .card-border-personal {
            box-shadow: 0 2px 18px 0 rgb(255 0 0 / 43%) !important;
        }

        .wrap-img-cover {
            position: relative;
            height: 270px !important;
            overflow: hidden;
        }

        .img-cover {
            height: 100% !important;
            left: 50% !important;
            position: absolute !important;
            top: 50% !important;
            transform: translate(-50%, -50%) !important;
            transition: 0.3s !important;
            max-width: none !important;
            width: auto !important;
        }

        .color-red {
            color: #e3342f;
        }

    </style>

    <div class="container">
        <h1 class="color-red" style="font-weight: bold;">
            Nuestro catalago
        </h1>
        <hr class="featurette-divider">
        <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                @foreach ($caruselImages as $key => $item)
                    @if ($key == 0)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="active">
                        </li>
                    @else
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}"></li>
                    @endif
                @endforeach
            </ol>
            <div class="carousel-inner rounded">
                @foreach ($caruselImages as $key => $item)
                    @if ($key + 1 == 1)
                        <div class="carousel-item active wrap-img-cover rounded shadow ">
                            <img class="img-cover" src="{{ url($item->image) }}" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    @else
                        <div class="carousel-item wrap-img-cover rounded">
                            <img class="img-cover" src="{{ url($item->image) }}" alt="">
                            <div class="carousel-caption d-none d-md-block">
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <br> <br>
        <div class="dropdown mr-4">
            <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <strong><i class="fas fa-bars"></i> CATEGORIAS</strong>
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <button wire:click="getCategory('all')" class="dropdown-item" type="button">Todas</button>
                @foreach ($categorias as $item)
                    <button wire:click="getCategory('{{ $item->id }}')"
                        class="dropdown-item">{{ $item->titulo }}</button>
                @endforeach
            </div>
        </div>
        <br>
        <h3 style="font-weight:bold; color:whitesmoke;">Categoria: <span style="color:#e3342f; ">
                {{ $tituloCategoria }}</span></h3>
        <hr class="featurette-divider">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <p class="numero-articulos">{{ $totalItems }} Articulos</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="width: 228px !important">
                        <strong>Ordenar productos por:</strong>
                    </button>
                    <div class="dropdown-menu dropdown-menu">
                        <button wire:click="orderBy('ASC')" class="dropdown-item" type="button">Precio - el más bajo
                            primero</button>
                        <button wire:click="orderBy('DESC')" class="dropdown-item" type="button">Precio - el más alto
                            primero</button>
                        <button wire:click="orderBy('NEW')" class="dropdown-item" type="button">Lo nuevo
                            primero</button>
                    </div>
                </div>

            </div>
        </div>
        <br>
        <div class="row">
            @foreach ($articulos as $item)
                <div class="col-12 col-xl-3 col-lg-4 col-md-6 col-sm-12 mb-5">
                    <div class="product-grid4 border border-danger card-border-personal">
                        <div class="product-image4">
                            <a href="#" style="text-decoration: none; color:red">
                                <img class="pic-1" src="{{ $item->imagen ? url($item->imagen) : '' }}">
                                <img class="pic-2" src="{{ $item->imagen ? url($item->imagen) : '' }}">
                            </a>
                        </div>
                        <div class="product-content" style="background-color: black; height: 130px !important;">
                            <h3 class="title">
                                <p style="text-decoration: none; color:whitesmoke">{{ $item->name }}</p>
                            </h3>
                            <div class="h-100">
                                <div class="price" style="color:#e3342f;">
                                    €{{ $item->precio }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-end">
            {{ $articulos->links('livewire.livewire-pagination') }}
        </div>

    </div>
</div>
