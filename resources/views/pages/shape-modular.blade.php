@extends('layout.master')

@section('body')
    <div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m5.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m5.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m5.jpg" class="img-responsive"
                                            alt="L-Shape-Modular-Kitchen-Design" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>L-Shape Modular Kitchen Design</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        This kitchen exudes a friendly and inviting ambiance, much like a beautiful
                                        summer day. Its casual coziness is simply charming. The combination of white and
                                        grey tones on the cabinet and drawer fronts create a sense of lightness, while
                                        the fine light oak worktop perfectly complements the design. A striking contrast
                                        is achieved with the anthracite handles, adding a touch of elegance to the
                                        overall aesthetic.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop