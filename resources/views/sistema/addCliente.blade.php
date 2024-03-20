@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Administración de CLientes</h1>
@stop

@section('content')
    <p>Ingrese la Información del Cliente</p>

    <div class="card">
        @php
            if (session()) {
                if (session('message') == 'ok') {
                    echo '<x-adminlte-alert class="bg-teal text-uppercase" icon="fa fa-lg fa-thumbs-up" title="Done" dismissable>
                Registro exitoso..!!!
            </x-adminlte-alert>';
                }
            }
        @endphp
        <div class="card-body">
            <form action="{{ route('cliente.store') }}" method="POST">
                @csrf
                {{-- With prepend slot --}}
                <div class="row">
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="apellido" label="APELLIDO" placeholder="Ingrese sus apellidos"
                            label-class="text-lightblue" value="{{ old('apellido') }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="nombre" label="NOMBRE COMPLETO"
                            placeholder="Ingrese su nombre" label-class="text-lightblue" value="{{ old('nombre') }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="dni" label="DNI" placeholder="Ingrese sus DNI"
                            label-class="text-lightblue" value="{{ old('dni') }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fas fa-user text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="email" name="email" label="EMAIL" placeholder="Ej: email@gmail.com"
                            label-class="text-lightblue" value="{{ old('email') }}">
                            <x-slot name="prependSlot">
                                <div class="input-group-text">
                                    <i class="fa fa-envelope text-lightblue"></i>
                                </div>
                            </x-slot>
                        </x-adminlte-input>
                    </div>
                    <div class="col-md-4">
                        <x-adminlte-input type="text" name="telefono" label="TELÉFONO" placeholder="Ej: +591 78827458"
                            label-class="text-lightblue" value="{{ old('telefono') }}">
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
                            {{ old('direccion') }}
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
    
@stop
