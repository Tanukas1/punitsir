@extends('layout.master')

@section('body')
     
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m13.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m13.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m13.jpg" class="img-responsive"
                                            alt="All-White-Branded-Modular-Kitchen-Cabinet" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>All White Branded Modular Kitchen Cabinet</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This kitchen exudes a charmingly bright and friendly ambiance, much like a
                                        beautiful summer day. Its casual coziness is simply enchanting. The white
                                        cabinet and drawer fronts create a sense of lightness that elevates the overall
                                        design. The fine light material used for the worktop is a perfect match for the
                                        breakfast corner, completing the look with a touch of elegance.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop