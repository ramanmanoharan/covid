@include('header1')


        <section class="page-header">
            <div class="container">
                <h2>News Details</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><span>COVID19 Details</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="blog-details">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details__main">
                            <div class="blog-details__image">
                                <img src="assets/images/blog/blog-d-1-1.jpg" alt="">
                            </div><!-- /.blog-details__image -->
                            <div class="blog-details__content">
                                <ul class="blog-one__meta list-unstyled">
                                    <li><a href="#">{{ $datas['created_at'] }}</a></li>
                                    <li><a href="#">2 Comments</a></li>
                                </ul><!-- /.blog-one__meta list-unstyled -->
                                <h3>{{ $datas['title'] }}</h3>
                                <p>{{ $datas['name'] }}</p>
                            </div><!-- /.blog-details__content -->
                            <div class="blog-details__meta">
                                <div class="blog-details__tags">
                                    <span>Tags: </span> <a href="#">Coronavirus,</a> <a href="#">Prevention,</a> <a href="#">Facemask</a>
                                </div><!-- /.blog-details__tags -->
                                <div class="blog-details__share">
                                    <a href="#" class="fab fa-facebook-square"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-instagram"></a>
                                    <a href="#" class="fab fa-pinterest-p"></a>
                                </div><!-- /.blog-details__share -->
                            </div><!-- /.blog-details__meta -->
                        </div><!-- /.blog-details__main -->

                        <div class="blog-author">
                            <div class="blog-author__image">
                                <img src="../uploads/{{ $datas['image_name'] }}" alt="">
                            </div><!-- /.blog-author__image -->
                            <div class="blog-author__content">
                                <h3>{{ $datas['name'] }}</h3>
                                <p>{{ $datas['description'] }}.</p>
                            </div><!-- /.blog-author__content -->
                        </div><!-- /.blog-author -->

                        <div class="comment-one">
                            <h3 class="comment-one__block-title">2 Comments</h3><!-- /.comment-one__block-title -->
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-1.jpg" alt="">
                                </div><!-- /.comment-one__image -->
                                <div class="comment-one__content">
                                    <h3>Eugenia Floyd</h3>
                                    <p class="comment-one__date">20 Mar, 2020 <span>.</span> 4:00 pm</p>
                                    <p>Lorem Ipsum is simply dummy free text of the available printing and typesetting been the
                                        industry standard dummy text ever sincer condimentum purus.</p>
                                </div><!-- /.comment-one__content -->
                                <a href="#" class="thm-btn comment-one__btn">Reply</a><!-- /.thm-btn comment-one__btn -->
                            </div><!-- /.comment-one__single -->
                            <div class="comment-one__single">
                                <div class="comment-one__image">
                                    <img src="assets/images/blog/comment-1-2.jpg" alt="">
                                </div><!-- /.comment-one__image -->
                                <div class="comment-one__content">
                                    <h3>Nellie Hanson</h3>
                                    <p class="comment-one__date">20 Mar, 2020 <span>.</span> 4:00 pm</p>
                                    <p>Lorem Ipsum is simply dummy free text of the available printing and typesetting been the
                                        industry standard dummy text ever sincer condimentum purus.</p>
                                </div><!-- /.comment-one__content -->
                                <a href="#" class="thm-btn comment-one__btn">Reply</a><!-- /.thm-btn comment-one__btn -->
                            </div><!-- /.comment-one__single -->
                        </div><!-- /.comment-one -->
                        <div class="comment-form">
                            <h3 class="comment-one__block-title">Leave a Comment</h3><!-- /.comment-one__block-title -->
                            <form action="inc/sendemail.php" class="contact-form-validated contact-one__form">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Name" name="name">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Email Address" name="email">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Phone Number" name="phone">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-6">
                                        <input type="text" placeholder="Subject" name="subject">
                                    </div><!-- /.col-lg-6 -->
                                    <div class="col-lg-12">
                                        <textarea placeholder="Write Message" name="message"></textarea>
                                    </div><!-- /.col-lg-12 -->
                                    <div class="col-lg-12 text-left">
                                        <button type="submit" class="thm-btn contact-one__btn">Submit Comment</button>
                                        <!-- /.thm-btn contact-one__btn -->
                                    </div><!-- /.col-lg-12 -->
                                </div><!-- /.row -->
                            </form><!-- /.contact-one__form -->
                        </div><!-- /.comment-form -->
                    </div><!-- /.col-lg-8 -->
                    <div class="col-lg-4">
                        <div class="sidebar">
                            <div class="sidebar__single sidebar__search">
                                <form action="#" class="sidebar__search-form">
                                    <input type="text" name="search" placeholder="Search here...">
                                    <button type="submit"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__post">
                                <h3 class="sidebar__title">Latest Posts</h3><!-- /.sidebar__title -->
                                @foreach($alldata as $key => $e)
                                <div class="sidebar__post-wrap">
                                    <div class="sidebar__post__single">
                                        <div class="sidebar__post-image">
                                            <div class="inner-block"><img src="../uploads/{{ $e['image_name'] }}" alt="Awesome Image" /></div>
                                            <!-- /.inner-block -->
                                        </div><!-- /.sidebar__post-image -->
                                        <div class="sidebar__post-content">
                                            <h4 class="sidebar__post-title"><a href="../details/{{ $e['id'] }}">{{ $e['title'] }}</a></h4>
                                            <!-- /.sidebar__post-title -->
                                        </div><!-- /.sidebar__post-content -->
                                    </div><!-- /.sidebar__post__single -->
                                   
                                </div><!-- /.sidebar__post-wrap -->
                                @endforeach
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__category">
                                <h3 class="sidebar__title">Categories</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__category-list">
                                    <li class="sidebar__category-list-item"><a href="#">Coronavirus</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Virus Thread</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Corona Spread</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Face Mask</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Hand Wash Procedure</a></li>
                                    <li class="sidebar__category-list-item"><a href="#">Virus Prevention</a></li>
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single sidebar__tags">
                                <h3 class="sidebar__title">Tags</h3><!-- /.sidebar__title -->
                                <ul class="sidebar__tags-list">
                                    <li class="sidebar__tags-list-item"><a href="#">Coronavirus,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Prevention,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Facemask,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Handwashing,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Virus,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">COVID19,</a></li>
                                    <li class="sidebar__tags-list-item"><a href="#">Coronaspread,</a></li>
                                </ul><!-- /.sidebar__category-list -->
                            </div><!-- /.sidebar__single -->
                        </div><!-- /.sidebar -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.blog-details -->


@include('footer1')