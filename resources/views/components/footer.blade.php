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

<div class="container-fluid  background-footer">
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4">
                <div class="d-flex justify-content-center">
                    <img class="img-logo-footer" src="{{ url('/images/unnamed.png') }}">
                </div>
                <div style="color: whitesmoke; margin-top: 5px;">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repellendus esse itaque sunt neque
                    voluptates odit adipisci recusandae! Assumenda, placeat iure dolorum esse tempore sed illo,
                    consequatur, dolorem repellendus quaerat reiciendis?
                </div>
            </div>
            <div class="col-xl-5 col-lg-5">
                <div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6">
                            <p style="color:whitesmoke; font-weight:bold;">HORARI</p>
                            <p style="color:whitesmoke">
                                Dilluns a divendres <br>7:00-22:30h<br>
                                Dissabte 8:00-21:30h<br>
                                Diumenge 8:00-14:00h<br>
                                Àrea de raqueta de 8 h a 20 h</p>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <p style="color: whitesmoke; font-weight:bold;">CONTACTO</p>
                            <p style="color:whitesmoke"> Telf. Secretaria del club: <br>
                                972 33 04 32 / 634944021<br>
                                Telf. Director del club: <br>
                                Jordi Sala 605820053</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-3">
                <div>
                    <p style="color: whitesmoke; font-weight:bold;">LOCALIZACION</p>
                    <div id="map-container-google-11" class="z-depth-1-half map-container-5" style="height: 100%; margin-top: 1px;">
                        <iframe src="https://maps.google.com/maps?q=Diseminado+Club+Tenis,+1B&t=&z=13&ie=UTF8&iwloc=&output=embed"
                            frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="d-flex justify-content-center">
            <p style="color:whitesmoke">© 2020 Copyright: TennisBlanes</p>
        </div>
    </div>

</div>
