<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="descripcion">{{ __('descripcion') }}:</label>
            <input type="text" name="descripcion" id="descripcion" class="form-control" value="{{ old('descripcion', $asing->descripcion ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="estado">{{ __('estado') }}:</label>
            <input type="text" name="estado" id="estado" class="form-control" value="{{ old('estado', $asing->estado ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="fecha_de_prestamo">{{ __('fecha_de_prestamo') }}:</label>
            <input type="text" name="fecha_de_prestamo" id="fecha_de_prestamo" class="form-control" value="{{ old('fecha_de_prestamo', $asing->fecha_de_prestamo ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="stock">{{ __('fecha_de_entrega') }}:</label>
            <input type="text" name="fecha_de_entrega" id="fecha_de_entrega" class="form-control" value="{{ old('fecha_de_entrega', $asing->fecha_de_entrega ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="serial">{{ __('serial') }}:</label>
            <input type="text" name="serial" id="serial" class="form-control" value="{{ old('serial', $asing->serial ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nombre">{{ __('nombre') }}:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ old('nombre', $asing->nombre ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="nombre">{{ __('apellido') }}:</label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ old('apellido', $asing->apellido ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="cargo">{{ __('cargo') }}:</label>
            <input type="text" name="cargo" id="cargo" class="form-control" value="{{ old('cargo', $asing->cargo ?? '') }}" required>
        </div>

        <!-- Agrega más campos según sea necesario -->
    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>
