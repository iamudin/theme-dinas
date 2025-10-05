      <aside  class="side-bar">

                            <div class="widget recent-posts-entry  bg-white p-3 rounded-3 shadow-sm">
                                <h4 class="widget-title"> <i class="fa fa-newspaper"></i> Riwayat Berita</h4>
                                <div class="widget-post-bx">
                            
                                    @foreach(query()->index_recent('berita',$detail->id ?? false) as $row)
                                    <div class="widget-post clearfix pb-2" style="border-bottom:1px dotted #cccccc">
                                        <div class="dez-post-media"> <img class="rounded" src="{{ $row->thumbnail }}" style="max-height: 60px" alt=""> </div>
                                        <div class="dez-post-info">
                                            <div class="dez-post-header">
                                                <h6 class="post-title"><a href="{{ $row->link }}">{{ $row->title }}</a></h6>
                                            </div>
                                            <div class="dez-post-meta p-0 m-0">
                                              <small> <i class="fa fa-clock"></i> </small>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>
                            @if(get_module(get_post_type())?->form?->category || request()->is('/'))
                            <div class="widget widget_categories">
                                <h4 class="widget-title"> <i class="fa fa-tag"></i> Karegori {{ get_module(get_post_type())?->title ?? 'Berita' }}</h4>
                                <ul>
                                    @foreach(query()->index_category(get_module(get_post_type())?->name  ?? 'berita') as $row)
                                    <li><a href="/{{ $row->url }}">{{ $row->name }}</a> ({{ $row->posts_count }})</li>
                                    @endforeach
                                 
                                </ul>
                            </div>
                            @endif
                            <div class="widget widget_gallery">
                                <h5 class="widget-title">Our services</h5>
                                <ul>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic2.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic1.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic5.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic7.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic8.jpg" alt=""></div></a>
                                    </li>
                                    <li><a href="javascript:void(0);"><div class="dez-post-thum dez-img-overlay1 dez-img-effect zoom-slow">
										<img src="images/gallery/pic9.jpg" alt=""></div></a>
                                    </li>
                                </ul>
                            </div>
                            <div class="widget widget_tag_cloud">
                                <h4 class="tagcloud">Tags</h4>
                                <div class="tagcloud"> <a href="javascript:void(0);">Design</a> <a href="javascript:void(0);">User interface</a> <a href="javascript:void(0);">SEO</a> <a href="javascript:void(0);">WordPress</a> <a href="javascript:void(0);">Development</a> <a href="javascript:void(0);">Joomla</a> <a href="javascript:void(0);">Design</a> <a href="javascript:void(0);">User interface</a> <a href="javascript:void(0);">SEO</a> <a href="javascript:void(0);">WordPress</a> <a href="javascript:void(0);">Development</a> <a href="javascript:void(0);">Joomla</a> <a href="javascript:void(0);">Design</a> <a href="javascript:void(0);">User interface</a> <a href="javascript:void(0);">SEO</a> <a href="javascript:void(0);">WordPress</a> <a href="javascript:void(0);">Development</a> <a href="javascript:void(0);">Joomla</a> </div>
                            </div>
                        </aside>