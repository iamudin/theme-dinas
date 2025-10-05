<!-- Content -->

<div class="page-content">
    <style>
/* Container that keeps the same aspect ratio on all devices */
.hero-carousel {
--hero-aspect: 16 / 6; /* ubah bila ingin rasio lain, misal 16/9 */
}


.hero-carousel .carousel-item {
display: block; /* agar height bisa bekerja */
aspect-ratio: var(--hero-aspect);
height: auto;
overflow: hidden;
position: relative;
}


/* Pastikan gambar menutupi area tanpa merusak rasio */
.hero-carousel .carousel-item img {
width: 100%;
height: 100%;
object-fit: cover; /* penting agar crop simetris */
object-position: center center;
display: block;
}



</style>
@if($image = get_banner('hero-slider'))
<div id="heroCarousel" class="carousel slide hero-carousel" data-bs-ride="carousel">
<!-- Indicators -->


<div class="carousel-inner">

<div class="carousel-item active">
<img src="{{ $image->image }}" alt="Slide 1" loading="lazy">

</div>

</div>

</div>
@endif


        <div class="content-area">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8 col-md-12 m-b30">
                                <h2 class="widget-title"> <i class="fa fa-rss"></i> Terbaru</h2>

                        @foreach(query()->index_limit('berita',10) as $row)
                        <div class="blog-post blog-md clearfix date-style-2">
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="{{ $row->link }}"><img src="{{ $row->thumbnail }}" alt=""></a> </div>
                            <div class="dez-post-info">
                                <div class="dez-post-title ">
                                    <h3 class="post-title"><a href="{{ $row->link }}">{{ $row->title }}</a></h3>
                                </div>
                                <div class="dez-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{ $row->created_at->translatedFormat('d M') }}</strong> <span> {{ $row->created_at->format('Y') }}</span> </li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:void(0);">demongo</a> </li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">0</a> </li>
                                    </ul>
                                </div>
                                <div class="dez-post-text">
                                    <p>{{ $row->short_content }}</p>
                                </div>
                            
                               
                            </div>
                        </div>
                 @endforeach
                        <!-- Pagination start -->
                        <div class="pagination-bx clearfix m-b30">
                            <ul class="pagination">
                                <li class="previous"><a href="javascript:void(0);"><i class="fa fa-angle-double-left"></i></a></li>
                                <li class="active"><a href="javascript:void(0);">1</a> </li>
                                <li><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li class="next"><a href="javascript:void(0);"><i class="fa fa-angle-double-right"></i></a></li>
                            </ul>
                        </div>
                        <!-- Pagination END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-4 col-md-12">
                        {{ get_element('sidebar') }}
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
        </div>
        <!-- Content END-->