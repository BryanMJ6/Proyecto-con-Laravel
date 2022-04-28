@extends('layouts.app')

@section('template_title')
Donante
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('Donante') }}
                        </span>

                        <div class="float-right">
                            <a href="{{ route('donantes.create') }}" class="btn btn-dark btn-sm float-right"
                                data-placement="left">
                                {{ __('Crear nueva informacion') }}
                            </a>
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif

                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead class="thead">
                                <tr>
                                    <th>No</th>

                                    <th>Nombre</th>
                                    <th>Apellido</th>
                                    <th>Direccion</th>
                                    <th>Telefono</th>
                                    <th>Donante</th>
                                    <th>Sexo</th>
                                    <th>Tipo Sangre</th>
                                    <th>Dui</th>
                                    <th>Padecimiento</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($donantes as $donante)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $donante->nombre }}</td>
                                    <td>{{ $donante->apellido }}</td>
                                    <td>{{ $donante->direccion }}</td>
                                    <td>{{ $donante->telefono }}</td>
                                    <td>{{ $donante->donante }}</td>
                                    <td>{{ $donante->sexo }}</td>
                                    <td>{{ $donante->tipo_sangre }}</td>
                                    <td>{{ $donante->dui }}</td>
                                    <td>{{ $donante->padecimiento }}</td>

                                    <td>
                                        <form action="{{ route('donantes.destroy',$donante->id) }}" method="POST">
                                            <a class="btn btn-light btn-sm"
                                                href="{{ route('donantes.show',$donante->id) }}"><i
                                                    class="fa fa-fw fa-eye"></i> Ver informacion</a>
                                            <a class="btn btn-danger btn-sm "
                                                href="{{ route('donantes.edit',$donante->id) }}"><i
                                                    class="fa fa-fw fa-edit"></i> Editar Informacion</a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-dark btn-sm"><i
                                                    class="fa fa-fw fa-trash"></i> Borrar Informacion</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $donantes->links() !!}
        </div>
    </div>
</div>
@endsection