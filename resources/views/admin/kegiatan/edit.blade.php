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
                <form action="{{ url('kegiatan/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Kader</label>
                        <div class="col-sm-10">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="nama_kader">
                                
                                <option value="{{ $data->id_kader }}">{{ $data->nama_kader }}</option>
                                @foreach ($kader as $a)
                                <option value="{{ $a->id }}">{{ $a->nama_lengkap }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-form-label col-sm-2">Kegiatan Kader</label>
                        <div class="col-sm-10 sm-2">
                            @foreach ($kegiatan as $x)
                          <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck2" name="kegiatan[]" value="{{ $x->id }}" {{ in_array($x->id , explode(',' , $data->kegiatan)) ? 'checked' : ''}}>
                            <label class="form-check-label" for="gridCheck2">
                                {{ $x->nama_kegiatan }} {{ $x->tahun }}
                            </label>
                          </div>
                          @endforeach
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