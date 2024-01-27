@extends('admin.dashboard')
@section('content')

    <div class="page-meta">
        <nav class="breadcrumb-style-one" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Form</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Anggota AMAN</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div id="flHorizontalForm" class="col-lg-12 layout-spacing">
            <div class="statbox widget box box-shadow">
                <form action="{{ url('anggota_aman/update')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="id" value="{{ $data->id }}">
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">No. Anggota</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nomor_anggota" value="{{ $data->nomor_anggota }}">
                        </div>
                    </div><div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Pengesahan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="pengesahan" value="{{ $data->pengesahan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">PD</label>
                        <div class="col-sm-8">
                            <select id="select-beast" class="form-control" placeholder="Select a person..." autocomplete="off" name="pengurus_daerah">
                                <option hidden value="{{ $data->pengurus_daerah }}">{{ $data->pengurus_daerah}}</option>
                                <option value="AMAN Gowa">AMAN Gowa</option>
                                <option value="AMAN Majene">AMAN Majene</option>
                                <option value="AMAN Mamasa">AMAN Mamasa</option>
                                <option value="AMAN Maros">AMAN Maros</option>
                                <option value="AMAN Massenrempulu">AMAN Massenrempulu</option>
                                <option value="AMAN Sidrap">AMAN Sidrap</option>
                                <option value="AMAN Sinjai">AMAN Sinjai</option>
                                <option value="AMAN Toraja">AMAN Toraja</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Komunitas</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="komunitas" value="{{ $data->komunitas }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Luas Wilayah Indikatif</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="luas_indikatif" value="{{ $data->luas_indikatif }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Luas Wilayah Hasil Pemetaan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="luas_pemetaan" value="{{ $data->luas_pemetaan }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Luas Hutan Adat</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="hutan_adat" value="{{ $data->hutan_adat }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Laki-Laki</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="jml_laki_laki" value="{{ $data->jml_laki_laki }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Perempuan</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="jml_perempuan" value="{{ $data->jml_perempuan }}">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <label class="col-sm-4 col-form-label">Status BRWA</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_brwa" id="gridRadios1" value="Belum Teregistrasi" {{$data->status_brwa === 'Belum Teregistrasi' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Belum Teregistrasi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_brwa" id="gridRadios2" value="Teregistrasi" {{$data->status_brwa === 'Teregistrasi' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Teregistrasi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_brwa" id="gridRadios3" value="Terverifikasi" {{$data->status_brwa === 'Terverifikasi' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Terverifikasi
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="status_brwa" id="gridRadios4" value="Tersertifikasi" {{$data->status_brwa === 'Tersertifikasi' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Tersertifikasi
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <label class="col-sm-4 col-form-label">Profil</label>
                        <div class="col-sm-8">
                            <div class="form-check"> 
                                <input class="form-check-input" type="radio" name="profil" id="gridRadios5" value="Lengkap" {{$data->profil === 'Lengkap' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Lengkap
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="profil" id="gridRadios6" value="Belum Lengkap" {{$data->profil === 'Belum Lengkap' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Belum Lengkap
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <label class="col-sm-4 col-form-label">PERDA</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perda" id="gridRadios7" value="Sudah Ada" {{$data->perda === 'Sudah Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Sudah Ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perda" id="gridRadios8" value="Belum Ada" {{$data->perda === 'Belum Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Belum Ada
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <label class="col-sm-4 col-form-label">SK Bupati</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sk_bupati" id="gridRadios9" value="Sudah Ada" {{$data->sk_bupati === 'Sudah Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Sudah Ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="sk_bupati" id="gridRadios10" value="Belum Ada" {{$data->sk_bupati === 'Belum Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Belum Ada
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <label class="col-sm-4 col-form-label">PERBUB</label>
                        <div class="col-sm-8">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perbub" id="gridRadios11" value="Sudah Ada" {{$data->perbub === 'Belum Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios1">
                                    Sudah Ada
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="perbub" id="gridRadios12" value="Belum Ada" {{$data->perbub === 'Belum Ada' ? 'checked' : ''}}>
                                <label class="form-check-label" for="gridRadios2">
                                    Belum Ada
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Perempuan AMAN</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="perempuan_aman" value="{{ $data->perempuan_aman }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Kader Pemula</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="kader_pemula" value="{{ $data->kader_pemula }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Kader Penggerak</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="kader_penggerak" value="{{ $data->kader_penggerak }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-4 col-form-label">Jumlah Kader Pemimpin</label>
                        <div class="col-sm-8">
                            <input type="number" class="form-control" name="kader_pemimpin" value="{{ $data->kader_pemimpin }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label class="form-label">BPAN Laki-Laki</label>
                            <input type="number" class="form-control" name="bpan_laki_laki" value="{{ $data->bpan_laki_laki }}" placeholder="Jumlah Laki-laki">
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">BPAN Perempuan</label>
                            <input type="number" class="form-control" name="bpan_perempuan" value="{{ $data->bpan_perempuan }}" placeholder="Jumlah Perempuan">
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