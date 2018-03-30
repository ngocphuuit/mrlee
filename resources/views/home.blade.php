@extends('layouts.app')

@section('top_background')
	<div class="top-area-bg"></div>
@endsection
@section('welcome_text')
	<div class="welcome-text-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                    <div class="welcome-text">
                        <h1>CONFIG NAME</h1>
                        <h3>khoảnh khắc của bạn là</h3>
                        <h2 class="married-date">niềm vui của chúng tôi</h2>
                        <div class="home-button">
                            <a href="#gallery"><i class="animated fadeInDown fa fa-angle-down"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
	<section class="gallery-area section-padding" id="gallery" style="
    background-color: aliceblue;
">
        <div class="container">
            <div class="row gallery-list">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="single-gallery wow fadeIn">
                        <div class="gallery-img">
                            <img src="/uploads/{{$albums[0]->image}}" alt="">
                        </div>
                        <div class="gallery-overlay"><a class="gallery-popup" href="/uploads/{{$albums[0]->image}}" data-effect="mfp-zoom-out"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="single-gallery wow fadeIn">
                        <div class="gallery-img">
                            <img src="/uploads/{{$albums[1]->image}}" alt="">
                        </div>
                        <div class="gallery-overlay"><a class="gallery-popup" href="/uploads/{{$albums[1]->image}}" data-effect="mfp-zoom-out"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12">
                    <div class="single-gallery wow fadeIn">
                        <div class="gallery-img">
                            <img src="/uploads/{{$albums[2]->image}}" alt="">
                        </div>
                        <div class="gallery-overlay"><a class="gallery-popup" href="/uploads/{{$albums[2]->image}}" data-effect="mfp-zoom-out"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="single-gallery wow fadeIn">
                        <div class="gallery-img">
                            <img src="/uploads/{{$albums[3]->image}}" alt="">
                        </div>
                        <div class="gallery-overlay"><a class="gallery-popup" href="/uploads/{{$albums[3]->image}}" data-effect="mfp-zoom-out"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="single-gallery wow fadeIn">
                        <div class="gallery-img">
                            <img src="/uploads/{{$albums[4]->image}}" alt="">
                        </div>
                        <div class="gallery-overlay"><a class="gallery-popup" href="/uploads/{{$albums[4]->image}}" data-effect="mfp-zoom-out"><i class="fa fa-search-plus"></i></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--GALLERY AREA END-->

    <!--Dịch Vụ-->
    <section class="management-people-area section-padding" id="managent">
        <div class="container">
            <div class="row cauple-and-brides-family">
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 wow fadeIn">
                    {{-- @foreach($categories as $category) --}}
                    <div class="single-management-member">
                        <div class="management-member-img">
                            <a href="/category/{{$categories[0]->slug}}" target="_blank"><img src="/uploads/{{$categories[0]->image}}" alt=""></a>
                        </div>
                        <div class="management-member-details">
                            <h3>{{$categories[0]->name}}</h3>
                            <p>({{$categories[0]->slug}})</p>
                        </div>
                    </div>
                    <div class="single-management-member">
                        <div class="management-member-img">
                            <a href="/category/{{$categories[1]->slug}}" target="_blank"><img src="/uploads/{{$categories[1]->image}}" alt=""></a>
                        </div>
                        <div class="management-member-details">
                            <h3>{{$categories[1]->name}}</h3>
                            <p>({{$categories[1]->slug}})</p>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 wow fadeIn">
                    <div class="cauple-img">
                        <img src="img/important-people/boom_bride.png" alt="">
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-12 col-xs-12 wow fadeIn">
                    {{-- @foreach($categories as $category) --}}
                    <div class="single-management-member">
                        <div class="management-member-img">
                            <a href="/category/{{$categories[2]->slug}}" target="_blank"><img src="/uploads/{{$categories[2]->image}}" alt=""></a>
                        </div>
                        <div class="management-member-details">
                            <h3>{{$categories[2]->name}}</h3>
                            <p>({{$categories[2]->slug}})</p>
                        </div>
                    </div>
                    <div class="single-management-member">
                        <div class="management-member-img">
                            <a href="/category/{{$categories[3]->slug}}" target="_blank"><img src="/uploads/{{$categories[3]->image}}" alt=""></a>
                        </div>
                        <div class="management-member-details">
                            <h3>{{$categories[3]->name}}</h3>
                            <p>({{$categories[3]->slug}})</p>
                        </div>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
        </div>
    </section>
    <!--MANAGEMENT PEOPLE AREA END-->

    <!--BLOG AREA-->
    <section class="blog-area section-padding" id="blog">
        <div class="container">
            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                        <div class="single-blog wow fadeIn">
                            <div class="post-thumbnail blog-home-thumbnail">
                                <a href="/blogs/{{$blog->id}}" target="_blank">
                                    <img src="/uploads/{{$blog->image}}" alt="" width="300" height="300">
                                </a>
                            </div>
                            <div class="post-details">
                                <div class="post-title-and-date">
                                    <h3><a href="/blogs/{{$blog->id}}">{{$blog->title}}</a></h3>
                                    <!--<p class="postmeta"><a href="#">25 October 2016</a></p>-->
                                    <p class="postmeta"><a href="javascript:void(0)">{{$blog->created_at->format('Y-m-D')}}</a></p>
                                </div>
                                <p>{{$blog->description}}</p>
                                <a href="/blog/{{$blog->id}}" class="read-more">Read More...</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--BLOG AREA END-->

    <!--ĐÁNH GIÁ CỦA KHÁCH HÀNG-->
    <section class="wisher-area section-padding" id="wisher">
        <div class="wisher-area-bg"></div>
        <div class="container">
            <div class="row wow fadeIn">
                <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12 wisher-slider">
                    <div class="row single-wisher">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="single-wisher-member">
                                <div class="wisher-member-img">
                                    <img src="img/wishes-person/wisher_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-6 col-xs-12">
                            <div class="single-friends-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer. </p>
                                <p class="wishes-member-name">John Anjelina</p>
                            </div>
                        </div>
                    </div>
                    <div class="row single-wisher">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="single-wisher-member">
                                <div class="wisher-member-img">
                                    <img src="img/wishes-person/wisher_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-6 col-xs-12">
                            <div class="single-friends-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer. </p>
                                <p class="wishes-member-name">John Anjelina</p>
                            </div>
                        </div>
                    </div>
                    <div class="row single-wisher">
                        <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
                            <div class="single-wisher-member">
                                <div class="wisher-member-img">
                                    <img src="img/wishes-person/wisher_1.jpg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-7 col-md-offset-1 col-lg-offset-1 col-sm-6 col-xs-12">
                            <div class="single-friends-description">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer. </p>
                                <p class="wishes-member-name">John Anjelina</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--WISHER AREA END-->

    <!--STORY AREA-->
    <section class="story-area section-padding" id="story">
        <div class="container">
            <div class="row story-list">
                <div class="single-story wow fadeIn">
                    <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                        <div class="single-story-image">
                            <div class="story-img">
                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t31.0-8/13268123_1044977878927080_8380112333984247298_o.jpg?oh=d0ed61604a1350c248fffb3de4217bfc&oe=5A33486C" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
                        <div class="single-story-details">
                            <h3>Chuyên Nghiệp</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
                <div class="single-story wow fadeIn">
                    <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                        <div class="single-story-image">
                            <div class="story-img">
                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t31.0-8/13268123_1044977878927080_8380112333984247298_o.jpg?oh=d0ed61604a1350c248fffb3de4217bfc&oe=5A33486C" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
                        <div class="single-story-details">
                            <h3>Nhiệt Tình</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                </div>
                <div class="single-story wow fadeIn">
                    <div class="col-md-5 col-lg-5 col-sm-6 col-xs-12">
                        <div class="single-story-image">
                            <div class="story-img">
                                <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t31.0-8/13268123_1044977878927080_8380112333984247298_o.jpg?oh=d0ed61604a1350c248fffb3de4217bfc&oe=5A33486C" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 col-sm-6 col-xs-12">
                        <div class="single-story-details">
                            <h3>Cháy Hết Mình</h3>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <!-- <a href="#" class="read-more">Read more <i class="fa fa-angle-right"></i></a> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--STORY AREA END-->

    <!--EVENT AREA-->
    <section class="event-area section-padding" id="event" style="background-color: aliceblue">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-event wow fadeIn">
                        <div class="event-hidding">
                            <h3>BABY 1</h3>
                        </div>
                        <div class="event-details">
                            <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20031886_1431836556907875_291205567028023515_n.jpg?oh=a19708cb5eaff1005969e1a2a3c1f425&oe=5A3146E6" alt="">
                            <div class="table-price" style="position: absolute; top: 0">
                                <div class="table-price-content">
                                    <p>10 file ảnh đã chỉnh sửa photoshop</p>
                                    <p>Toàn bộ ảnh gốc của buổi chụp </p>
                                    <p>Hình chụp 100 - 150 files </p>
                                </div>
                                <a href="#" >700.000<span>VND</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-event wow fadeIn">
                        <div class="event-hidding">
                            <h3>BABY 2</h3>
                        </div>
                        <div class="event-details">
                            <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20031886_1431836556907875_291205567028023515_n.jpg?oh=a19708cb5eaff1005969e1a2a3c1f425&oe=5A3146E6" alt="">
                            <div class="table-price" style="position: absolute; top: 0">
                                <div class="table-price-content">
                                    <p>20 files ảnh đã chỉnh sửa photoshop</p>
                                    <p>Toàn bộ ảnh gốc của buổi chụp </p>
                                    <p>Chụp không giới hạn file</p>
                                    <p style="color: red">20 ảnh ép lụa 13x18cm</p>
                                    <p style="color: red">01 ảnh ép gỗ laminate cao cấp 30x45cm</p>
                                </div>
                                <a href="#" >1.100.000<span>VND</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-event wow fadeIn">
                        <div class="event-hidding">
                            <h3>BABY 3</h3>
                        </div>
                        <div class="event-details">
                            <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/20031886_1431836556907875_291205567028023515_n.jpg?oh=a19708cb5eaff1005969e1a2a3c1f425&oe=5A3146E6" alt="">
                            <div class="table-price" style="position: absolute; top: 0">
                                <div class="table-price-content">
                                    <p>40 files ảnh đã chỉnh sửa photoshop</p>
                                    <p>Toàn bộ ảnh gốc của buổi chụp </p>
                                    <p>Chụp không giới hạn file</p>
                                    <p style="color: red">01 ảnh ép gỗ laminate cao cấp 40x60cm</p>
                                    <p style="color: red">01 album photobook 30 trang 20x20</p>
                                    <p style="color: red">01 slide DVD ảnh trình chiếu</p>

                                </div>
                                <a href="#" >2.300.000<span>VND</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                    <div class="single-event wow fadeIn">
                        <div class="event-hidding">
                            <h3>FAMILY</h3>
                        </div>
                        <div class="event-details">
                            <img src="https://scontent.fsgn5-4.fna.fbcdn.net/v/t1.0-9/19990050_1431836396907891_9107962490834903738_n.jpg?oh=331d4500e0644b0f0062336e2ea2b78a&oe=5A33A3B8" alt="">
                            <div class="event-schedule-details">
                                <div class="event-schedule">Schedule</div>
                                <div class="event-time-and-date">
                                    <p>Date : 14 Feb 2016 </p>
                                    <p>Time : 12:30 pm </p>
                                    <p>Location : 55/2 United state Austica </p>
                                    <p>Dress Code : White, Red, Pink</p>
                                </div>
                                <a href="#" >9.999.999<span>VND</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--EVENT AREA END-->

    <!--CONTACT US AREA-->
    <section class="contact-area" id="contact">
        <div class="top-party-attendance-area section-padding">
            <div class="party-area-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="contact-form-area wow fadeIn">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-9 col-lg-9 col-sm-6 col-xs-12">
                                        <div class="single-footer-widget wow fadeIn">
                                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.223199036126!2d106.6983703154183!3d10.794209992309465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317528b5fb5a28a7%3A0x143c08d26ebfaf15!2zOSDEkGnhu4duIEJpw6puIFBo4bunLCBQaMaw4budbmcgMTUsIELDrG5oIFRo4bqhbmgsIEjhu5MgQ2jDrSBNaW5oLCBWaWV0bmFt!5e0!3m2!1sen!2s!4v1501120426716" width="100%" height="310" frameborder="0" style="border:0" allowfullscreen></iframe>
                                        </div>
                                    </div>
                                    <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12">
                                        <div class="single-footer-widget wow fadeIn">
                                            <h3>Contact</h3>
                                            <ul class="footer-contact">
                                                <li>
                                                    <div class="single-contact">
                                                        <div class="contact-icon"><i class="fa fa-phone"></i></div>
                                                        <div class="feed-details">
                                                            <a href="callto:+8800000000000" style="color: white">01653 732 072</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-contact">
                                                        <div class="contact-icon"><i class="fa fa-facebook"></i></div>
                                                        <div class="feed-details">
                                                            <a href="https://www.facebook.com/chuphinhbabydep" style="color: white" target="_blank">facebook.com/chuphinhbabydep</a>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="single-contact">
                                                        <div class="contact-icon"><i class="fa fa-map-marker"></i></div>
                                                        <div class="feed-details">
                                                            <address>479/38 Phan Văn Trị, P.5, Q.Gò Vấp, TP Hồ Chí Minh</address>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--CONTACT US AREA END-->
@endsection