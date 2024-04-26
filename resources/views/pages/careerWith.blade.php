@extends('layout.master')

@section('body')
<div class="inner-product-banner" style="background-image: url(wp-admin/images/banner1.jpg)">
                    <div class="container">
                        <h2>Career With US</h2>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="associations">
                    <div id="pl-1285" class="panel-layout">
                        <div id="pg-1285-0" class="panel-grid panel-has-style">
                            <div class="container panel-row-style panel-row-style-for-1285-0">
                                <div id="pgc-1285-0-0" class="panel-grid-cell">
                                    <div id="panel-1285-0-0-0"
                                        class="so-panel widget widget_text panel-first-child panel-last-child"
                                        data-index="0">
                                        <div class="textwidget">
                                            <div dir="ltr">
                                                <p>When creating modular kitchens, inspiration of DAF has been to
                                                    satisfy client requests while upholding the highest standards of
                                                    quality. In the past 14 years, we have created a brand with an
                                                    unparalleled legacy, durability, and reliability. We are always
                                                    looking for new, bright individuals to join our ever-expanding team
                                                    and have the opportunity to work on customizing products as per
                                                    customer needs. We place a high importance on inventiveness, a
                                                    can-do mentality, and excellent teamwork. Please view the job
                                                    openings below if you're interested in working for us.</p>
                                                <p><strong>
                                                        <h4>Our Values</h4>
                                                    </strong></p>
                                                <p style="color:#4b94c0">Inspired  |  Driven   |   Purposeful</p>
                                            </div>
                                            <div dir="ltr"></div>
                                            <!--<div dir="ltr">
                                                    <p><strong>Open Positions: </strong></p>
                                                    <p>
                                                        Sales and Marketing Executive<br />
                                                        Design Specialist<br />
                                                        Technical Supervisor<br />
                                                        Fitter<br />
                                                        Showroom Manager
                                                    </p>
                                                </div>-->
                                            <div dir="ltr"></div>
                                            <div dir="ltr">
                                                <strong>
                                                    <h4>Job Locations:</h4> 
                                                </strong>Lucknow</p>
                                            </div>
                                            <div>Rebareily</div>
                                            <br />
                                            <div>Get to know more about our <a href="location.html" target="_blank"
                                                    rel="noopener">locations.</a></div>
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
                                    <input class="form-control mytxtbox" type="text" placeholder="Enter Name"
                                        id="txtname" />
                                </div>

                                <div class="col-md-6 m-5">
                                    <label class="lbltxt"> Email</label>
                                    <input class="form-control mytxtbox" type="text" placeholder="Enter Email"
                                        id="txtemail" />
                                </div>

                                <div class="col-md-3 m-5">
                                    <label class="lbltxt"> Phone Number <span style="color:red">*</span></label>
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
                                    <label class="lbltxt"> Residing City <span style="color:red">*</span></label>
                                    <input class="form-control mytxtbox" type="text" placeholder="Enter City Name"
                                        id="txtcity" />
                                </div>

                                <div class="col-md-12 m-5">
                                    <label class="lbltxt"> Message <span style="color:red">*</span></label>
                                    <textarea class="form-control" cols="6" rows="6" id="txtmessage"></textarea>
                                </div>

                                <div class="col-md-12 m-5">
                                    <label class="lbltxt"> File Upload <span style="color:red">*</span></label>
                                    <input class="form-control" type="file" id="imgInp" />
                                </div>

                                <div class="col-md-6 m-5">

                                    <input class="btn btn-success m-6" type="button" value="Submit"
                                        onclick="submitrecord()" />
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
                <div class="clearfix"></div>
@stop