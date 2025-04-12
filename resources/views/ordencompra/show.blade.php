@extends('layouts.app')

@section('template_title')
    {{ $ordencompra->name ?? __('Show') . " " . __('Ordencompra') }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header" style="display: flex; justify-content: space-between; align-items: center;">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ordencompra</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary btn-sm" href="{{ route('ordencompras.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body bg-white">
                        
                                <div class="form-group mb-2 mb20">
                                    <strong>Productos Id:</strong>
                                    {{ $ordencompra->productos_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Proveedores Id:</strong>
                                    {{ $ordencompra->proveedores_id }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Cantidad:</strong>
                                    {{ $ordencompra->cantidad }}
                                </div>
                                <div class="form-group mb-2 mb20">
                                    <strong>Fecha Orden:</strong>
                                    {{ $ordencompra->fecha_orden }}
                                </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
