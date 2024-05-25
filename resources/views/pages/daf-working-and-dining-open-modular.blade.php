@extends('layout.master')

@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m10.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m10.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m10.jpg" class="img-responsive"
                                            alt="Daf-Working-And-Dining-Open-Modular-Kitchen" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Daf Working And Dining Open Modular Kitchen</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        Indulge in simple elegance at its finest with this kitchen design. The clearly
                                        defined areas in rich, wooden toned colors blend seamlessly with modern
                                        technology, resulting in a confident fusion of form and function. The
                                        comfortable and stylish room offers a harmonious balance of living and working
                                        spaces, making the kitchen the heart of the home.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop