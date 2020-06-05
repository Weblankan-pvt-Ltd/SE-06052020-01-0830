@extends('import.template')

@section('main-body')


<table width="100%">
    <tr>
        <td></td>
        <td>Logged User: {{ session()->get('session_id') }}</td>
    </tr>
</table>


@endsection