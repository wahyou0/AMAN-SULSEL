@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Tambah Berita AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('berita/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Judul</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control @error('judul')
                                is-invalid
                                @enderror" name="judul">
                                @error('judul')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tanggal</label>
                        <div class="col-sm-10">
                            <input id="basicFlatpickr" type="date" class="form-control flatpickr flatpickr-input active" name="tanggal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kategori</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="kategori">
                                <option hidden value="">Pilih Kategori ...</option>
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
                                @foreach ($tag as $item)
                                    <option value="{{ $item->tag_berita }}">{{ $item->tag_berita }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tempat</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="tempat">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Penulis</label>
                        <div class="col-sm-10">
                            <input type="disabled" class="form-control" name="penulis" value="{{ Auth::user()->name }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control @error('foto')
                            is-invalid
                            @enderror" name="foto" accept="image/*">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-2 col-form-label">
                            <label>Deskripsi</label>
                        </div>
                        <div class="col-sm-10">
                            <textarea class="ckeditor form-control @error('isi')
                            is-invalid
                            @enderror"  name="isi" required>
                            </textarea>
                            @error('isi')
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

    

    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

        $('.ckeditor').ckeditor();

        });

    </script>





@endsection    

{{-- <html>

<head>

    <title>CKEditor</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>

<body>

    <div class="container">

        <div class="row">

            <div class="col-md-8 offset-2 mt-5">

                <div class="card">

                    <div class="card-header bg-info">

                        <h6 class="text-white">Laravel? - ItSolutionStuff.com</h6>

                    </div>

                    <div class="card-body">

                        <form method="post" action="" enctype="multipart/form-data">

                            @csrf

                            <div class="form-group">

                                <label>Name</label>

                                <input type="text" name="name" class="form-control"/>

                            </div>  

                            <div class="form-group">

                                <label><strong>Description :</strong></label>

                                <textarea class="ckeditor form-control" name="description"></textarea>

                            </div>

                            <div class="form-group text-center">

                                <button type="submit" class="btn btn-success btn-sm">Save</button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>    

</body>

   
<script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

<script type="text/javascript">

    $(document).ready(function() {

       $('.ckeditor').ckeditor();

    });

</script>

  
</html> --}}