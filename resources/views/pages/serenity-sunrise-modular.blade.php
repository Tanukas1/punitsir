@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c5.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c5.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c5.jpg" class="img-responsive"
                                            alt="Serenity-Sunrise-Modular-Kitchen-In-Lucknow-White-Marble-Countertops" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Serenity-Sunrise-Modular-Kitchen-In-Lucknow-White-Marble-Countertops</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This kitchen is tailored to your lifestyle. The inviting cashmere pink shade
                                        harmonizes perfectly with the enigmatic white, showcasing how contrasting colors
                                        can exude both elegance and harmony. The combination of varying widths for
                                        pull-outs and cabinets adds an interesting dynamic to the overall look. A modern
                                        kitchen design with a smart concept.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop