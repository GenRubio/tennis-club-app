<div>
    <style>
        label {
            color: white;
        }

    </style>
    <form wire:submit.prevent="save">
        <div class="row">
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('actual_password') }}</label>
                        <input wire:model="passwordOld" type="password" class="form-control" id="" placeholder="{{ translate('actual_password') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('new_password') }}</label>
                        <input wire:model="password" type="password" class="form-control" id="" placeholder="{{ translate('new_password') }}">
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div>
                    <div class="form-group">
                        <label for="">{{ translate('repeat_new_password') }}</label>
                        <input wire:model="passwordRepeat" type="password" class="form-control" id="" placeholder="{{ translate('repeat_new_password') }}">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-danger"><strong>{{ translate('guardar_cambios') }}</strong></button>
        </div>
    </form>
</div>
<script>
    window.addEventListener('alert', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>