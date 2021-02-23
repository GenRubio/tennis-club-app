<div>
    <form>
        <div class="row">
            <div class="col-4">
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Nombre</label>
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="inputPassword4">Apellidos</label>
                    <input type="text" class="form-control" placeholder="Apellidos">
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Dirección</label>
                    <textarea class="form-control" rows="4"></textarea>
                </div>
                <div class="form-row" style="margin-bottom: 2px">
                    <div class="form-group col-md-12 col-lg-4" style="margin-bottom: 2px">
                        <label>Código postal</label>
                        <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-md-12 col-lg-8" style="margin-bottom: 2px">
                        <label>Localidad</label>
                        <input type="text" class="form-control" placeholder="Localidad">
                    </div>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="inputState">Provincia</label>
                    <select id="inputState" class="form-control">
                        <option selected></option>
                        <option>...</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="exampleFormControlInput1">Pais</label>
                    <input type="text" class="form-control" value="España">
                </div>
            </div>
            <div class="col-4 border-left border-right">
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Fecha de nacimiento</label>
                    <input type="date" class="form-control">
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>CIF/NIF</label>
                    <input type="text" class="form-control" placeholder="CIF/NIF">
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Email</label>
                    <input type="email" class="form-control" placeholder="Email de contacto">
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Telefono</label>
                    <input type="text" class="form-control" placeholder="Telefono">
                </div>
            </div>
            <div class="col-4">
                <div class="form-group" style="margin-bottom: 2px">
                    <label for="inputState">Condiciones de pago</label>
                    <select id="inputState" class="form-control">
                        <option selected>Pago en efectivo</option>
                        <option>Pago mensual bancario</option>
                    </select>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Nº de cuenta bancaria</label>
                    <input type="text" class="form-control" placeholder="Nº de cuenta bancaria" disabled>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Nº IBAN</label>
                    <input type="text" class="form-control" placeholder="Nº IBAN" disabled>
                </div>
                <div class="form-group" style="margin-bottom: 2px">
                    <label>Fecha de autorizacion del cargo</label>
                    <input type="date" class="form-control" disabled>
                </div>
            </div>
        </div>
        <hr>
        <div class="d-flex justify-content-start mt-3">
            <button class="btn btn-success">Registrar</button>
            <button class="btn btn-primary">Registrar y cobrar</button>
          
        </div>
    </form>
    <script>
        $(document).ready(function() {

        });

    </script>
</div>
