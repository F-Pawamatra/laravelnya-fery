@extends('layout/main')

@section('title', "Daftar Mahasiswa")

@section('container')
  <div class="container">
    <div class="row">
        <div class="col-8">
          <h1 class="mt-3">Daftar Mahasiswa</h1>

          <a href="/students/create" class="btn btn-primary my-3">Tambah Data Mahasiswa</a>
          
          @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
          </div>
          @endif
          
          <table class="table">
            <thead class="table-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Nama</th>
                  <th scope="col">NIM</th>                   
                  <th scope="col">Details</th>                   
                </tr>
            </thead>
            <tbody>
              @foreach ($students as $student)
                <tr>
                  <th scope="row">{{ $loop->iteration }}</th>
                  <td>{{ $student->nama }}</td>
                  <td>{{ $student->nim }}</td>
                  <td>
                    <a href="/students/{{$student->id}}" class="badge bg-info">detail</a>
                  </td>
                </tr>
              @endforeach
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection