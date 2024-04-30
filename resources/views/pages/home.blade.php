@extends('layout.master') 
@section('css')
<style>
    .main{
        position: absolute;
        top: 44px; 
        width: 600px; 
        right: 100px;"
    }
    @media screen and (max-width: 992px) {
     .main{
        position: relative;
        right: 10px;
        width: 100%;
     }
    }
    @media only screen and (max-width: 600px) {
        .main{
            position: relative;
            top: 10px;
            width: 100%;
            right: 0px;
            margin-bottom: 30px;
        }
    }
</style>
@stop
@section('body') 

    <div id="banner" class="carousel slide carousel-fade mtopbanner" data-ride="carousel" data-interval="5000"  style="position:relative;">
    <!-- Indicators -->
    <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="banner-image">
                    <img class="app_screen one wow fadeInDown" src="{{asset('assets')}}/img/banner/banner4.jpg" alt="Unveil the glory of comfort in Modular Kitchens">
                    <div class="carousel-caption">
                    <div class="app_banner_contentmt mt_60 wow fadeInUp">
                        <h1 class="" data-wow-delay="0.2s"> Unveil the glory of comfort<br /> in Modular Kitchens </h1>
                        <a href="collections.html">View Collections</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="banner-image">
                    <img class="app_screen one wow fadeInDown" src="{{asset('assets')}}/img/banner/banner5.jpg" alt="Explore the innovative designs with German Technology">
                    <div class="carousel-caption">
                    <div class="app_banner_contentmt mt_60 wow fadeInUp">
                        <h2 class="" data-wow-delay="0.2s"> Explore the innovative <br />designs with German<br> Technology </h2>
                        <a href="collections.html">View Collections</a>
                    </div>
                    </div>
                </div>
            </div>
            <div class="item ">
                <div class="banner-image">
                    <img class="app_screen one wow fadeInDown" src="{{asset('assets')}}/img/banner/banner3.jpg" alt="More than 14 years of trust with our clients">
                    <div class="carousel-caption">
                    <div class="app_banner_contentmt mt_60 wow fadeInUp">
                        <h2 class="" data-wow-delay="0.2s"> More than 14 years of trust <br /> withour clients </h2>
                        <a href="collections.html">View Collections</a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#banner" data-slide="prev">
            <span class="back"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#banner" data-slide="next">
            <span class="next"></span>
            <span class="sr-only">Next</span>
        </a>

        <div class="main" >
            <div class="card" style="   background: linear-gradient(24deg, rgb(29 163 220 / 83%) 26%, rgb(35 86 159 / 82%) 69%); border-radius: 10px;">
                <div class="row" style="margin-left: 25px; margin-right: 25px">
                    <form>
                        <div class="col-md-6 m-5">
                        <label class="lbltxt" style="color: white"> Name <span style="color:red">*</span>
                        </label>
                        <input class="form-control " type="text" placeholder="Enter Name" id="txtname" />
                        </div>
                        <div class="col-md-6 m-5">
                        <label class="lbltxt" style="color: white"> Email</label>
                        <input class="form-control " type="text" placeholder="Enter Email" id="txtemail" />
                        </div>
                        <div class="col-md-6 m-5">
                        <label class="lbltxt" style="color: white"> Phone Number <span style="color:red">*</span>
                        </label>
                        <input class="form-control" type="text" placeholder="Enter Valid 10 Digit Number" id="txtphone" onkeypress=" return isNumber(event)" />
                        </div>
                        <div class="col-md-6 m-5">
                        <label class="lbltxt" style="color: white"> Alternate Number</label>
                        <input class="form-control" type="text" placeholder="Enter Valid 10 Digit Number" id="txtaltphone" />
                        </div>
                        <div class="col-md-12 m-5">
                        <label class="lbltxt" style="color: white"> Residing City <span style="color:red">*</span>
                        </label>
                        <input class="form-control " type="text" placeholder="Enter City Name" id="txtcity" />
                        </div>
                        <div class="col-md-12 m-5">
                        <label class="lbltxt" style="color: white"> Message</span>
                        </label>
                        <textarea class="form-control" cols="4" rows="4" id="txtmessage"></textarea>
                        </div>
                        <div class="col-md-6 m-5 " style="margin-bottom: 30px">
                        <input class="btn btn-primary  btn-lg m-6" type="button" value="Submit" onclick="submitrecord()" />
                        </div>
                    <form>
                </div>
            </div>
           
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="row">
        <div class="col-md-6">

        </div>
        <div class="col-md-6">
        
        </div>
    </div>
   

    <div class="about-us">
    <div class="container">
        <div class="row">
        <div class="col-sm-5 onlyforbutton">
            <div class="about-content wow fadeInRight" data-wow-delay="250ms">
            <!-- <h3>About us</h3> -->
            <h1>DAF: The brand, <br /> we trust </h1>
            <p> Three pillars support DAF's progress in India accuracy, quality, and creative designs. The brand, which has been in India for more than 14 years, has altered how the Indian market operates. </p>
            <a href="aboutus">About Us <i class="fas fa-arrow-right "></i>
            </a>
            </div>
        </div>
        <div class="col-sm-7">
            <div class="about-img wow fadeInLeft" data-wow-delay="200ms">
            <img src="{{asset('assets')}}/img/about.jpg" alt="DAF: The brand trust" />
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>

    <div class="clearfix"></div>
    <div class="product-category" style="background-image: url({{asset('assets')}}/img/sketch.jpg)">
    <div class="container">
        <div class="row">
        <div class="col-sm-4">
            <div class="about-content wow fadeInleft" data-wow-delay="250ms">
            <h3>WHAT WE COLLECT</h3>
            <h2>Your ideal kitchen is here!</h2>
            <p> The combination of classic styles, fresh concepts, and skilled craftsmanship will offer you the low cost modular kitchen of your dreams. </p>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="row">
            <div class="col-sm-4">
                <div class="services-sec">
                <a href="modern.html">
                    <img src="{{asset('assets')}}/img/sevices1-1.jpg" alt="Modern" />
                    <h3>
                    <span>Modern</span>
                    </h3>
                </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-sec">
                <a href="classical.html">
                    <img src="{{asset('assets')}}/img/sevices1-2.jpg" alt="Classical" />
                    <h3>
                    <span>Classical</span>
                    </h3>
                </a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="services-sec">
                <a href="wardrobe.html">
                    <img src="{{asset('assets')}}/img/sevices1-3.jpg" alt="Warddrobs" />
                    <h3>
                    <span>Warddrobs </span>
                    </h3>
                </a>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="about-bottom-sec">
    <div class="container">
        <div class="row">
        <h2 class="text-center d-block mb-5"> Why <span style="color:#4ea9e0">Buy</span> from <span style="color:#4ea9e0 !important">us</span>
        </h2>
        <div class="whybuy">
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon1.png" alt="ACCURATE ENGINEERING" />
            <div>
                <h3>ACCURATE ENGINEERING</h3>
                <p> DAF, known for its exceptional engineering and sometimes compared to the automobile industry, guarantees the best modular kitchen for your house. </p>
            </div>
            </div>
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon2.png" alt="We design a modular kitchen that reflects your vision and personality" />
            <div>
                <h3>CUSTOMIZED</h3>
                <p> We design a modular kitchen that reflects your vision and personality. </p>
            </div>
            </div>
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon3.png" alt="TROPICAL CLIMATE KITCHENS" />
            <div>
                <h3>TROPICAL CLIMATE KITCHENS</h3>
                <p> Your kitchen will be shielded from steam and humidity thanks to Häcker's laser bonding technology, making it suited to tropical conditions. </p>
            </div>
            </div>
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon4.png" alt="MAXIMUM PERFORMANCE" />
            <div>
                <h3>MAXIMUM PERFORMANCE</h3>
                <p>The most excellent performance and quality for every euro paid.</p>
            </div>
            </div>
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon5.png" alt="GERMAN PRODUCT" />
            <div>
                <h3>GERMAN PRODUCT</h3>
                <p> 100% GERMAN PRODUCT 92% automated production facilities in Germany's Rödinghausen and Venne. </p>
            </div>
            </div>
            <div class="fromus">
            <img src="{{asset('assets')}}/img/icon6.png" alt="ECOLOGICALLY AWARENESS" />
            <div>
                <h3>ECOLOGICALLY AWARENESS</h3>
                <p> We follow all international guidelines for sanitary and green kitchens. </p>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="product-category sc-black" style="background-image: url({{asset('assets')}}/img/collect2.jpg)">
    <div class="container">
        <div class="row">
        <div class="col-sm-6">
            <div class="about-content wow fadeInleft" data-wow-delay="250ms">
            <!--<h3>PROMO VIDEO</h3>-->
            <h2>A journey from Germany to your house</h2>
            <p> Since the kitchen serves as the social hub of the house, no two DAF kitchens are the same. You will experience the design, customization, manufacturing process, and installation of a DAF kitchen. </p>
            <a href="#">More Videos <i class="fas fa-play"></i>
            </a>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="row">
            <div class="video">
                <iframe width="100%" height="330" src="https://www.youtube.com/embed/Xqoz5BGljOQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <hr>
    <div class="clearfix"></div>
    <div class="container mtop">
    <div class="row">
        <div class="col-sm-12">
        <div class="about-content" data-wow-delay="250ms">
            <h2>LOCATION</h2>
            <div class="row">
            <div class="col-md-6">
                <h3>Our Store</h3>
                <ul>
                <li>
                    <b>Lucknow:</b> C43/44, Sai Kripa Plaza, Kalyanpur, Ring Road, Lucknow 226022
                </li>
                <li>
                    <b>Lucknow:</b> Prakash plaza, Near Ramabai Ambedkar, Maidan, Shaheed Path, Lucknow 226025
                </li>
                <li>
                    <b>Raebareily: </b> Rana Nagar Opposite bank of Baroda, Kanpur road, Raebareili 229001
                </li>
                </ul>
            </div>
            <div class="col-md-6 pl-5">
                <h3>Upcoming Store</h3>
                <ul>
                <li>Kanpur</li>
                <li>Raebareily</li>
                </ul>
            </div>
            </div>
        </div>
        </div>
    </div>
    </div>
    <div class="clearfix"></div>
    <div class="container">
    <div class="row">
        <div class="col-sm-12">
        <div class="about-content" data-wow-delay="250ms">
            <h3>LEARN MORE</h3>
            <h2>DAF Kitchens: Why?</h2>
            <p> One of the most renowned luxury modular kitchen brands in the India is DAF. We are a well-known brand with a reputation for quality, use, longevity, and design. Modern machinery and advanced manufacturing techniques are used in our German manufacturing plant. Our team of talented specialists always researches and comes up with creative ideas. DAF caters to every market sector, from competitive pricing to medium-high end and premium. </p>
            <br>
            <br>
        </div>
        </div>
    </div>
    </div>
 @stop