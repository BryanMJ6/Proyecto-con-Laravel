@extends('layouts.app')

@section('template_title')
Termino
@endsection

@section('content')

@foreach ($terminos as $termino)
<tr>
    <td>{{ ++$i }}</td>

    <td>{{ $termino->Informacion }}</td>

    <td>
        <form action="{{ route('terminos.destroy',$termino->id) }}" method="POST">

            @csrf

    </td>
</tr>
@endforeach
</tbody>
</div>
{!! $terminos->links() !!}
</div>
</div>
</div>
@endsection