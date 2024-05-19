@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Berita AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('berita/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="judul" value="{{ $data->judul }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input id="basicFlatpickr" type="date" class="form-control flatpickr flatpickr-input active" name="tanggal" value="{{ $data->tanggal }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" autocomplete="off" name="kategori">
                                <option value="{{ $data->kategori }}">{{ $data->kategori }}</option>
                                @foreach ($kategori as $item)
                                    
                                    <option value="{{ $item->kategori}}">{{ $item->kategori }}</option>

                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div id="multi-select" class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tag</label>
                        <div class="col-sm-10">
                            <select id="select-tag" class="form-control" name="tag[]" multiple placeholder="Pilih Tag..." autocomplete="off">
                                <option value="{{ $data->tag }}">{{ $data->tag }}</option>
                                @foreach ($tag as $item)
                                    <option value="{{ $item->tag_berita }}">{{ $item->tag_berita }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat" value="{{ $data->tempat }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="penulis" value="{{ $data->penulis }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('foto')
                            is-invalid
                            @enderror" name="foto" value="{{ $data->foto }}" accept="image/*">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                            <div class="mt-2">
                                gambar sebelumnya : <img src="{{ asset('storage/'.$data->foto) }}" width="200">

                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2 col-form-label">
                            <label>Isi</label>
                        </div>
                        <div class="col-sm-10">
                            <textarea class="ckeditor form-control" name="isi">
                                {{ $data->isi }}"
                            </textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" autocomplete="off" name="status_berita">
                                <option value="{{ $data->status_berita }}">{{ $data->status_berita }}</option>
                                <option value="belum dipublish">Belum Dipublish</option>
                                <option value="publish">Publish</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

    

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

        $('.ckeditor').ckeditor();

        });

    </script>

@endsection  