<style>
    .map-container-5 {
        overflow: hidden;
        padding-bottom: 56.25%;
        position: relative;
        height: 0;
    }

    .map-container-5 iframe {
        left: 0;
        top: 0;
        height: 100%;
        width: 100%;
        position: absolute;
    }
    .background-footer{
        background-color: black;
    }
    .img-logo-footer{
        width: 50%; height: auto;
        max-width: 200px;
    }

</style>

<br><br><br><br><br><br>
<div class="container-fluid  background-footer">
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="d-flex justify-content-center">
                    <img class="img-logo-footer" src="{{ url('/images/unnamed.png') }}">
                </div>
                <div style="color: whitesmoke; margin-top: 5px;">
                   {!! translate('web_descripcion') !!}
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <p style="color:whitesmoke; font-weight:bold;">{{ translate('horario') }}</p>
                            <div style="color:whitesmoke">
                                {!! translate('horario_descripcion') !!}
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <p style="color: whitesmoke; font-weight:bold;">{{ strtoupper(translate('contacto')) }}</p>
                            <div style="color:whitesmoke"> 
                                {!! translate('contacto_descripcion') !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div>
                    <p style="color: whitesmoke; font-weight:bold;">{{ translate('local') }}</p>
                    <div id="map-container-google-11" class="z-depth-1-half map-container-5" style="height: 100%; margin-top: 1px;">
                        <iframe src="https://maps.google.com/maps?q=Diseminado+Club+Tenis,+1B&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="d-flex justify-content-center">
            <p style="color:whitesmoke">{{ translate('copyright') }}</p>
        </div>
    </div>

</div>
