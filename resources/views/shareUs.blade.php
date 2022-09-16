@extends('layouts.app')
@section('content')
    <!--page title start-->

    <section class="page-title overflow-hidden position-relative" data-bg-color="#fbf3ed">
        <canvas id="confetti"></canvas>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <h1 class="title">كن شريك</h1>
                    <p>يمكن من خلال منصتنا عرض افكارك و مشاريعك الينا و سنقوم بالبحث عن ممول لهذه الافكار.</p>
                </div>
{{--                <div class="col-lg-5 col-md-12 text-lg-end mt-3 mt-lg-0">--}}
{{--                    <nav aria-label="breadcrumb" class="page-breadcrumb">--}}
{{--                        <ol class="breadcrumb">--}}
{{--                            <li class="breadcrumb-item"><a href="index.html">الرئيسية</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item"><a href="#">Pages</a>--}}
{{--                            </li>--}}
{{--                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>--}}
{{--                        </ol>--}}
{{--                    </nav>--}}
{{--                </div>--}}
            </div>
        </div>
        <div class="page-title-pattern"><img class="img-fluid" src="images/bg/11.png" alt=""></div>
    </section>

    <!--page title end-->


    <!--body content start-->

    <div class="page-content">

        <!--contact start-->

        <section class="contact-1">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-8 col-md-12">
                        <div class="section-title">
                            <div class="title-effect">
                                <div class="bar bar-top"></div>
                                <div class="bar bar-right"></div>
                                <div class="bar bar-bottom"></div>
                                <div class="bar bar-left"></div>
                            </div>
                            <h6>كن شريك</h6>

                            <h2>ابقي علي مشاركة افكارك الينا</h2>
                            <p>هذه المنصة تحتوي علي كبار المستثمرين لتمويل الافكار الجديدة.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <form method="POST" action="{{route('share.us.message')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="messages"></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
{{--                                        <label class="mb-2">الاسم الاول</label>--}}
                                        <input id="first_name" type="text" name="first_name" class="form-control" placeholder="الاسم الاول" required="required" data-error="الاسم الاول مطلوب.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
{{--                                        <label class="mb-2">اسم الاخير</label>--}}
                                        <input id="last_name" type="text" name="last_name" class="form-control" placeholder="اسم العائلة" required="required" data-error="اسم العائلة مطلوب.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
{{--                                        <label class="mb-2">Email Address</label>--}}
                                        <input id="email" type="text" name="email" class="form-control" placeholder="البريد الاكتروني" required="required" data-error="البريد الاكتروني مطلوب.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
{{--                                        <label class="mb-2">Phone Number</label>--}}
                                        <input id="phone" type="text" name="phone" class="form-control" placeholder="رقم الهاتف" required="required" data-error="رقم الهاتف مطلوب.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
{{--                                        <label class="mb-2">Message</label>--}}
                                        <textarea id="message" name="message" class="form-control" placeholder="اكتب رسالة نصية عما يدور بخاطرك" rows="4" required="required" data-error="برجاء ترك لنا رسالة."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
{{--                                    <button class="btn btn-theme btn-circle" data-text="Send Message"><span>S</span><span>e</span><span>n</span><span>d</span>--}}
{{--                                        <span> </span><span>M</span><span>e</span><span>s</span><span>s</span><span>a</span><span>g</span><span>e</span>--}}
{{--                                    </button>--}}
                                    @if(session()->has('success_message'))
                                        <div class="alert alert-success">
                                            {{ session()->get('success_message') }}
                                        </div>
                                    @elseif(session()->has('danger_message'))
                                        <div class="alert alert-danger">
                                            {{ session()->get('danger_message') }}
                                        </div>
                                    @endif
                                    <button class="btn btn-theme btn-circle" name="send_message" type="submit">إرسال</button>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

{{--        <section class="contact-info p-0 z-index-1">--}}
{{--            <div class="container">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-lg-4 col-md-12">--}}
{{--                        <div class="contact-media"> <i class="flaticon-paper-plane"></i><span>Address:</span>--}}
{{--                            <p>423B, Road Wordwide Country, USA</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">--}}
{{--                        <div class="contact-media"> <i class="flaticon-email"></i><span>Email Address</span><a href="mailto:themeht23@gmail.com"> themeht23@gmail.com</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">--}}
{{--                        <div class="contact-media"> <i class="flaticon-social-media"></i><span>Phone Number</span><a href="tel:+912345678900">+91-234-567-8900</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <section class="overflow-hidden p-0 custom-mt-10 z-index-0">--}}
{{--            <div class="container-fluid p-0">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="col-md-12">--}}
{{--                        <div class="map iframe-h-2">--}}
{{--                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.840108181602!2d144.95373631539215!3d-37.8172139797516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1497005461921" allowfullscreen=""></iframe>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

{{--        <!--contact end-->--}}

    </div>

    <!--body content end-->
@endsection
