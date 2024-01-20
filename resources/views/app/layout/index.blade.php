@extends('app.home')
@section('content')

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
     integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
     crossorigin=""/>

{{-- draw leaflet --}}
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.css" integrity="sha512-gc3xjCmIy673V6MyOAZhIW93xhM9ei1I+gLbmFjUHIjocENRsLX/QUE1htk5q1XV2D/iie/VQ8DXI6Vu8bexvQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

     <style>
        #map { height: 580px; }
     </style>

<section id="content">

    <div class="content-wrap">

            <div class="container bottommargin-lg clearfix">
                <div class="row topmargin-sm clearfix common-height">
                    <div class="col-md-3 col-sm-4 dark center col-padding" style="background-color: #dd5e04;">
                        <div>
                            
                            <h5>Laki-laki dan Perempuan </h5>
                            <canvas id="mytotalpopulasi"></canvas>
                            @foreach ($totalpopulasi as $val)
                                <h4>Total : {{ number_format($val) }} Jiwa</h4>
                            @endforeach
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 dark center col-padding" style="background-color: #ff933b;">
                        <div>
                            <h5>Luas Wilayah</h5>
                            <canvas id="mytotalwilayah"></canvas>
                            
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 dark center col-padding" style="background-color: #ffac5f;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-layers"></i>
                            <div class="counter counter-lined"><span data-from="1" data-to="{{$komunitas}}" data-refresh-interval="25" data-speed="3500"></span></div>
                            <h5>Total Komunitas Adat</h5>
                        </div>
                    </div>

                    <div class="col-md-3 col-sm-4 dark center col-padding" style="background-color: #ffc89d;">
                        <div>
                            <i class="i-plain i-xlarge divcenter icon-line2-list"></i>
                            <div class="counter counter-lined"><span data-from="0" data-to="9" data-refresh-interval="30" data-speed="2700"></span></div>
                            <h5>Total Pengurus Daerah</h5>
                        </div>
                    </div>
                </div>
            </div>

        {{-- <div class="container clearfix">

            <div class="col_one_third">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-monitor"></i></a>
                    </div>
                    <h3>Responsive Layout</h3>
                    <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>
                </div>
            </div>

            <div class="col_one_third">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="200">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-eye"></i></a>
                    </div>
                    <h3>Retina Ready Graphics</h3>
                    <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>
                </div>
            </div>

            <div class="col_one_third col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="400">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-star"></i></a>
                    </div>
                    <h3>Powerful Performance</h3>
                    <p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>
                </div>
            </div>

            <div class="clear"></div>

            <div class="col_one_third">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-play"></i></a>
                    </div>
                    <h3>HTML5 Video</h3>
                    <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>
                </div>
            </div>

            <div class="col_one_third">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-params"></i></a>
                    </div>
                    <h3>Parallax Support</h3>
                    <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>
                </div>
            </div>

            <div class="col_one_third col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-line-circle-check"></i></a>
                    </div>
                    <h3>Endless Possibilities</h3>
                    <p>Complete control on each &amp; every element that provides endless customization possibilities.</p>
                </div>
            </div>

            <div class="clear"></div>

            <div class="col_one_third bottommargin-sm">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="600">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-bulb"></i></a>
                    </div>
                    <h3>Light &amp; Dark Color Schemes</h3>
                    <p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
                </div>
            </div>

            <div class="col_one_third bottommargin-sm">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="800">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-heart2"></i></a>
                    </div>
                    <h3>Boxed &amp; Wide Layouts</h3>
                    <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>
                </div>
            </div>

            <div class="col_one_third bottommargin-sm col_last">
                <div class="feature-box fbox-small fbox-plain" data-animate="fadeIn" data-delay="1000">
                    <div class="fbox-icon">
                        <a href="#"><i class="icon-note"></i></a>
                    </div>
                    <h3>Extensive Documentation</h3>
                    <p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>
                </div>
            </div>

            <div class="clear"></div>

        </div> --}}

        <div class="container clearfix">
            <div class="row topmargin-sm">
                <div class="heading-block center">
                    <h3>peta wilayah</h3>
                </div>
                <div class="col-md-12 col-sm-6 bottommargin">
                    <div id="map"></div>
                </div>
            </div>
        </div>


        <div class="section topmargin nobottommargin nobottomborder">
            <div class="container clearfix">
                <div class="heading-block center nomargin">
                    <h3></h3>
                </div>
            </div>
        </div>

        <div class="clear"></div>

        <div class="container clearfix">

            <div class="col_one_third bottommargin-sm center">
                <img data-animate="fadeInLeft" src="{{asset('logo/aman.png')}}" alt="Iphone">
            </div>

            <div class="col_two_third bottommargin-sm col_last">

                <div class="heading-block topmargin-sm">
                    <h3>Profile AMAN</h3>
                </div>

                <p>Aliansi Masyarakat Adat Nusantara (AMAN) adalah organisasi kemasyarakatan (ORMAS)  independen yang anggotanya terdiri dari komunitas-komunitas Masyarakat Adat dari berbagai pelosok Nusantara. AMAN terdaftar secara resmi di Departemen Kehakiman dan Hak Azasi Manusia
                    sebagai Organisasi Persekutuan melalui Akta Notaris No.26, H. Abu Yusuf, SH dan Akta Pendirian tanggal 24 April 2001. Selanjutnya, kemudian diperbaharui melalui Keputusan Menteri Hukum dan HAM Nomor: AHU-0000340.AH.01.08. Tahun 2017 melalui Akta Notaris & PPAT No. 2, Ellyza, SH., M.Kn dengan Nomor NPWP 02.072.633.7-015.000.</p>

                <p>AMAN dideklarasikan berdasarkan bangunan sejarah pergerakan Masyarakat Adat yang panjang di Indonesia. Sejak pertengahan tahun 1980-an telah muncul kesadaran baru di kalangan organisasi non pemerintah (ORNOP) dan para ilmuwan sosial tentang dampak negatif pembangunan yang sangat luas terhadap berbagai kelompok masyarakat di Indonesia. Masyarakat Adat adalah salah satu kelompok utama dan terbesar jumlahnya yang paling banyak dirugikan oleh (dan menjadi korban) politik pembangunan selama tiga dasawarsa terakhir ini. Penindasan terhadap Masyarakat Adat ini terjadi baik di bidang ekonomi, politik, hukum, maupun di bidang sosial dan budaya lainnya.</p>
                
                <p><a href="https://aman.or.id/files/organization-document/790661937634718Profil%20AMAN%20-%20Bahasa(2).pdf">selengkapnya...</a></p>
            </div>

        </div>

        <div class="container clearfix">

            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xxs="2" data-items-xs="3" data-items-sm="4" data-items-md="5" data-items-lg="6">

                <div class="oc-item"><a href="#"><img src="{{asset('logo/logo-aman.jpg')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{asset('logo/logo-pemuda-adat.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{asset('logo/logo-perempuan-aman.png')}}" alt="Clients"></a></div>
                <div class="oc-item"><a href="#"><img src="{{asset('logo/logo-ppman.png')}}" alt="Clients"></a></div>

            </div>


        </div>

    </div>

</section>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        const populasi = document.getElementById('mytotalpopulasi');

        new Chart(populasi, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'jumlah',
                    data: [@json($laki), @json($perempuan)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                scales: {

                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>

    <script>
        const wilayah = document.getElementById('mytotalwilayah');

        new Chart(wilayah, {
            type: 'pie',
            data: {
                labels: ['indikatif', 'pemetaan'],
                datasets: [{
                    label: 'total',
                    data: [@json($indikatif), @json($pemetaan)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(60 179 113)'
                    ]
                }]
            },
            options: {
                scales: {

                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script>



    <!-- Make sure you put this AFTER Leaflet's CSS -->
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
crossorigin=""></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

{{-- draw leaflet js --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet.draw/1.0.4/leaflet.draw.js" integrity="sha512-ozq8xQKq6urvuU6jNgkfqAmT7jKN2XumbrX1JiB3TnF7tI48DPI4Gy1GXKD/V3EExgAs1V+pRO7vwtS1LHg0Gw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>

    var container = L.DomUtil.get('map');
    if (container != null) {
        container._leaflet_id = null;
    }
    
//    var map = L.map('map').setView([-3.4631462911833157, 119.72486189225056], 8);
   
   osm = L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
       maxZoom: 20,
       attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
   });
//    def.addTo(osm);

    //tampilan google map
    googleSat = L.tileLayer('http://{s}.google.com/vt?lyrs=s&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleSat.addTo(map);

    googleStreets = L.tileLayer('http://{s}.google.com/vt?lyrs=m&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleStreets.addTo(map);

    googleHybrid = L.tileLayer('http://{s}.google.com/vt?lyrs=s,h&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });
    // googleHybrid.addTo(map);

    googleTerrain = L.tileLayer('http://{s}.google.com/vt?lyrs=p&x={x}&y={y}&z={z}',{
        maxZoom: 20,
        subdomains:['mt0','mt1','mt2','mt3']
    });

   var map = L.map('map',{
    center:[-4.056056, 119.8526],
    zoom:8,
    layers:[osm]
   });

   var marker = L.marker([-5.169672875495814,119.45430546998979],{
       draggable:true
   })
   .bindPopup('AMAN SUl-SEL')
   .addTo(map);
   
   @foreach ( $nama_mark as $item )
        var mar = L.marker([{{ $item->kordinat }}],{
            
        })
        .bindPopup('{{ $item->nama_komunitas }}')
        .addTo(map);
   @endforeach

//     @foreach ( $nama_mark as $item )
//         var mar = L.marker([{{ $item->kordinat }}],{
//         })
//         .bindPopup(
//             "<div class='my-2'><img src='{{ asset('storage/'.$item->image_peta)}}' class='img-fluid' width='700px'></div>" +
//             "<div class='my-2'><strong>Nama Komunitas: </strong> <br>{{ $item->nama_komunitas }}</div>" +
//             "<div><a href='{{ url('detail/'.$item->id) }}' class='btn btn-outline-info'>Detail</a></div>"
//         )
//         .addTo(map);
//    @endforeach

   var Thunderforest_Landscape = L.tileLayer('https://{s}.tile.thunderforest.com/landscape/{z}/{x}/{y}.png?apikey={apikey}', {
        attribution: '&copy; <a href="http://www.thunderforest.com/">Thunderforest</a>, &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        apikey: '<your apikey>',
        maxZoom: 22
    });
    // Thunderforest_Landscape.addTo(map);


    // var popup = L.popup();
    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent("Kordinat." + e.latlng.toString())
    //         .openOn(map);
    // }
    // map.on('click', onMapClick);



    // FeatureGroup is to store editable layers
    var drawnItems = new L.FeatureGroup();
        map.addLayer(drawnItems);
        var drawControl = new L.Control.Draw({
            draw: {
                polygon: {
                    shapeOptions: {
                        color: 'red' //polygons being drawn will be red color
                    },
                },
                marker: true,
                circle: false,
                rectangle: false,
                polyline: true,
                circlemarker: false
            },
            edit: {
                featureGroup: drawnItems
            }
    });
     map.addControl(drawControl);

    // create draw geojson option one
    map.on('draw:created', function(event) {
        var layer = event.layer;
        var feature = layer.feature = layer.feature || {};
        feature.type = feature.type || "Feature";
        var props = feature.properties = feature.properties || {};
        drawnItems.addLayer(layer);
        // $("[name=draw]").html(JSON.stringify(drawnItems.toGeoJSON()));

    });

    // edit draw geojson
    map.on('draw:edited', function(event) {
        // $("[name=draw]").html(JSON.stringify(drawnItems.toGeoJSON()));
    });

    // delete draw geojson
    map.on('draw:deleted', function(event) {
        // $("[name=draw]").html("");
    });

    

    @foreach ( $draw as $item )
        var poly = @json($item);   
        var randColor = '#'+(Math.random()*0xFFFFFF<<0).toString(16);
        var layer = L.geoJSON(JSON.parse(poly)).addTo(map);
        window.layer.setStyle({fillColor: '#8B008B',
                            "color": randColor,
                            "weight": 3,
                            "opacity": 9}).addTo(map);
        
    @endforeach


    var baseMaps = {
        'google satelit': googleSat,
        'google streets': googleStreets,
        'google hybrid': googleHybrid,
        'Terrain': googleTerrain,
        'default': osm
    };

    var overlayer = {
        'mark': marker,
    };

    L.control.layers(baseMaps,overlayer).addTo(map);

</script>

@endsection