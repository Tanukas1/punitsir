@extends('layout.master')
@section('css')
<style>
    .content:before {
    content: '';
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #208fd29c;
    transform: skewX(323deg) translateX(-40%);
    left: 0px;
    top: 0px;
}
@media screen and (max-width: 600px){
    .content:before {
    content: '';
    position: absolute;
    width: 90%;
    height: 100%;
    background-color: #208fd29c;
    transform: skewX(323deg) translateX(-40%);
    left: 0px;
    top: 0px;
}
}
.associations {
    float: left;
    width: 100%;
    padding: 0px 0 0;
}
.container .pdall{
    background: linear-gradient(24deg, rgb(29 163 220) 26%, rgb(35 86 159) 69%); 
    border-radius: 10px;
    width: 100%; 
    position: relative;
    left: 168px;
}
@media screen  and (max-width: 600px){
    .container .pdall{
        left: 0px;
    }
    
}
</style>
@stop
@section('body')

<div class="inner-product-banner" style="background-image: url(wp-admin/images/banner1.jpg)">
                        <div class="container">
                            <h2>Contact Us</h2>
                            <img src="" />
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="associations">
                        <div id="pl-699" class="panel-layout">
                            <div id="pg-699-0" class="panel-grid panel-has-style">
                                <!-- <div class="container panel-row-style panel-row-style-for-699-0">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <p class="p-5 fs-1">
                                                You are just a click away from your dream modular kitchen! Meet our
                                                design experts and uncover the beautiful and functional kitchen
                                                experience with DAF Modular Kitchen.
                                                Book a free design consultation today!
                                                Have some queries? Contact us today and take a step towards your
                                                personalised kitchen.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <section>
                                                <div class="container pdall mb-5" style="background: linear-gradient(24deg, rgb(29 163 220 / 83%) 26%, rgb(35 86 159 / 82%) 69%); border-radius: 10px; width: 100%">
                                                    <h2 style="color: white;">Share your details with us</h2>
                                                    <br />
                                                    <hr />
                                                    <div class="row">
                                                        <div class="col-md-6 m-5">
                                                            <label class="lbltxt" style="color: white"> Name <span style="color:red">*</span></label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Name" id="txtname" />
                                                        </div>

                                                        <div class="col-md-6 m-5">
                                                            <label class="lbltxt" style="color: white"> Email</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Email" id="txtemail" />
                                                        </div>

                                                        <div class="col-md-6 m-5">
                                                            <label class="lbltxt" style="color: white"> Phone Number <span
                                                                    style="color:red">*</span></label>
                                                            <input class="form-control " type="text"
                                                                placeholder="Enter Valid 10 Digit Number" id="txtphone"
                                                                onkeypress=" return isNumber(event)" />
                                                        </div>

                                                        <div class="col-md-6 m-5">
                                                            <label class="lbltxt" style="color: white"> Alternate Number</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Enter Valid 10 Digit Number" id="txtaltphone" />
                                                        </div>

                                                        <div class="col-md-12 m-5" >
                                                            <label class="lbltxt" style="color: white"> Residing City <span
                                                                    style="color:red">*</span></label>
                                                            <input class="form-control " type="text"
                                                                placeholder="Enter City Name" id="txtcity" />
                                                        </div>

                                                        <div class="col-md-12 m-5">
                                                            <label class="lbltxt" style="color: white"> Message <span style="color:red">*</span></label>
                                                            <textarea class="form-control" cols="6" rows="6"
                                                                id="txtmessage"></textarea>
                                                        </div>

                                                        <div class="col-md-6 m-5">
                                                            <input class="btn btn-primary btn-lg-6 m-6" type="button" value="Submit"
                                                                onclick="submitrecord()" />
                                                        </div>
                                                    </div>
                                                </div>
                                            <section>
                                        </div>                       
                                    </div>
                                </div> -->
                                <section  class="content" style="position: relative;">
                                    <div class="container panel-row-style panel-row-style-for-699-0">
                                        <div class="row align-items-center">
                                            <div class="col-lg-4 col-md-12 col-sm-12">
                                                <p class="p-5 fs-1" style="position: relative; bottom: -200px;">
                                                    You are just a click away from your dream modular kitchen! Meet our
                                                    design experts and uncover the beautiful and functional kitchen
                                                    experience with DAF Modular Kitchen.
                                                    Book a free design consultation today!
                                                    Have some queries? Contact us today and take a step towards your
                                                    personalised kitchen.
                                                </p>
                                            </div>
                                            <div class="col-lg-8 col-md-12 col-sm-12 pr-30">
                                                <section>
                                                    <div class="container pdall mb-5" >
                                                        <h2 style="color: white;">Share your details with us</h2>
                                                        <br />
                                                        <hr />
                                                        <div class="row">
                                                            <div class="col-md-6 m-5">
                                                                <label class="lbltxt" style="color: white"> Name <span style="color:red">*</span></label>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter Name" id="txtname" />
                                                            </div>

                                                            <div class="col-md-6 m-5">
                                                                <label class="lbltxt" style="color: white"> Email</label>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter Email" id="txtemail" />
                                                            </div>

                                                            <div class="col-md-6 m-5">
                                                                <label class="lbltxt" style="color: white"> Phone Number <span
                                                                        style="color:red">*</span></label>
                                                                <input class="form-control " type="text"
                                                                    placeholder="Enter Valid 10 Digit Number" id="txtphone"
                                                                    onkeypress=" return isNumber(event)" />
                                                            </div>

                                                            <div class="col-md-6 m-5">
                                                                <label class="lbltxt" style="color: white"> Alternate Number</label>
                                                                <input class="form-control" type="text"
                                                                    placeholder="Enter Valid 10 Digit Number" id="txtaltphone" />
                                                            </div>

                                                            <div class="col-md-12 m-5" >
                                                                <label class="lbltxt" style="color: white"> Residing City <span
                                                                        style="color:red">*</span></label>
                                                                <input class="form-control " type="text"
                                                                    placeholder="Enter City Name" id="txtcity" />
                                                            </div>

                                                            <div class="col-md-12 m-5">
                                                                <label class="lbltxt" style="color: white"> Message <span style="color:red">*</span></label>
                                                                <textarea class="form-control" cols="6" rows="6"
                                                                    id="txtmessage"></textarea>
                                                            </div>

                                                            <div class="col-md-6 m-5">
                                                                <input class="btn btn-primary btn-lg-6 m-6" type="button" value="Submit"
                                                                    onclick="submitrecord()" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                <section>
                                            </div>

                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div id="pg-699-3" class="panel-grid panel-no-style">
                                <div id="pgc-699-3-0" class="panel-grid-cell">
                                    <div id="panel-699-3-0-0"
                                        class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"
                                        data-index="8">
                                        <div class="textwidget custom-html-widget"><iframe
                                                src="https://maps.google.com/maps?q=daf modular kitchen&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                                width="100%" height="450" frameborder="0" style="border:0;"
                                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>

                    
@stop