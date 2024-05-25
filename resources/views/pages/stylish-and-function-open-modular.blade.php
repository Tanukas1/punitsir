@extends('layout.master')

@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m3.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m3.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m3.jpg" class="img-responsive"
                                            alt="Stylish-And-Functional-Open-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Stylish And Functional Open Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        Combining dark tones with clean lines can create an elegant kitchen design. This
                                        particular design features a contrast of wood and black clean lines,
                                        complemented by a practical moving breakfast table. The open shelves on the
                                        island add functionality and showcase the design's practicality. Together, these
                                        elements make for a stunning kitchen design that is both functional and stylish.
                                    </p> <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop
