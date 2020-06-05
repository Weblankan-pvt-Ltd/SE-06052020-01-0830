@extends('import.template')

@section('main-body')

<form id="" method="post" novalidate=" novalidate">
    @csrf
    <table>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" id="email" value="{{old('email')}}"></td>
            <!-- @if($errors->has('email'))
            <td>{{ $errors->first('email')}}</td>
            @endif -->
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" id="password" name="password"></td>
            <!-- @if($errors->has('password'))
            <td>{{ $errors->first('password')}}</td>
            @endif -->
        </tr>
        <tr>
            <p id="msg"></p>
            <td colspan="2"><input type="button" id="signin" value="Submit"></td>
        </tr>
    </table>

</form>
@endsection