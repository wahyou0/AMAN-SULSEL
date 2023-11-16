@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Kegiatan Kader</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('kegiatan/store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Kader</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="nama_kader">
                                <option value="Laki-laki">Laki - Laki</option>
                                @foreach ($data as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Kegiatan</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="kegiatan">
                        </div>
                    </div>
                    <div class="row mb-3">
                    </div>
                    <button type="submit" class="btn btn-primary">simpan</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        new TomSelect("#select-beast",{
            create: true,
            sortField: {
                field: "text",
                direction: "asc"
            }
        });
    </script>

@endsection    