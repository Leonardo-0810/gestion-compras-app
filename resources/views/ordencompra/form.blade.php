<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="productos_id" class="form-label">{{ __('Productos Id') }}</label>
            <input type="text" name="productos_id" class="form-control @error('productos_id') is-invalid @enderror" value="{{ old('productos_id', $ordencompra?->productos_id) }}" id="productos_id" placeholder="Productos Id">
            {!! $errors->first('productos_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="proveedores_id" class="form-label">{{ __('Proveedores Id') }}</label>
            <input type="text" name="proveedores_id" class="form-control @error('proveedores_id') is-invalid @enderror" value="{{ old('proveedores_id', $ordencompra?->proveedores_id) }}" id="proveedores_id" placeholder="Proveedores Id">
            {!! $errors->first('proveedores_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $ordencompra?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_orden" class="form-label">{{ __('Fecha Orden') }}</label>
            <input type="text" name="fecha_orden" class="form-control @error('fecha_orden') is-invalid @enderror" value="{{ old('fecha_orden', $ordencompra?->fecha_orden) }}" id="fecha_orden" placeholder="Fecha Orden">
            {!! $errors->first('fecha_orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>