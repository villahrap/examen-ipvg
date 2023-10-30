@extends('layouts.main')
@section('main-content')
<div class="container">
    <h1>Mi primer trabajo con archivos</h1>
    <form action="{{ route('files.store') }}" method="POST" enctype='multipart/form-data'>
        @csrf
        <input type="file" name="document" />
        <br>
        <br>
        <input type="submit" value="enviar" />
    </form>
</div>
<br>
<br>
<br>
@if(isset($file))
    <a href="storage/{{ $file->path . '/' . $file->name }}">DESCARGAR</a>
@endif
@endsection
