@extends('layouts.dashboard')

@section('content')
    <br><br>
    <h3>Mi perfil</h3>
    <hr>
    <div class="row">
        <div class="col-xl-3 col-lg-3 col-sm-4">
            <div class="rounded border" style="height: 201px; width: 184px;">
            </div>
            <form class="mb-2">
                <div class="form-group">
                    <label for="exampleFormControlFile1">Cambiar imagen</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
                <button class="btn btn-primary">Guardar cambios</button>
            </form>
        </div>
        <div class="col-xl-9 col-lg-9 col-sm-8">
            <h5>Nombre: </h5>
            <h5>Apellidos: </h5>
            <h5>Fecha nacimiento: </h5>
            <h5>Email: </h5>
            <br>
            <h5>Registro: </h5>
            <h5>Ultima conexion: </h5>
        </div>
    </div>
    <br>
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
                aria-controls="nav-home" aria-selected="true">Solicitar cambio de datos</a>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <livewire:solicitud-cambio-datos/>
        </div>
    </div>
@endsection
