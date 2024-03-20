@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administración de CLientes</h1>
@stop

@section('content')
    <p>Editar Información del Cliente</p>

    <div class="card">
        <div class="card-body">
            <form action="{{ route('cliente.update', $cliente) }}" method="POST">
                @csrf
                @method('PUT')
                {{-- With prepend slot --}}
                <div class="row">
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="apellido" label="APELLIDO" label-class="text-lightblue"
                            value="{{ $cliente->apellido }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="nombre" label="NOMBRE COMPLETO" label-class="text-lightblue"
                            value="{{ $cliente->nombre }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="dni" label="DNI" label-class="text-lightblue"
                            value="{{ $cliente->dni }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="email" name="email" label="EMAIL" label-class="text-lightblue"
                            value="{{ $cliente->email }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="telefono" label="TELÉFONO" label-class="text-lightblue"
                            value="{{ $cliente->telefono }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fa fa-phone text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-select name="estado" label="ESTADO CIVIL" label-class="text-lightblue"
                            igroup-size="lg">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-gradient-info">
                                    <i class="fas fa-file-alt"></i>
                                </div>
                            </x-slot>
                            <option value="{{ $cliente->estado }}">{{ $cliente->estado }}</option>
                            <option value="">-- Seleccionar --</option>
                            <option value="Casado">Casado</option>
                            <option value="Soltero">Soltero</option>
                            <option value="Viudo">Viudo</option>
                        </x-adminlte-select>
                    </div>
                    <div class="col-md-12">
                        {{-- With prepend slot, sm size, and label --}}
                        <x-adminlte-textarea name="direccion" label="DIRECCIÓN" rows=3 label-class="text-lightblue"
                            igroup-size="sm" placeholder="Ingresar su Dirección...">
                            <x-slot name="prependSlot">
                                <div class="input-group-text bg-dark">
                                    <i class="fas fa-lg fa-file-alt text-lightblue"></i>
                                </div>
                            </x-slot>
                            {{ $cliente->direccion }}
                        </x-adminlte-textarea>
                    </div>
                    {{-- With prepend slot, lg size, and label --}}
                </div>
                {{-- Button with themes and icons --}}
                <x-adminlte-button type="submit" label="Guardar" theme="primary" icon="fas fa-save" />
            </form>
        </div>
    </div>
@stop

@section('css')
    {{-- Add here extra stylesheets --}}
    {{-- <link rel="stylesheet" href="/css/admin_custom.css"> --}}
@stop

@section('js')
    @if (session('message'))
        <script>
            $(document).ready(function() {
                let mensaje = "{{ session('message') }}";
                Swal.fire({
                    title: "Resultado",
                    text: mensaje,
                    icon: "success",
                    confirm: false
                });
            })
        </script>
    @endif
@stop
