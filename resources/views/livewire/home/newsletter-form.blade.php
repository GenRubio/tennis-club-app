<div>
    <form wire:submit.prevent="create">
        <div class="row">
            <div class="col-md-7 p-xl-0 p-lg-0">
                <div>
                    @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                    <input wire:model="email" type="email" class="form-control" id="inputPassword2"
                        placeholder="{{ translate('email') }}" required>
                </div>
                <div class="mt-4 mb-3" style="color: white;">
                    @error('terminos') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                    <div class="form-check">
                        <input  wire:model="terminos" type="checkbox" class="form-check-input" id="exampleCheck1" required>
                        <label class="form-check-label" for="exampleCheck1"> 
                            {{ translate('accept_terms') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <button type="submit" class="btn btn-danger btn-block mb-4">
                    <strong>{{ translate('suscribirme') }} <i class="fas fa-arrow-circle-right"></i></strong>
                </button>
            </div>
        </div>
    </form>
</div>
<script>
    window.addEventListener('alertNewsletter', event => {
        toastr.options.closeButton = true;
        toastr.success(event.detail.message);
    })

</script>