@extends('layouts.site')
@section('content')
    <div class="page-content">
        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50 bg-gray">
            <div class="container">
                <!-- BLOG GRID START -->
                <div class="portfolio-wrap wt-blog-grid-3 row">
                    <!-- COLUMNS 1 -->
                    <div class="post masonry-item col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <div class="blog-post blog-grid date-style-1 radius-md overflow-hide bg-white">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="#"><img src="{{asset('/site/images/blog/grid/pic1.jpg')}}" alt=""></a>
                            </div>
                            <div class="wt-post-info p-a30 p-m30">
                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="#">Learn and Practice Financial plan</a></h3>
                                </div>
                                <div class="wt-post-meta text-black">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar site-text-primary"></i><strong>20 March</strong> <span> 2023</span> </li>
                                        <li class="post-comment"><i class="fa fa-comments site-text-primary"></i> <a href="blog-post.html">0 Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam.</p>
                                </div>
                                <div class="wt-post-readmore m-b0">
                                    <a href="blog-post.html" title="READ MORE" rel="bookmark" class="site-button">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- BLOG GRID END -->

                <!-- PAGINATION START -->
                <div class="pagination-bx col-lg-12 clearfix ">
                    <ul class = "custom-pagination pagination-1">
                        <li><a href = "#">&laquo;</a></li>
                        <li class = "active"><a href = "#">1</a></li>
                        <li><a href = "#">2</a></li>
                        <li><a href = "#">3</a></li>
                        <li><a href = "#">4</a></li>
                        <li><a href = "#">5</a></li>
                        <li><a href = "#">&raquo;</a></li>
                    </ul>
                </div>
                <!-- PAGINATION END -->

            </div>
        </div>
        <!-- SECTION CONTENT END -->
    </div>
@endsection

