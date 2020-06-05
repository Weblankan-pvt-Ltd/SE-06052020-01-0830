@extends('import.template')

@section('main-body')

<h1>User Registration</h1>

<form action="register" method="post" novalidate="novalidate">
    @csrf
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="{{old('name')}}"></td>
            @if($errors->has('name'))
            <td>{{ $errors->first('name')}}</td>
            @endif
        </tr>
        <tr>
            <td>Email ID:</td>
            <td><input type="email" name="email" value="{{old('email')}}"></td>
            @if($errors->has('email'))
            <td>{{ $errors->first('email')}}</td>
            @endif
        </tr>
        <tr>
            <td>Contact No:</td>
            <td><input type="text" name="contact" value="{{old('contact')}}"></td>
            @if($errors->has('contact'))
            <td>{{ $errors->first('contact')}}</td>
            @endif
        </tr>
        <tr>
            <td>Home Address:</td>
            <td><input type="text" name="address" value="{{old('address')}}"></td>
            @if($errors->has('address'))
            <td>{{ $errors->first('address')}}</td>
            @endif
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"></td>
            @if($errors->has('password'))
            <td>{{ $errors->first('password')}}</td>
            @endif
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirm_password"></td>
            @if($errors->has('confirm_password'))
            <td>{{ $errors->first('confirm_password')}}</td>
            @endif
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit"></td>
        </tr>
    </table>

</form>
@endsection