@extends('layout.layout')

@section('section')
<div class="jumbotron mt-5">
    <form action="/" method="POST" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_token" value="{{ app('Session')->token() }}"> --}}
        <label for="upload">Upload your file here </label>
        <input class="form-control pb-5" type="file" name="upload">
        
        <div class="text-center">
            <button class="btn btn-primary">Save</button>
        </div>
    </form>
</div>

<div class="jumbotron mt-5">
    <label for="upload">The file you have upload is here </label>
    <input class="form-control pb-5" type="text" readonly>
</div>
@endsection