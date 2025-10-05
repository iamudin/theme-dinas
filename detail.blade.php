    <div class="page-content">
        <div class="content-area pt-4">
            <div class="container">
                <div class="row">
                    <!-- Left part start -->
                    <div class="col-lg-8 col-md-12 m-b30">
                        <!-- blog start -->
                        <div class="blog-post blog-single mt-0">
                            <div class="dez-post-title ">
                                <h1 class="post-title"><a href="javascript:void(0);">{{ $detail->title }}</a></h1>
                            </div>
                            <div class="dez-post-meta m-b20">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i>{{ $detail->created_at->format('d F Y') }}</li>
                                    <li class="post-author"><i class="fa fa-user"></i>By <a href="javascript:void(0);">{{ $detail->user->name }}</a> </li>
                                </ul>
                            </div>
                            <div class="dez-post-media dez-img-effect zoom-slow"> <a href="javascript:void(0);"><img src="{{ $detail->thumbnail }}" alt=""></a> </div>
                            <div class="dez-post-text">
                           {!! $detail->content !!}
                            </div>
                    
                        </div>
                
                        <!-- blog END -->
                    </div>
                    <!-- Left part END -->
                    <!-- Side bar start -->
                    <div class="col-lg-4 col-md-12 pt-2">
                  {{ get_element('sidebar') }}
                    </div>
                    <!-- Side bar END -->
                </div>
            </div>
        </div>
    </div>