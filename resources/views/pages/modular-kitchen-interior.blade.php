@extends('layout.master')
@section('body')

<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/modern/m15.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/modern/m15.jpg')">

                                        <img src="{{asset('assets')}}/img/modern/m15.jpg" class="img-responsive"
                                            alt="Modular-Kitchen-Interior" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Modular Kitchen Interior</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        The combination of white and black exudes a bold and resolute vibe, setting a
                                        clear tone. The wooden hues of the table and wall create a stunning contrast,
                                        accentuating the dark tones of steel and intensifying its impact. The refined
                                        atmosphere of the room is enhanced by the minimalist shelves and open shelving
                                        elements, which are perfectly showcased on this optimal stage.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="modern ">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>

@stop