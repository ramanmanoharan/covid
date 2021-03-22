@include('header')

        <section class="page-header">
            <div class="container">
                <h2>Latest News</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><span>News</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-one">
            <div class="container">
                <div class="row">
                    @foreach($datas as $key => $e)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-one__single">
                            <div class="blog-one__single-inner">
                                <div class="blog-one__image">
                                    <a href="details/{{$e['id']}}">+</a>
                                    <img style="height:250px" src="uploads/{{ $e['image_name'] }}" alt="">
                                </div><!-- /.blog-one__image -->
                                <div class="blog-one__content">
                                    <ul class="blog-one__meta list-unstyled">
                                        <li><a href="details/{{$e['id']}}">{{ $e['created_at'] }} </a></li>
                                        <!-- <li><a href="#">2 Comments</a></li> -->
                                    </ul><!-- /.blog-one__meta list-unstyled -->
                                    <h3><a href="details/{{$e['id']}}">{{ $e['name'] }}</a></h3>
                                </div><!-- /.blog-one__content -->
                            </div><!-- /.blog-one__single-inner -->
                        </div><!-- /.blog-one__single -->
                    </div><!-- /.col-lg-4 -->
                    @endforeach
                    
                </div><!-- /.row -->
                <div class="post-pagination">
                    <a href="#" class="post-pagination__prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#" class="active">1</a>
                    <a href="#">2</a>
                    <a href="#">3</a>
                    <a href="#" class="post-pagination__next"><i class="fa fa-angle-right"></i></a>
                </div><!-- /.post-pagination -->
            </div><!-- /.container -->
        </section><!-- /.blog-one -->

@include('footer')