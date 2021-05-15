<div>
    <form wire:submit.prevent="search">
        <p style="color:rgb(195, 195, 195) !important;" class="form-text text-muted">
            {{ translate('label_email') }}</p>
        <div class="form-group">
            @if (session()->has('error'))
                <span class="error" style="color: red;">{{ session('error') }}</span>
            @endif
            @error('email') <span class="error" style="color: #e3342f;font-weight: bold;">{{ $message }}</span>
            @enderror
            <input wire:model="email" type="email" name="email" id="email" class="form-control inputs-style"
                placeholder="{{ translate('email') }}" required>
        </div>
        <div class="d-flex justify-content-end">
            <a href="{{ route('login') }}" type="button"
                class="btn btn-outline-danger mr-2 mt-1"><strong>{{ translate('cancel') }}</strong></a>
            <button type="submit" class="btn btn-danger mr-2 mt-1"><strong>{{ translate('buscar') }}</strong></button>
        </div>
    </form>
</div>
<script>
    window.addEventListener('alert', event => {
        toastr.options.closeButton = true;
        toastr.options.timeOut = 20000;
        toastr.success(event.detail.message);
    })

</script>
