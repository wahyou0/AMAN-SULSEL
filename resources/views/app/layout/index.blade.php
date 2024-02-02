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

{{-- slider --}}
<section id="slider" class="slider-parallax swiper_wrapper clearfix" style="height: 15cm;">

    <div class="slider-parallax-inner">

        <div class="swiper-container swiper-parent">
            <div class="swiper-wrapper">
                <div class="swiper-slide dark" style="background-image: url( {{ asset('logo/sahkanruu.png') }} );">
                    <div class="container clearfix">
                        <div class="slider-caption slider-caption-center">
                            <h2 data-caption-animate="fadeInUp">AMAN</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">Aliansi Masyarakat Adat Nusantara (AMAN) adalah organisasi kemasyarakatan independen dengan visi untuk mewujudkan kehidupan yang adil dan sejahtera bagi semua Masyarakat Adat di Indonesia.</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" style="background-image: url({{ asset('logo/bendera.jpg') }});">
                    <div class="container clearfix">
                        <div class="slider-caption">
                            <h2 data-caption-animate="fadeInUp">Great Performance</h2>
                            <p data-caption-animate="fadeInUp" data-caption-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div id="slider-arrow-left"><i class="icon-angle-left"></i></div>
            <div id="slider-arrow-right"><i class="icon-angle-right"></i></div>
            <div id="slide-number"><div id="slide-number-current"></div><span>/</span><div id="slide-number-total"></div></div>
        </div>

    </div>

</section>


<section id="content">

    <div class="content-wrap">

        <div class="container clearfix">

            <div class="postcontent nobottommargin">

                <div class="col_full bottommargin-lg clearfix">

                    <div class="fancy-title title-border">
                        <h3>Profil AMAN</h3>
                    </div>

                    <div class="col_one_third bottommargin-sm center">
                        <img data-animate="fadeInLeft" src="{{asset('logo/aman.png')}}" alt="Iphone">
                    </div>
        
                    <div class="col_two_third bottommargin-sm col_last">
        
                        <p>Aliansi Masyarakat Adat Nusantara (AMAN) adalah organisasi kemasyarakatan (ORMAS)  independen yang anggotanya terdiri dari komunitas-komunitas Masyarakat Adat dari berbagai pelosok Nusantara. AMAN terdaftar secara resmi di Departemen Kehakiman dan Hak Azasi Manusia
                            sebagai Organisasi Persekutuan melalui Akta Notaris No.26, H. Abu Yusuf, SH dan Akta Pendirian tanggal 24 April 2001. Selanjutnya, kemudian diperbaharui melalui Keputusan Menteri Hukum dan HAM Nomor: AHU-0000340.AH.01.08. Tahun 2017 melalui Akta Notaris & PPAT No. 2, Ellyza, SH., M.Kn dengan Nomor NPWP 02.072.633.7-015.000.</p>
        
                        <p>AMAN dideklarasikan berdasarkan bangunan sejarah pergerakan Masyarakat Adat yang panjang di Indonesia. Sejak pertengahan tahun 1980-an telah muncul kesadaran baru di kalangan organisasi non pemerintah (ORNOP) dan para ilmuwan sosial tentang dampak negatif pembangunan yang sangat luas terhadap berbagai kelompok masyarakat di Indonesia. Masyarakat Adat adalah salah satu kelompok utama dan terbesar jumlahnya yang paling banyak dirugikan oleh (dan menjadi korban) politik pembangunan selama tiga dasawarsa terakhir ini. Penindasan terhadap Masyarakat Adat ini terjadi baik di bidang ekonomi, politik, hukum, maupun di bidang sosial dan budaya lainnya.</p>

                        <p>Sejak pertengahan tahun 1980-an perlawanan Masyarakat Adat terhadap berbagai kebijakan pemerintah mulai bermunculan secara sporadis. Situasi ini menggugah keprihatinan banyak aktivis gerakan sosial dan akademisi atas kondisi yang dihadapi oleh Masyarakat Adat di berbagai kampung di tanah air sejak tahun 1990-an. Akhirnya pada tahun 1993 di Toraja-Sulawesi Selatan disepakati pembentukan sebuah wadah yang diberi nama Jaringan Pembela Hak-hak Masyarakat Adat (JAPHAMA) yang dipelopori para tokoh adat, akademisi, pendamping hukum dan aktivis gerakan sosial. Kehadiran JAPHAMA juga sebagai tanggapan atas menguatnya gerakan perjuangan Masyarakat Adat di tingkat global.</p>

                        <p>Dalam pertemuan JAPHAMA tersebut, juga dibicarakan dan disepakati mengenai istilah Indigenous Peoples dalam konteks Indonesia sebagai “Masyarakat Adat”. Penggunaan istilah tersebut merupakan bentuk perlawanan terhadap istilah yang dilekatkan kepada Masyarakat Adat yang
                            melecehkan, seperti suku terasing, masyarakat perambah hutan, peladang liar, masyarakat primitive, penghambat pembangunan, dan sebagainya yang melanggar hak konstitusional Masyarakat Adat sebagai manusia bermartabat, untuk diperlakukan layaknya warga negara Indonesia. Melalui JAPHAMA, tokoh-tokoh adat dan berbagai elemen lainnya melakukan konsolidasi atas gagasan mengenai Masyarakat Adat dan identifikasi cita-cita bersama. Para pemimpin/ tokoh-tokoh adat pun kemudian mendapatkan dukungan dari berbagai aktivis dan ORNOP dengan berbagai latar belakang yakni lingkungan hidup, anti globalisasi, pembaruan agraria, pendamping hukum, aktivis kebudayaan dan lain-lain untuk bersama-sama mewujudkan
                            terlaksananya Kongres Masyarakat Adat ketika terjadinya momentum reformasi.</p>
                        
                        <p><a href="https://aman.or.id/files/organization-document/790661937634718Profil%20AMAN%20-%20Bahasa(2).pdf">selengkapnya...</a></p>
                    </div>

                    <div class="clear"></div>

                </div>

                {{-- <div class="col_full bottommargin-lg clearfix">

                    <div class="fancy-title title-border">
                        <h3>Kegiatan</h3>
                    </div>

                    <div class="ipost clearfix bottommargin-sm">
                        <div class="col_half nobottommargin">
                            <div class="entry-image">
                                <a href="#"><img class="image_fade" src="{{ asset('tema/images/magazine/8.jpg')}}" alt="Image"></a>
                            </div>
                        </div>
                        <div class="col_half nobottommargin col_last">
                            <div class="entry-title">
                                <h3><a href="{{ url('selengkapnya')}}">Beyonce Dropped A '50 Shades Of Grey', Teaser On Instagram Last Night</a></h3>
                            </div>
                            <ul class="entry-meta clearfix">
                                <li><i class="icon-calendar3"></i> 7th Jun 2014</li>
                                <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 23</a></li>
                                <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                            </ul>
                            <div class="entry-content">
                                <p>Neque nesciunt molestias soluta esse debitis. Magni impedit quae consectetur consequuntur adipisci veritatis modi a, officia cum. Eaque iusto quod assumenda beatae, nesciunt aliquid. Vel, eos eligendi?</p>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="col_half nobottommargin">

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="i{{ asset('tema/images/magazine/small/5.jpg')}}" alt=""></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">A Baseball Team Blew Up A Bunch Of Justin Bieber And Miley Cyrus Merch</a></h4>
                                </div>
                                <ul class="entry-meta">
                                    <li><i class="icon-calendar3"></i> 5th Nov 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 3</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="{{ asset('tema/images/magazine/small/6.jpg')}}" alt=""></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Want To Know The New 'Star Wars' Plot? Then This Is The Post For You</a></h4>
                                </div>
                                <ul class="entry-meta">
                                    <li><i class="icon-calendar3"></i> 29th Jul 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 22</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col_half nobottommargin col_last">

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="images/magazine/small/7.jpg" alt=""></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Actress Skye McCole Bartusiak From 'The Patriot' Found Dead At 21</a></h4>
                                </div>
                                <ul class="entry-meta">
                                    <li><i class="icon-calendar3"></i> 12th Oct 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 47</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="spost clearfix">
                            <div class="entry-image">
                                <a href="#"><img src="images/magazine/small/9.jpg" alt=""></a>
                            </div>
                            <div class="entry-c">
                                <div class="entry-title">
                                    <h4><a href="#">Internet Slang Has Been Proof Of Satanic Worship All Along???LOL!</a></h4>
                                </div>
                                <ul class="entry-meta">
                                    <li><i class="icon-calendar3"></i> 25th Mar 2014</li>
                                    <li><a href="#"><i class="icon-comments"></i> 56</a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div> --}}

            </div>

            <div class="sidebar nobottommargin col_last">

                <div class="sidebar-widgets-wrap">

                    <div class="widget widget_links clearfix">
                        <h4>CHART</h4>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin">
                                <h5>Populasi</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalpopulasi"></canvas>
                                </div>
                                @foreach ($totalpopulasi as $val)
                                    <h6>Total : <span class="subtitle">{{ number_format($val) }} </span>Jiwa</h6>
                                @endforeach
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h5>Wilayah Adat</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalwilayah"></canvas>
                                </div>
                                @foreach ($total_wilayah as $val)
                                    <h6>Total: <span class="subtitle">{{ number_format($val) }} </span>ha</h6>
                                @endforeach
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin">
                                <h5>Produk Hukum</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalprodukhukum"></canvas>
                                </div>
                                <h6>Total: <span class="subtitle">{{ number_format($total_produkhukum) }} </span></h6>
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h5>Status BRWA</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalstatus"></canvas>
                                </div>
                                <h6>Total: <span class="subtitle">{{ number_format($total_status) }} </span></h6>
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h5>Komunitas</h5>
                                <div class="fbox-icon">
                                    <a><i class="icon-stack i-alt"></i></a>
                                </div>
                                <h6>Total: <span class="subtitle">{{ number_format($komunitas) }} </span></h6>
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h5>Kader</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalkader"></canvas>
                                </div>
                                @foreach ($total_kader as $val)
                                    <h6>Total: <span class="subtitle">{{ number_format($val) }} </span></h6>
                                @endforeach
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h5>BPAN</h5>
                                <div class="fbox-icon">
                                    <canvas id="mytotalbpan"></canvas>
                                </div>
                                @foreach ($total_bpan as $val)
                                    <h6>Total: <span class="subtitle">{{ number_format($val) }} </span></h6>
                                @endforeach
                            </div>
                        </div>
                        <div class="feature-box fbox-center fbox-light fbox-effect nobottomborder">
                            <div class="col_half nobottommargin col_last">
                                <h6>Perempuan AMAN</h6>
                                <div class="fbox-icon">
                                    <a><img src="{{ asset('logo/logo-perempuan-aman.png')}}" alt=""></a>
                                </div>
                                @foreach ($perempuan_aman as $val)
                                    <h6>Total: <span class="subtitle">{{ number_format($val) }} </span></h6>
                                @endforeach
                            </div>
                        </div>

                    </div>

                    <div class="widget clearfix">

                        <h4>Flickr Photostream</h4>
                        <div id="flickr-widget" class="flickr-feed masonry-thumbs col-5" data-id="613394@N22" data-count="15" data-type="group" data-lightbox="gallery"></div>

                    </div>

                </div>

            </div>

            <div class="clear"></div>

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
        let delayed;
        const populasi = document.getElementById('mytotalpopulasi');

        new Chart(populasi, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'total',
                    data: [@json($laki), @json($perempuan)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {animation: {
                onComplete: () => {
                    delayed = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !delayed) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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
        let wil;
        const wilayah = document.getElementById('mytotalwilayah');

        new Chart(wilayah, {
            type: 'pie',
            data: {
                labels: ['indikatif', 'pemetaan','hutan adat'],
                datasets: [{
                    label: 'total',
                    data: [@json($indikatif), @json($pemetaan), @json($hutan_adat)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(60 179 113)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    wil = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !wil) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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
        let hukum;
        const produkhukum = document.getElementById('mytotalprodukhukum');

        new Chart(produkhukum, {
            type: 'pie',
            data: {
                labels: ['Perda', 'SK Bupati','Perbub'],
                datasets: [{
                    label: 'total',
                    data: [@json($perda), @json($sk_bupati), @json($perbub)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(60 179 113)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    hukum = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !hukum) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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
        let status;
        const totalbpan = document.getElementById('mytotalstatus');

        new Chart(totalbpan, {
            type: 'pie',
            data: {
                labels: ['Teregistrasi', 'Terverifikasi','Tersertifikasi'],
                datasets: [{
                    label: 'total',
                    data: [@json($registrasi), @json($verifikasi), @json($sertifikasi)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(60 179 113)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    status = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !status) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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
        let bpan;
        const totbpan = document.getElementById('mytotalbpan');

        new Chart(totbpan, {
            type: 'pie',
            data: {
                labels: ['Laki-laki', 'Perempuan'],
                datasets: [{
                    label: 'total',
                    data: [@json($bpan_laki_laki), @json($bpan_perempuan)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    bpan = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !bpan) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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
        let kader;
        const totkader = document.getElementById('mytotalkader');

        new Chart(totkader, {
            type: 'pie',
            data: {
                labels: ['Pemula', 'Penggerak','Pemimpin'],
                datasets: [{
                    label: 'total',
                    data: [@json($kader_pemula), @json($kader_penggerak), @json($kader_pemimpin)],
                    borderWidth: 1,
                    backgroundColor: [
                        'rgb(30,144,255)',
                        'rgb(60 179 113)',
                        'rgb(238,130,238)'
                    ]
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    kader = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !kader) {
                    delay = context.dataIndex * 700 + context.datasetIndex * 300;
                    }
                    return delay;
                },
                },
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

    {{-- <script>
        let mych;
        const del = document.getElementById('mytotalprodukhukum');

        new Chart(del, {
            type: 'bar',
            data: {
                labels: ['indikatif', 'pemetaan','hutan adat'],
                datasets: [{
                    label: 'total',
                    data: [@json($perda), @json($sk_bupati), @json($perbub)],
                    borderWidth: 1,
                }]
            },
            options: {
                animation: {
                onComplete: () => {
                    mych = true;
                },
                delay: (context) => {
                    let delay = 0;
                    if (context.type === 'data' && context.mode === 'default' && !mych) {
                    delay = context.dataIndex * 300 + context.datasetIndex * 100;
                    }
                    return delay;
                },
                },
                scales: {
                   
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });
    </script> --}}



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