@extends('layout.master')

@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m12.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m12.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m12.jpg" class="img-responsive"
                                            alt="Small-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Small Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        From the massive olive kitchen island to the wall-mounted cabinets, this kitchen
                                        design is dominated by geometric shapes and unique colors. The NCS color system
                                        allows for endless possibilities, enabling any desired color to be implemented
                                        in all shades. This design is a must-have for those who love impeccable design
                                        and appreciate successful proportions, as it effortlessly blends form and
                                        function to create a truly stunning kitchen.</p> <a href="ContactUs.html"
                                        class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop