@extends('layout.master')
@section('body')
<div class="container mt-8">
                        <div class="row">
                            <div class="col-sm-7">
                                <div class="product-image">

                                    <a href="{{asset('assets')}}/img/classical/c8.jpg"
                                        onclick="gotonextoage('{{asset('assets')}}/img/classical/c8.jpg')">

                                        <img src="{{asset('assets')}}/img/classical/c8.jpg" class="img-responsive"
                                            alt="Dining-Modular-Kitchen-In-Lucknow" />
                                        <div class="magnify">
                                            <i class="fas fa-search-plus"></i>
                                        </div>

                                    </a>

                                </div>
                            </div>
                            <div class="col-sm-5">
                                <div class="product-description">
                                    <h1>Dining Modular Kitchen In Lucknow</h1>
                                    <!--<ul>
									<li><strong>Product Finish:</strong> </li>
								</ul>-->
                                    <p>
                                        The combination of teal green and wooden oak makes a bold statement, exuding
                                        confidence and pride. The wooden hues of the table and floor complement the teal
                                        walls beautifully, creating a striking contrast. The dark tones exude the
                                        strength of steel and have a profound impact, lending the room a refined
                                        atmosphere and serving as the perfect backdrop for the minimalist shelves.</p>
                                    <a href="contact-us" class="mr-5">Enquire Now</a>
                                    <a href="classical">Back</a>
                                </div>
                            </div>
                            <div class="col-sm-12">

                            </div>
                        </div>
                    </div>
@stop