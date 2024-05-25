@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c7.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c7.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c7.jpg" class="img-responsive"
                                            alt="Modular-Kitchen-With-Marble-Countertop" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Modular Kitchen With Marble Countertop</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>White never goes out of style and exudes a timeless charm. Complemented by white
                                        oak flooring, walnut cabinetry, and white quartzite countertops, this kitchen
                                        design is the epitome of sophistication. Stainless steel appliances add a modern
                                        touch, while warm wall and floor colors add depth and personality to the space.
                                        White marble table gives a unique elegance to this kitchen.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop