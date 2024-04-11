<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="description">{{ __('Equipo') }}:</label>
            <input type="text" name="nombre_sede" id="nombre_sede" class="form-control" value="{{ old('nombre_sede', $sedes->nombre_sede ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="encargadosede">{{ __('Serial') }}:</label>
            <input type="text" name="encargadosede" id="encargadosede" class="form-control" value="{{ old('encargadosede', $sedes->encargadosede ?? '') }}" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">{{ __('Precio') }}:</label>
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{ old('ubicacion', $sedes->ubicacion ?? '') }}" required>
        </div>

       

        <!-- Agrega más campos según sea necesario -->
    </div>

    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
    </div>
</div>
