<div>
    <style>
        .numero-articulos {
            color: whitesmoke;
            font-size: 20px;
        }
        .carousel-item{
            position: relative  !important;
            width: 100%  !important;
            height: 170px !important;
            overflow: hidden !important;
        }
        .imagen-carusel{
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;
        }

    </style>

    <div class="container">
        <br>
        <div class="row">
            <div class="col-md-4">
                <h3 style="color:whitesmoke;text-decoration:#e3342f underline">CATEGORÍA SUPERIOR</h3>
                <br>
                <div class="dropdown">
                    <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenu2"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-bars"></i> CATEGORIAS
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
                <br>
                <h3 style="color:#e3342f;">{{ $tituloCategoria }}</h3>
            </div>
            <div class="col-md-8">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100 imagen-carusel" src="{{ url('/images/home/210304_mainteaser_head_gravity_es_1.jpg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 imagen-carusel" src="{{ url('/images/home/210301_mainteaser_fs_nike_indian_wells_es.jpg') }}" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100 imagen-carusel" src="{{ url('/images/home/210115_mainteaser_fs_adidas_australian_open_es_1.jpg') }}" alt="Second slide">
                        </div>
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
            </div>
        </div>


        <hr class="featurette-divider">
        <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <p class="numero-articulos">{{ $totalItems }} Articulos</p>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 text-right">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false" style="width: 228px !important">
                        Ordenar productos por:
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
                    <div class="product-grid4 border border-danger">
                        <div class="product-image4">
                            <a href="#" style="text-decoration: none; color:red">
                                <img class="pic-1" src="{{ $item->imagen ? url($item->imagen) : '' }}">
                                <img class="pic-2" src="{{ $item->imagen ? url($item->imagen) : '' }}">
                            </a>
                            <ul class="social">
                                {{--  <li><a href="#" data-tip="Quick View"><i class="fa fa-eye"></i></a></li>
                                <li><a href="#" data-tip="Add to Cart"><i class="fa fa-shopping-cart"></i></a></li>
                                --}}
                            </ul>
                        </div>
                        <div class="product-content" style="background-color: black; height: 130px !important;">
                            <h3 class="title"><p
                                    style="text-decoration: none; color:whitesmoke">{{ $item->name }}</p>
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
