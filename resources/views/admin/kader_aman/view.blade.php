@extends('admin.dashboard')
@section('content')    
    
    <div class="row layout-spacing ">
        
        <!-- Content -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
            <div class="user-profile">
                <div class="widget-content widget-content-area">
                    <div class="row">
                    <div class="text-left user-info col-md-3">
                        <img src="{{ asset('storage/'.$data->image) }}" alt="avatar" style="width: 4cm; margin-left: 9%;">
                        <p class="" style="font-size: 18pt; margin-left: 18%;">{{ $data->nama_lengkap }}</p>
                    </div>
                    <div class="text-right user-info col-md-8">

                        <div class="">
                            <ul class="list-unstyled">
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="user"></i> {{ $data->nama_panggilan }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="home"></i> {{ $data->tempat_lahir }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="calendar"></i> {{ $data->tgl_lahir }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="user"></i> {{ $data->jenis_kelamin }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="map"></i> {{ $data->nama_komunitas }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="map-pin"></i> {{ $data->alamat }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="tablet"></i> {{ $data->no_hp }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="mail"></i> {{ $data->email }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="clipboard"></i> {{ $data->status_kader }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="file-text"></i> {{ $data->keterangan }}
                                </li>
                                <li class="list-group-item" style="font-size: 12pt;">
                                    <i data-feather="file-text"></i>Pelatihan Yang Telah Diikuti :
                                </li>
                                
                                <li class="list-group-item" style="font-size: 12pt;">
                                    @foreach( $keg as $a => $value )
                                    <h6>:{{ $value }}</h6>
                                    @endforeach
                                </li>
                            </ul>
                        </div>                                    
                    </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    @endsection