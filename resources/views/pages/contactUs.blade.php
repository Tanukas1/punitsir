@extends('layout.master')

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
                                <div class="container panel-row-style panel-row-style-for-699-0">
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

                                        <div class="col-md-1"></div>
                                        <div class="col-md-5">
                                            <div id="pgc-699-0-0" class="panel-grid-cell">
                                                <div id="panel-699-0-0-0"
                                                    class="so-panel widget widget_text panel-first-child panel-last-child"
                                                    data-index="0">
                                                    <div
                                                        class="contact-address panel-widget-style panel-widget-style-for-699-0-0-0">




                                                        <h3 class="widget-title">Get in touch with our design experts.
                                                        </h3>
                                                        <div class="textwidget">
                                                            <p>C43/44, Sai Kripa Plaza, </p>
                                                            <p>Kalyanpur, Ring Road,,</p>
                                                            <p>Lucknow 226022.</p>

                                                            <b>
                                                                <p>Email: <a href="#"> info@dafmodular.com</a></p>
                                                            </b>

                                                            <b>
                                                                <p>Tel: +91-9044064228, +91-6390000242</p>
                                                            </b>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                    <div class="container pdall">

                                        <h2>Share your details with us</h2>
                                        <br />
                                        <hr />
                                        <div class="row">

                                            <div class="col-md-6 m-5">
                                                <label class="lbltxt"> Name <span style="color:red">*</span></label>
                                                <input class="form-control mytxtbox" type="text"
                                                    placeholder="Enter Name" id="txtname" />
                                            </div>

                                            <div class="col-md-6 m-5">
                                                <label class="lbltxt"> Email</label>
                                                <input class="form-control mytxtbox" type="text"
                                                    placeholder="Enter Email" id="txtemail" />
                                            </div>

                                            <div class="col-md-3 m-5">
                                                <label class="lbltxt"> Phone Number <span
                                                        style="color:red">*</span></label>
                                                <input class="form-control mytxtbox" type="text"
                                                    placeholder="Enter Valid 10 Digit Number" id="txtphone"
                                                    onkeypress=" return isNumber(event)" />
                                            </div>

                                            <div class="col-md-3 m-5">
                                                <label class="lbltxt"> Alternate Number</label>
                                                <input class="form-control mytxtbox" type="text"
                                                    placeholder="Enter Valid 10 Digit Number" id="txtaltphone" />
                                            </div>

                                            <div class="col-md-6 m-5">
                                                <label class="lbltxt"> Residing City <span
                                                        style="color:red">*</span></label>
                                                <input class="form-control mytxtbox" type="text"
                                                    placeholder="Enter City Name" id="txtcity" />
                                            </div>

                                            <div class="col-md-12 m-5">
                                                <label class="lbltxt"> Message <span style="color:red">*</span></label>
                                                <textarea class="form-control" cols="6" rows="6"
                                                    id="txtmessage"></textarea>
                                            </div>

                                            <div class="col-md-6 m-5">

                                                <input class="btn btn-success m-6" type="button" value="Submit"
                                                    onclick="submitrecord()" />
                                            </div>






                                        </div>

                                    </div>


                                </div>
                            </div>


                            <div id="pg-699-3" class="panel-grid panel-no-style">
                                <div id="pgc-699-3-0" class="panel-grid-cell">
                                    <div id="panel-699-3-0-0"
                                        class="widget_text so-panel widget widget_custom_html panel-first-child panel-last-child"
                                        data-index="8">
                                        <div class="textwidget custom-html-widget"><iframe
                                                src="https://maps.google.com/maps?q=daf modular kitchen&t=&z=10&ie=UTF8&iwloc=&output=embed"
                                                width="100%" height="450" frameborder="0" style="border:0;"
                                                allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clearfix"></div>
@stop