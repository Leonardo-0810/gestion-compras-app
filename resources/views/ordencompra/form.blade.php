<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="productos_id" class="form-label">{{ __('Productos Id') }}</label>
            <select name="productos_id" id="productos_id" class="form-control @error('productos_id') is-invalid @enderror" required>    
                <option value="">Seleccione un producto</option>
                @foreach ($productos as $producto)
                    <option value="{{ $producto->id }}" {{ old('productos_id', $ordencompra->productos_id) == $producto->id ? 'selected' : '' }}>
                        {{ $producto->nombre }}
                    </option>
                @endforeach
             </select>
          
        <div class="form-group mb-2 mb20">
            <label for="proveedores_id" class="form-label">{{ __('Proveedores Id') }}</label>
            <select name="proveedores_id" id="proveedores_id" class="form-control @error('proveedores_id') is-invalid @enderror" required>    
                <option value="">Seleccione un proveedor</option>
                @foreach ($proveedores as $proveedore)
                    <option value="{{ $proveedore->id }}" {{ old('proveedores_id', $ordencompra->proveedores_id) == $proveedore->id ? 'selected' : '' }}>
                        {{ $proveedore->nombre }}
                    </option>
                @endforeach
             </select>
           
        <div class="form-group mb-2 mb20">
            <label for="cantidad" class="form-label">{{ __('Cantidad') }}</label>
            <input type="text" name="cantidad" class="form-control @error('cantidad') is-invalid @enderror" value="{{ old('cantidad', $ordencompra?->cantidad) }}" id="cantidad" placeholder="Cantidad">
            {!! $errors->first('cantidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha_orden" class="form-label">{{ __('Fecha Orden') }}</label>
            <input type="date" name="fecha_orden" class="form-control @error('fecha_orden') is-invalid @enderror" value="{{ old('fecha_orden', $ordencompra?->fecha_orden) }}" id="fecha_orden" placeholder="Fecha Orden">
            {!! $errors->first('fecha_orden', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>