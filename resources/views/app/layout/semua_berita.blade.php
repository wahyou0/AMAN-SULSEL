@extends('app.home')
@section('content')

    <!-- Content
    ============================================= -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="heading-block center">
                    {{-- <h1>Recent Articles</h1>
                    <span>We almost blog regularly about this &amp; that.</span> --}}
                </div>

                <!-- Post Content
                ============================================= -->
                <div class="postcontent nobottommargin clearfix">

                    <!-- Posts
                    ============================================= -->
                    <div id="posts" class="small-thumbs">

                        @foreach ( $berita as $data )

                            <div class="entry clearfix">
                                <div class="entry-image">
                                    <a href="images/portfolio/full/17.jpg" data-lightbox="image"><img class="image_fade" src="{{ asset('storage/'.$data->foto) }}" alt="Standard Post with Image"></a>
                                </div>
                                <div class="entry-c">
                                    <div class="entry-title">
                                        <h2><a href="blog-single.html">{{ $data->judul }}</a></h2>
                                    </div>
                                    <ul class="entry-meta clearfix">
                                        <li><i class="icon-calendar3"></i> {{ $data->tanggal }}</li>
                                        <li><a href="#"><i class="icon-user"></i> {{ $data->penulis }}</a></li>
                                        <li><i class="icon-folder-open"></i> <a href="#">General</a>, <a href="#">Media</a></li>
                                        <li><a href="blog-single.html#comments"><i class="icon-comments"></i> 13</a></li>
                                        <li><a href="#"><i class="icon-camera-retro"></i></a></li>
                                    </ul>
                                    <div class="entry-content">
                                        <p>{!! substr($data->isi, 0, 200) !!}</p>
                                        <a href="{{ url('selengkapnya/'.$data->id) }}"class="more-link">Selengkapnya</a>
                                    </div>
                                </div>
                            </div>

                        @endforeach

                    </div><!-- #posts end -->

                    <!-- Pagination
                    ============================================= -->


                    {{ $berita->links('pagination::bootstrap-4') }}


                    {{-- <ul class="pager nomargin">
                        <li class="previous"><a href="#">&larr; Older</a></li>

                        <li class="next"><a href="#">Newer &rarr;</a></li>
                    </ul> --}}
                    <!-- .pager end -->

                </div><!-- .postcontent end -->

                <!-- Sidebar
                ============================================= -->
                <div class="sidebar nobottommargin col_last clearfix">

                </div><!-- .sidebar end -->

            </div>

        </div>

    </section>
    <!-- #content end -->

@endsection