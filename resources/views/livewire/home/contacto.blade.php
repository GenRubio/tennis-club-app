<div>
    <form wire:submit.prevent="send">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nombre" class="text-white">Nom *</label>
                @error('nombre') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                <input wire:model="nombre" type="text" class="form-control" id="nombre">
            </div>
            <div class="form-group col-md-6">
                <label for="telefono" class="text-white">Telèfon *</label>
                @error('telefono') <span class="error" style="color: red;">{{ $message }}</span> @enderror
                <input wire:model="telefono" type="text" class="form-control" id="telefono">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="text-white">E-mail *</label>
            @error('email') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <input wire:model="email" type="email" class="form-control" id="email">
        </div>
        <div class="form-group">
            <label for="contenido" class="text-white">Comentari *</label>
            @error('comentario') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <textarea  wire:model="comentario" class="form-control" id="contenido" rows="5"></textarea>
        </div>
        <div class="form-group">
            @error('validacion') <span class="error" style="color: red;">{{ $message }}</span> @enderror
            <div class="form-check">
                <input  wire:model="validacion" class="form-check-input" type="checkbox" id="gridCheck">
                <label class="form-check-label text-white" for="gridCheck">
                    He llegit i accepto la Política de protecció de dades
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-lg btn-danger">ENVIAR</button>
    </form>
</div>
