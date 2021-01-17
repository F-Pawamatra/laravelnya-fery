@extends('layout/main')

@section('title', "About me")

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-10">
          <h1 class="mt-3">Hello, {{$nama}}!</h1>
        </div>
      </div>
    </div>
  </div>
@endsection