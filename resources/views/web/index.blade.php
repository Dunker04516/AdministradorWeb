@extends('layouts.web')

@section('main')
    <header class="container-fluid header">
        <div class="mouse-scroll"></div>
        <div class="row">
            <div class="col">
                <div class="extra-lg-text">
                    {!! $normal !!}
                    <span class="other-color">{{ $color }}</span>
                </div>
            </div>
        </div>
    </header>
    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-6">
                <div class="boxy c1-color">
                    <div class="row">
                        <div class="col">
                            <h1 class="title">LOGO MARKS &<br>
                                BRANDING</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-5">
                            <div class="text">
                                <ul>
                                    <li>logo marks</li>
                                    <li>Brand strategy</li>
                                    <li>design systems</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-7">
                            <div class="text">
                                <ul>
                                    <li>Brand identity</li>
                                    <li>Brand architecture</li>
                                    <li>Naming & verbal identity</li>
                                    <li>Launch & brand campaigns</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxy img-box">
                    <div class="img"><img src="{{ asset('web/assets/images/img1.png') }}" alt=""></div>
                    <div class="bottom-text">
                        <div class="link">VIEW THIS PROJECT</div>
                        <div class="text">Hubble eye lenses branding</div>
                    </div>
                    <a href="project.html" class="project-link-full"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-6">
                <div class="boxy primary-color">
                    <div class="row">
                        <div class="col">
                            <h1 class="title">USER INTERFACES<br>
                                & EXPERIENCES</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-5">
                            <div class="text">
                                <ul>
                                    <li>Digital content</li>
                                    <li>interfaces</li>
                                    <li>product design</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-7">
                            <div class="text">
                                <ul>
                                    <li>USER EXPERIENCE</li>
                                    <li>interactivity</li>
                                    <li>CONTENT PRODUCTION</li>
                                    <li>Checkout optimization</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxy img-box">
                    <div class="img"><img src="{{ asset('web/assets/images/img2.png') }}" alt=""></div>
                    <div class="bottom-text">
                        <div class="link">VIEW THIS PROJECT</div>
                        <div class="text">UIUX Design for travel agency</div>
                    </div>
                    <a href="project.html" class="project-link-full"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-6">
                <div class="boxy default-color">
                    <div class="row">
                        <div class="col">
                            <h1 class="title">frontend<br>
                                development</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="text">
                                <ul>
                                    <li>Platform migrations</li>
                                    <li>HTML5 & CSS</li>
                                    <li>GULP / VUE.JS FRAMEWORKS</li>
                                    <li>RUBY ON RAILS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxy img-box">
                    <div class="img"><img src="{{ asset('web/assets/images/img3.png') }}" alt=""></div>
                    <div class="bottom-text">
                        <div class="link">VIEW THIS PROJECT</div>
                        <div class="text">CoinView App development</div>
                    </div>
                    <a href="project.html" class="project-link-full"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid box-content">
        <div class="row">
            <div class="col-md-6">
                <div class="boxy c2-color">
                    <div class="row">
                        <div class="col">
                            <h1 class="title">PACKAGE DESIGN</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-5">
                            <div class="text">
                                <ul>
                                    <li>PACKAGing design</li>
                                    <li>Retail design</li>
                                    <li>Interior design</li>
                                    <li>PRINT DESIGN</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-12 col-lg-7">
                            <div class="text">
                                <ul>
                                    <li>STATIONERY DESIGN</li>
                                    <li>printing & production</li>
                                    <li>GIFT ITEMS</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="boxy img-box">
                    <div class="img"><img src="{{ asset('web/assets/images/img4.png') }}" alt=""></div>
                    <div class="bottom-text">
                        <div class="link">VIEW THIS PROJECT</div>
                        <div class="text">Hubble package design</div>
                    </div>
                    <a href="project.html" class="project-link-full"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid default-content">
        <div class="row">
            <div class="col">
                <div class="lg-text">
                    <span>Awwward winning</span><br>
                    <span>london-based product</span><br>
                    <span class="other-color">design studio.</span>
                </div>
                <div class="normal-text">
                    <p>But I must explain to you how all this mistaken idea of denouncing<br>
                        pleasure and praising pain was born and I will give you a complete<br>
                        account of the system.</p>
                </div>
                <div class="btn-holder">
                    <a href="about.html" class="cr-btn primary">more about us</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid clients-section">
        <div class="row">
            <div class="col">
                <div class="lg-text">
                    <span>DELIGHTING OUR</span><br>
                    <span>CLIENTS IS OUR</span><br>
                    <span>MISSION.</span>
                </div>
                <div class="normal-text">
                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising<br> pain
                        was born and I will give you a complete account of the system.</p>
                </div>
                <div class="clients-logos">
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client1.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client2.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client3.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client4.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client5.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client6.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client7.png') }}" alt="">
                    </div>
                    <div class="logo-holder"><img src="{{ asset('web/assets/images/client8.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid other-content">
        <div class="row">
            <div class="col">
                <div class="lg-text">have a project<br>for us?</div>
                <div class="normal-text">
                    <p>Contact us and we’ll send you the brief form to fill.<br>
                        Then we’ll contact you within 24 hours.</p>
                </div>
                <div class="btn-holder">
                    <a href="#" class="cr-btn ex-padding">let’s cre8</a>
                </div>
            </div>
        </div>
    </div>
@endsection
