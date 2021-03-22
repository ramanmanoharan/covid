@include('header')
        <section class="page-header">
            <div class="container">
                <h2>Contact</h2>
                <ul class="thm-breadcrumb list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><span>Contact</span></li>
                </ul><!-- /.thm-breadcrumb -->
            </div><!-- /.container -->
        </section><!-- /.page-header -->

        <section class="contact-one">
            <div class="container">
                <div class="block-title text-center">
                    <p>Contact With Us</p>
                    <h3>Still Have a Question?</h3>
                </div><!-- /.block-title -->
                <form action="inc/sendemail.php" class="contact-form-validated contact-one__form">
                    <div class="row">
                        <div class="col-lg-6">
                            <input type="text" name="name" placeholder="Name">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="email" placeholder="Email Address">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <input type="text" name="phone" placeholder="Phone Number">
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6">
                            <select class="selectpicker" name="discuss">
                                <option value="">Discussion For</option>
                                <option value="#">For Test Kit</option>
                                <option value="#">For Quarentien</option>
                            </select><!-- /#.selectpicker -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-12">
                            <input type="text" name="subject" placeholder="Subject">
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12">
                            <textarea name="message" placeholder="Write Message"></textarea>
                        </div><!-- /.col-lg-12 -->
                        <div class="col-lg-12 text-center">
                            <button type="submit" class="thm-btn contact-one__btn">Send Message</button>
                            <!-- /.thm-btn contact-one__btn -->
                        </div><!-- /.col-lg-12 -->
                    </div><!-- /.row -->
                </form><!-- /.contact-one__form -->
                <div class="result"></div><!-- /.result -->
            </div><!-- /.container -->
        </section><!-- /.contact-one -->

        <section class="contact-info-one">
            <div class="container">
                <div class="inner-container">
                    <div class="contact-info-one__icon">
                        <i class="vimns-icon-phone"></i>
                    </div><!-- /.contact-info-one__icon -->
                    <div class="contact-info-one__content">
                        <div class="contact-info-one__box">
                            <div class="contact-info-one__box-inner">

                                <h3>Visit Hospital</h3>
                                <p>855 Road Broklyn Street, USA</p>

                            </div><!-- /.contact-info-one__box-inner -->
                        </div><!-- /.contact-info-one__box -->
                        <div class="contact-info-one__box">
                            <div class="contact-info-one__box-inner">

                                <h3>Call Now</h3>
                                <p><a href="tel:666-888-0000">666 888 0000</a></p>

                            </div><!-- /.contact-info-one__box-inner -->
                        </div><!-- /.contact-info-one__box -->
                        <div class="contact-info-one__box">
                            <div class="contact-info-one__box-inner">

                                <h3>Send Email</h3>
                                <p><a href="mailto:info@vimns.com">info@covid19.com</a></p>

                            </div><!-- /.contact-info-one__box-inner -->
                        </div><!-- /.contact-info-one__box -->
                    </div><!-- /.contact-info-one__content -->
                </div><!-- /.inner-container -->
            </div><!-- /.container -->
        </section><!-- /.contact-info-one -->
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30704001.00520028!2d64.3952762728398!3d20.048474095562714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1586264331020!5m2!1sen!2sin"  class="google-map__contact" allowfullscreen></iframe>

      <!--   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd" class="google-map__contact" allowfullscreen></iframe>
 -->

 @include('footer')