@extends('template')
@section('content')
    <h1>Ini Halaman Update</h1>
    @php $path = Storage::url('image/'.$user->image); @endphp
    <img src="{{$path}}">
    <form action="/update" enctype="multipart/form-data" method="post">
        {{csrf_field()}}
        Nama :
        <input type="text" name="nama" value="{{$user->nama}}">
        Username :
        <input type="text" name="username" value="{{$user->username}}">
        Password :
        <input type="password" name="password" value="{{$user->password}}">
        <input type="hidden" name="id" value="{{$user->id}}">
        <input type="submit" value="Insert Data!">
        <br>
        <input type="file" name="image">
    </form>
@endsection