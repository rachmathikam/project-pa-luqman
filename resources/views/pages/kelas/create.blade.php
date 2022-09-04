@extends('../layouts.app')
@section('content')

<div class="page-header">
    <div class="row">
      <div class="col-lg-6">
        <h3>Tabel Mapel</h3>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item">
            <a href="{{ route('guru.index') }}">Guru</a>
            </li>
            <li class="breadcrumb-item">
                Tambah
                </li>
        </ol>
      </div>
    <div class="col-sm-12 col-xl-12">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h5>Tambah Kelas</h5>
                    </div>
                    <div class="card-body">
                 <form class="theme-form mega-form" action="{{ route('kelas.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12 col-sm-12">
                                    <label for="">Kode Kelas</label>
                                    <input type="text" class="form-control" name="kode" value="{{ old('kode') }}">
                                </div>
                                <div class="col-lg-12 col-sm-12">
                                    <label for="">Inisial Kelas</label>
                                    <input type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="B">
                                </div>
                            </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <a  href="{{ route('kelas.index') }}" class="btn btn-secondary" >Cancel</a>
                    </div>
                </form>
                </div>
                </div>
            </div>

        </div>
    </div>


@endsection