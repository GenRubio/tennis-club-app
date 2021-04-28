@extends('layouts.app')

@section('personal-style')
    <style>
        .left-section {
            min-height: 400px;
            background-color: black;
            border: 1px solid #5d1d1d;
        }

        .right-section {
            min-height: 400px;
            background-color: black;
            border: 1px solid #5d1d1d;
        }

        #avatar {
            height: 100%;
            left: 50%;
            position: absolute;
            top: 50%;
            transform: translate(-50%, -50%);
            transition: 0.3s;
            max-width: none;
            width: auto;

        }

        .vatar-div-1 {
            height: 130px;
            width: 130px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        .vatar-div-2 {
            height: 100px;
            width: 100px;
            position: relative;
            overflow: hidden;
            border-radius: 50%;
        }

        #avatarBig {
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
@endsection
@section('content')
    <style>
        .nav-pills .nav-link-1.active,
        .nav-pills .show>.nav-link-1 {
            background-color: black;
            font-size: 18px;
            font-weight: bold;
            color: white;
            padding: 5px;
        }

        .nav-link-1 {
            background-color: black;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease-in-out 0s;
            padding: 5px;
            color: #e3342f;
        }

        .nav-link-1:hover {
            border-left: 5px solid #e3342f;
            text-decoration: none;
            color: white;
        }

        .nav-pills .nav-link-1 {
            border-radius: 0;
        }

        .tab-height {
            min-height: 605px;
        }

        .name-user {
            color: whitesmoke !important;
            font-weight: bold;
            margin-top: 11px;
        }

    </style>
    <div class="container">
        <div class="row">
            <div class="col-md-3 d-none d-lg-block">
                <div class="left-section p-4 rounded">
                    <div class="d-flex justify-content-center">
                        <div class="vatar-div-2">
                            <img id="avatar" class="my-avatar-1"
                                src="{{ auth()->user()->cliente()->image
    ? url(
        auth()->user()->cliente()->image,
    )
    : url('/images/default.jpg') }}">
                        </div>
                    </div>
                    <div class="d-flex justify-content-center">
                        <h5 class="name-user">{{ auth()->user()->user_name }}</h5>
                    </div>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="nav-link-1 active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                            role="tab" aria-controls="v-pills-profile" aria-selected="true">Mi perfil</a>
                        <a class="nav-link-1" id="v-pills-family-tab" data-toggle="pill" href="#v-pills-family" role="tab"
                            aria-controls="v-pills-family" aria-selected="false">Familiares</a>
                        <a class="nav-link-1" id="v-pills-image-tab" data-toggle="pill" href="#v-pills-image" role="tab"
                            aria-controls="v-pills-image" aria-selected="false">Imagen</a>
                        <a class="nav-link-1" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                            role="tab" aria-controls="v-pills-settings" aria-selected="false">Contraseña</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12">
                <div class="right-section p-5 rounded">
                    <div class="d-none d-xl-none d-lg-none d-md-block d-block">
                        <div class="d-flex justify-content-center">
                            <div class="vatar-div-2">
                                <img id="avatar" class="my-avatar-2"
                                    src="{{ auth()->user()->cliente()->image
    ? url(
        auth()->user()->cliente()->image,
    )
    : url('/images/default.jpg') }}">
                            </div>
                        </div>
                        <div class="d-flex justify-content-center">
                            <h5 class="name-user">{{ auth()->user()->user_name }}</h5>
                        </div>
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link-1 active" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile"
                                role="tab" aria-controls="v-pills-profile" aria-selected="true">Mi perfil</a>
                            <a class="nav-link-1" id="v-pills-family-tab" data-toggle="pill" href="#v-pills-family"
                                role="tab" aria-controls="v-pills-family" aria-selected="false">Familiares</a>
                            <a class="nav-link-1" id="v-pills-image-tab" data-toggle="pill" href="#v-pills-image" role="tab"
                                aria-controls="v-pills-image" aria-selected="false">Imagen</a>
                            <a class="nav-link-1" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings"
                                role="tab" aria-controls="v-pills-settings" aria-selected="false">Contraseña</a>
                        </div>
                        <hr style="border: 1px solid #9c9a9a;">
                    </div>
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active tab-height" id="v-pills-profile" role="tabpanel"
                            aria-labelledby="v-pills-profile-tab">
                            <h2 style="font-weight: bold; color:#e3342f;">Mi perfil</h2>
                            <hr style="border: 1px solid #9c9a9a;">
                            <h4 style="font-weight: bold; color:#e3342f;">Datos personales</h4>
                            <br>
                            <livewire:auth.profile-form :user="auth()->user()" />
                        </div>
                        <div class="tab-pane fade tab-height" id="v-pills-family" role="tabpanel"
                            aria-labelledby="v-pills-family-tab">
                            ...
                        </div>
                        <div class="tab-pane fade tab-height" id="v-pills-image" role="tabpanel"
                            aria-labelledby="v-pills-image-tab">
                            <div>
                                <h2 style="font-weight: bold; color:#e3342f;">Cambiar foto perfil</h2>
                                <hr style="border: 1px solid #9c9a9a;">
                                <br>
                                <div class="d-flex justify-content-center">
                                    <div class="vatar-div-1">
                                        <img id="avatarBig"
                                            src="{{ auth()->user()->cliente()->image
    ? url(
        auth()->user()->cliente()->image,
    )
    : url('/images/default.jpg') }}">
                                    </div>
                                </div>
                                <form id="changeAvatar">
                                    <label style="color: white">Sube tu imagen:</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="filename">
                                        <label class="custom-file-label" for="customFile">Escoge imagen</label>
                                    </div>
                                    <br> <br>
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-danger"><strong>Guardar
                                                cambios</strong></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="tab-pane fade tab-height" id="v-pills-settings" role="tabpanel"
                            aria-labelledby="v-pills-settings-tab">
                            <h2 style="font-weight: bold; color:#e3342f;">Actualizar contraseña</h2>
                            <hr style="border: 1px solid #9c9a9a;">
                            <br>
                            <livewire:auth.profile-password-form :user="auth()->user()" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('personal-script')
    <script>
        $(document).ready(function() {
            $("#customFile").change(function() {
                if (this.files && this.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#avatarBig').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(this.files[0]);
                }
            });

            $('#changeAvatar').on('submit', function(event) {
                event.preventDefault();

                let data = new FormData();
                data.append('image', $('#customFile')[0].files[0]);
                data.append('_token', "{{ csrf_token() }}");

                $.ajax({
                    url: "{{ route('update.avatar') }}",
                    method: "POST",
                    data: data,
                    dataType: 'json',
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        $('.my-avatar-1').attr('src', data.avatar);
                        $('.my-avatar-2').attr('src', data.avatar);
                        $('#headerAvatar').attr('src', data.avatar);
                        toastr.options.closeButton = true;
                        toastr.success('La imagen se ha actualizado correctamente.');
                    },
                    error: function(error) {

                    }
                })
            })
        })

    </script>

@endsection
