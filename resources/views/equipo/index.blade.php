@extends('layouts.app')

@section('template_title')
Equipo
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    <div style="display: flex; justify-content: space-between; align-items: center;">

                        <span id="card_title">
                            {{ __('¿Quienes  Somos?') }}
                        </span>

                        <div class="float-right">
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

                                    <th>Informacion</th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($equipos as $equipo)
                                <tr>
                                    <td>{{ ++$i }}</td>

                                    <td>{{ $equipo->Informacion }}</td>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            {!! $equipos->links() !!}
        </div>
    </div>
</div>
@endsection