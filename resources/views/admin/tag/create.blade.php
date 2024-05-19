@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Tag AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('tag-berita/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('tag_berita')
                                is-invalid
                                @enderror" name="tag_berita">
                                @error('tag_berita')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

@endsection    