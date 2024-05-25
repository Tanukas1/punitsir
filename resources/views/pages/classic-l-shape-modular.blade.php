@extends('layout.master')
@section('body')


<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c1.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c1.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c1.jpg" class="img-responsive"
                                            alt="Classic-L-Shape-Modular-Kitchen-Design-With-Central-Cooking-Area" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Classic L-Shape Modular Kitchen Design With Central Cooking Area</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        With its well-balanced color scheme of white and summer oak silver-grey, this
                                        kitchen design exudes a sense of visual calm and clarity that is simply
                                        stunning. The straight-lined arrangement of the fronts and the light worktop
                                        create a modern and minimalist look, while the wooden elements provide a touch
                                        of warmth and coziness. This design is perfect for those who appreciate
                                        simplicity and elegance in their kitchen.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop